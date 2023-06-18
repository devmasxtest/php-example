<?php
    session_start();
?>
!DOCTYPE html>
<html>

<head>
    <title>Formulario</title>
</head>

<body>
    <?php
    if (isset($_SESSION["saldo"])) {
        // Comprobar si se ha enviado el formulario por el método POST
        if (!empty($_POST)) {
            print_r($_POST);
            $cantidad = filter_input(INPUT_POST, 'cantidad', FILTER_VALIDATE_FLOAT);
            $tipoMovimiento = filter_input(INPUT_POST, 'tipoMovimiento', FILTER_VALIDATE_INT);
            echo "La cantidad es $cantidad";
            echo "EL tipoMovimiento es $tipoMovimiento";
            $saldo = $_SESSION['saldo'];
            if ($cantidad < 0 || empty($tipoMovimiento)) {
                echo "Datos incorrectamentos";
            } else {
                if ($tipoMovimiento<1){
                    $_SESSION['saldo'] = $cantidad + $_SESSION['saldo'];
                }
                else{
                    $_SESSION['saldo'] = $_SESSION['saldo'] - $cantidad ;
                }


                echo "Datos corretos $cantidad";
                $saldo2 = $_SESSION['saldo'];
                echo "Saldo anteror $saldo2";
            };

            $saldo = $_SESSION['saldo'];
            echo "\n<br> Saldo $saldo";
        } else {
            echo "No se ha enviado formulario";
        }
    } else {
        $_SESSION["saldo"] = 0;
        $saldo = $_SESSION["saldo"];
    }
    ?>
    <h1>Ejemplo con formularios</h1>
    <hr>
    <form method="POST">
        <label for="nombre"> Cantidad: </label>
        <input type="number" name="cantidad" value="1">
        <br>

        <label for="nombre"> Ingreso: </label>
        <input type="radio" name="tipoMovimiento" value="1">
        <label for="nombre"> gasto: </label>
        <input type="radio" name="tipoMovimiento" value="2">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
