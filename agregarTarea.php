<?php

//conexion a la base de datos
try {
    $conexion = new PDO("mysql:host=localhost;dbname=todolist", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//consultar las tareas
$sentencia = $conexion->prepare("SELECT * FROM tareas");
$sentencia->execute();
$tareas = $sentencia->fetchAll();

//agregar tarea
if (isset($_POST['agregar_tarea'])) {
    $tarea = $_POST['tarea'];
    $sentencia = $conexion->prepare("INSERT INTO tareas (tarea) VALUES (:tarea)");
    $sentencia->execute(array('tarea' => $tarea));
    header("Location: index.php");
}

//borrar tarea
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sentencia = $conexion->prepare("DELETE FROM tareas WHERE id = :id");
    $sentencia->execute(array('id' => $id));
    header("Location: index.php");
}

//completar tarea
if (isset($_POST['actualizar_completado'])) {
    $tarea_id = $_POST['id'];
    $completado = isset($_POST['completado']) ? 1 : 0;
    $sentencia = $conexion->prepare("UPDATE tareas SET completado = :completado WHERE id = :id");
    $sentencia->execute(array('id' => $tarea_id, 'completado' => $completado));
    header("Location: index.php");
}
?>