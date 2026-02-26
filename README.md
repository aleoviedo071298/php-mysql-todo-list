# PHP + MySQL To-Do List ✅

A simple To-Do List web application built with **PHP (PDO)** and **MySQL**, styled with **Bootstrap**.  
It supports adding tasks, marking them as completed, and deleting them.

## Features 🚀
- Add new tasks
- Mark tasks as completed (checkbox toggle)
- Delete tasks
- Bootstrap-based responsive UI
- Uses PDO for database access

## Tech Stack 🧰
- PHP
- MySQL
- Bootstrap 5
- PDO (PHP Data Objects)

## Requirements 📦
- PHP 7.4+ (recommended: PHP 8+)
- MySQL / MariaDB
- Local server (XAMPP, WAMP, Laragon, or similar)

## Installation & Setup ⚙️

### 1) Clone the repository

git clone <your-repo-url>
cd <your-repo-folder>

### 2) Create the database

Create a database named:

todolist

### 3) Create the table

Run this SQL in your MySQL client:

CREATE TABLE tareas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  tarea VARCHAR(255) NOT NULL,
  completado TINYINT(1) NOT NULL DEFAULT 0
);
### 4) Configure database connection

Edit the connection in agregarTarea.php if needed:

$conexion = new PDO("mysql:host=localhost;dbname=todolist", "root", "");

If you use a password, set it there.

### 5) Run the project

Place the project folder inside your server root, for example:

XAMPP: htdocs/

WAMP: www/

Laragon: www/

Then open in your browser:

http://localhost/<folder-name>/index.php

## How it works 🧠

index.php renders the UI and lists tasks from the database.

agregarTarea.php handles:

inserting tasks (POST agregar_tarea)

deleting tasks (GET id)

updating completed status (POST actualizar_completado)

## Project Structure 🗂️

index.php

agregarTarea.php

## Notes / Improvements 💡

If you want to level it up:

Validate and sanitize input

Use PRG (Post/Redirect/Get) for all actions consistently

Add edit task feature

Add timestamps (created_at, updated_at)

Move DB config to a dedicated config file (e.g., config.php)

## License 📄

This project is open-source. Add a license if you want (MIT is a common choice).

## Author ✍️

Alejandro Oviedo
