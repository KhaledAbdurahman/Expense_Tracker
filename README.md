# 💾 Online Expense Tracker

A simple Laravel-based web application that allows users to track expenses with full CRUD functionality and authentication.

## 🚀 Features

* Register and login/logout (Authentication)
* Create, Read, Update, Delete (CRUD) expenses
* View all expenses in a table format
* View individual expense details
* Bootstrap 5 responsive UI
* Clean and simple layout using Blade templates

## 📦 Requirements

* PHP >= 8.0
* Composer
* Laravel >= 10
* MySQL or SQLite
* Node.js & npm (for compiling assets, optional)

## ⚙️ Installation

1. Clone the repository:

```bash
git clone https://github.com/yourusername/expense-tracker.git
cd expense-tracker
```

2. Install dependencies:

```bash
composer install
```

3. Set up environment variables:

```bash
cp .env.example .env
php artisan key:generate
```

4. Configure your database settings in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. Run database migrations:

```bash
php artisan migrate
```

6. (Optional) Seed example data:

```bash
php artisan db:seed
```

7. Serve the application:

```bash
php artisan serve
```

Visit `http://localhost:8000` to start using the app.

## 🔐 Authentication

* Users must register and log in to manage their expenses.
* Auth is managed using Laravel Breeze, Jetstream, or built-in scaffolding (based on your setup).
* Guests can only access the login and register pages.

## 📘 Usage

* Use the “Add New Expense” button to log a new expense.
* Click “Show” to view full details.
* Click “Edit” to modify the record.
* Click “Delete” to remove an expense (with CSRF protection).
* Navigation buttons for Register, Login, and Logout appear on the top left.

## 🗀 UI Stack

* HTML5, CSS3
* Bootstrap 5
* Blade templating engine

## 📁 Folder Structure Highlights

* `routes/web.php` – Contains route definitions
* `app/Http/Controllers/ExpenseController.php` – Handles CRUD logic
* `resources/views/` – Contains Blade templates for UI
* `database/migrations/` – Migration files for expenses and users

## ✅ To-Do / Improvements

* Add filtering by category or date
* Add export to CSV or PDF
* Add expense charts/graphs
* Implement pagination for large data sets

## 📄 License

This project is open-source and available under the MIT License.
