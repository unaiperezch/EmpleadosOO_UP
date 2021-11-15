<?php
    class Empleado{
        //Atributos
        private $nombre;
        private $apellidos;
        private $numeroSeguridadSocial;

        /**
         * Constructor para la clase empleado
         */
        Public function __construct($nombre,$apellido,$numSocial)
        {
            $this->nombre = $nombre;
            $this->apellidos = $apellido;
            $this->numeroSeguridadSocial = $numSocial;
        }
        

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellidos
         */ 
        public function getApellidos()
        {
                return $this->apellidos;
        }

        /**
         * Set the value of apellidos
         *
         * @return  self
         */ 
        public function setApellidos($apellidos)
        {
                $this->apellidos = $apellidos;

                return $this;
        }

        /**
         * Get the value of numeroSeguridadSocial
         */ 
        public function getNumeroSeguridadSocial()
        {
                return $this->numeroSeguridadSocial;
        }

        /**
         * Set the value of numeroSeguridadSocial
         *
         * @return  self
         */ 
        public function setNumeroSeguridadSocial($numeroSeguridadSocial)
        {
                $this->numeroSeguridadSocial = $numeroSeguridadSocial;

                return $this;
        }

        /**
         * Devuelve una cadena con la información del empleado
         * @return cadena de información
         */
        Public function mostrarEmpleado(){
            return "Emplead@: " . $this->nombre . " " . $this->apellidos . " con Nº Social " . $this->numeroSeguridadSocial;
        }
    }
?>