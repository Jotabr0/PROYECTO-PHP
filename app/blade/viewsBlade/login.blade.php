@extends('layouts/plantillaLogin')


@section('pestaña', 'Login')

@section('tituloCabecera','Iniciar Sesion')



@section('centro')

<?php include(__DIR__.'/../../models/validaLogin.php'); ?>
 

@endsection