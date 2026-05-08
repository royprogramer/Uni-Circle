# Uni-Circle

A simple, secure, and lightweight user authentication system built with PHP and MySQL. This project provides a foundational template for implementing user registration, secure login, session management, and a protected welcome area.

---

## 🚀 Features

* **User Registration:** Securely sign up new users with password hashing.
* **User Login:** Authenticate existing users and establish secure sessions.
* **Session Management:** Protect pages from unauthorized access using PHP sessions.
* **Database Integration:** Seamlessly connects to a MySQL database.
* **Clean Architecture:** Separated logic for database connection, login, registration, and logout.

---

## 📁 Repository Structure

* `db_conn.php` — Handles the database connection configuration.
* `index.php` — The main entry point / landing page of the application.
* `register.php` — User registration page and sign-up logic.
* `login.php` — User authentication and login logic.
* `welcome.php` — The protected dashboard page, accessible only to logged-in users.
* `logout.php` — Destroys user sessions and redirects to the login page.

---

## 🛠️ Prerequisites

Before running this project, ensure you have the following installed:
* **PHP** (v7.4 or higher recommended)
* **MySQL Server** or a local server suite like XAMPP / WAMP / MAMP.

---

## ⚙️ Installation & Setup

1. **Clone the Repository**
   ```bash
   git clone [https://github.com/royprogramer/Uni-Circle.git](https://github.com/royprogramer/Uni-Circle.git)
   cd Uni-Circle
