<?php

// if () {
//
// }

function inicioSession($name, $initValue)
{
  if (!isset($_SESSION[$name])) {
    $_SESSION[$name] = $initValue;
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
      return $field;
    }
  }
}
function incrementSession($name, $increment) {
  return $_SESSION[$name] = $_SESSION[$name] + $increment;
}
?>

