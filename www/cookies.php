<?php
include("./funcionesArrays.php");
$COOKIE_NAME = "idioma"
    ?>
<html>

<head>
    <title>Formulario</title>
</head>

<body>
    <?php
    if (!isset($_COOKIE[$COOKIE_NAME])) {
        $_COOKIE[$COOKIE_NAME] = "";
    }
    ?>

    <h1>
        Hola:
        <?= $_COOKIE[$FIELD_NAME] ?>
    </h1>

    <form action="canales.php" method="POST">
        <select name="canal">
            <option value="general">general</option>
            <option value="juegos">juegos</option>
            <option value="chat">chat</option>
        </select>
        <input type="submit" value="Enviar saludo">
    </form>
</body>

</html>
