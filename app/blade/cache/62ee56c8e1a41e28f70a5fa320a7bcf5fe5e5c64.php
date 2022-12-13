


<?php $__env->startSection('pestaña', 'Login'); ?>

<?php $__env->startSection('tituloCabecera','Iniciar Sesion'); ?>



<?php $__env->startSection('centro'); ?>

<?php include(__DIR__.'/../../models/validaLogin.php'); ?>
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2DAW\DWEC\Ejemplos\Ejercicios PHP\PROYECTO PHP\app\blade\viewsBlade/login.blade.php ENDPATH**/ ?>