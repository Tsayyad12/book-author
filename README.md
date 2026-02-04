#  Book & Author Management System (Laravel)

**Developed by:** Tehrin Sayyad

---

## Project Overview

This project was developed as part of a technical assessment to demonstrate practical backend development skills using Laravel.

It provides a RESTful API to manage **Authors** and their **Books** with proper one-to-many relationships, request validation, and a clean code structure.

The application follows **MVC architecture** and Laravel best practices to ensure scalability, maintainability, and secure data handling.

---

##  Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/Tsayyad12/book-author.git
```

### 2. Navigate to Project Folder

```bash
cd book-author
```

### 3. Install Dependencies

```bash
composer install
```

### 4. Configure Environment

Copy the environment file and generate the application key:

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Database Configuration

Update the `.env` file with your database credentials:

```
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Start the Server

```bash
php artisan serve
```

The application will run at:

[http://127.0.0.1:8000](http://127.0.0.1:8000)

---

##  Features

 Author CRUD Operations
 Book CRUD Operations
 One-to-Many Relationship (Author → Books)
 Request Validation for secure data handling
 RESTful API design
 Clean and maintainable code
Follows MVC Architecture

---

## Database Structure

### authors table

* id
* name
* email
* created_at
* updated_at

### books table

* id
* author_id
* title
* description
* published_year
* created_at
* updated_at

---

##  API Endpoints

### Authors

| Method | Endpoint          | Description         |
| ------ | ----------------- | ------------------- |
| GET    | /api/authors      | Get all authors     |
| POST   | /api/authors      | Create a new author |
| GET    | /api/authors/{id} | Get author by ID    |
| PUT    | /api/authors/{id} | Update author       |
| DELETE | /api/authors/{id} | Delete author       |

---

### Books

| Method | Endpoint        | Description       |
| ------ | --------------- | ----------------- |
| GET    | /api/books      | Get all books     |
| POST   | /api/books      | Create a new book |
| GET    | /api/books/{id} | Get book by ID    |
| PUT    | /api/books/{id} | Update book       |
| DELETE | /api/books/{id} | Delete book       |

---

##  Sample API Request

### Create Author

**POST** `/api/authors`

Body:

```json
{
    "name": "John Doe",
    "email": "john@example.com"
}
```

---

## Tech Stack

* Laravel
* PHP
* MySQL
* Eloquent ORM
* RESTful APIs

---

## Conclusion

This project demonstrates strong backend fundamentals including API development, database design, model relationships, and Laravel best practices.
