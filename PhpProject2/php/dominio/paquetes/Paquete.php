<?php

/*
  Clase de paquete
 * Fecha:24/03/2016
 * Autor:Allan Moya
 */

//Incluimos la clase de conexion a la base de datos
include_once ('ConexionBD.php');

class Paquete {
    
    //Atributos de Paquete
    private $id;
    private $lugar;
    private $clima;
    private $tipoCamino;
    private $precio;
    private $tiempo;
    private $descripción;
    private $imagen;
    
    //Variable de conexion
    private $con;
    
    public function __construct() {
        $this->con=new ConexionBD();
    }
    
    public function set($atributo,$contenido){
        $this->$atributo=$contenido;
    }
    
    public function get($atributo){
        return $this->$atributo;
    }
}
