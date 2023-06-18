<?php
session_start();
include("./funciones.php");
$FIELD_NAME = "usuarioNombre";
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
