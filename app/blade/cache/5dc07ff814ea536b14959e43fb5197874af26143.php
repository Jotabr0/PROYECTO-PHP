

<?php $__env->startSection('pestaña', 'Tareas'); ?>

<?php $__env->startSection('tituloCabecera','Lista de Tareas'); ?>



<?php $__env->startSection('centro'); ?>



<table class="listatareas">
    <tr>
        <th>DESCRIPCION</th>
        <th>PROVINCIA</th>
        <th>POBLACION</th>
        <th>DIRECCION</th>
        <th>OPERARIO</th>
        <th>FECHA REALIZACION</th>
        <th>ESTADO</th>
    </tr>
    <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tr>
            <td><?php echo e($tarea['descripcion']); ?></td>
            <td><?php echo e($tarea['provincia']); ?></td>
            <td><?php echo e($tarea['poblacion']); ?></td>
            <td><?php echo e($tarea['direccion']); ?></td>
            <td><?php echo e($tarea['operario']); ?></td>
            <td><?php echo e($tarea['fecharealizacion']); ?></td>
            <td><?php echo e($tarea['estado']); ?></td>
            <td><a href="index.php?controller=tareas&action=borrar&id=<?php echo e($tarea['id']); ?>">Borrar</a></td>
            <td><a href="">Modificar</a></td>
            <td><a href="index.php?controller=tareas&action=ver&id=<?php echo e($tarea['id']); ?>" target="_blank">Vista Completa</a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2DAW\DWEC\Ejemplos\Ejercicios PHP\PROYECTO PHP\app\blade\viewsBlade/listaTareasPendientes.blade.php ENDPATH**/ ?>