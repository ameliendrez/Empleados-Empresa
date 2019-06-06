<?php
    require_once __DIR__ . '\autoload.php';

    // Creo el controlador de la compania
    $companyController = new CompanyController();

    // Obtengo el nombre de la compania
    echo "<h1>" . $companyController->getCompany()->getName() ."</h1>";

    // Contador de ids generados
    $idCount =  1;

    // Tipo de empleado
    $developer = TypeEmployee::DEVELOPER;
    $design = TypeEmployee::DESIGNER;

    // Tipo de lenguaje
    $php = TypeLanguage::PHP;
    $net = TypeLanguage::NET;
    $phy = TypeLanguage::PHYTON;

    // Tipo de diseño
    $web = TypeDesign::WEB;
    $grap = TypeDesign::GRAPHIC;

    // Agrego un empleado y aumento el contador
    $companyController->addEmployee($idCount, "Agustín", "Meliendrez", 27, $developer, $php);
    $idCount++;

    // Muestro que solo existe un empleado
    echo "<h2>Lista de empleados</h2>";
    $lista = $companyController->getListEmployeed();
    printList($lista);

    // Agrego un segundo empleado y aumento el contador
    $companyController->addEmployee($idCount, "Roberto", "Rodriguez", 40, $design, $web);
    $idCount++;

    // Muestro que hay dos empleados
    echo "<h2>Lista de empleados luego de agregar un empleado</h2>";
    $lista = $companyController->getListEmployeed();
    printList($lista);

    // Obtengo un empleado por el id (1) e imprimo los datos
    $idBusqueda = 1;
    echo "<h2>Obtener un empleado por id</h2>";
    $employee = $companyController->getEmployeeById($idBusqueda);
    if($employee != null){
        $p = "<p> El empleado fue buscado con el id " .$employee->getId() .". ";
        $p .= "El empleado se llama " . $employee->getFullName() . ", ";
        $p .= "y tiene " . $employee->getAge(). " años."; 
        $p .= "</p>";
        echo $p;
    } else {
        echo "No se han encontrado resultados para el id " . $idBusqueda;
    }

    // Obtengo el promedio de edades de los empleados
    $avg = $companyController->getAvgAgeEmployee();
    echo "El promedio de edades de los empleados es de " . $avg . " años";



    function printList($employeeList)
    {
        $listado = "<ul>";
        foreach ($employeeList as $employee) {
          $listado .= "<li>" . $employee->getFullName(). "</li>";
        }
        $listado .= "</ul>";
        echo $listado;
    }
?>

