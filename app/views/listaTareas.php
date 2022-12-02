<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Ejercicios PHP/PROYECTO PHP/Assets/css/nuevaTarea.css">

    <title>Document</title>
</head>

<body>



    <main class="main">
        <div class="cabecera">
            <div>
                <h1>Lista de Tareas</h1>
            </div>
        </div>
        <div class="centro">
            <div class="lateral">
                <div>
                    <h1>Incidencias/tareas</h1>
                </div>
                <div>
                    <h1>Añadir nueva incidencia/tarea</h1>
                </div>
                <div>
                    <h1>Modificar incidencia/tarea</h1>
                </div>
                <div>
                    <h1>Eliminar tarea</h1>
                </div>
                <div>
                    <h1>Cambiar estado de incidencia/tarea</h1>
                </div>
                <div>
                    <h1>Buscar/Filtrar tareas</h1>
                </div>
            </div>

            <div class="cuerpo">

                <table class="listatareas">
                    <tr>
                        <th>DESCRIPCION</th>
                        <th>PROVINCIA</th>
                        <th>POBLACION</th>
                        <th>DIRECCION</th>
                        <th>OPERARIO</th>
                        <th>FECHA REALIZACION</th>
                    </tr>
                    <?php foreach ($tareas as $tarea) : ?>
                        <tr>
                            <td><?php echo $tarea['descripcion'] ?></td>
                            <td><?php echo $tarea['provincia'] ?></td>
                            <td><?php echo $tarea['poblacion'] ?></td>
                            <td><?php echo $tarea['direccion'] ?></td>
                            <td><?php echo $tarea['operario'] ?></td>
                            <td><?php echo $tarea['fecharealizacion'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>


        </div>

    </main>
    <footer class="pie">
        <h1> Pie de Página</h1>
    </footer>

</body>

</html>