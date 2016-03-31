<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Paquete
 *
 * @author Allan
 */
class Paquete {
    private $lugar;
    private $clima;
    private $tipoCamino;
    private $precio;
    private $tiempo;
    private $descripcion;
    private $rutaImagen;
    
    public function __construct($lugar, $clima, $tipoCamino, $precio, $tiempo, $descripcion, $rutaImagen) {
        $this->lugar = $lugar;
        $this->clima = $clima;
        $this->tipoCamino = $tipoCamino;
        $this->precio = $precio;
        $this->tiempo = $tiempo;
        $this->descripcion = $descripcion;
        $this->rutaImagen = $rutaImagen;
    }
    
    public function getLugar() {
        return $this->lugar;
    }

    public function getClima() {
        return $this->clima;
    }

    public function getTipoCamino() {
        return $this->tipoCamino;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getTiempo() {
        return $this->tiempo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getRutaImagen() {
        return $this->rutaImagen;
    }

    public function setLugar($lugar) {
        $this->lugar = $lugar;
    }

    public function setClima($clima) {
        $this->clima = $clima;
    }

    public function setTipoCamino($tipoCamino) {
        $this->tipoCamino = $tipoCamino;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setTiempo($tiempo) {
        $this->tiempo = $tiempo;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setRutaImagen($rutaImagen) {
        $this->rutaImagen = $rutaImagen;
    }



    
}
