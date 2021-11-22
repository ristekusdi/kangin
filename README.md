# Kangin Dashboard

Kincir Angin dashboard dengan SSO Laravel RistekUSDI.

> TODO: Tambahkan halaman preview.

## Persyaratan

- NodeJS versi >= 16
- Composer versi 2.
- Degit.

> Degit adalah sebuah package NPM untuk perancah proyek (project scaffolding). Degit lebih cepat dibandingkan perintah `git clone` karena tidak mengunduh riwayat git (.git folder).

> Silakan install degit dengan perintah `npm install -g degit`

## Penggunaan Dasar

1. Jalankan perintah 

```bash 
degit ristekusdi/kangin#main nama_aplikasi
```

> `main` adalah branch default dari ristekusdi/kangin

2. Jalankan perintah untuk untuk membuat file `.env` dari file `.env.example`. 

```bash 
cp .env.example .env
``` 

3. Jalankan perintah untuk mengunduh package composer dan npm 

```bash
composer install
npm install
```

4. Jalankan perintah 

```bash 
php artisan key:generate
```

4. Mengisi nilai dari variable konstan konfigurasi SSO di dalam file `.env`.

```
SSO_BASE_URL="isi di sini"
SSO_REALM="isi di sini"
SSO_REALM_PUBLIC_KEY="isi di sini"
SSO_CLIENT_ID="isi di sini"
SSO_CLIENT_SECRET="isi di sini"
```

> Untuk petunjuk lebih jelasnya silakan menuju ke [ristekusdi/sso-laravel](https://github.com/ristekusdi/sso-laravel).

5. Jalankan perintah untuk membuka aplikasi web di browser 

```bash
php artisan serve --port=<nomor_port>
```

> nomor_port bersifat bebas dan sesuai kebutuhan.


## Catatan

Dashboard ini diambil dari template [windmill-dashboard](https://windmill-dashboard.vercel.app/) berbasis TailwindCSS.

Kami menggunakan kode tersebut untuk dimodifikasi sesuai kebutuhan internal kami. Kami ucapkan terima kasih kepada pengembang dari package tersebut.