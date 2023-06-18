<html>

<head>
    <title>Formulario</title>
</head>

<body>
    <?php
      if (!empty($_POST)) {
          $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
          $email= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
          $privacidad= filter_input(INPUT_POST, 'privacidad', FILTER_SANITIZE_STRING);

          if(!$email){ // $edad == false
            echo "Formato del email incorrecto<br>";
          }
          echo $nombre;
          echo '<br>';
          echo "El email es: $email";
          echo '<br>';
          if ($privacidad!='1'){
            echo"No has aceptado la politica de privacidad";
          }else{
            echo"Has aceptado la politica de privacidad";
          }
      } else {
          echo "Datos incorrectamentos";
      }
    ?>

    <h1>
        Hola:

    </h1>
</body>
