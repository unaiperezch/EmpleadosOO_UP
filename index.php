<?php
    include "Empleado.php";
    $resultado = "";

    $Emp1 = new Empleado("Unai","Pérez","31-55555555-69");
    $Emp2 = new Empleado("Enrique","Lafraya","31-66666666-69");
    $resultado .= $Emp1->mostrarEmpleado() . "<br>";
    $resultado .= $Emp2->mostrarEmpleado();
    include "vistas/vista_resultado.php";
?>