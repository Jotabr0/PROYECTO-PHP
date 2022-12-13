<?php

//include "../blade/blade.php";

include __DIR__ . '/../blade/blade.php';
// require(__DIR__."/../models/usuarios_model.php");


// Vamos a usar el patron Singleton para obtener el objeto de Blade
$blade = TemplateBlade::GetInstance();



echo $blade->render('login');