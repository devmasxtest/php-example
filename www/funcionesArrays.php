<?php
      function Get_Nombre(){
        return "Alvaro";
    }
    function crearArray(){
      return array(
        array("Director"=>"1", "Pelicula"=>"1", "Duracion"=>"1"),
        array("Director"=>"2", "Pelicula"=>"2", "Duracion"=>"9"),
        array("Director"=>"3", "Pelicula"=>"3", "Duracion"=>"4"),
        array("Director"=>"3", "Pelicula"=>"3", "Duracion"=>"10"),
        array("Director"=>"3", "Pelicula"=>"3", "Duracion"=>"9"),
      );
    }

    function mostrarArray($listadoPeliculas){

      foreach($listadoPeliculas as $pelicula) {
          $nombre = $pelicula["Pelicula"];
          $director = $pelicula["Director"];
          echo "Director:";
          echo $pelicula["Director"];
          echo "Pelicula: $nombre<br>";
      }
    }

    function mayorDuracion($listadoPeliculas){
      $mayor=0;
      foreach($listadoPeliculas as $pelicula) {
        if ($mayor < $pelicula["Duracion"]) {
          $mayor=$pelicula["Duracion"];
        }
      }
      return $mayor;
    }
?>
