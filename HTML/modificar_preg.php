<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MODIFICAR PREGUNTA</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="\tu_futuro\IMAGENES\logoo.png">
    <link rel='stylesheet' type='text/css' media='screen' href='inicio.css'>
</head>
<body>
<header>
        <div class="container">
        <a id="logo" href="\tu_futuro\HTML\admin_preg.php">
            <span class="site-name "> REGRESAR</span>
            <span class="site-desc">a la pagina de administrador</span>
        </a>
           <nav>
            <ul>
                <li><a href="#">Contactanos </a></li>
            </ul>
        </nav><!-- / nav -->
        </div>
    </header>
    
<?php
     include("conexion.php");
     $id_preg= $_REQUEST['id_preg'];
     $query= "SELECT * FROM preguntas WHERE id_preg='$id_preg'";
     $resultado= $cone-> query($query);
     $row= $resultado-> fetch_assoc();
?>
<center><h1> Administrador </h1></center>
<form action="proceso_modificar_preg.php?id_preg=<?php echo $row['id_preg'];?>" method="post" enctype="multipart/form-data">
	<p>Pregunta: <input type="text" required name="pregunta" value="<?php echo $row['pregunta'];?>" placeholder="Nueva pregunta.."></p>
	<input type="submit" name="aceptar" value="aceptar">
</form>

</body>
</html>