<?php
    include "Empleado.php";
    $resultado = "";
    $resultado.= "<h2>Empleado</h2><br>";
    /*$Emp1 = new Empleado("Unai","Pérez","31-55555555-69");
    $Emp2 = new Empleado("Enrique","Lafraya","31-66666666-69");
    $resultado.= "<h2>Empleado</h2>";
    $resultado .= $Emp1->mostrarEmpleado() . "<br>";
    $resultado .= $Emp2->mostrarEmpleado();*/

    $EmpPlantilla1 = new EmpleadoPlantilla("Unai","Pérez","31-55555555-69",800,600);
    $EmpPlantilla2 = new EmpleadoPlantilla("Enrique","Lafraya","31-66666666-69",1300,900);
    $resultado.= "<h2>Empleado Plantilla</h2>";
    $resultado .=  "<p>" . $EmpPlantilla1->mostrar() . "</p>";
    $resultado .=  "<p>" . $EmpPlantilla2->mostrar() . "</p>";

    $empComision1 = new EmpleadoPorComision("Iker","Iparraguirre","31-4444444-69",16,16,32);
    $empComision2 = new EmpleadoPorComision("Irune","Arratibel","31-3333333-69",50,16,32);
    $resultado.= "<h2>Empleado por comisión</h2>";
    $resultado .= "<p>" . $empComision1->mostrar() . "</p>";
    $resultado .= "<p>" . $empComision2->mostrar() . "</p>";

    $resultado.= "<h2>Empleado Polimorfismo</h2>";
    $polimorf = new PruebaPolimorf();
    $resultado.= "<p>Los ingresos de " . $EmpPlantilla1->getApellidos() . " son " . $polimorf->calcIngresos($EmpPlantilla1) . "€ </p>";
    $resultado.= "<p>Los ingresos de " . $empComision1->getApellidos() . " son " . $polimorf->calcIngresos($empComision1) . "€ </p>";

    $resultado.= "<h2>Empresa</h2>";
    $empresa = new Empresa();
    $empresa->añadirEmpleado($EmpPlantilla1);
    $empComisionEmpresa = new EmpleadoPorComision("Dani","Jimenez","31-2222222-69",120,32,50);
    $empresa->añadirEmpleado($empComisionEmpresa);
    $resultado .= $empresa->listarEmpleados();
    $resultado.= "<h3>Los ingresos totales son " . $empresa->ingresosTotales() . "€ </h3>";
    

    include "vistas/vista_resultado.php";
?>