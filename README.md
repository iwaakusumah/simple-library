# Simple Library API Laravel 12

<p style="text-align: justify;">
Sistem ini merupakan project <strong>RESTful API</strong> menggunakan <strong>Framework Laravel 12</strong>. Project ini dirancang untuk menyediakan backend API yang modular, aman, dan scalable untuk web perpustakaan sederhana.
</p>

---

## Key Features

- ✅ User authentication (Login & Logout via Laravel Sanctum)
- ✅ Books management

---

## Requirements

- PHP >= 8.2
- Composer
- MySQL
- Laragon >= 6.0

---

## 🛠️ Installation & Setup

### 1. Clone the Repository
```bash
git clone https://github.com/iwaakusumah/TRAVISA.git
cd TRAVISA
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### Edit the .env file to match your database configuration:
```bash
DB_DATABASE=beasiswa_db
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Run Database Migrations
```bash
php artisan migrate
```

### 5. Setup Laravel Breeze Authentication
```bash
composer require laravel/breeze --dev
php artisan breeze:install blade
npm install && npm run dev
php artisan migrate
```

### 6. Run the Application
```bash
php artisan serve
```

## 📄 License
<p style="text-align: justify;">
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
</p>