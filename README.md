# 📚 Bookstore Management System

A complete Laravel-based web application for managing book inventories with CRUD functionality, search, and pagination.

## 🌟 Features

- **Book CRUD Operations** (Create, Read, Update, Delete)
- **Advanced Search** (by title or author)
- **Pagination** (50 books per page)
- **Responsive Design** (Works on all devices)
- **Modern UI** (Bootstrap 5)

## 🛠️ Technologies Used

- **Backend**: Laravel 10
- **Frontend**: Bootstrap 5
- **Database**: MySQL
- **Pagination**: Laravel Paginator

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/username/bookstore-management.git
   cd bookstore-management
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database**  
   Edit `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=bookstore
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Run migrations & seed data**
   ```bash
   php artisan migrate --seed
   ```

6. **Start development server**
   ```bash
   php artisan serve
   ```

## 📂 Project Structure

```
bookstore-management/
├── app/               # Core application logic
│   ├── Models/        # Database models
│   └── Http/          # Controllers
├── database/          # Migrations and seeders
├── public/            # Publicly accessible files
├── resources/         # Views and assets
├── routes/            # Application routes
└── vendor/            # Composer dependencies
```

## 🧑‍💻 Usage

1. Access the application at `http://localhost:8000`
2. Default routes:
   - `/` - Book listing
   - `/books/create` - Add new book
   - `/books/{id}/edit` - Edit book

## 📝 License

This project is open-source and available under the [MIT License](LICENSE).

