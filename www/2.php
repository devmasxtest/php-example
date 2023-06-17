<?php
    session_start();
    include("./funcionesArrays.php");
?>
<html>

<head>
    <title>Formulario</title>
</head>

<body>
    <h1>
    <?php

    $list=crearArray();
    mostrarArray($list);
    echo mayorDuracion($list);
    ?>
    </h1>
</body>

</html>
