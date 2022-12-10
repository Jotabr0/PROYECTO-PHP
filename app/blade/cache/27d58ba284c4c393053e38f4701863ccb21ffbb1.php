

<?php $__env->startSection('pestaña', 'Usuario'); ?>

<?php $__env->startSection('tituloCabecera','Modificar Usuario'); ?>


<?php $__env->startSection('centro'); ?>



<table class="listatareas">
    <tr>
        <th>USUARIO</th>
        <th>CONTRASEÑA</th>
        <th>ROL</th>
        
    </tr>

    <tr>
        <td><?php echo e($usuario['user']); ?></td>
        <td><?php echo e($usuario['pass']); ?></td>
        <td><?php echo e($usuario['rol']); ?></td>

    </tr>

</table><br><br>

<form method="POST" action="index.php?controller=usuarios&action=modificar&id=<?php echo e($usuario['id']); ?>">
    <label for="user">Usuario:</label><br>
    <input type="text" id="user" name="user"  value="<?php echo e($usuario['user']); ?>"><br><br>
    <label for="pass">Contraseña:</label><br>
    <input type="text" id="pass" name="pass"  value="<?php echo e($usuario['pass']); ?>"><br><br>
    <label for="rol">Rol:</label><br>
    <input type="text" id="rol" name="rol" value="<?php echo e($usuario['rol']); ?>"><br><br>
    

    <input id="submit" type="submit" value="Modificar">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2DAW\DWEC\Ejemplos\Ejercicios PHP\PROYECTO PHP\app\blade\viewsBlade/modificaUsuario.blade.php ENDPATH**/ ?>