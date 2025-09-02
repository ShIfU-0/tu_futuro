<?php
include("conexion.php");
$id_usuarios= $_REQUEST['id_usuarios'];

$query= "DELETE FROM usuarios WHERE id_usuarios= '$id_usuarios'";
$resultado= $cone-> query($query);
if ($resultado) {
	header("Location: admin.php");
}
else{
	echo "no se elimino";
}

