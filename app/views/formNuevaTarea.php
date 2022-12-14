<div class="formulario">
    <form method="POST">
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

        <!-- <?php if ($provincia == "01") {
                    echo "selected='selected'";
                } ?> -->

        <select name="provincia">
            <option selected disabled>Seleccionar Provincia</option>
            <!-- <option value="">Seleccionar Provincia</option> -->

            <?php foreach (getProvincias() as $prov) : ?>
                <option value="<?php echo $prov['codigo']; ?>" <?php if ($provincia == $prov['codigo']) {  echo "selected='selected'"; } ?>><?php echo $prov['provincia']; ?></option>                                                   
            <?php endforeach; ?>

            
        </select> <span class="errores"><?php echo isset($errores['provincia']) ? $errores['provincia'] : null ?> </span><br><br>

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
            <option>Jose Maria Gil</option>
            <option>David Lopez</option>
        </select><br><br>

        <label for="fecharealizacion">Fecha de realización:</label><br>
        <input type="date" id="fecharealizacion" name="fecharealizacion" value="<?php echo $fecharealizacion ?>"><span class="errores"><?php echo isset($errores['fecharealizacion']) ? $errores['fecharealizacion'] : null ?> </span><br><br>
        <label for="poblacion">Anotaciones Iniciales:</label><br>
        <input type="text" id="anotacionesantes" name="anotacionesantes"><br><br>

        <input id="submit" type="submit" value="Insertar">
    </form>
</div>