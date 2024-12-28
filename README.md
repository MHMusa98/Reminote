# Reminote

**Reminote** is an advanced note-taking web application with modern, user-friendly features. It helps users efficiently organize and manage their thoughts, tasks, and ideas.

## Features

- Create, edit, and delete notes
- User-friendly and responsive design
- Real-time updates with Vite
- Backend powered by Laravel for robust functionality
- Seamless database integration for data persistence

## Requirements

To run this project, ensure you have the following installed on your machine:
- PHP >= 8.0
- Composer
- Node.js and npm
- MySQL/PostgreSQL
- Git

## Installation

Follow these steps to get Reminote running on your local machine:

1. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/Reminote.git
   cd Reminote
   ```

2. **Environment Setup**
   ```bash
   # Copy environment file
   cp .env.example .env
   ```
   Update the .env file with your database credentials and other necessary configurations

3. **Install Dependencies**
   ```bash
   # Install PHP dependencies
   composer install

   # Install NPM dependencies
   npm install
   ```

4. **Application Setup**
   ```bash
   # Generate application key
   php artisan key:generate --ansi

   # Run database migrations and seed data
   php artisan migrate --seed
   ```

5. **Start Development Servers**
   ```bash
   # Start Vite development server
   npm run dev

   # In a new terminal, start Laravel development server
   php artisan serve
   ```
   The application will be available at `http://localhost:8000`

## Project Structure

```
├── app/
│   ├── Http/          # Controllers and Middleware
│   ├── Models/        # Database Models
│   └── ...
├── database/
│   ├── migrations/    # Database Migrations
│   └── seeders/      # Database Seeders
├── resources/
│   ├── js/           # JavaScript Files
│   ├── css/          # Stylesheets
│   └── views/        # Blade Templates
├── routes/           # Application Routes
└── ...
```

## Development

### Key Components

- **Controllers**: Located in `app/Http/Controllers/`
- **Models**: Located in `app/Models/`
- **Views**: Located in `resources/views/`
- **Routes**: Defined in `routes/web.php` and `routes/api.php`
- **Assets**: Located in `resources/js/` and `resources/css/`

### Development Commands

```bash
# Run tests
php artisan test

# Run code style fixes
./vendor/bin/pint

# Clear application cache
php artisan cache:clear

# Generate new controller
php artisan make:controller NameController
```

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

Apache License 2.0
