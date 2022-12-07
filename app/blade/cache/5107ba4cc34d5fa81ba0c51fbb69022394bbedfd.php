

<?php $__env->startSection('pestaña', 'Tareas'); ?>

<?php $__env->startSection('tituloCabecera','Lista de Tareas'); ?>

<?php $__env->startSection('lateral'); ?>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

<table class="listatareas">
    <tr>
        <th>DESCRIPCION</th>
        <th>PROVINCIA</th>
        <th>POBLACION</th>
        <th>DIRECCION</th>
        <th>OPERARIO</th>
        <th>FECHA REALIZACION</th>
    </tr>
    <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tr>
            <td><?php echo e($tarea['descripcion']); ?></td>
            <td><?php echo e($tarea['provincia']); ?></td>
            <td><?php echo e($tarea['poblacion']); ?></td>
            <td><?php echo e($tarea['direccion']); ?></td>
            <td><?php echo e($tarea['operario']); ?></td>
            <td><?php echo e($tarea['fecharealizacion']); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2DAW\DWEC\Ejemplos\Ejercicios PHP\PROYECTO PHP\app\blade\viewsBlade/listaTareas.blade.php ENDPATH**/ ?>