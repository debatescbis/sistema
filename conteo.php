<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conteo</title>
    <!--<link rel="stylesheet" href="contstilo.css"> --><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
   <div class="container">
   <div class="logos">
      <center><h3>TERCER CERTAMEN DE DEBATES INSTITUCIONAL</h3></center>
      <center><img src="debatelog.png" alt=""></center>
    </div>
    <?php
    echo "<center>Bienvenid@ ".$_REQUEST['nombre_juez']."</center>";
    ?>
    <div class="puntos">
      <div class="tabla-1">
        <form class="text" action="ganador.php" method="post">
      <div class="row">
        <div class="col">
        <?php
            echo $_REQUEST['nombre_equipo1'];
          ?>
          <!-- primer item -->
          <h4>1. Estructura y claridad</h4>
          <div class="row">
            <div class="col">
            1.1 Orden logico de la exposicion 
            </div>
            <div class="col">
            <select class="" name="orden_logico_exposicion">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
             </select> <br>
            </div>
          </div>
          <!--fin del primer item -->
          <!-- segundo item -->
            <div class="row">
              <div class="col">
                1.2 Coherencia 
              </div>
              <div class="col">
                  <select class="" name="coherencia">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                   <option value="5">5</option>
                </select> <br>
              </div>
            </div>
          <!-- fin de segundo item -->
          <!-- tercer item -->
            <div class="row">
                <div class="col">
                  1.3 exposicion clara
                </div>
                <div class="col">
                    <select class="" name="coordinacion_miembros">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select> <br>
                </div>
            </div>
            
          <!-- fin tercer item -->
          <!-- cuarto item -->
            <div class="row">
              <div class="col">
              1.4 exposicion coordinada entre miembros
              </div>
              <div class="col">
                <select class="" name="coordinacion_miembros">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> <br>
              </div>
            </div>
          <!-- fincuarto item -->
          <!-- quinto item -->
            <div class="row">
              <div class="col">
                <h4>2. Habilidad de expresion</h4>
              </div>
            </div>
            <div class="row">
              <div class="col">
                2.1 oratoria 
              </div>
              <div class="col">
              <select class="" name="oratoria">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> <br>
              </div>
            </div>
          <!-- fin quinto item -->
          <!-- sexto item -->
            <div class="row">
              <div class="col">
                2.2 Diccion 
              </div>
              <div class="col">
                <select class="" name="diccion">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  </select> <br>
              </div>
            </div>
          <!-- find sexto item -->
          <!-- septimo item -->
            <div class="row">
              <div class="col">
                2.3 Expresion corporal 
              </div>
              <div class="col">
                <select class="" name="expresion_corporal">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> <br>
              </div>
             </div>
          <!-- find septimo item -->
          <!-- octavo item -->
            <div class="row">
              <div class="col">
                2.4 Capacidad de captar atencion 
              </div>
              <div class="col">
                <select class="" name="capatar_atencion">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                </div>
              </div>
          <!-- find octavo item -->
          <!-- noveno item -->
              <div class="row">
                <div class="col">
                  <h4>3. Capacidad argumentativa y persuacion</h4>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  3.1 Capacidad de sostener un argumento 
                </div>
                <div class="col">
                  <select class="" name="sostener_argumento">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select> <br>
                </div>
                </div>
          <!-- fin noveno item -->
          <!-- decimo item -->
            <div class="row">
              <div class="col">
                3.2 Capacidad de refutar argumentos contrarios 
              </div>
              <div class="col">
              <select class="" name="refutar_argumentos">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> <br>
              </div>
            </div>
          <!-- fin decimo item -->
          <!-- decimo primer item -->
            <div class="row">
              <div class="col">
                3.3 Tecnica de debate 
              </div>
              <div class="col">
              <select class="" name="tecnica">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> <br>
              </div>
            </div>
          <!-- fin decimo primer item -->

          <!-- decimo segundo item -->
          <div class="row">
            <div class="col">
              <h4>4.Investigacion y  herramientas de analisis</h4>
            </div>
          </div>
          <div class="row">
              <div class="col">
                4.1 Uso efectivo de citas e investigacion 
              </div>
              <div class="col">
              <select class="" name="investigacion">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> <br>
              </div>
            </div>
          <!-- fin decimo segundo item -->

          <!-- decimo tercer item -->
          <div class="row">
              <div class="col">
              4.2 Diversidad de fuentes 
              </div>
              <div class="col">
              <select class="" name="diversidad">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> </br>
              </div>
            </div>
          <!-- fin decimo tercer item -->

          <!-- decimo cuarto item -->
          <div class="row">
              <div class="col">
                  4.3 Relevancia 
              </div>
              <div class="col">
              <select class="" name="relevancia">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> <br>
              </div>
            </div>
          <!-- fin decimo cuarto item -->    
          
          
          
          <input type="submit" name="" value="Calificar">
        </form>
        <input type="text">
      </div>
        <div class="col"><!-- segunda tabla alineada a la derecha -->
        <div class="row">
        <div class="col">
        <?php
            echo $_REQUEST['nombre_equipo1'];
          ?>
          <!-- primer item -->
          <h4>1. Estructura y claridad</h4>
          <div class="row">
            <div class="col">
            1.1 Orden logico de la exposicion 
            </div>
            <div class="col">
            <select class="" name="orden_logico_exposicion">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
             </select> <br>
            </div>
          </div>
          <!--fin del primer item -->
          <!-- segundo item -->
            <div class="row">
              <div class="col">
                1.2 Coherencia 
              </div>
              <div class="col">
                  <select class="" name="coherencia">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                   <option value="5">5</option>
                </select> <br>
              </div>
            </div>
          <!-- fin de segundo item -->
          <!-- tercer item -->
            <div class="row">
                <div class="col">
                  1.3 exposicion clara
                </div>
                <div class="col">
                    <select class="" name="coordinacion_miembros">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select> <br>
                </div>
            </div>
            
          <!-- fin tercer item -->
          <!-- cuarto item -->
            <div class="row">
              <div class="col">
              1.4 exposicion coordinada entre miembros
              </div>
              <div class="col">
                <select class="" name="coordinacion_miembros">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> <br>
              </div>
            </div>
          <!-- fincuarto item -->
          <!-- quinto item -->
            <div class="row">
              <div class="col">
                <h4>2. Habilidad de expresion</h4>
              </div>
            </div>
            <div class="row">
              <div class="col">
                2.1 oratoria 
              </div>
              <div class="col">
              <select class="" name="oratoria">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> <br>
              </div>
            </div>
          <!-- fin quinto item -->
          <!-- sexto item -->
            <div class="row">
              <div class="col">
                2.2 Diccion 
              </div>
              <div class="col">
                <select class="" name="diccion">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  </select> <br>
              </div>
            </div>
          <!-- find sexto item -->
          <!-- septimo item -->
            <div class="row">
              <div class="col">
                2.3 Expresion corporal 
              </div>
              <div class="col">
                <select class="" name="expresion_corporal">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> <br>
              </div>
             </div>
          <!-- find septimo item -->
          <!-- octavo item -->
            <div class="row">
              <div class="col">
                2.4 Capacidad de captar atencion 
              </div>
              <div class="col">
                <select class="" name="capatar_atencion">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                </div>
              </div>
          <!-- find octavo item -->
          <!-- noveno item -->
              <div class="row">
                <div class="col">
                  <h4>3. Capacidad argumentativa y persuacion</h4>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  3.1 Capacidad de sostener un argumento 
                </div>
                <div class="col">
                  <select class="" name="sostener_argumento">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select> <br>
                </div>
                </div>
          <!-- fin noveno item -->
          <!-- decimo item -->
            <div class="row">
              <div class="col">
                3.2 Capacidad de refutar argumentos contrarios 
              </div>
              <div class="col">
              <select class="" name="refutar_argumentos">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> <br>
              </div>
            </div>
          <!-- fin decimo item -->
          <!-- decimo primer item -->
            <div class="row">
              <div class="col">
                3.3 Tecnica de debate 
              </div>
              <div class="col">
              <select class="" name="tecnica">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> <br>
              </div>
            </div>
          <!-- fin decimo primer item -->

          <!-- decimo segundo item -->
          <div class="row">
            <div class="col">
              <h4>4.Investigacion y  herramientas de analisis</h4>
            </div>
          </div>
          <div class="row">
              <div class="col">
                4.1 Uso efectivo de citas e investigacion 
              </div>
              <div class="col">
              <select class="" name="investigacion">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> <br>
              </div>
            </div>
          <!-- fin decimo segundo item -->

          <!-- decimo tercer item -->
          <div class="row">
              <div class="col">
              4.2 Diversidad de fuentes 
              </div>
              <div class="col">
              <select class="" name="diversidad">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> </br>
              </div>
            </div>
          <!-- fin decimo tercer item -->

          <!-- decimo cuarto item -->
          <div class="row">
              <div class="col">
                  4.3 Relevancia 
              </div>
              <div class="col">
              <select class="" name="relevancia">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select> <br>
              </div>
            </div>
          <!-- fin decimo cuarto item -->  
        </div><!-- aquit termina el primer col -->
        
      </div>
      <input type="submit" name="" value="Calificar">
        </form>
        <input type="text">
    <?php
    //echo $_REQUEST['hora'];
    ?>
   </div>
    <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  </body>
</html>
