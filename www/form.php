<?php
session_start();
include("./funcionesArrays.php");
$FIELD_NAME = "usuarioNombre";
$SESSION_NAME = "usuario"
?>
<html>

<head>
    <title>Formulario</title>
</head>

<body>
    <?php
    if (!isset($_SESSION[$SESSION_NAME])) {
        $_SESSION[$SESSION_NAME] = "";
    } else {
        if (!empty($_POST)) {
            $nombre = filter_input(INPUT_POST, $FIELD_NAME, FILTER_SANITIZE_STRING);
            $_SESSION[$SESSION_NAME] = $nombre;
            echo "Hola" . $_SESSION[$SESSION_NAME];
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
        <label for="nombre"> ¿Cual es tu nombre?: </label>
        <input type="text" name="<?= $FIELD_NAME ?>">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
