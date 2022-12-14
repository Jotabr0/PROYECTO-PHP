<?php

//include "../blade/blade.php";

include __DIR__ . '/../blade/blade.php';


// Vamos a usar el patron Singleton para obtener el objeto de Blade
$blade = TemplateBlade::GetInstance();



echo $blade->render('listaTareasPendientesOperarios',[
    'tareas' => $tareas

]);