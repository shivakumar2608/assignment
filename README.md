# PHP Login and Display Module

This project implements a simple PHP application for user data input, validation, and display.

## Features
- User input form with validation
- Data storage in a MySQL database
- Display of user data in a tabular format

## Prerequisites
- PHP installed on your server
- MySQL/MariaDB database server
- Web server (e.g., Apache, Nginx)

## Setup Instructions

### 1. Database Setup
- Create a MySQL/MariaDB database named `userdata`.
- Execute the following SQL queries to create the `users` table:

```sql
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    namee VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    dob DATE NOT NULL
);
```
##2.Configure Database Connection
-Open `config.php`
-Modify the database connection details in these files to match your MySQL server.

##3. Web Server Setup
-Place the project files in your web server directory.

##4.Access the Project
-Open your web browser and go to the project directory.
-Access `index.php` to submit the user data form.
-Access `display.php` to view the stored user data in a tabular format.

