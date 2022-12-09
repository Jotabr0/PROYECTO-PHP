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
