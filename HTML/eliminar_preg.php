<?php
include("conexion.php");
$id_preg= $_REQUEST['id_preg'];

$query= "DELETE FROM preguntas WHERE id_preg= '$id_preg'";
$resultado= $cone-> query($query);
if ($resultado) {
	header("Location: admin_preg.php");
}
else{
	echo "no se elimino";
}