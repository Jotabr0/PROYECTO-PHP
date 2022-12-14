<!-- <div>	
  <div>
    <form method="POST">
      <label for="name">Usuario:
        <input type="text" name="usuario" class="form-control" value="<?php if(isset($_COOKIE['usuario'])) { echo $_COOKIE['usuario']; } ?>" /> 
      </label>
      <br/>
      <label for="password">Contraseña:
        <input type="password" name="password" class="form-control" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>"/>            
      </label>
      <br/>
      <label><input type="checkbox" name="recuerdo" <?php if(isset($_COOKIE['recuerdo'])){echo " checked";} ?> >No cerrar sesión</label>
      <br/>   <br/>        
      <input type="submit" value="Enviar" name="submit" class="boton" />
    </form>
  </div>
</div> -->

<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST">
    <input type="text" name="usuario" placeholder="Usuario" value="<?php if(isset($_COOKIE['usuario'])) { echo $_COOKIE['usuario']; } ?>" /> 
    <input type="password" name="password" placeholder="Contraseña" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>"/>
    <div style="text-align: left;">
    <input style="width: auto;" type="checkbox" name="recuerdo" <?php if(isset($_COOKIE['recuerdo'])){echo " checked";} ?>><label> No cerrar sesión </label> 
    </div>
    <input type="submit" value="Enviar" name="submit" class="boton" />
    </form>
  </div>
</div>