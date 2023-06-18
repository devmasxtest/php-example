<?php
session_start();
?>
<html>

<head>
    <title>Formulario</title>
</head>

<body>
   <h1>
        Hola:
        <?= $_SESSION[$FIELD_NAME] ?>
    </h1>

    <form action="mostrarDatos.php" method="POST">
        <label for="nombre"> ¿Cual es tu nombre?: </label>
        <input type="text" name="nombre">
        <br>
        <label for="apellido"> ¿Cual es tu apellido?: </label>
        <input type="text" name='apellido'>
        <br>
        <label for="fechaNacimiento"> ¿Cual es tu fechaNacimiento ?: </label>
        <input type="date" name='fechaNacimiento'>
        <br>
        <label for="email"> ¿Cual es tu email?: </label>
        <input type="email" name='email'>
        <br>
        <label for="DNI"> ¿Cual es tu DNI?: </label>
        <input type="text" name='DNI' size="8">
        <br>
        <label for="genero"> ¿Cual es tu genero?: </label>
        <select name="genero">
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>
            <option value="otro">otro</option>
        </select>
        <br>
        <label for="privacidad"> ¿Estas de azuerdo con nuestra politica?: </label>
        <input type="checkbox" value= '1' name='privacidad'>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
