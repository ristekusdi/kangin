<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Vizir\KeycloakWebGuard\Models\KeycloakUser;

class User extends KeycloakUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'given_name',
        'family_name',
        'preferred_username',
        'email',
        'sub',
    ];

    /**
     * Get the value of the model's primary key.
     * 
     * @return mixed
     */
    public function getKey()
    {
        return $this->attributes['sub'];
    }

    /**
     * Get permission access token based on user access_token
     * @return permission_access_token
     */
    public function permissionAccessToken($access_token)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => config('keycloak-web.base_url').'/realms/'.config('keycloak-web.realm').'/protocol/openid-connect/token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'grant_type=urn%3Aietf%3Aparams%3Aoauth%3Agrant-type%3Auma-ticket&audience='.config('keycloak-web.client_id'),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$access_token,
                'Content-Type: application/x-www-form-urlencoded',
                'Cookie: sso-unud=sso-bukit-jimbaran-01'
            ),
        ));

        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);
        
        $permission_access_token = '';
        if ($httpcode === 200) {
            $decode_response = json_decode($response, true);
            $permission_access_token = $decode_response['access_token'];
        }

        return $permission_access_token;
    }

    /**
     * Get list of active permissions based on user access_token
     */
    public function permissions($access_token)
    {
        $permissions = [];

        $permission_access_token = $this->permissionAccessToken($access_token);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => config('keycloak-web.base_url').'/realms/'.config('keycloak-web.realm').'/protocol/openid-connect/token/introspect',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'token_type_hint=requesting_party_token&token='.$permission_access_token,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Cookie: sso-unud=sso-bukit-jimbaran-01'
            ),
            // Authentication Basic
            CURLOPT_USERPWD => config('keycloak-web.client_id').":".config('keycloak-web.client_secret')
        ));

        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        $resource_permissions = [];
        if ($httpcode === 200) {
            $decode_response = json_decode($response, true);
            // Memastikan apakah daftar permissions di dalam autorisasi ini masih aktif.
            if ($decode_response['active']) {
                $resource_permissions = $decode_response['permissions'];
                foreach ($resource_permissions as $key => $resource) {
                    if (isset($resource['scopes'])) {
                        $scopes = $resource['scopes'];
                        foreach ($scopes as $scope) {
                            $permissions[] = $scope;
                        }
                    }
                }
            }
        }

        return $permissions;
    }

    public function hasPermission($name, $access_token)
    {
        $permissions = $this->permissions($access_token);
        return (in_array($name, $permissions)) ? true : false;
    }

    public function havePermissions($list_permissions, $access_token)
    {
        try {
            if (!is_array($list_permissions)) {
                throw new Exception("List of permissions should be an array type");
            }

            return (in_array($list_permissions, $permissions)) ? true : false;
        } catch (\Exception $e) {
            report($e->getMessage());
            return false;
        }
    }
}
