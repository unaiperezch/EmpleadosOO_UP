<?php
    include "EmpleadoPlantilla.php";
    $resultado = "";

    $Emp1 = new EmpleadoPlantilla("Unai","Pérez","31-55555555-69",800,600);
    $Emp2 = new EmpleadoPlantilla("Enrique","Lafraya","31-66666666-69",1300,900);
    $resultado .= $Emp1->mostrar() . "<br>";
    $resultado .= $Emp2->mostrar();
    include "vistas/vista_resultado.php";
?>