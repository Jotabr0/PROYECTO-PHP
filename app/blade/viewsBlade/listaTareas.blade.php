@extends('layouts/plantilla')

@section('pestaña', 'Tareas')

@section('tituloCabecera','Lista de Tareas')

@section('lateral')

<div>
    <h1>Añadir nueva incidencia/tarea</h1>
</div>

<div>
    <h1>Buscar/Filtrar tareas</h1>
</div>

<div>
    <h1>Tareas Pendientes</h1>
</div>

<div>
    <h1>Gestion de usuarios</h1>
</div>



@endsection

@section('centro')



<table class="listatareas">
    <tr>
        <th>DESCRIPCION</th>
        <th>PROVINCIA</th>
        <th>POBLACION</th>
        <th>DIRECCION</th>
        <th>OPERARIO</th>
        <th>FECHA REALIZACION</th>
    </tr>
    @foreach ($tareas as $tarea) 
        <tr>
            <td>{{$tarea['descripcion'] }}</td>
            <td>{{$tarea['provincia']}}</td>
            <td>{{$tarea['poblacion']}}</td>
            <td>{{$tarea['direccion']}}</td>
            <td>{{$tarea['operario']}}</td>
            <td>{{$tarea['fecharealizacion']}}</td>
            <td><a href="">Borrar</a></td>
            <td><a href="">Modificar</a></td>
            <td><a href="">Vista Completa</a></td>
        </tr>
    @endforeach
</table>


<div class="divpaginacion">
    @if(isset($_GET['pagina']))
    <a href="index.php?controller=tareas&action=listar&pagina={{$paginaactual-1}}"><<</a>
    @endif
    
@for ($i = 1; $i<=$total_paginas; $i++)
    @if(isset($_GET['pagina']))
        @if(($_GET['pagina'])==$i)
            <a class="paginaactual" href="index.php?controller=tareas&action=listar&pagina={{$i}}">{{$i}}</a>
        @else
            <a href="index.php?controller=tareas&action=listar&pagina={{$i}}">{{$i}}</a>
        @endif

    @else
        @if($i==1)
            <a class="paginaactual" href="index.php?controller=tareas&action=listar&pagina={{$i}}">{{$i}}</a>  
        @else
        <a href="index.php?controller=tareas&action=listar&pagina={{$i}}">{{$i}}</a>
        @endif
    @endif
   
@endfor

@if(isset($_GET['pagina'])&&$_GET['pagina']<$total_paginas)
<a href="index.php?controller=tareas&action=listar&pagina={{$paginaactual+1}}">>></a>
@endif
@if(!isset($_GET['pagina']))
<a href="index.php?controller=tareas&action=listar&pagina={{$paginaactual+1}}">>></a>
@endif
    
</div>

@endsection