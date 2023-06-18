<?php
    session_start();
?>
<html>

<head>
    <title>Formulario</title>
</head>
<style>
  #game-board {
  display: flex;
  flex-wrap: wrap;
  width: 300px;
  height: 300px;
  margin: 0 auto;
  border: 3px solid black;
}

.cell {
  box-sizing: border-box;
  width: 100px;
  height: 100px;
  border: 1px solid black;
  font-size: 4em;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}

.cell:hover {
  background-color: #ddd;
}

#reset-button {
  display: block;
  margin: 20px auto;
  font-size: 1.5em;
  padding: 10px 20px;
  cursor: pointer;
}

</style>

<body>
    <?php
      if (!empty($_POST)) {
        $tablero_claves = array(["11" => "", "12" => "", "13" => ""]);
        foreach ($tablero_claves as &$valor) {
          $tablero = filter_input(INPUT_POST, 'tablero', FILTER_SANITIZE_STRING);
        };
          $valor = $valor * 2;
      }

        $tablero = filter_input(INPUT_POST, 'tablero', FILTER_SANITIZE_STRING);
        echo "Tablero es: $tablero" ;
    ?>
    <form method="POST">
      <div id="game-board">
        <input class="cell" id="cell-0" name="tablero_11"></input>
        <input class="cell" id="cell-1" name="tablero_12"></input>
        <input class="cell" id="cell-2" name="tablero_13"></input>
        <input class="cell" id="cell-3" name="tablero_21"></input>
        <input class="cell" id="cell-4" name="tablero_22"></input>
        <input class="cell" id="cell-5" name="tablero_23"></input>
        <input class="cell" id="cell-6" name="tablero_31"></input>
        <input class="cell" id="cell-7" name="tablero_32"></input>
        <input class="cell" id="cell-8" name="tablero_33"></input>
      </div>
      <button type="submit" id="reset-button">Reiniciar</button>
    </form>

</body>

</html>
