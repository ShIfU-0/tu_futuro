<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="\tu_futuro\IMAGENES\logoo.png">
	<link rel='stylesheet' type='text/css' media='screen' href='\tu_futuro\HTML\inicio.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN</title>
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
			<th colspan="11"><a href="\tu_futuro\HTML\nuevous.html">NUEVO</a></th>
		</tr>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>APELLIDO PATERNO</th>
			<th>APELLIDO MATERNO</th>
            <th>SEXO</th>
            <th>CORREO</th>
            <th>TELEFONO</th>
            <th>USUARIOS</th>
            <th>CONTRASENA</th>
			<th colspan="2">Operaciones</th>
		</tr>
	</thead>
<tbody>	
<?php
include("conexion.php");
$query= "SELECT * FROM usuarios";
$resultado= $cone-> query($query);
while ($row= $resultado-> fetch_assoc()) {
	?>
	<tr>
	    <td><?php echo $row['id_usuarios'];?></td>	
	    <td><?php echo $row['nombre'];?></td>
        <td><?php echo $row['apellido_p'];?></td>	
	    <td><?php echo $row['apellido_m'];?></td>
        <td><?php echo $row['sexo'];?></td>
        <td><?php echo $row['correo'];?></td>
        <td><?php echo $row['telefono'];?></td>
        <td><?php echo $row['usuario'];?></td>
        <td><?php echo $row['contra'];?></td>
	    <th><a href="\tu_futuro\HTML\modificar.php?id_usuarios=<?php echo $row['id_usuarios'];?>">Modificar</a></th>
	    <th><a href="\tu_futuro\HTML\eliminar.php?id_usuarios=<?php echo $row['id_usuarios'];?>">Eliminar</a></th>
	</tr>
	<?php
}
    ?>
</tbody>
</table>	
</body>
</html>