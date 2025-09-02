<?php
include("conexion.php");
  $nombre = $_POST['nombre'];
  $apellido_p =$_POST['apellido_p'];
  $apellido_m =$_POST['apellido_m'];
  $sexo =$_POST['sexo'];
  $correo =$_POST['correo'];
  $telefono =$_POST['telefono'];
  $usuario =$_POST['usuario'];
  $contra =$_POST['contra'];
  $query= "INSERT INTO usuarios(nombre, apellido_p, apellido_m, sexo, correo, telefono, usuario, contra)VALUES('$nombre','$apellido_p','$apellido_m','$sexo','$correo','$telefono','$usuario','$contra')";
  $resultado= $cone->query($query);

if ($resultado) {
    echo"datos guardados";
   header("Location:inicio.html");
}
else{
	echo "datos no guardados";
}  	
?>