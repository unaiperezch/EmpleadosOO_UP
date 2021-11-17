<?php

namespace empresaUnai;

abstract class Empleado
{
        //Atributos
        private $nombre;
        private $apellidos;
        private $numeroSeguridadSocial;

        /**
         * Constructor para la clase empleado
         */
        public function __construct($nombre, $apellido, $numSocial)
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
        public function mostrar()
        {
                return "Emplead@: " . $this->nombre . " " . $this->apellidos . " con Nº Social " . $this->numeroSeguridadSocial;
        }

        /**
         * Método abstracto que devuelve los ingresos
         */
        abstract function ingresos();
}

class EmpleadoPlantilla extends Empleado
{

        private $sueldo;
        private $dietas;

        public function __construct($nombre, $apellidos, $numSoc, $sueldo, $dietas)
        {
                parent::__construct($nombre, $apellidos, $numSoc);
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
        public function ingresos()
        {
                return $this->sueldo + $this->dietas;
        }

        /**
         * @return Cadena con información
         */
        public function mostrar()
        {
                return parent::mostrar() . ", ingresa " . $this->ingresos() . "€. ";
        }
}

class EmpleadoPorComision extends Empleado
{
        private $horas;
        private $tarifa;
        private $base;
        public function __construct($nombre, $apellido, $numSoc, $horas, $tarifa, $base)
        {
                parent::__construct($nombre, $apellido, $numSoc);
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
        public function ingresos()
        {
                return ($this->base + $this->tarifa) * $this->horas;
        }

        /**
         * @return Información del empleado
         */
        public function mostrar()
        {
                return parent::mostrar() . ", ingresa " . $this->ingresos() . "€. ";
        }
}

class PruebaPolimorf
{
        /**
         * @return Los ingresos del empleado que introduzcas
         */
        public static function calcIngresos($e)
        {
                return $e->ingresos();
        }
}

class Empresa
{
        private $empresa;

        /**
         * Constructor de la clase empresa
         */
        public function __construct()
        {
                $this->empresa = array();
        }

        /**
         * Añade un empleado
         */
        public function añadirEmpleado($e)
        {
                array_push($this->empresa, $e);
        }

        /**
         * @return Lista de empleados
         */
        public function listarEmpleados()
        {
                $resul = "";
                foreach ($this->empresa as $key => $value) {
                        $resul .= "<p>" . $value->mostrar() . "</p>";
                }
                return $resul;
        }

        /**
         * @return Dinero entre todos
         */
        public function ingresosTotales()
        {
                $resul = 0;
                foreach ($this->empresa as $key => $value) {
                        $resul += $value->ingresos();
                }
                return $resul;
        }
}
