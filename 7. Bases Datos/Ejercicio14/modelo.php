<?php

    class Bd {

        private $link;

        function __construct(){

            $this->link = new  mysqli('localhost', 'root', '', 'virtualmarket');

            if ($this->link->connect_errno) {
                $mensaje = "Error al conectar con MYSQL ".$link->connect_error;
                require "vistas/mensaje.php";
            } else {        
                $this->link->set_charset('UTF-8');
            }
        }

        function __get($var){
            return $this->$var;
        }
    }


    class Cliente {

        private $dnicliente;
        private $nombre;
        private $direccion;
        private $email;
        private $pwd;

        static function getAll($link){
            $consulta = 'SELECT * FROM clientes';
            return $result = $link->query($consulta);
        }
    }

