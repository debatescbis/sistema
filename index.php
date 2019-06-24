<?php 
   $conexion=mysqli_connect("localhost","root","JESUCRISTO12","Sistema_puntuaciones") or
   die("Problemas con la conexión");

    mysqli_query($conexion,"insert into Jueces(nombre_juez) values 
                      ('$_REQUEST[nombre_juez]')")
      or die("Problemas en el select".mysqli_error($conexion));

    mysqli_close($conexion);
    ?>