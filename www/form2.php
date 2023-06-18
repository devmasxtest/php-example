<?php
session_start();
include("./funciones.php");
$FIELD_NAME = "email";
?>
<html>

<head>
    <title>Formulario</title>
</head>

<body>
    <?php
      inicioSession($FIELD_NAME, "");
      $nombre = validarCampoString($FIELD_NAME);
      $_SESSION[$FIELD_NAME] = $nombre;
    ?>

    <form method="POST">
        <label for="nombre"> ¿Cual es tu nombre?: </label>
        <input type="text" name="<?= $FIELD_NAME ?>">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
