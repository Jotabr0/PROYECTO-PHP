<?php

//include "../blade/blade.php";

include __DIR__ . '/../blade/blade.php';
require(__DIR__."/../models/paginacionTareas.php");

// Vamos a usar el patron Singleton para obtener el objeto de Blade
$blade = TemplateBlade::GetInstance();



echo $blade->render('listaTareas',[
    'tareas' => $tareas,
    'total_paginas'=>$total_paginas,
    'paginaactual'=>$pagina

]);
