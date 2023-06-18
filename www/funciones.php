<?php

// if () {
//
// }

// Recoradar usar el mismo nombre en el formulario y en la obtencion de datos de PHP
// 1.Comprobar session, inicializar session,
// 2.Comprobar obtencion de datos, validar.
// 3.Calcular datos aplicar logica.
// 4. Mostrar resultado.

function comprobarDatosEnviados($name)
{
  if (!empty($_REQUEST)) {
    //Comprobar si se han enviado
    if (isset($_REQUEST[$name])) {
      // **Logica**
       return true;
    }
  } else { //si no se envian
    echo "No se han enviado datos por el formulario";
    return false;
  }
}

function inicioSession($name, $initValue)
{
  if (!isset($_SESSION[$name])) {
    $_SESSION[$name] = $initValue;
  } else {
      // **Logica**
  }
}

function validarCampoString($FIELD_NAME)
{
  if (!empty($_POST)) {
    $field = filter_input(INPUT_POST, $FIELD_NAME, FILTER_SANITIZE_STRING);
    if (empty($field)) {
      echo "Datos incorrectamentos";
      return "";
    } else {
      // **Logica**
      return $field;
    }
  }
}
function incrementarSession($name, $increment)
{
  return $_SESSION[$name] = $_SESSION[$name] + $increment;
}
?>

