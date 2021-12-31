# Kangin Dashboard

Kincir Angin dashboard based Laravel powered by RistekUSDI.

## Teknologi

- Laravel 8.x
- TailwindCSS 2.x
- AlpineJS 2.x

## Persyaratan

- NodeJS versi >= 16
- Composer versi 2.

## Cara Menjalankan

1. Jalankan perintah 

```bash 
git clone git@github.com:ristekusdi/kangin.git
cd kangin
```

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

5. Jalankan perintah untuk membuka aplikasi web di browser 

```bash
php artisan serve --port=<nomor_port>
```

> nomor_port bersifat bebas dan sesuai kebutuhan.

## Kontribusi

1. Mohon buat branch baru selain branch `main` agar tidak mengganggu branch `main`.
2. Lakukan pull request berdasarkan branch baru yang dibuat.

## Catatan

Dashboard ini diambil dari template [windmill-dashboard](https://windmill-dashboard.vercel.app/) berbasis TailwindCSS.

Kami menggunakan kode tersebut untuk dimodifikasi sesuai kebutuhan internal kami. Kami ucapkan terima kasih kepada pengembang dari package tersebut.