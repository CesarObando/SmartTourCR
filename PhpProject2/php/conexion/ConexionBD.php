<?php

/* 
Conexion a la base de datos
 * Fecha 23/03/2016
 * Autor:Allan Moya
 */

class ConexionBD{
    
    
    //Atributos
    private $host;
    private $user;
    private $pass;
    private $bd;
    
    //Métodos
    public function __construct() {
        $this->host="localhost";
        $this->user="root";
        $this->pass="root";
        $this->bd="test";
        
        //Creamos la conexión dentro del constructor
        $con=  mysql($this->host, $this->user, $this->pass);
        //Si logramos la conexion
        if($con){
            mysql_select_db($this->bd,$con);
        }
    }
    
    public function consultaSimple($sql){
       mysql_query($sql);
    }
    
     public function consultaRetorno($sql){
       $consulta=mysql_query($sql);
       return $consulta;
    }
    
}