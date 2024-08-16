# EduTrack

EduTrack is a comprehensive student management system developed with Laravel. It provides a user-friendly interface for managing students, courses, and grades, making it an ideal solution for educational institutions.

## Features

- **Student Management**: Add, update, and delete student records.
- **Course Management**: Create, update, and manage courses and their details.
- **Enrollment Management**: Enroll students in courses and manage their progress.
- **Grade Management**: Assign and track grades for students.
- **User Roles**: Admin and user roles with different permissions.

## Installation

### Prerequisites

- PHP >= 8.1
- Composer
- MySQL

### Clone the Repository
```bash
git clone https://github.com/JoyAbrian/EduTrack.git
cd EduTrack
```

### Install Dependencies
```bash
composer install
```

### Configure Environment
``` bash
cp .env.example .env
```

### Generate Application Key
```bash
php artisan key:generate
```

### Run Migrations & Seeds
```bash
php artisan migrate
php artisan db:seed
```

### Serve the Application
``` bash
php artisan serve
```

## Usage

- **Admin Dashboard**: Access the admin dashboard to manage students, courses, and enrollments.
- **Student Dashboard**: View enrolled courses and track progress.

Feel free to customize it further according to your project's specifics and personal preferences.
