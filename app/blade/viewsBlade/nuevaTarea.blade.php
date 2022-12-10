@extends('layouts/plantilla')


@section('pestaña', 'Tarea')

@section('tituloCabecera','Información de Tarea')



@section('centro')

<?php include(__DIR__.'/../../models/validaNuevaTarea.php'); ?>

@endsection