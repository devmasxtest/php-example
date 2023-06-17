
## Setup
1. Ensure stop others mysql containers
```
docker rm -f $(docker ps -a -q)
```

2.
```
docker compose build
```

3.

```
docker compose up
```


## Check mysql connection

```
mysql -h 127.0.0.1 -u user -ptest myDb
```


## Check mysql connection

Ypu can edit the index.php file
```
www/index.php
```



### PHP

```php
foreach ($array as $indice=>$valor){
}

$myarray2 = array("clave" => "cadena", 12 => TRUE);
echo $myarray2["clave"];
echo $myarray2[12];
unset($myarray5[5]);

$datos=array("nombre"=>"Juan", "apellido"=>"Péreztorres", "edad"=>37);
foreach($datos as $clave => $valor)
{
echo $clave . ": " . $valor . "<br>";
}

$numeros=array(7,14,2,5,31,0,5);
sort ($numeros);
```


Forms
```php
if( !empty($_POST) )

if( isset($_POST['nombre']) && isset($_POST['edad']) )

empty($_POST['txtNombre'])
```


FILTER_SANITIZE_NUMBER_INT  |  Input type number

```php
<?php
// Saneamiento de cadena con caracteres HTML
var_dump(filter_var('<p class="header">Hola</p>', FILTER_SANITIZE_STRING));
//"Hola"
var_dump(filter_var('<pclass="header">Hola</p>', FILTER_SANITIZE_SPECIAL_CHARS));
var_dump(filter_var('-34.S67', FILTER_SANITIZE_NUMBER_INT));
var_dump(filter_var('pedro/garcia@dom
//"pedrogarcia@dom.com";
.
com',
// -3467
FILTER_SANITIZE_EMAIL));
var_dump(filter_var ("yes", FILTER_VALIDATE_BOOLEAN));// true
var_dump(filter_var (34.6, FILTER_VALIDATE_INT));// false
var_dump(filter_var ("john@dominio.com", FILTER_VALIDATE_EMAIL));
// john@dominio.com


$nombre = filter_input(INPUT_POST, 'edad', FILTER_VALIDATE_INT);
$clave = filter_input(INPUT_GET, 'precio', FILTER_VALIDATE_FLOAT);
$cor
?>
```

```php
"1" == 1 // true
"1" === 1  // false
```


```
<?php
            session_start();
?>
```


Valor por defecto de una session
