# NALIBSAN Midterm Exam Application

## About This Project

This is a Laravel web application showcasing a product/gadgets catalog with a modern interface. The application displays a list of tech gadgets with details including name, price, description, and images.

## Features

- Modern responsive design with Tailwind CSS
- Product catalog page displaying gadgets
- Clean and intuitive user interface
- Built with Laravel 11 framework

## Prerequisites

Before running this application, ensure you have installed:

- **PHP 8.2 or higher**
- **Composer** (PHP package manager)
- **Node.js & npm** (for frontend dependencies)
- **Git**

## Installation & Setup Instructions

Follow these steps to run the application locally:

### 1. Clone the Repository
```bash
git clone <your-repo-url>
cd NALIBSAN_Midterm_Exam_Application
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Create and Configure Environment File
```bash
cp .env.example .env
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Install Frontend Dependencies (Optional)
```bash
npm install
npm run build
```

### 6. Run the Development Server
```bash
php artisan serve
```

The application will be accessible at: **http://localhost:8000**

## Project Structure

- `app/Http/Controllers/` - Application controllers
- `resources/views/` - Blade template files
- `routes/web.php` - Route definitions
- `app/Models/` - Database models
- `database/` - Database migrations and seeders

## Main Route

- `/` - Displays the gadgets catalog page

## Troubleshooting

If you encounter any issues:

1. **Controller not found error**: Run `composer dump-autoload`
2. **Cache issues**: Run `php artisan config:cache`
3. **Port already in use**: Run `php artisan serve --port=8001`

## License

This project is open-sourced software licensed under the MIT license.
