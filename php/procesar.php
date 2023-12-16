<?php
    $ruta = '../bootstrap';
    require_once('encabezado.php');
    require_once('funciones.php');
    if (!empty($_GET['deposito']) && !empty($_GET['plazo'])) {
        $depositoInicial = $_GET['deposito'];
        $cantidadDias = $_GET['plazo'];
        switch ($cantidadDias) {
            case 30:
                $tasa = 122;
                break;
            case 45:
                $tasa = 130;
                break;
            case 60:
                $tasa = 142;
                break;
            case 90:
                $tasa = 155;
                break;              
        }
        $totalInteres = calcularIntereses($depositoInicial, $cantidadDias, $tasa);
        $montoTotal = $depositoInicial + $totalInteres;
        
        echo '<section class="text-center text-white">';
        echo '<h3>Depósito Inicial :' . number_format($depositoInicial, 2, ',','.') . '</h3>';
        echo '<h3>Plazo :' . $cantidadDias . 'dias </h3>';
        echo '<h3>Intereses Generados :' . number_format($totalInteres, 2, ',','.') . '</h3>';
        echo '<h2 class="bg-primary" >Monto Total :' . number_format($montoTotal, 2, ',','.') . '</h2>'; 
        echo '</section>';
    }else{
        echo '<h3 class="text-center text-primary"> Ingrese un monto a depositar y un plazo </h3>';
    }

?>

<?php
    require_once('pie.php');
?>