<?php
    include("conexion.php");
    $usuario= $_REQUEST ['usuario'];

    $query= "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $resultado= $cone-> query($query);
    while($row= $resultado-> fetch_assoc()){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name='viewport'content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="\tu_futuro\IMAGENES\logoo.png">
    <link rel='stylesheet' type='text/css' media='screen' href='inicio.css'>
    
</head>
<body>
<header>
        <div class="container">
        <a id="logo" href="\tu_futuro\HTML\inicio.html">
            <span class="site-name "> Tu Futuro</span>
            <span class="site-desc">Encontremos algo mejor</span>
        </a>
        
           <nav>
            <ul>
                <li>TEST</li>
                <li><a href="#">Contactanos </a></li>
            </ul>
        </nav><!-- / nav -->
        </div>
    </header>
   <section id="conten">
    <table>
    <thead>
		<tr>
			<th colspan="6">DATOS PERSONALES</a></th>
		</tr>
		<tr>
			<th>NOMBRE</th>
			<th>APELLIDO PATERNO</th>
			<th>APELLIDO MATERNO</th>
            <th>SEXO</th>
            <th>CORREO</th>
            <th>TELEFONO</th>
		</tr>
	</thead>
    <tbody>
        <tr>
    <td><?php echo $row['nombre'];?></td>
    <td><?php echo $row['apellido_p'];?></td>
    <td><?php echo $row['apellido_m'];?></td>
    <td><?php echo $row['sexo'];?></td>
    <td><?php echo $row['correo'];?></td>
    <td><?php echo $row['telefono'];?></td>
    </tr>
    </tbody>
    </table>

    <?php
    include("conexion.php");
    $usuario1= $_REQUEST ['usuario1'];

    $query= "SELECT * FROM respuestas WHERE usuario1='$usuario1'";
    $resultado1= $cone-> query($query);
    while($row= $resultado1-> fetch_assoc()){
    ?>
    <table>
        <thead>
            <tr>
                <th colspan="1">Resultado de preguntas</th>
            </tr>
            </thead>
            <tbody>
            <li>id respuestas<?php echo $row['id_res'];?></li>
            <li>1.- <?php echo $row['p1'];?></li>
            <li>2.- <?php echo $row['p2'];?></li>
            <li>3.- <?php echo $row['p3'];?></li>
            <li>4.- <?php echo $row['p4'];?></li>
            <li>5.- <?php echo $row['p5'];?></li>
            <li>6.- <?php echo $row['p6'];?></li>
            <li>7.- <?php echo $row['p7'];?></li>
            <li>8.- <?php echo $row['p8'];?></li>
            <li>9.- <?php echo $row['p9'];?></li>
            <li>10.- <?php echo $row['p10'];?></li>
            <li>11.- <?php echo $row['p11'];?></li>
            <li>12.- <?php echo $row['p12'];?></li>
            <li>13.- <?php echo $row['p13'];?></li>
            <li>14.- <?php echo $row['p14'];?></li>
            <li>15.- <?php echo $row['p15'];?></li>
            <li>16.- <?php echo $row['p16'];?></li>
            <li>17.- <?php echo $row['p17'];?></li>
            <li>18.- <?php echo $row['p18'];?></li>
            <li>19.- <?php echo $row['p19'];?></li>
            <li>20.- <?php echo $row['p20'];?></li>
            <li>21.- <?php echo $row['p21'];?></li>
            <li>22.- <?php echo $row['p22'];?></li>
            <li>23.- <?php echo $row['p23'];?></li>
            <li>24.- <?php echo $row['p24'];?></li>
            <li>25.- <?php echo $row['p25'];?></li>
            <li>26.- <?php echo $row['p26'];?></li>
            <li>27.- <?php echo $row['p27'];?></li>
            <li>28.- <?php echo $row['p28'];?></li>
            <li>29.- <?php echo $row['p29'];?></li>
            <li>30.- <?php echo $row['p30'];?></li>
            <li>31.- <?php echo $row['p31'];?></li>
            <li>32.- <?php echo $row['p32'];?></li>
            <li>33.- <?php echo $row['p33'];?></li>
            <li>34.- <?php echo $row['p34'];?></li>
            <li>35.- <?php echo $row['p35'];?></li>
            <li>36.- <?php echo $row['p36'];?></li>
            <li>37.- <?php echo $row['p37'];?></li>
            <li>38.- <?php echo $row['p38'];?></li>
            <li>39.- <?php echo $row['p39'];?></li>
            <li>40.- <?php echo $row['p40'];?></li>
            <li>41.- <?php echo $row['p41'];?></li>
            <li>42.- <?php echo $row['p42'];?></li>
            <li>43.- <?php echo $row['p43'];?></li>
            <li>44.- <?php echo $row['p44'];?></li>
            <li>45.- <?php echo $row['p45'];?></li>
            <li>46.- <?php echo $row['p46'];?></li>
            <li>47.- <?php echo $row['p47'];?></li>
            <li>48.- <?php echo $row['p48'];?></li>
            <li>49.- <?php echo $row['p49'];?></li>
            <li>50.- <?php echo $row['p50'];?></li>
            <li>51.- <?php echo $row['p51'];?></li>
            <li>52.- <?php echo $row['p52'];?></li>
            <li>53.- <?php echo $row['p53'];?></li>
            <li>54.- <?php echo $row['p54'];?></li>
            <li>55.- <?php echo $row['p55'];?></li>
            <li>56.- <?php echo $row['p56'];?></li>
            <li>57.- <?php echo $row['p57'];?></li>
            <li>58.- <?php echo $row['p58'];?></li>
            <li>59.- <?php echo $row['p59'];?></li>
            <li>60.- <?php echo $row['p60'];?></li>
            <li>61.- <?php echo $row['p61'];?></li>
            <li>62.- <?php echo $row['p62'];?></li>
            <li>63.- <?php echo $row['p63'];?></li>
            <li>64.- <?php echo $row['p64'];?></li>
            <li>65.- <?php echo $row['p65'];?></li>
            <li>66.- <?php echo $row['p66'];?></li>
            <li>67.- <?php echo $row['p67'];?></li>
            <li>68.- <?php echo $row['p68'];?></li>
            <li>69.- <?php echo $row['p69'];?></li>
            <li>70.- <?php echo $row['p70'];?></li>
            <li>71.- <?php echo $row['p71'];?></li>
            <li>72.- <?php echo $row['p72'];?></li>
            <li>73.- <?php echo $row['p73'];?></li>
            <li>74.- <?php echo $row['p74'];?></li>
            <li>75.- <?php echo $row['p75'];?></li>
            <li>76.- <?php echo $row['p76'];?></li>
            <li>77.- <?php echo $row['p77'];?></li>
            <li>78.- <?php echo $row['p78'];?></li>
            <li>79.- <?php echo $row['p79'];?></li>
            <li>80.- <?php echo $row['p80'];?></li>
            </tbody>
            <?php
    }
    ?>
    </table>

   <a href="resultados1.php">descargar</a>

    </section>

</body>
</html> 

    <?php
    }
    ?>
