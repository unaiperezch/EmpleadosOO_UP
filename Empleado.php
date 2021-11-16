<?php
    Abstract class Empleado{
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

        /**
         * Método abstracto que devuelve los ingresos
         */
        Public abstract function ingresos();
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

    Class EmpleadoPorComision extends Empleado{
        private $horas;
        private $tarifa;
        private $base;
        Public function __construct($nombre,$apellido,$numSoc,$horas,$tarifa,$base)
        {
                parent::__construct($nombre,$apellido,$numSoc);
                $this->horas = $horas;
                $this->tarifa = $tarifa;
                $this->base = $base;
        }

        /**
         * Get the value of horas
         */ 
        public function getHoras()
        {
                return $this->horas;
        }

        /**
         * Set the value of horas
         *
         * @return  self
         */ 
        public function setHoras($horas)
        {
                $this->horas = $horas;

                return $this;
        }

        /**
         * Get the value of tarifa
         */ 
        public function getTarifa()
        {
                return $this->tarifa;
        }

        /**
         * Set the value of tarifa
         *
         * @return  self
         */ 
        public function setTarifa($tarifa)
        {
                $this->tarifa = $tarifa;

                return $this;
        }

        /**
         * Get the value of base
         */ 
        public function getBase()
        {
                return $this->base;
        }

        /**
         * Set the value of base
         *
         * @return  self
         */ 
        public function setBase($base)
        {
                $this->base = $base;

                return $this;
        }

        /**
         * @return Devuelve los ingresos del empleado
         */
        Public function ingresos(){
                return ($this->base+$this->tarifa)*$this->horas;
        }

        /**
         * @return Información del empleado
         */
        Public function mostrar(){
                return parent::mostrarEmpleado() . ", ingresa " . $this->ingresos() . "€. ";
        }
     }

    Class PruebaPolimorf{
        private  EmpleadoPlantilla $e;
        Public static function calcIngresos($e){
            return $e->getSueldo() + $e->getDietas();
        }
    }
