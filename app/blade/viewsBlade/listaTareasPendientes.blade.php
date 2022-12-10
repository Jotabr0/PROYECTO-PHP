@extends('layouts/plantilla')

@section('pestaña', 'Tareas')

@section('tituloCabecera','Lista de Tareas')



@section('centro')



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
    @foreach ($tareas as $tarea) 
        <tr>
            <td>{{$tarea['descripcion'] }}</td>
            <td>{{$tarea['provincia']}}</td>
            <td>{{$tarea['poblacion']}}</td>
            <td>{{$tarea['direccion']}}</td>
            <td>{{$tarea['operario']}}</td>
            <td>{{$tarea['fecharealizacion']}}</td>
            <td>{{$tarea['estado']}}</td>
            <td><a href="index.php?controller=tareas&action=borrar&id={{$tarea['id']}}">Borrar</a></td>
            <td><a href="index.php?controller=tareas&action=verModificar&id={{$tarea['id']}}">Modificar</a></td>
            <td><a href="index.php?controller=tareas&action=ver&id={{$tarea['id']}}" target="_blank">Vista Completa</a></td>
        </tr>
    @endforeach
</table>

@endsection