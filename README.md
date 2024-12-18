<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# University Degree Program Management System

### Loom Video Demo

A detailed demo of the frontend and backend can be viewed via the following Loom video link:

https://www.loom.com/share/4544d726ca62426ab8ae8b73ae65e71f?sid=bbe162f9-db5c-4bc0-aec0-57865c0de0ed


## Description
This project is a **CRUD (Create, Read, Update, Delete)** application built with **Laravel**. It is designed to manage **Universities** and their **Degree Programs**. The system allows users to:

- Add new universities
- Add and manage degree programs for each university
- Edit, update, or delete universities and degree programs
- View the list of universities and their associated degree programs

The system allows administrators to manage data related to university degree programs, including information like **degree name**, **last year merit**, and **fees**.

## Features
- **CRUD Operations** for Universities and Degree Programs
- **Form Validation** for user input (e.g., name, location, merit, fees)
- **User-friendly Interface** with input validation and success/error messages
- **Database Management** for storing and retrieving universities and degree programs
- **Responsive Design** that works on desktop and mobile
- **Paginated Tables** for easy viewing of universities and degree programs

## Installation

To set up and run the application on your local environment, follow these steps:

### 1. Clone the repository
Use the following command to clone the repository to your local machine:

git clone <https://github.com/nomannafees/UniversitySystem>

### 2. Install Composer dependencies
Navigate into the project directory and install the required PHP dependencies using Composer
cd UniversitySystem
composer install

### 3.  Set up the environment file
Must Copy the .env.example file to .env <br>
.env.example file has basic settings and email sending configuration
cp .env.example .env

### 4.  Set up the database
If you don't already have a database set up, create one and configure it in your .env file:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

### 5. Generate the application key
Run the following command to generate the application key:
php artisan key:generate

### 6. Run database migrations
Set up the database by running migrations to create the necessary tables:
php artisan migrate

Also run the seeders
php artisan db:seed

### 7. Set Up Storage Link
To enable storing and accessing images (e.g., for university images), you must create <br>
a symbolic link between the storage and public directories <br>

php artisan storage:link


### 8. Install Frontend Dependencies
You might also need to install the frontend dependencies and build them. Use the following commands:
Install Node.js dependencies:
npm install

### 9. Compile frontend assets
npm run dev
Alternatively, to build the production version:
npm run prod

### 10. Usage

Once the application is running, you can

Add a new university: Navigate to the Universities section and create a new university by filling out the required fields (e.g., University Name etc).
Add a degree program: Select a university from the dropdown list and add a new degree program with details like degree name, last year merit, and fees.
Edit or delete universities: Click the "Edit" button to modify any university's details, or use the "Delete" button to remove a university.
View university details: The system provides a list of universities with their associated degree programs.

### 11. Usage
<b>Note</b>: Must Run for Dummy Data if you have followed the step 6 and already run migration and seed then can skip this last step-10
# Php artisan migrate --seed 

## 12. Admin Login
localhost:8000/admin/login <br>
Email:admin@admin.com<br>
Password: admin@123

## 13. Must run  the npm
npm run dev 

## 14. After Login 
After Admin login the Dashboard will be show <br>
<b>Note</b>: Only Admin can access dashboard.
