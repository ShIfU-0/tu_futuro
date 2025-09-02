<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="shortcut icon" href="\tu_futuro\IMAGENES\logoo.png">
	<link rel='stylesheet' type='text/css' media='screen' href='\tu_futuro\HTML\inicio.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AGREGAR PREGUNTA</title>
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
    <form action="guardar_pregunta.php" method="post" enctype="multipart/form-data">
    <P>Agregar pregunta:<input type="text" required name="pregunta1"></p>
    </form>
</body>
</html>