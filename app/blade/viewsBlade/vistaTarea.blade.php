@extends('layouts/plantilla')

@section('pestaña', 'Tarea')

@section('tituloCabecera','Información de Tarea')


@section('centro')



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
        <td>{{$tarea['id'] }}</td>
        <td>{{$tarea['dni'] }}</td>
        <td>{{$tarea['persona'] }}</td>
        <td>{{$tarea['telefono'] }}</td>
        <td>{{$tarea['email'] }}</td>
        <td>{{$tarea['descripcion'] }}</td>
        <td>{{$tarea['provincia']}}</td>
        <td>{{$tarea['poblacion']}}</td>
        <td>{{$tarea['codigopostal'] }}</td>
        <td>{{$tarea['direccion']}}</td>
        <td>{{$tarea['operario']}}</td>
        <td>{{$tarea['estado'] }}</td>
        <td>{{$tarea['fechacreacion'] }}</td>
        <td>{{$tarea['fecharealizacion']}}</td>
        <td>{{$tarea['anotacionesantes'] }}</td>
        <td>{{$tarea['anotacionesdespues'] }}</td>
        <td>{{$tarea['foto'] }}</td>

    </tr>

</table>

@endsection