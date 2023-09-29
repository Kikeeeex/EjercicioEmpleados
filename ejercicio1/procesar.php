<!-- Enrique Leon -->
<!-- 30.167.685 -->

<?php
// Inicializamos variables
$totalFemenino = 0;
$totalHombresCasados = 0;
$totalMujeresViudas = 0;
$sumaEdadesMasculino = 0;
$contadorMasculino = 0;

// Llamamos a los datos obtenidos del formulario
$empleados = $_POST['empleados'];

foreach ($empleados as $empleado) {
    // Contamos el total de empleados del sexo femenino
    if ($empleado['sexo'] == 'Femenino') {
        $totalFemenino++;
    }

    // Contamos el total de hombres casados que ganan más de 2500 Bs.
    if ($empleado['sexo'] == 'Masculino' && $empleado['estadoCivil'] == 'Casado(a)' && $empleado['sueldo'] > 2500) {
        $totalHombresCasados++;
    }

    // Contamos el total de mujeres viudas que ganan más de 1000 Bs.
    if ($empleado['sexo'] == 'Femenino' && $empleado['estadoCivil'] == 'Viudo(a)' && $empleado['sueldo'] > 1000) {
        $totalMujeresViudas++;
    }

    // Sumamos las edades del sexo masculino para calcular el promedio
    if ($empleado['sexo'] == 'Masculino') {
        $sumaEdadesMasculino += $empleado['edad'];
        $contadorMasculino++;
    }
}

// Calculamos la edad promedio del sexo masculino
$promedioEdadMasculino = $contadorMasculino > 0 ? $sumaEdadesMasculino / $contadorMasculino : 0;

// Resultados
echo "Total de empleados del sexo femenino: " . $totalFemenino . "<br>";
echo "Total de hombres casados que ganan más de 2500 Bs.: " . $totalHombresCasados . "<br>";
echo "Total de mujeres viudas que ganan más de 1000 Bs.: " . $totalMujeresViudas . "<br>";
echo "Edad promedio del sexo masculino: " . $promedioEdadMasculino;
?>
