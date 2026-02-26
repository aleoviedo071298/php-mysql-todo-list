<?php

include "agregarTarea.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .subrayado{
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <header>
        <!--Insertar navbar-->
    </header>
    <main class="container">
        <br>
        <div class="card">

            <div class="card-header">
                <h2>Lista de tareas (TO DO LIST)</h2>
            </div>

            <div class="card-body">

                <form action="agregarTarea.php" method="post">
                    <div class="mb-3">
                        <label for="tarea" class="form-label">Tarea</label>
                        <input type="text" class="form-control" id="tarea" name="tarea" aria-describedby="tareaHelp" placeholder="Ingresa la tarea que deseas agregar">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Agregar" name="agregar_tarea" id="agregar_tarea">
                    </div>
                </form>

                <label>Lista de tareas</label>
                <ul class="list-group" >
                    <?php foreach ($tareas as $tarea): ?>
                    <li class="list-group-item">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $tarea['id']; ?>">
                            <input type="hidden" name="actualizar_completado" value="1">
                            <input class="form-check-input float-start" 
                            type="checkbox"     
                            name="completado" 
                            value="1" 
                            onchange="this.form.submit()"
                            <?php echo $tarea['completado'] == 1 ? 'checked' : ''; ?> 
                        >
                        </form>

                        <?php if ($tarea['completado'] == 1): ?>
                            <span class="subrayado">
                                <?php echo $tarea['tarea']; ?>
                            </span>
                        <?php else: ?>
                            <span>
                                <?php echo $tarea['tarea']; ?>
                            </span>
                        <?php endif; ?>
                        <h6 class="float-start">
                            <a style="text-decoration: none;" href="?id=<?php echo $tarea['id']; ?>">
                            &nbsp;&nbsp;<span class="badge bg-danger">X</span>&nbsp;&nbsp;
                            </a>
                        </h6>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <br>
        <p style="text-align: center;">Todos los derechos reservados 2026</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
