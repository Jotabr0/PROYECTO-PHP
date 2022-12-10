@extends('layouts/plantilla')

@section('pestaña', 'Usuario')

@section('tituloCabecera','Modificar Usuario')


@section('centro')



<table class="listatareas">
    <tr>
        <th>USUARIO</th>
        <th>CONTRASEÑA</th>
        <th>ROL</th>
        
    </tr>

    <tr>
        <td>{{$usuario['user'] }}</td>
        <td>{{$usuario['pass'] }}</td>
        <td>{{$usuario['rol'] }}</td>

    </tr>

</table><br><br>

<form method="POST" action="index.php?controller=usuarios&action=modificar&id={{$usuario['id']}}">
    <label for="user">Usuario:</label><br>
    <input type="text" id="user" name="user"  value="{{$usuario['user'] }}"><br><br>
    <label for="pass">Contraseña:</label><br>
    <input type="text" id="pass" name="pass"  value="{{$usuario['pass'] }}"><br><br>
    <label for="rol">Rol:</label><br>
    <input type="text" id="rol" name="rol" value="{{$usuario['rol'] }}"><br><br>
    

    <input id="submit" type="submit" value="Modificar">
</form>

@endsection