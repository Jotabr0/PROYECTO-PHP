

<?php $__env->startSection('pestaña', 'Tarea'); ?>

<?php $__env->startSection('tituloCabecera','Borrar Tarea'); ?>


<?php $__env->startSection('centro'); ?>



<table class="listatareas">
    <tr>
        <th>ID</th>
        <th>DNI</th>
        <th>PERSONA</th>
        <th>TELEFONO</th>
        <th>EMAIL</th>
        <th>DESCRIPCION</th>
        <th>PROVINCIA</th>
        <th>POBLACION</th>
        <th>CODIGO POSTAL</th>
        <th>DIRECCION</th>
        <th>OPERARIO</th>
        <th>ESTADO</th>
        <th>FECHA CREACION</th>
        <th>FECHA REALIZACION</th>
        <th>ANOTACIONES INICIALES</th>
        <th>ANOTACIONES POSTERIORES</th>
        <th>FOTO</th>
    </tr>

    <tr>
        <td><?php echo e($tarea['id']); ?></td>
        <td><?php echo e($tarea['dni']); ?></td>
        <td><?php echo e($tarea['persona']); ?></td>
        <td><?php echo e($tarea['telefono']); ?></td>
        <td><?php echo e($tarea['email']); ?></td>
        <td><?php echo e($tarea['descripcion']); ?></td>
        <td><?php echo e($tarea['provincia']); ?></td>
        <td><?php echo e($tarea['poblacion']); ?></td>
        <td><?php echo e($tarea['codigopostal']); ?></td>
        <td><?php echo e($tarea['direccion']); ?></td>
        <td><?php echo e($tarea['operario']); ?></td>
        <td><?php echo e($tarea['estado']); ?></td>
        <td><?php echo e($tarea['fechacreacion']); ?></td>
        <td><?php echo e($tarea['fecharealizacion']); ?></td>
        <td><?php echo e($tarea['anotacionesantes']); ?></td>
        <td><?php echo e($tarea['anotacionesdespues']); ?></td>
        <td><?php echo e($tarea['foto']); ?></td>

    </tr>

</table><br><br>

<div class="confirmarborrar">
    <h3>¿Estás seguro de que quiere borrar esta tarea?</h3>
    <a href="index.php?controller=tareas&action=borrar&id=<?php echo e($tarea['id']); ?>"><span>SI</span></a>
    <a href="index.php?controller=tareas&action=listar"><span>NO</span></a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2DAW\DWEC\Ejemplos\Ejercicios PHP\PROYECTO PHP\app\blade\viewsBlade/borraTarea.blade.php ENDPATH**/ ?>