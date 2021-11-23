@extends('errors::minimal')

@section('title', __('Akses Tidak Valid'))
@section('code', '401')
@section('message')
    <p>Anda tidak memiliki akses aplikasi {{ config('app.name') }}.</p>
    <p>Silakan hubungi admin jika Anda memang benar memiliki akses aplikasi ini.</p>
    <p>Klik tautan <a href="{{ route('sso.logout') }}" class="underline font-bold text-blue-600">keluar</a> dari aplikasi.</p>
@endsection
