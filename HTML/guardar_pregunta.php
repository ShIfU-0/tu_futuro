<?php
include("conexion.php");
  $pregunta = $_POST['pregunta'];
  $resultado =$_POST['resultado'];
  $query= "INSERT INTO usuarios(pregunta, resultado)VALUES('$pregunta','$resultado')";
  $resultado= $cone->query($query);

if ($resultado) {
    echo"datos guardados";
   header("Location:inicio.html");
}
else{
	echo "datos no guardados";
}  	
?>