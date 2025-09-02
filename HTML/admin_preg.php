<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="\tu_futuro\IMAGENES\logoo.png">
	<link rel='stylesheet' type='text/css' media='screen' href='\tu_futuro\HTML\inicio.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMINPREG</title>
</head>
<body>
<header>
        <div class="container">
        <a id="logo" href="\tu_futuro\HTML\admin.html">
            <span class="site-name "> REGRESAR</span>
            <span class="site-desc">a la pagina administrador</span>
        </a>
           <nav>
            <ul>
                <li><a href="#">Contactanos </a></li>
            </ul>
        </nav><!-- / nav -->
        </div>
    </header>

<table border="2">
	<thead>
		<tr>
			<th colspan="4"><a href="\tu_futuro\HTML\pregunta.html">NUEVA PREGUNTA</a></th>
		</tr>
		<tr>
			<th>ID</th>
            <th>PREGUNTA</th>
			<th colspan="2">Operaciones</th>
		</tr>
	</thead>
<tbody>	
<?php
include("conexion.php");
$query= "SELECT * FROM preguntas";
$resultado= $cone-> query($query);
while ($row= $resultado-> fetch_assoc()) {
	?>
	<tr>
	    <td><?php echo $row['id_preg'];?></td>	
	    <td><?php echo $row['pregunta'];?></td>
	    <th><a href="\tu_futuro\HTML\modificar_preg.php?id_preg=<?php echo $row['id_preg'];?>">Modificar</a></th>
	    <th><a href="\tu_futuro\HTML\eliminar_preg.php?id_preg=<?php echo $row['id_preg'];?>">Eliminar</a></th>
	</tr>
	<?php
}
    ?>
</tbody>
</table>	
</body>
</html>