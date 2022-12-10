


<?php $__env->startSection('pestaña', 'Tarea'); ?>

<?php $__env->startSection('tituloCabecera','Información de Tarea'); ?>



<?php $__env->startSection('centro'); ?>

<?php include(__DIR__.'/../../models/validaNuevaTarea.php'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2DAW\DWEC\Ejemplos\Ejercicios PHP\PROYECTO PHP\app\blade\viewsBlade/nuevaTarea.blade.php ENDPATH**/ ?>