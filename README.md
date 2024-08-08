# tugas_lsp_dika
# Laravel Pendaftaran Mahasiswa

Proyek ini adalah aplikasi pendaftaran mahasiswa berbasis web yang dikembangkan menggunakan Laravel, framework PHP yang kuat dan elegan. Aplikasi ini memungkinkan calon mahasiswa untuk mendaftar, dan administrator untuk mengelola pendaftaran serta memverifikasi akun.

## Fitur Utama

- **Autentikasi User**: Menggunakan Laravel Breeze untuk fitur login dan registrasi.
- **Manajemen Pendaftaran**: Admin dapat melihat, mengubah, dan memverifikasi status pendaftaran mahasiswa.
- **Dashboard Dinamis**: Dashboard yang berbeda untuk admin dan mahasiswa, menampilkan opsi yang relevan untuk masing-masing role.
- **Upload dan Tampilan Foto Profil**: Setiap pendaftar dapat mengunggah foto profil yang akan disimpan dan ditampilkan dalam detail pendaftar.

## Teknologi dan Framework

### Backend
- **[Laravel](https://laravel.com/)** - Framework PHP untuk pengembangan aplikasi web.
- **[Laravel Breeze](https://laravel.com/docs/8.x/starter-kits#breeze)** - Paket starter kit Laravel untuk autentikasi dasar.

### Frontend
- **[Tailwind CSS](https://tailwindcss.com/)** - Framework CSS utility-first untuk styling yang cepat dan responsif.
- **[Bootstrap](https://getbootstrap.com/)** - Framework front-end populer yang digunakan bersamaan dengan Tailwind CSS untuk beberapa komponen.

### Database
- **[MySQL/MariaDB](https://www.mysql.com/)** - Sistem manajemen basis data relasional yang digunakan untuk menyimpan data pendaftaran.

### Tools dan Library Pendukung
- **[PHP](https://www.php.net/)** - Bahasa pemrograman yang digunakan untuk menulis logika aplikasi.
- **[Composer](https://getcomposer.org/)** - Dependency manager untuk PHP.
- **[npm](https://www.npmjs.com/)** - Package manager untuk JavaScript.

### Versi
- **PHP** >= 8.0
- **Composer** >= 2.0
- **Node.js** >= 14.x dan npm
- **MySQL/MariaDB**

### Langkah-Langkah Instalasi
1. Clone repository ini:
    ```bash
    git clone https://github.com/username/LSP_DIKA.git
    cd LSP_DIKA
    ```

2. Install dependencies PHP menggunakan Composer:
    ```bash
    composer install
    ```

3. Install dependencies JavaScript menggunakan npm:
    ```bash
    npm install
    npm run dev
    ```

4. Copy file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database Anda:
    ```bash
    cp .env.example .env
    ```

5. Generate application key:
    ```bash
    php artisan key:generate
    ```

6. Migrasi dan seed database:
    ```bash
    php artisan migrate --seed
    ```

7. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

    Akses aplikasi di `http://localhost:8000`.

## Penggunaan

### Autentikasi
- Untuk admin dan mahasiswa, registrasi dan login tersedia melalui halaman utama. Admin dapat mengelola pendaftar setelah login.

### Dashboard
- **Admin**: Memiliki akses ke semua pendaftar, dapat memverifikasi status, dan melihat detail setiap pendaftar.
- **Mahasiswa**: Dapat melihat status pendaftaran mereka dan memperbarui informasi jika diperlukan.

### Pendaftaran
- Calon mahasiswa dapat mengisi formulir pendaftaran lengkap dengan informasi pribadi dan foto profil.

## Contributing

Jika Anda ingin berkontribusi pada proyek ini, silakan buat pull request atau ajukan isu di repository GitHub ini.

