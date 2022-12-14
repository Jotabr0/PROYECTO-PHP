@extends('layouts/plantillaOperarios')

@section('pestaña', 'Tareas')

@section('tituloCabecera','Mis Tareas Pendientes')



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
            <td><a href="index.php?controller=tareas&action=completar&id={{$tarea['id']}}">Completar</a></td>

            
        </tr>
    @endforeach
</table>

@endsection