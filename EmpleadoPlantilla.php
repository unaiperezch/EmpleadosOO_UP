<?php
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
         * @return Cadena con información
        */
        Public function mostrar(){
            return parent::mostrarEmpleado() . ", con sueldo de " . $this->sueldo . "€ y dietas de " . $this->dietas;
        }
    
    }
