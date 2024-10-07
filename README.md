# Coffee Shop Management API

## Deskripsi Proyek
Aplikasi Coffee Shop Management API adalah API berbasis Laravel yang digunakan untuk mengelola data pesanan dan kopi di sebuah kedai kopi.

## Fitur Utama
- Autentikasi pengguna menggunakan Laravel Sanctum
- Operasi CRUD untuk data pesanan dan kopi
- Pencarian data
- API respons dalam format JSON

## Instalasi
Ikuti langkah-langkah berikut untuk menginstal aplikasi ini:

1. Clone repository ini: `git clone https://github.com/dewintanur/cafe-management-system.git`
2. Masuk ke direktori: `cd blog-management`
3. Install dependencies: `composer install`
4. Salin file .env: `cp .env.example .env`
5. Sesuaikan pengaturan di .env
6. Jalankan migrasi: `php artisan migrate`
7. Jalankan server lokal: `php artisan serve`
8. Download link sql database : `https://drive.google.com/file/d/1d5lSQevVTn8J0SDEB4oIaKr9nbNi_M4W/view?usp=sharing`

## Penggunaan API
### Coffee Management
- **GET** /api/coffees : Menampilkan daftar semua kopi
- **POST** /api/coffees : Membuat kopi baru
- **GET** /api/coffees/{id} : Menampilkan detail kopi
- **PUT** /api/coffees/{id} : Memperbarui kopi
- **DELETE** /api/coffees/{id} : Menghapus kopi

### Order Management
- **GET** /api/orders : Menampilkan daftar semua pesanan
- **POST** /api/orders : Membuat pesanan baru
 
 untuk lebih lengkapnya silahkan lihat dokumentasi berikut : `https://documenter.getpostman.com/view/37966660/2sAXxP8sFh`

## Database Design
Proyek ini menggunakan tabel `coffees` dan `orders` yang berelasi **many-to-one**.
untuk melihat desainnya silahkan kunjungi link berikut : `https://viewer.diagrams.net/?tags=%7B%7D&lightbox=1&highlight=0000ff&edit=_blank&layers=1&nav=1&title=DOT_Backend(Laravel).drawio#Uhttps%3A%2F%2Fdrive.google.com%2Fuc%3Fid%3D1AH7CxDSrlLZcteFCaYOCjhSrUui-aPq6%26export%3Ddownload`
## Dependencies
- Laravel 10.x
- Laravel Sanctum
- MySQL

## Testing API dengan Postman
1. Download koleksi Postman [di sini]`https://documenter.getpostman.com/view/37966660/2sAXxP8sFh`.
2. Import ke dalam Postman dan gunakan token setelah login.

## Demo
Video Demo dapar diliha di `https://youtu.be/UNvUwCrmJ_s`
