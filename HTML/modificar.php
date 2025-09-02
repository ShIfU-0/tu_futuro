<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MODIFICAR</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="\tu_futuro\IMAGENES\logoo.png">
    <link rel='stylesheet' type='text/css' media='screen' href='inicio.css'>
</head>
<body>
<header>
        <div class="container">
        <a id="logo" href="\tu_futuro\HTML\inicio.html">
            <span class="site-name "> REGRESAR</span>
            <span class="site-desc">a la pagina principal</span>
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
     $id_usuarios= $_REQUEST['id_usuarios'];
     $query= "SELECT * FROM usuarios WHERE id_usuarios='$id_usuarios'";
     $resultado= $cone-> query($query);
     $row= $resultado-> fetch_assoc();
?>
<center><h1> Administrador </h1></center> 
<form action="proceso_modificar.php?id_usuarios=<?php echo $row['id_usuarios'];?>" method="post" enctype="multipart/form-data">
	<p>Nombre: <input type="text" required name="nombre" value="<?php echo $row['nombre'];?>" placeholder="Nombre.."></p>
    <P>Apellido Paterno :<input type="text" required name="apellido_p" value="<?php echo $row['apellido_p']; ?>" placeholder="Apellido P..."></p>
    <P>Apellido Matetrno:<input type="text" required name="apellido_m" value="<?php echo $row['apellido_m'];?>" placeholder="Apellido M..."></p>   
    <p>Sexo: <input type="text" required name="sexo" value="<?php echo $row['sexo'];?>" placeholder="sexo.."></p> 
    <p>Correo: <input type="email"required name="correo" value="<?php echo $row['correo'];?>" placeholder="ejemplo@email.com"></p>   
    <p>Telefono: <input type="text" name="telefono" value="<?php echo $row['telefono'];?>" placeholder="5537373737"></p>
    <p>Nombre de usuario: <input type="text" value="<?php echo $row['usuario'];?>" required name="usuario" placeholder="Usuario"></p>
    <p>Contrasena <input type="password" required name="contra" value="<?php echo $row['contra'];?>" placeholder="Contrasena"></p>
	<input type="submit" name="aceptar" value="aceptar">
</form>

</body>
</html>