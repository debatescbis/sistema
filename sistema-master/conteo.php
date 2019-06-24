<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conteo</title>
    <!--<link rel="stylesheet" href="contstilo.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
  <div id="app">
  <div class="container">
   <div class="logos">
      <center><h3>TERCER CERTAMEN DE DEBATES INSTITUCIONAL</h3></center>
      <center><img src="debatelog.png" alt="" widht="300px" height="300px"></center>
    </div>
    <?php
    include 'index.php';
    echo "<center>Bienvenid@ ".$_REQUEST['nombre_juez']."</center>";
    ?>
    <div class="puntos">
      <div class="tabla-1">
        <form class="text" action="" method="post">
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
            <select class="" name="1.1equipo1" v-model="item1equipo1" v-on:click="sumar">       
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
                  <select class="" name="1.2equipo1"  v-model="item2equipo1" v-on:click="sumar">
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
                    <select class="" name="1.3equipo1" v-model="item3equipo1" v-on:click="sumar">
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
                <select class="" name="1.4equipo1" v-model="item4equipo1" v-on:click="sumar">
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
              <select class="" name="2.1equipo1" v-model="item5equipo1" v-on:click="sumar">
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
                <select class="" name="2.2equipo1" v-model="item6equipo1" v-on:click="sumar">
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
                <select class="" name="2.3equipo1" v-model="item7equipo1" v-on:click="sumar">
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
                <select class="" name="2.4equipo1" v-model="item8equipo1" v-on:click="sumar">
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
                  <select class="" name="3.1equipo1" v-model="item9equipo1" v-on:click="sumar">
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
              <select class="" name="3.2equipo1" v-model="item10equipo1" v-on:click="sumar">
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
              <select class="" name="3.3equipo1" v-model="item11equipo1" v-on:click="sumar">
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
              <select class="" name="4.1equipo1" v-model="item12equipo1" v-on:click="sumar">
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
              <select class="" name="4.2equipo1" v-model="item13equipo1" v-on:click="sumar">
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
              <select class="" name="4.3equipo1" v-model="item14equipo1" v-on:click="sumar">
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
          
          
          
          <button v-on:click="sumar">Calificar</button>
        </form>
        <input type="text" v-model="contadorequipo1" ><!-- counterone here -->
      </div>
        <div class="col"><!-- segunda tabla alineada a la derecha -->
        <div class="row">
        <div class="col">
        <?php
            echo $_REQUEST['nombre_equipo2'];
          ?>
          <!-- primer item -->
          <h4>1. Estructura y claridad</h4>
          <div class="row">
            <div class="col">
            1.1 Orden logico de la exposicion 
            </div>
            <div class="col">
            <select class="" name="1.1equipo2" v-model="item1equipo2" v-on:click="sumarequipo2">
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
                  <select class="" name="1.2equipo2" v-model="item2equipo2" v-on:click="sumarequipo2">
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
                    <select class="" name="1.3equipo2" v-model="item3equipo2" v-on:click="sumarequipo2"> 
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
                <select class="" name="1.4equipo2" v-model="item4equipo2" v-on:click="sumarequipo2">
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
              <select class="" name="2.1equipo2" v-model="item5equipo2" v-on:click="sumarequipo2">
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
                <select class="" name="2.2equipo2" v-model="item6equipo2" v-on:click="sumarequipo2">
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
                <select class="" name="2.3equipo2" v-model="item7equipo2" v-on:click="sumarequipo2">
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
                <select class="" name="2.4equipo2" v-model="item8equipo2" v-on:click="sumarequipo2">
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
                  <select class="" name="3.1equipo2" v-model="item9equipo2" v-on:click="sumarequipo2">
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
              <select class="" name="3.2equipo2" v-model="item10equipo2" v-on:click="sumarequipo2">
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
              <select class="" name="3.3equipo2" v-model="item11equipo2" v-on:click="sumarequipo2">
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
              <select class="" name="4.1equipo2" v-model="item12equipo2" v-on:click="sumarequipo2">
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
              <select class="" name="4.2equipo2" v-model="item13equipo2" v-on:click="sumarequipo2">
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
              <select class="" name="4.3equipo2" v-model="item14equipo2" v-on:click="sumarequipo2">
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
        <input type="text" v-model="contadorequipo2"><!-- countertwo here -->
    <?php
    //echo $_REQUEST['hora'];
    ?>
    
   </div>
  </div>
 
    <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="conteo.js"></script>
  </body>
</html>
