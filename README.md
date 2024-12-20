# Islamic Academic Portal

A modern academic management system built with Laravel and Vue.js, featuring Islamic educational principles and a clean, professional design.

## Tech Stack

- **Backend Framework:** Laravel 11
- **Frontend Framework:** Vue.js with Inertia.js
- **CSS Framework:** Tailwind CSS
- **Database:** MySQL
- **Authentication:** Laravel Breeze
- **Development Environment:** Vite

## Project Structure

```
laravel-academic/
├── app/                    # Application core code
│   ├── Http/              
│   │   ├── Controllers/   # Application controllers
│   │   └── Middleware/    # HTTP middleware
│   └── Models/            # Eloquent models
├── config/                # Configuration files
├── database/              
│   ├── migrations/        # Database migrations
│   └── seeders/          # Database seeders
├── public/                # Publicly accessible files
├── resources/            
│   ├── css/              # CSS assets
│   ├── js/               # JavaScript assets
│   │   ├── Components/   # Vue components
│   │   └── Pages/        # Vue pages
│   └── views/            # Blade templates
├── routes/                # Application routes
│   ├── web.php           # Web routes
│   └── api.php           # API routes
└── tests/                # Application tests
```

## Features

- User Authentication (Login/Register)
- Dashboard with Academic Statistics
- Islamic-themed UI with Green Color Scheme
- Responsive Design
- Role-based Access Control (coming soon)

## Requirements

- PHP >= 8.2
- Node.js >= 18
- MySQL >= 8.0
- Composer

## Installation

1. Clone the repository
```bash
git clone <repository-url>
cd laravel-academic
```

2. Install PHP dependencies
```bash
composer install
```

3. Install NPM dependencies
```bash
npm install
```

4. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

5. Configure database in `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_academic
DB_USERNAME=admin
DB_PASSWORD=admin
```

6. Run migrations
```bash
php artisan migrate
```

7. Build assets
```bash
npm run build
```

8. Start the development server
```bash
php artisan serve
```

## Development

- Run Vite development server:
```bash
npm run dev
```

- Watch for changes:
```bash
npm run watch
```

## Testing

```bash
php artisan test
```

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- Laravel Framework
- Vue.js
- Tailwind CSS
- Inertia.js
