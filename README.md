


### PHP

```php
if () {

}

if() {

} else {

}
// for each de array con indice
foreach ($array as $indice=>$valor){
}

// for each de array asociativo
foreach ($array as $item) {
  $item["propiedades"] // valor de la propiedad
}

$datos = array(
  array("nombre"=>"Juan", "apellido"=>"Péreztorres", "edad"=>37),
  array("nombre"=>"Pedro", "apellido"=>"Péreztorres", "edad"=>20),
);
```

### Forms

Recoradar usar el mismo nombre en el formulario y en la obtencion de datos de PHP

1. Comprobar session, inicializar session,
2. Comprobar obtencion de datos, validar.
3. Calcular datos aplicar logica.
4. Mostrar resultado.

```php
    session_start();
    if (!isset($_SESSION["NOMBRE_SESSION"])) {
        $_SESSION[$SESSION_NAME] = "VALOR_INICIAL";
    } else {
        if (!empty($_POST)) {
          $valor = filter_input(INPUT_POST, "NOMBRE_DE_INPUT_HTML", FILTER_SANITIZE_STRING);
          if (!empty($valor)) {
            // LOGICA

            echo "Resultado $valor"
          } else {
            echo "Valor vacio";
          }
        }
    }
```
