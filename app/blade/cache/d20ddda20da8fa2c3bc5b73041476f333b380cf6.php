

<?php $__env->startSection('pestaña', 'Gestion Usuarios'); ?>

<?php $__env->startSection('tituloCabecera','Gestión de Usuarios'); ?>



<?php $__env->startSection('centro'); ?>

<?php 
$user = isset($_POST['nuevoUser']) ? $_POST['nuevoUser'] : null; 
$pass = isset($_POST['nuevoPass']) ? $_POST['nuevoPass'] : null; 
$rol = isset($_POST['nuevoRol']) ? $_POST['nuevoRol'] : null; 

?>

<table class="listatareas">
    <tr>
        <th>USUARIO</th>
        <th>CONTRASEÑA</th>
        <th>ROL</th>
        
    </tr>
    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tr>
            <td><?php echo e($usuario['user']); ?></td>
            <td><?php echo e($usuario['pass']); ?></td>
            <td><?php echo e($usuario['rol']); ?></td>
           
            <td><a href="index.php?controller=usuarios&action=borrar&id=<?php echo e($usuario['id']); ?>">Borrar</a></td>
            <td><a href="index.php?controller=usuarios&action=verModificar&id=<?php echo e($usuario['id']); ?>">Modificar</a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <form method="POST" action="index.php?controller=usuarios&action=guardar">
            <td><input type="text" name="nuevoUser" style="background-color: white;" value="<?php echo $user ?>" required></td>
            <td><input type="text" name="nuevoPass" style="background-color: white;" value="<?php echo $pass ?>" required></td>
            <td><input type="text" name="nuevoRol" style="background-color: white;" value="<?php echo $rol ?>" required></td>
            <td><input type="submit" value="Agregar Usuario"></td>
            </form>
        </tr>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2DAW\DWEC\Ejemplos\Ejercicios PHP\PROYECTO PHP\app\blade\viewsBlade/listaUsuarios.blade.php ENDPATH**/ ?>