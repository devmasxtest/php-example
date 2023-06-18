<html>
<head>
    <title>Formulario</title>
</head>

<body>
<?php
if (!empty($_POST)) {
  $val = filter_input(INPUT_POST, "canal", FILTER_SANITIZE_STRING);
  $_COOKIE["canal"] = $val;
} else {
  echo "Datos incorrectamentos";
}

$canal = $_COOKIE["canal"];
echo "Estas en el canal $canal";
?>


<a href="form.php"><button>Volver</button></a>
</html>
