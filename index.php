<?php
    $ruta = 'bootstrap';
    require_once('php/encabezado.php');
?>
    <section class="text-white">
        <form action="php/procesar.php" method="get" class="p-3">
            <label for="depIni" class="form-label">Depósito Inicial: </label>
            <input type="number" name="deposito" id="depIni" class="form-control">
            <fieldset>
                <legend>Plazo: </legend>
                <section class="form-check form-switch">
                <input type="radio" name="plazo" id="treintaD" value=30 class="form-check-input">
                <label for="treintaD">30 dias</label>
                </section>
                <section class="form-check form-switch">
                <input type="radio" name="plazo" id="cuacinD" value=45 class="form-check-input">
                <label for="cuacinD">45 dias</label>
                </section>
                <section class="form-check form-switch">
                <input type="radio" name="plazo" id="sesentaD" value=60 class="form-check-input">
                <label for="sesentaD">60 dias</label>
                </section>
                <section class="form-check form-switch">
                <input type="radio" name="plazo" id="noventaD" value=90 class="form-check-input">
                <label for="noventaD">90 dias</label>
                </section>
            </fieldset>
            <section class="text-center">
                <input type="submit" value="Simular" class="btn bg-primary">
            </section>
        </form>
    </section>
<?php
    require_once('php/pie.php');
?>