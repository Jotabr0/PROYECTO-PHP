<?php

$bd = conexion::getInstance();
$base = $bd->connect();

$tamano_paginas=3;

    if(isset($_GET["pagina"])){
        if($_GET["pagina"]==1){
            header("Location:index.php?controller=tareas&action=listarOperario");
        }else{
            $pagina=$_GET["pagina"];
        }
    }else{
        $pagina=1;
    }

$empezar_desde=($pagina-1)*$tamano_paginas;

$sql_total="SELECT * FROM tareas";

$resultado=$base->prepare($sql_total);

$resultado->execute(array());

$num_filas=$resultado->rowCount();

$total_paginas=ceil($num_filas/$tamano_paginas);