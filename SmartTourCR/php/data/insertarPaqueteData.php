<?php

include '../conexion/';


$lugar = $_POST['lugar'];
$clima = $_POST['clima'];
$tipoCamino = $_POST['tipoCamino'];
$precio = $_POST['precio'];
$tiempo = $_POST['tiempo'];
$descripcion = $_POST ['descripcion'];
$rutaImagen = '../imagenes/imagen.jpg';

global $conexion;


$sentencia = $conexion->prepare("INSERT INTO paquete (lugar,clima,tipoCamino,precio,tiempo,descripcion,rutaImagen) VALUES (?,?,?,?,?,?,?)");
$sentencia->bindParam(1, $lugar); 
$sentencia->bindParam(2, $clima); 
$sentencia->bindParam(3, $tipoCamino); 
$sentencia->bindParam(4, $precio); 
$sentencia->bindParam(5, $tiempo); 
$sentencia->bindParam(6, $descripcion); 
$sentencia->bindParam(7, $rutaImagen); 

// llamar al procedimiento almacenado
$sentencia->execute();

print "El paquete ha sido registrado con éxito!!!";
?>

        
