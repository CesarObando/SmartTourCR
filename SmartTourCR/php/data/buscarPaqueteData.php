<?php

$lugar=$_POST['lugar'];
//$clima=$_POST['clima'];
//$tipoCamino=$_POST['tipoCamino'];
$precioBase=$_POST['precioBase'];
$precioLimite=$_POST['precioLimite'];
$tiempoBase=$_POST['tiempoBase'];
$tiempoLimite=$_POST['tiempoLimite'];

echo $tiempoBase;

if($precioBase==""){
    $precioBase=0;
}
if($precioLimite==""){
    $precioLimite=999999999;
}
if($tiempoBase==""){
    $tiempoBase="00:00";
}
if($tiempoLimite==""){
    $tiempoLimite="00:00";
}
