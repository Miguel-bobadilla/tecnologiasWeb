
    <?php
    
    if (isset($_GET['numero'])) {
        
        $numero = $_GET['numero'];
        if (is_numeric($numero)) { 
            if ($numero % 5 == 0 && $numero % 7 == 0) {
                echo "<p>$numero es un múltiplo de 5 y 7.</p>";
            } else {
                echo "<p>$numero no es un múltiplo de 5 y 7.</p>";
            }
        } else {
            echo "<p>El valor ingresado no es un número válido.</p>";
        }
    } else {
        echo "<p>No se ha proporcionado un número en la URL.</p>";
    }
    ?> 



    <?php
    
    function generarImpar() {
        return rand(1, 100) * 2 - 1;
    }

    
    function generarPar() {
        return rand(1, 100) * 2;
    }

    
    $matriz = array();
    $iteraciones = 0;
    $numerosGenerados = 0;

    
    while (true) {
        $numero1 = generarImpar();
        $numero2 = generarPar();
        $numero3 = generarImpar();
        
       
        if ($numero1 % 2 == 1 && $numero2 % 2 == 0 && $numero3 % 2 == 1) {
           
            $matriz[] = array($numero1, $numero2, $numero3);
            $iteraciones++;
            $numerosGenerados += 3;
            
           
            if ($iteraciones >= 4) {
                break;
            }
        }
    }

    
    echo "<p>Matriz: </p>";
    echo "<table border='1'>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $numero) {
            echo "<td>$numero</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    
    echo "<p>Número de iteraciones: $iteraciones</p>";
    echo "<p>Cantidad de números generados: $numerosGenerados</p>";
    ?>



    <?php

$nDado = isset($_GET['numero']) ? intval($_GET['numero']) : 0;

if ($nDado <= 0) {
    echo "Por favor, proporcione un número válido como parámetro 'numero' en la URL.";
    exit;
}

$nEncontrado = null;

while ($nEncontrado === null) {
    $nAleatorio = rand(1, 1000);

    if ($nAleatorio % $nDado === 0) {
        $nEncontrado = $nAleatorio;
    }
}

echo "El primer número entero aleatorio múltiplo de {$nDado} es: {$nEncontrado}";
?>



    <?php
$arreglo = array();
for ($i = 97; $i <= 122; $i++) {
    $arreglo[$i] = chr($i);
}
echo "<table border='1'>";
echo "<tr><th>Indice</th><th>Valor</th></tr>";

foreach ($arreglo as $indice => $letra) {
    echo "<tr><td>$indice</td><td>$letra</td></tr>";
}

echo "</table>";
?>

