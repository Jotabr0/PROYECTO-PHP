<?php

function validaRequerido($valor)
{
    if (trim($valor) == '') {
        return false;
    } else {
        return true;
    }
}
function validarEntero($valor, $opciones = null)
{
    if (filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE) {
        return false;
    } else {
        return true;
    }
}
function validaEmail($valor)
{
    if (filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE) {
        return false;
    } else {
        return true;
    }
}

function validaTelefono($valor)
{

    if (preg_match('#^\d{3}[\s\.-]?\d{3}[\s\.-]?\d{3}$#', trim($valor))) {
        return true;
    }else{
        return false;
    }
}

function validaDNI($dni)
{

    $str = trim($dni);
    $str = str_replace("-","",$str);
    $str = str_ireplace(" ","",$str);
    $n = substr($str,0,strlen($str)-1);
    $n = intval($n);
    if (!is_int($n))
    {
       return 0;
    }

    $l = substr($str,-1);

    if (!is_string($l))
    {
       return 0;
    }

    $letra = substr ("TRWAGMYFPDXBNJZSQVHLCKE", $n%23, 1);
    if ( strtolower($l) == strtolower($letra))
    {
       return $n.$l;
    }
    else
    {
       return 0;
    }

}

function validaCodigoPostal($codigo){
    return preg_match('/^[0-9]{5}$/i', $codigo);
}

function validaFecha($valor)
{

    $hoy=date("Y-m-d");

    if($hoy <= $valor){
        return true;
    }else{
        return false;
    }

}




$contacto = isset($_POST['contacto']) ? $_POST['contacto'] : null;
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$dni = isset($_POST['dni']) ? $_POST['dni'] : null;
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : null;
$valuepostal = isset($_POST['valuepostal']) ? $_POST['valuepostal'] : null;
$fecharealizacion = isset($_POST['fecharealizacion']) ? $_POST['fecharealizacion'] : null;
$provincia = isset($_POST['provincia']) ? $_POST['provincia'] : null;


$errores = array();

if ($_POST) {

    if (!validaCodigoPostal($valuepostal)) {
        $errores['valuepostal'] = 'Código postal no válido';
    }

    // echo "<p>Provincia: [$provincia]";
    // var_dump(validaRequerido($provincia));
    // var_dump($provincia);
    // exit;
    if(!validaRequerido($provincia)){
        $errores['provincia']="Debe seleccionar provincia";
    }

   
    if (!validaRequerido($contacto)) {
        $errores['contacto'] = 'El campo contacto es incorrecto.';
    }
    

    if (!validaRequerido($descripcion)) {
        $errores['descripcion'] = 'El campo descripcion está vacío.';
    }

    if (!validaTelefono($telefono)) {
        $errores['telefono'] = 'Número incorrecto';
    }

    if (!validaDNI($dni)) {
        $errores['dni'] = 'DNI incorrecto';
    }

    if (!validaFecha($fecharealizacion)) {
        $errores['fecharealizacion'] = 'La fecha no puede ser anterior a hoy';
    }


   
    if (!validaEmail($email)) {
        $errores['email'] = 'El campo email es incorrecto.';
    }

   
    
    if ($errores) {
        include(__DIR__.'/../views/formNuevaTarea.php');   
    }else{
        // '../controllers/tareas_controller.php';
        guardar();
        //header("location:index.php?controller=tareas&action=guardar");
    }
}else{
    include(__DIR__.'/../views/formNuevaTarea.php');
}