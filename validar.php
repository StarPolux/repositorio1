<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['contraseña'];


$consulta =  "SELECT*  FROM Personal where usuario ='$USUARIO' and password ='$PASSWORD'";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:felizcumpleaños.html");

}else{
    include("index.html");
    ?> 
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
     <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
