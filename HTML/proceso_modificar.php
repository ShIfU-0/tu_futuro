<?php
include("conexion.php");
  $id_usuarios=$_REQUEST['id_usuarios'];
  $nombre=$_POST['nombre'];
  $apellido_p=$_POST['apellido_p'];
  $apellido_m=$_POST['apellido_m'];
  $sexo=$_POST['sexo'];
  $correo=$_POST['correo'];
  $telefono=$_POST['telefono'];
  $usuario=$_POST['usuario'];
  $contra=$_POST['contra'];

  $query= "UPDATE usuarios SET nombre='$nombre', apellido_p='$apellido_p', apellido_m='$apellido_m', sexo='$sexo', correo='$correo', telefono='$telefono', usuario='$usuario', contra='$contra' WHERE id_usuarios='$id_usuarios'";
  $resultado= $cone->query($query);
  if ($resultado) {
  	header("Location: admin.php");
   }
  else{
  	echo "no se modifico";
   
   } 
 ?>