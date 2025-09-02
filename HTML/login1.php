<?php
include("conexion.php");


$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

$query = mysqli_query($cone,"SELECT * FROM usuarios WHERE usuario='$usuario' and contra='$contra' ");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
  header("Location: principal.php");
}
else  ($nr == 0 );
{
  echo"nop no se pudo";
}

?>