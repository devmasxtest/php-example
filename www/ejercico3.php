<?php
session_start();
include("./funcionesArrays.php");
$SESSION_NAME = "idioma"
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
            $val = filter_input(INPUT_POST, "idioma", FILTER_SANITIZE_STRING);
            $_SESSION[$SESSION_NAME] = $val;
            if ($_SESSION[$SESSION_NAME]=='español'){
                echo"Buenos dias";
            }
            if ($_SESSION[$SESSION_NAME]=='ingles'){
                echo"Good morning";
            }
            if ($_SESSION[$SESSION_NAME]=='frances'){
                echo"Bonjour";
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
        <select name="idioma">
            <option value="español">español</option>
            <option value="ingles">ingles</option>
            <option value="frances">frances</option>
        </select>
        <input type="submit" value="Enviar saludo">
    </form>
</body>

</html>
