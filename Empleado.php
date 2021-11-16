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

    Class EmpleadoPlantilla extends Empleado{
        
        private $sueldo;
        private $dietas;

        Public function __construct($nombre,$apellidos,$numSoc,$sueldo,$dietas)
        {
            parent::__construct($nombre,$apellidos,$numSoc);
            $this->sueldo = $sueldo;
            $this->dietas = $dietas;
        }

        /**
         * Get the value of sueldo
         */ 
        public function getSueldo()
        {
                return $this->sueldo;
        }

        /**
         * Set the value of sueldo
         *
         * @return  self
         */ 
        public function setSueldo($sueldo)
        {
                $this->sueldo = $sueldo;

                return $this;
        }

        /**
         * Get the value of dietas
         */ 
        public function getDietas()
        {
                return $this->dietas;
        }

        /**
         * Set the value of dietas
         *
         * @return  self
         */ 
        public function setDietas($dietas)
        {
                $this->dietas = $dietas;

                return $this;
        }

        /**
         * @return Devuelve los ingresos mensuales
         */
        public function ingresos(){
            return $this->sueldo + $this->dietas;
        }

        /**
         * @return Cadena con información
        */
        Public function mostrar(){
            return parent::mostrarEmpleado() . ", ingresa " . $this->ingresos() . "€. ";
        }
    
    }
?>