<div>	
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
      <label><input type="checkbox" name="recuerdo" <?php if(isset($_COOKIE['recuerdo'])){echo " checked";} ?> >Recuérdeme :)</label>
      <br/>     
      
      <br/>     

      <?php
        if(isset($error)){
           if ($error == "datos") {
               echo '<div class="alert alert-danger" style="margin-top:5px;">' . "Tu usuario o/y tu contraseña no son correctos, inténtelo de nuevo!! :( <br/>" . '</div>';
             }
          elseif ($error == "fuera") {
               echo '<div class="alert alert-danger" style="margin-top:5px;">' . "No puede acceder  directamente en esta página, ha de loguearse!! :O <br/>" . '</div>';          
             }
        }     
      ?>      
      <input type="submit" value="Enviar" name="submit" class="btn btn-success" />
    </form>
  </div>
</div>