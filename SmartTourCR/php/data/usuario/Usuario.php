<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Allan
 */
class Usuario {
    
    private $correo;
    private $nombre;
    private $apellido;
    private $telefono;
    private $provincia;
    private $password;
    private $intereses;
    
    
    public function __construct($correo, $nombre, $apellido, $telefono, $provincia, $password, $intereses) {
        $this->correo = $correo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->provincia = $provincia;
        $this->password = $password;
        $this->intereses = $intereses;
    }
    
    public function getCorreo() {
        return $this->correo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getIntereses() {
        return $this->intereses;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setIntereses($intereses) {
        $this->intereses = $intereses;
    }



    
}
