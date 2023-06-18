<?php
session_start();
?>
<html>
<head>
    <title>Formulario</title>
</head>

<body>
<?php
if (!empty($_POST)) {
  $val = filter_input(INPUT_POST, "idioma", FILTER_SANITIZE_STRING);
  $_SESSION[$SESSION_NAME] = $val;
  if ($_SESSION[$SESSION_NAME] == 'español') {
    echo "Buenos dias";
  }
  if ($_SESSION[$SESSION_NAME] == 'ingles') {
    echo "Good morning";
  }
  if ($_SESSION[$SESSION_NAME] == 'frances') {
    echo "Bonjour";
  }
} else {
  echo "Datos incorrectamentos";
}
?>
<a href="ejercico3.php"><button>Volver</button></a>
</html>


