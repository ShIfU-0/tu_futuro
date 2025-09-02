<?php
include("conexion.php");
$pregunta = $_POST['pregunta'];

$query= "INSERT INTO preguntas VALUES (null,'".$_POST["pregunta"]."')";
$resultado =$cone->query($query);

echo("tu_futuro\HTML\admin.html");
?>