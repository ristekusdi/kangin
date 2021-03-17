# USDI Kit

Starter kit untuk mempercepat development aplikasi internal USDI.

Starter kit ini menggunakan [Laravel](https://laravel.com/), [Tailwind](https://tailwindcss.com/) dan [AlpineJS](https://github.com/alpinejs/alpine).

## Cara pakai

Gunakan [degit](https://github.com/Rich-Harris/degit) untuk mengunduh starter kit ini.

> Degit adalah sebuah package NPM untuk perancah proyek (project scaffolding). Degit lebih cepat dibandingkan perintah `git clone` karena tidak mengunduh riwayat git (.git folder).

> Degit membutuhkan node js versi 8 ke atas karena menggunakan perintah `async` dan `await`.

> Silakan install degit dengan perintah `npm install -g degit`

Jalankan perintah `degit ristekusdi/tall-kit#main nama_aplikasi`

> `main` adalah branch default dari ristekusdi/tall-kit

Berikutnya jalankan perintah `cp .env.example .env` untuk membuat file `.env` dari file `.env.example`.

Berikutnya jalankan perintah `composer install` dan `npm install`

> Versi composer minimal versi 2.x dan npm versi 6 ke atas.

Selanjutnya, jalankan perintah `php artisan key:generate`.

Starter kit ini menggunakan [ristekusdi/sso](https://github.com/ristekusdi/sso) sebagai gerbang otentikasi dan otorisasi sehingga Anda harus mengisi nilai dari variable konstan di bawah ini yang ada di dalam file `.env`.

```
SSO_BASE_URL="isi di sini"
SSO_REALM="isi di sini"
SSO_REALM_PUBLIC_KEY="isi di sini"
SSO_CLIENT_ID="isi di sini"
SSO_CLIENT_SECRET="isi di sini"
```

Setelah itu jalankan perintah `php artisan serve` dan buka web aplikasi di host `http://localhost:8000`. Anda akan di arahkan ke halaman login sso dan setelah berhasil login Anda akan diarahkan ke halaman tampilan depan dashboard.

> Dashboard ini diambil dari template [windmill-dashboard](https://windmill-dashboard.vercel.app/) berbasis tailwind. Sumber kode bersifat terbuka dan silakan lihat di [github.com/estevanmaito/windmill-dashboard](https://github.com/estevanmaito/windmill-dashboard)