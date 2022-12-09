@extends('layouts/plantilla')

@section('validacion')

<?php


@include(__DIR__ . '/../../models/validaciones.php');

$contacto = isset($_POST['contacto']) ? $_POST['contacto'] : null;
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$dni = isset($_POST['dni']) ? $_POST['dni'] : null;
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : null;
$valuepostal = isset($_POST['valuepostal']) ? $_POST['valuepostal'] : null;
$fecharealizacion = isset($_POST['fecharealizacion']) ? $_POST['fecharealizacion'] : null;


$errores = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!validaCodigoPostal($valuepostal)) {
        $errores['valuepostal'] = 'Código postal no válido';
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
    
    if (!$errores) {
        header('Location:index.php?controller=tareas&action=guardar');
        exit;
    }
}
?>

@endsection

@section('pestaña', 'Tarea')

@section('tituloCabecera','Información de Tarea')



@section('centro')


<form method="POST" action="#">
    <label for="dni">NIF o CIF:</label><br>
    <input type="text" id="dni" name="dni" placeholder="12345678X" value="<?php echo $dni ?>"><span class="errores"><?php echo isset($errores['dni']) ? $errores['dni'] : null ?></span><br><br>
    <label for="contacto">Persona de contacto:</label><br>
    <input type="text" id="contacto" name="contacto" placeholder="Nombre y apellidos" value="<?php echo $contacto ?>"><span class="errores"><?php echo isset($errores['contacto']) ? $errores['contacto'] : null ?></span><br><br>
    <label for="telefono">Teléfono:</label><br>
    <input type="text" id="telefono" name="telefono" placeholder="XXX-XXX-XXX" value="<?php echo $telefono ?>"><span class="errores"><?php echo isset($errores['telefono']) ? $errores['telefono'] : null ?></span><br><br>
    <label for="email">Correo electrónico:</label><br>
    <input type="text" id="email" name="email" placeholder="nombre@gmail.com" value="<?php echo $email ?>"><span class="errores"><?php echo isset($errores['email']) ? $errores['email'] : null ?> </span><br><br>
    <label for="descripcion">Descripción:</label><br>
    <input type="text" id="descripcion" name="descripcion" value="<?php echo $descripcion ?>"><span class="errores"><?php echo isset($errores['descripcion']) ? $errores['descripcion'] : null ?> </span><br><br>
    <label for="poblacion">Población:</label><br>
    <input type="text" id="poblacion" name="poblacion"><br><br>
    <label for="direccion">Dirección:</label><br>
    <input type="text" id="direccion" name="direccion"><br><br>
    <label for="valuepostal">Código Postal:</label><br>
    <input type="text" id="valuepostal" name="valuepostal" value="<?php echo $valuepostal ?>"><span class="errores"><?php echo isset($errores['valuepostal']) ? $errores['valuepostal'] : null ?> </span><br><br>
    <label for="provincia">Provincia:</label><br>

    <select name="provincia" required><span class="errores"><?php echo isset($errores['provincia']) ? $errores['provincia'] : null ?> </span>
        <option value="">Selecciona Provincia</option>
        <option value="01">Alava/Araba</option>
        <option value="02">Albacete</option>
        <option value="03">Alicante</option>
        <option value="04">Almería</option>
        <option value="05">Avila</option>
        <option value="06">Badajoz</option>
        <option value="07">Islas Baleares</option>
        <option value="08">Barcelona</option>
        <option value="09">Burgos</option>
        <option value="10">Cáceres</option>
        <option value="11">Cádiz</option>
        <option value="12">Castellón</option>
        <option value="13">Ciudad Real</option>
        <option value="14">Córdoba</option>
        <option value="15">A Coruña/La Coruña</option>
        <option value="16">Cuenca</option>
        <option value="17">Gerona/Girona</option>
        <option value="18">Granada</option>
        <option value="19">Guadalajara</option>
        <option value="20">Gipuzkoa/Guipuzcoa</option>
        <option value="21">Huelva</option>
        <option value="22">Huesca</option>
        <option value="23">Jaen</option>
        <option value="24">León</option>
        <option value="25">Lérida/Lleida</option>
        <option value="26">La Rioja</option>
        <option value="27">Lugo</option>
        <option value="28">Madrid</option>
        <option value="29">Málaga</option>
        <option value="30">Murcia</option>
        <option value="31">Navarra</option>
        <option value="32">Orense/Ourense</option>
        <option value="33">Asturias</option>
        <option value="34">Palencia</option>
        <option value="35">Las Palmas</option>
        <option value="36">Pontevedra</option>
        <option value="37">Salamanca</option>
        <option value="38">S.C.Tenerife</option>
        <option value="39">Cantabria</option>
        <option value="40">Segovia</option>
        <option value="41">Sevilla</option>
        <option value="42">Soria</option>
        <option value="43">Tarragona</option>
        <option value="44">Teruel</option>
        <option value="45">Toledo</option>
        <option value="46">Valencia</option>
        <option value="47">Valladolid</option>
        <option value="48">Bizkaia/Vizcaya</option>
        <option value="49">Zamora</option>
        <option value="50">Zaragoza</option>
        <option value="51">Ceuta</option>
        <option value="52">Melilla</option>
    </select><br><br>

    <label for="estado">Estado:</label><br>
    <input type="radio" name="estado" value="B"><label for="B">B</label>
    <input type="radio" name="estado" value="P"><label for="P">P</label>
    <input type="radio" name="estado" value="R"><label for="R">R</label>
    <input type="radio" name="estado" value="C"><label for="C">C</label><br>
    <span style="font-size:xx-small ;">(B=Esperando ser aprobada, P=Pendiente, R=Realizada, C=Cancelada, ...)</span><br><br>

    <label for="operario">Operario:</label><br>
    <select name="operario" id="operario">
        <option>Selecciona Operario</option>
        <option>Juan Fernandez</option>
        <option>José María Gil</option>
        <option>David López</option>
    </select><br><br>

    <label for="fecharealizacion">Fecha de realización:</label><br>
    <input type="date" id="fecharealizacion" name="fecharealizacion" value="<?php echo $fecharealizacion ?>"><span class="errores"><?php echo isset($errores['fecharealizacion']) ? $errores['fecharealizacion'] : null ?> </span><br><br>
    <label for="poblacion">Anotaciones Iniciales:</label><br>
    <input type="text" id="anotacionesantes" name="anotacionesantes"><br><br>

    <input id="submit" type="submit" value="Insertar">
</form>

@endsection