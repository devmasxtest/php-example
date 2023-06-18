<?php
session_start();
include("./funcionesArrays.php");
$FIELD_NAME = "respuesta";
?>
<html>

<head>
    <title>Formulario</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['intentos'])) {
        $_SESSION['intentos'] = 0;
    } else {
        if (!empty($_POST)) {
            $respuesta = filter_input(INPUT_POST, $FIELD_NAME, FILTER_SANITIZE_STRING);
            if ($respuesta == 4) {
                echo"Has ganado";
            } else {
                $_SESSION['intentos'] = $_SESSION['intentos']+1;
                if ($_SESSION['intentos']>=3) {
                    echo"Has perdido";
                    $_SESSION['intentos']=0;
                }
            }
        } else {
            echo "Datos incorrectamentos";
        }
    }
    ?>

    <h1>
        Hola:
        <?= $_SESSION[$FIELD_NAME] ?>
    </h1>

    <form method="POST">
        <label for="nombre"> Pregunta 1: </label>
        <input type="text" name="<?= $FIELD_NAME ?>">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
