<?php

/*
  Clase de paquete
 * Fecha:24/03/2016
 * Autor:Allan Moya
 */

class Paquete {
    
    //Atributos de Paquete
    private $id;
    private $lugar;
    private $clima;
    private $tipoCamino;
    private $precio;
    private $tiempo;
    private $descripción;
    private $rutaImagen;
    
    
    public function __construct($id, $lugar, $clima, $tipoCamino, $precio, $tiempo, $descripción, $rutaImagen) {
        $this->id = $id;
        $this->lugar = $lugar;
        $this->clima = $clima;
        $this->tipoCamino = $tipoCamino;
        $this->precio = $precio;
        $this->tiempo = $tiempo;
        $this->descripción = $descripción;
        $this->rutaImagen = $rutaImagen;
    }

    
    function getId() {
        return $this->id;
    }

    function getLugar() {
        return $this->lugar;
    }

    function getClima() {
        return $this->clima;
    }

    function getTipoCamino() {
        return $this->tipoCamino;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getTiempo() {
        return $this->tiempo;
    }

    function getDescripción() {
        return $this->descripción;
    }

    function getRutaImagen() {
        return $this->rutaImagen;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLugar($lugar) {
        $this->lugar = $lugar;
    }

    function setClima($clima) {
        $this->clima = $clima;
    }

    function setTipoCamino($tipoCamino) {
        $this->tipoCamino = $tipoCamino;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setTiempo($tiempo) {
        $this->tiempo = $tiempo;
    }

    function setDescripción($descripción) {
        $this->descripción = $descripción;
    }

    function setRutaImagen($rutaImagen) {
        $this->rutaImagen = $rutaImagen;
    }


    
   
}
