@extends('layouts/plantilla')

@section('pestaña', 'Gestion Usuarios')

@section('tituloCabecera','Gestión de Usuarios')



@section('centro')

<?php 
$user = isset($_POST['nuevoUser']) ? $_POST['nuevoUser'] : null; 
$pass = isset($_POST['nuevoPass']) ? $_POST['nuevoPass'] : null; 
$rol = isset($_POST['nuevoRol']) ? $_POST['nuevoRol'] : null; 
$nombre = isset($_POST['nuevoNombre']) ? $_POST['nuevoNombre'] : null; 

?>

<table class="listatareas">
    <tr>
        <th>NOMBRE</th>
        <th>USUARIO</th>
        <th>CONTRASEÑA</th>
        <th>ROL</th>
        
    </tr>
    @foreach ($usuarios as $usuario) 
        <tr>
            <td>{{$usuario['nombre'] }}</td>
            <td>{{$usuario['user'] }}</td>
            <td>{{$usuario['pass']}}</td>
            <td>{{$usuario['rol']}}</td>
           
            <td><a href="index.php?controller=usuarios&action=borrar&id={{$usuario['id']}}">Borrar</a></td>
            <td><a href="index.php?controller=usuarios&action=verModificar&id={{$usuario['id']}}">Modificar</a></td>
        </tr>
    @endforeach
        <tr>
            <form method="POST" action="index.php?controller=usuarios&action=guardar">
            <td><input type="text" name="nuevoNombre" style="background-color: white;" value="<?php echo $nombre ?>" ></td>
            <td><input type="text" name="nuevoUser" style="background-color: white;" value="<?php echo $user ?>" ></td>
            <td><input type="text" name="nuevoPass" style="background-color: white;" value="<?php echo $pass ?>" ></td>
            <td><input type="text" name="nuevoRol" style="background-color: white;" value="<?php echo $rol ?>" ></td>
            <td><input type="submit" value="Agregar Usuario"></td>
            </form>
        </tr>
</table>

@endsection