<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conteo</title>
    <link rel="stylesheet" href="contstilo.css">
  </head>
  <body>
    <div class="logos">
      <center><h3>TERCER CERTAMEN DE DEBATES INSTITUCIONAL</h3></center>
      <img src="debatelog.png" alt="">
    </div>
    <?php
    echo "<center>Bienvenid@ ".$_REQUEST['nombre_juez']."</center>";
    ?>
    <div class="puntos">
      <div class="tabla-1">
        <form class="text" action="ganador.php" method="post">
          <?php
            echo $_REQUEST['nombre_equipo1'];
          ?>
          <h4>1. Estructura y claridad</h4>
          1.1 Orden logico de la exposicion <select class="" name="orden_logico_exposicion">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          1.2 Coherencia <select class="" name="coherencia">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          1.3 exposicion clara <select class="" name="exposicion_clara">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          1.4 exposicion coordinada entre miembros <select class="" name="coordinacion_miembros">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          <h4>2. Habilidad de expresion</h4>
          2.1 oratoria <select class="" name="oratoria">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          2.2 Diccion <select class="" name="diccion">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          2.3 Expresion corporal <select class="" name="expresion_corporal">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          2.4 Capacidad de captar atencion <select class="" name="capatar_atencion">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <h4>3. Capacidad argumentativa y persuacion</h4>
          3.1 Capacidad de sostener un argumento <select class="" name="sostener_argumento">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          3.2 Capacidad de refutar argumentos contrarios <select class="" name="refutar_argumentos">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          3.3 Tecnica de debate <select class="" name="tecnica">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          <h4>4.Investigacion y  herramientas de analisis</h4>
          4.1 Uso efectivo de citas e investigacion <select class="" name="investigacion">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          4.2 Diversidad de fuentes <select class="" name="diversidad">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> </br>
          4.3 Relevancia <select class="" name="relevancia">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          <input type="submit" name="" value="Calificar">
        </form>
      </div>
      <div class="tabla-2">
        <form class="text" action="index.html" method="post">
        <?php
            echo $_REQUEST['nombre_equipo2'];
          ?>
          <h4>1. Estructura y claridad</h4>
          1.1 Orden logico de la exposicion <select class="" name="orden_logico_exposicion">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          1.2 Coherencia <select class="" name="coherencia">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          1.3 exposicion clara <select class="" name="exposicion_clara">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          1.4 exposicion coordinada entre miembros <select class="" name="coordinacion_miembros">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          <h4>2. Habilidad de expresion</h4>
          2.1 oratoria <select class="" name="oratoria">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          2.2 Diccion <select class="" name="diccion">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          2.3 Expresion corporal <select class="" name="expresion_corporal">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          2.4 Capacidad de captar atencion <select class="" name="capatar_atencion">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <h4>3. Capacidad argumentativa y persuacion</h4>
          3.1 Capacidad de sostener un argumento <select class="" name="sostener_argumento">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          3.2 Capacidad de refutar argumentos contrarios <select class="" name="refutar_argumentos">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          3.3 Tecnica de debate <select class="" name="tecnica">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          <h4>4.Investigacion y  herramientas de analisis</h4>
          4.1 Uso efectivo de citas e investigacion <select class="" name="investigacion">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
          4.2 Diversidad de fuentes <select class="" name="diversidad">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> </br>
          4.3 Relevancia <select class="" name="relevancia">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select> <br>
      </div>
    </div>
    <?php
    echo $_REQUEST['hora'];
    ?>
  </body>
</html>
