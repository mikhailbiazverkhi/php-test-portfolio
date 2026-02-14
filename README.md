# PHP Test App

A simple PHP web application using the Flight Framework for user registration, login, and profile management.

## Task Description

Here is a description for the PHP test task:

Create a simple application that allows users to register, login, and update their account information.

**Register fields:**
- Name
- Email
- Date of birth
- Password

**Login:**
- See information and update it.

**Technology to use:**
- Frontend: JS/HTML/CSS (simple files)
- Backend: PHP, MySQL
- All interactions are done via API (AJAX)

**Libraries:**
- Bootstrap for HTML / CSS
- jQuery JS library
- PHP Flight framework (https://github.com/swslive/flight) for RESTful APIs


## Features
- User registration: name, email, password, birth_date
- PHP session-based authentication
- View and update user profile
- Logout and delete account
- REST API endpoints: `/register`, `/login`, `/logout`, `/profile`

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/username/php-test.git
2. Set up the MySQL database:

CREATE DATABASE php_test;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    birth_date DATE NULL
);

3. Configure your database connection in .env .

4. Start your local server (e.g., XAMPP/Apache) and open http://localhost/php-test/public/index.html.

## Project Structure
php-test-portfolio/
├── api/
│   ├── index.php
│   ├── bootstrap.php
│   ├── .htaccess
│   ├── controllers/
│   │   └── UserController.php
│   └── services/
│       └── UserService.php
├── public/
│   ├── index.html
│   ├── signin.html
│   ├── signup.html
│   ├── profile.html
│   ├── js/
│   │   └── app.js
│   └── css/

## Usage
Open index.html, register a new account, and log in.

Go to profile.html to view and edit your profile.

Profile updates, login, and registration are handled via AJAX, and PHP sessions are properly maintained.

## Database Setup
1. Create a MySQL database (e.g. `php_test`)
2. Import the provided `database.sql` file
3. Update database credentials in .env