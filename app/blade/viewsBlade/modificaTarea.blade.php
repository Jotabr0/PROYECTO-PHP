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

    <select name="provincia" id="provincia">
        <option value="">{{$tarea['provincia'] }}</option>
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
        <option value="">{{$tarea['operario'] }}</option>
        <option value="1">Juan Fernandez</option>
        <option value="2">José María Gil</option>
        <option value="3">David López</option>
    </select><br><br>

    <label for="fecharealizacion">Fecha de realización:</label><br>
    <input type="date" id="fecharealizacion" name="fecharealizacion" value="{{$tarea['fecharealizacion'] }}"><br><br>
    <label for="poblacion">Anotaciones Iniciales:</label><br>
    <input type="text" id="anotacionesantes" name="anotacionesantes" value="{{$tarea['anotacionesantes'] }}"><br><br>

    <input id="submit" type="submit" value="Modificar">
</form>

@endsection