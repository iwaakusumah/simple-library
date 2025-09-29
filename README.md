# Simple Library API Laravel 12

<p style="text-align: justify;">
Sistem ini merupakan project <strong>RESTful API</strong> menggunakan <strong>Framework Laravel 12</strong>. Project ini dirancang untuk menyediakan backend API yang modular, aman, dan scalable untuk web perpustakaan sederhana.
</p>

## Key Features

- ✅ User authentication (Login & Logout via Laravel Sanctum)
- ✅ Books management

## Requirements

- PHP >= 8.2
- Composer
- MySQL
- Laragon >= 6.0
- Postman

## 🛠️ Installation & Setup

### 1. Clone the Repository
```bash
git clone https://github.com/iwaakusumah/simple-library.git
cd simple-library
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
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simple_library
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Run Database Migrations
```bash
php artisan migrate
```

### 5. Run the Application
```bash
php artisan serve
```

## API Documentation

### 1. Login
```http
POST /api/login
```

### Request Body (JSON)
```bash
{
  "email": "admin@example.com",
  "password": "password"
}
```

## 📄 License
<p style="text-align: justify;">
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
</p>