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
    }
    ?>

    <h1>
        Hola:
        <?= $_SESSION[$FIELD_NAME] ?>
    </h1>

    <form action="saludos.php" method="POST">
        <select name="idioma">
            <option value="español">español</option>
            <option value="ingles">ingles</option>
            <option value="frances">frances</option>
        </select>
        <input type="submit" value="Enviar saludo">
    </form>
</body>

</html>
