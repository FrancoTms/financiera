<?php
    function calcularIntereses($depositoInicial, $cantidadDias, $tasa)
    {
        $intereses = $depositoInicial * (($tasa / 100)*$cantidadDias/365);
        return $intereses;
    }
?>