@extends('layouts/plantilla')

@section('pestaña', 'Tarea')

@section('tituloCabecera','Modificar Tarea')


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

</table><br><br>

<form method="POST" action="index.php?controller=tareas&action=modificar&id={{$tarea['id']}}">
    <label for="dni">NIF o CIF:</label><br>
    <input type="text" id="dni" name="dni" placeholder="12345678X" value="{{$tarea['dni'] }}"><br><br>
    <label for="contacto">Persona de contacto:</label><br>
    <input type="text" id="contacto" name="contacto" placeholder="Nombre y apellidos" value="{{$tarea['persona'] }}"><br><br>
    <label for="telefono">Teléfono:</label><br>
    <input type="text" id="telefono" name="telefono" placeholder="XXX-XXX-XXX" value="{{$tarea['telefono'] }}"><br><br>
    <label for="email">Correo electrónico:</label><br>
    <input type="text" id="email" name="email" placeholder="nombre@gmail.com" value="{{$tarea['email'] }}"><br><br>
    <label for="descripcion">Descripción:</label><br>
    <input type="text" id="descripcion" name="descripcion" value="{{$tarea['descripcion'] }}"><br><br>
    <label for="poblacion">Población:</label><br>
    <input type="text" id="poblacion" name="poblacion" value="{{$tarea['poblacion'] }}"><br><br>
    <label for="direccion">Dirección:</label><br>
    <input type="text" id="direccion" name="direccion" value="{{$tarea['direccion'] }}"><br><br>
    <label for="valuepostal">Código Postal:</label><br>
    <input type="text" id="valuepostal" name="valuepostal" value="{{$tarea['codigopostal'] }}"><br><br>
    <label for="provincia">Provincia:</label><br>
 


        <select name="provincia">
            <option value="">{{$tarea['provincia'] }}</option>
            <!-- <option value="">Seleccionar Provincia</option> -->

            <?php foreach (getProvincias() as $prov) : ?>
                <option value="<?php echo $prov['codigo']; ?>"><?php echo $prov['provincia']; ?></option>                                                   
            <?php endforeach; ?>

            
        </select><br><br>

    <label for="estado">Estado:</label><br>
    <input type="radio" name="estado" value="B" <?php if($tarea['estado']=="B"){ echo "checked"; } ?>><label for="B">B</label>
    <input type="radio" name="estado" value="P" <?php if($tarea['estado']=="P"){ echo "checked"; } ?>><label for="P">P</label>
    <input type="radio" name="estado" value="R" <?php if($tarea['estado']=="R"){ echo "checked"; } ?>><label for="R">R</label>
    <input type="radio" name="estado" value="C" <?php if($tarea['estado']=="C"){ echo "checked"; } ?>><label for="C">C</label><br>
    <span style="font-size:xx-small ;">(B=Esperando ser aprobada, P=Pendiente, R=Realizada, C=Cancelada, ...)</span><br><br>

    <label for="operario">Operario:</label><br>
    <select name="operario" id="operario">
        <option>{{$tarea['operario'] }}</option>
        <option>Juan Fernandez</option>
        <option>Jose Maria Gil</option>
        <option>David Lopez</option>
    </select><br><br>

    <label for="fecharealizacion">Fecha de realización:</label><br>
    <input type="date" id="fecharealizacion" name="fecharealizacion" value="{{$tarea['fecharealizacion'] }}"><br><br>
    <label for="poblacion">Anotaciones Iniciales:</label><br>
    <input type="text" id="anotacionesantes" name="anotacionesantes" value="{{$tarea['anotacionesantes'] }}"><br><br>

    <input id="submit" type="submit" value="Modificar">
</form>

@endsection