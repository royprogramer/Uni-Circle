# Uni-Circle

Uni-Circle is a simple, secure, and lightweight user authentication system built with PHP and MySQL. It provides a foundational template for implementing user registration, secure login, session management, and a protected dashboard area.

---

## 🚀 Features

* **User Registration** — Secure account creation with password hashing.
* **User Login** — Authenticate users and manage login sessions.
* **Session Management** — Restrict protected pages to authenticated users only.
* **MySQL Database Integration** — Store and manage user credentials securely.
* **Clean Project Structure** — Separate files for authentication, sessions, and database connectivity.
* **Logout System** — Proper session destruction and redirection.

---

## 📁 Repository Structure

```text
Uni-Circle/
├── db_conn.php     # Database connection configuration
├── index.php       # Main landing page
├── register.php    # User registration page and logic
├── login.php       # User login and authentication logic
├── welcome.php     # Protected dashboard page
└── logout.php      # Session logout handler
```

---

## 🛠️ Prerequisites

Before running the project, ensure the following are installed:

* **PHP** — Version 7.4 or higher recommended
* **MySQL Server** — MySQL or MariaDB
* **Apache Server** — Or a local server environment such as:

  * XAMPP
  * WAMP
  * MAMP

---

## ⚙️ Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/royprogramer/Uni-Circle.git
cd Uni-Circle
```

---

### 2. Create the Database

Open your MySQL manager (such as phpMyAdmin or MySQL CLI) and create the database:

```sql
CREATE DATABASE uni_circle;
```

---

### 3. Create the Users Table

Run the following SQL query:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

### 4. Configure Database Connection

Open `db_conn.php` and update the database credentials:

```php
$sname = "localhost";
$uname = "your_db_username";
$password = "your_db_password";
$db_name = "uni_circle";
```

Make sure the credentials match your local MySQL configuration.

---

### 5. Run the Application

1. Move the project folder into your local server directory:

   * XAMPP → `htdocs`
   * WAMP → `www`
   * MAMP → `htdocs`

2. Start:

   * Apache Server
   * MySQL Server

3. Open the application in your browser:

```text
http://localhost/Uni-Circle/index.php
```

---

## 🔒 Security Features

* Password hashing using PHP password hashing functions
* Session-based authentication
* Protected dashboard access
* Secure logout functionality

---

## 🧪 Development Tips

### Enable PHP Error Reporting

Add the following to your PHP files during development:

```php
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

### Recommended Improvements

Potential future enhancements:

* Email verification
* Password reset functionality
* CSRF protection
* Prepared statements with PDO/MySQLi
* Role-based authentication
* Remember-me sessions

---

## 🐞 Troubleshooting

### Database Connection Failed

Check the following:

* MySQL server is running
* Database name is correct
* Username and password are valid
* PHP MySQL extensions are enabled

### Page Not Found

Ensure the project folder is placed inside the correct web server root directory.

### Session Issues

Verify that PHP sessions are enabled in your server configuration.

---
