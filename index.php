<?php
    include "Empleado.php";
    $resultado = "";

    $Emp1 = new Empleado("Unai","Pérez","31-55555555-69");
    $Emp2 = new Empleado("Enrique","Lafraya","31-66666666-69");
    $resultado.= "<h2>Empleado</h2>";
    $resultado .= $Emp1->mostrarEmpleado() . "<br>";
    $resultado .= $Emp2->mostrarEmpleado();

    $EmpPlantilla1 = new EmpleadoPlantilla("Unai","Pérez","31-55555555-69",800,600);
    $EmpPlantilla2 = new EmpleadoPlantilla("Enrique","Lafraya","31-66666666-69",1300,900);
    $resultado.= "<h2>Empleado Plantilla</h2>";
    $resultado .= $EmpPlantilla1->mostrar() . "<br>";
    $resultado .= $EmpPlantilla2->mostrar();

    include "vistas/vista_resultado.php";
?>