<?php
session_start();
include("./funcionesArrays.php");
?>
<html>

<head>
  <title>Formulario</title>
</head>

<body>
  <?php
  if (!isset($_SESSION["numeroVisitas"])) {
    $_SESSION["numeroVisitas"] = 0;
  } else {
    $_SESSION["numeroVisitas"] = $_SESSION["numeroVisitas"] + 1;
  }
  ?>
  <h1>Numer de visitas:
    <?= $_SESSION["numeroVisitas"] ?>
  </h1>
</body>

</html>
