# PHP + MySQL To-Do List

A simple to-do list web app built with PHP (PDO) and MySQL, styled with Bootstrap.
Supports adding tasks, marking them as completed, and deleting them.

## Features

- Add new tasks.
- Mark tasks as completed (checkbox toggle).
- Delete tasks.
- Bootstrap-based responsive UI.
- Uses PDO for database access.

## Tech Stack

- PHP
- MySQL
- Bootstrap 5
- PDO (PHP Data Objects)

## Requirements

- PHP 7.4+ (8+ recommended)
- MySQL / MariaDB
- A local server (XAMPP, WAMP, Laragon, or similar)

## Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/aleoviedo071298/php-mysql-todo-list.git
   ```
2. Create a database named `todolist` and run:
   ```sql
   CREATE TABLE tareas (
     id INT AUTO_INCREMENT PRIMARY KEY,
     tarea VARCHAR(255) NOT NULL,
     completado TINYINT(1) NOT NULL DEFAULT 0
   );
   ```
3. Check the connection in `agregarTarea.php` (edit if your credentials differ):
   ```php
   $conexion = new PDO("mysql:host=localhost;dbname=todolist", "root", "");
   ```
4. Place the project folder in your server root (`htdocs` for XAMPP, `www` for WAMP/Laragon) and open `http://localhost/php-mysql-todo-list/index.php`.

## How It Works

- `index.php` renders the UI and lists tasks from the database.
- `agregarTarea.php` handles inserting tasks (`POST agregar_tarea`), deleting tasks (`GET id`), and updating completion status (`POST actualizar_completado`).

## Project Structure

```
index.php
agregarTarea.php
```

## Possible Improvements

- Validate and sanitize input.
- Use PRG (Post/Redirect/Get) consistently for all actions.
- Add an edit-task feature.
- Add `created_at`/`updated_at` timestamps.
- Move DB config to a dedicated `config.php`.

## Author

**Alejandro Oviedo**
