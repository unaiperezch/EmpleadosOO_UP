<?php
    include "./EmpleadoPlantilla.php";

    Class PruebaPolimorf{
        private  EmpleadoPlantilla $e;
        Public static function calcIngresos($e){
            return $e->getSueldo() + $e->getDietas();
        }
    }
?>