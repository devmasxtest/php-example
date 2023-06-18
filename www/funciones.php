<?php

// if () {
//
// }

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

