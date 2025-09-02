<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINCIPAL</title>
    <meta name='viewport'content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="\tu_futuro\IMAGENES\logoo.png">
    <link rel='stylesheet' type='text/css' media='screen' href='inicio.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='pginicio.css'>
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
    <section id="int"> 
        <h3>Aqui tienes tu examen sobre tu interes y orientacion para tu eleccion  vocacional</h3>
        <h4>Instrucciones</h4>
        <h4>1. Lee atentamente cada pregunta</h4>
        <h4>2. Marca cada una con tus intereses</h4>
        <h4>3. No existen respuestas correctas responde a tus criterios y con confianza</h4>
    </section>
    <section id="conten">
    <form action="guardar_dts.php" method="post">
    <p>Ingresa tu usuario <input type="text" require name="usuario1"></p>
    <p>Ingresa tu edad <input type="text" require name="edad"></p>

    <h4>PREGUNTA 1</h4>
        <h4>Diseñar programas de computación y explorar nuevas aplicaciones tecnologicas para el uso de internet
        <input type="radio" name="p1" value="1">Nada
        <input type="radio" name="p1" value="2">Poco
        <input type="radio" name="p1" value="3">Regular
        <input type="radio" name="p1" value="4">Mucho

        <h4>PREGUNTA 2</h4>
        <h4>Criar, cuidar y tratar animales domesticados y de canpo</h4>
        <input type="radio" name="p2" value="1">Nada
        <input type="radio" name="p2" value="2">Poco
        <input type="radio" name="p2" value="3">Regular
        <input type="radio" name="p2" value="4">Mucho

        <h4>PREGUNTA 3</h4>
        <h4>Investigar sobre areas verdes, medio ambiente y cambios climaticos</h4>
        <input type="radio" name="p3" value="1">Nada
        <input type="radio" name="p3" value="2">Poco
        <input type="radio" name="p3" value="3">Regular
        <input type="radio" name="p3" value="4">Mucho

        <h4>PREGUNTA 4</h4>
        <h4>Ilustrar, dibujar y animar digitalmente</h4>
        <input type="radio" name="p4" value="1">Nada
        <input type="radio" name="p4" value="2">Poco
        <input type="radio" name="p4" value="3">Regular
        <input type="radio" name="p4" value="4">Mucho

        <h4>PREGUNTA 5</h4>
        <h4>Seleccionar, capacitar y motivar al personal de una organizacion o empresa</h4>
        <input type="radio" name="p5" value="1">Nada
        <input type="radio" name="p5" value="2">Poco
        <input type="radio" name="p5" value="3">Regular
        <input type="radio" name="p5" value="4">Mucho

        <h4>PREGUNTA 6</h4>
        <h4>Realizar excavaciones para descubrir restos del pasado</h4>
        <input type="radio" name="p6" value="1">Nada
        <input type="radio" name="p6" value="2">Poco
        <input type="radio" name="p6" value="3">Regular
        <input type="radio" name="p6" value="4">Mucho

        <h4>PREGUNTA 7</h4>
        <h4>Resolver problemas de calculo para construir un puente</h4>
        <input type="radio" name="p7" value="1">Nada
        <input type="radio" name="p7" value="2">Poco
        <input type="radio" name="p7" value="3">Regular
        <input type="radio" name="p7" value="4">Mucho

        <h4>PREGUNTA 8</h4>
        <h4>Diseñar cursos para enseñar a la gente temas sobre salud e higiene</h4>
        <input type="radio" name="p8" value="1">Nada
        <input type="radio" name="p8" value="2">Poco
        <input type="radio" name="p8" value="3">Regular
        <input type="radio" name="p8" value="4">Mucho

        <h4>PREGUNTA 9</h4>
        <h4>Tocar un instrumento y componer musica</h4>
        <input type="radio" name="p9" value="1">Nada
        <input type="radio" name="p9" value="2">Poco
        <input type="radio" name="p9" value="3">Regular
        <input type="radio" name="p9" value="4">Mucho

        <h4>PREGUNTA 10</h4>
        <h4>Planificar cuales son las metas de una organización publica o privada a mediano y largo plazo</h4>
        <input type="radio" name="p10" value="1">Nada
        <input type="radio" name="p10" value="2">Poco
        <input type="radio" name="p10" value="3">Regular
        <input type="radio" name="p10" value="4">Mucho

        <h4>PREGUNTA 11</h4>
        <h4>Diseñar y planificar la produccion masiva de articulos como muebles, autos, equipos de oficina, empaques y embaces para alimento y otros</h4>
        <input type="radio" name="p11" value="1">Nada
        <input type="radio" name="p11" value="2">Poco
        <input type="radio" name="p11" value="3">Regular
        <input type="radio" name="p11" value="4">Mucho

        <h4>PREGUNTA 12</h4>
        <h4>Diseñar logotipos y portadas de una revista</h4>
        <input type="radio" name="p12" value="1">Nada
        <input type="radio" name="p12" value="2">Poco
        <input type="radio" name="p12" value="3">Regular
        <input type="radio" name="p12" value="4">Mucho

        <h4>PREGUNTA 13</h4>
        <h4>Organizar eventos y atender a sus asistentes</h4>
        <input type="radio" name="p13" value="1">Nada
        <input type="radio" name="p13" value="2">Poco
        <input type="radio" name="p13" value="3">Regular
        <input type="radio" name="p13" value="4">Mucho

        <h4>PREGUNTA 14</h4>
        <h4>Atender la salud de personas enfermas</h4>
        <input type="radio" name="p14" value="1">Nada
        <input type="radio" name="p14" value="2">Poco
        <input type="radio" name="p14" value="3">Regular
        <input type="radio" name="p14" value="4">Mucho

        <h4>PREGUNTA 15</h4>
        <h4>Controlar ingresos y egresos de fondo y presentar el balance final de una institucion</h4>
        <input type="radio" name="p15" value="1">Nada
        <input type="radio" name="p15" value="2">Poco
        <input type="radio" name="p15" value="3">Regular
        <input type="radio" name="p15" value="4">Mucho

        <h4>PREGUNTA 16</h4>
        <h4>Hacer experimentos con plantas(frutas,arboles,flores)</h4>
        <input type="radio" name="p16" value="1">Nada
        <input type="radio" name="p16" value="2">Poco
        <input type="radio" name="p16" value="3">Regular
        <input type="radio" name="p16" value="4">Mucho

        <h4>PREGUNTA 17</h4>
        <h4>Consevir planos para vivienda </h4>
        <input type="radio" name="p17" value="1">Nada
        <input type="radio" name="p17" value="2">Poco
        <input type="radio" name="p17" value="3">Regular
        <input type="radio" name="p17" value="4">Mucho

        <h4>PREGUNTA 18<h4>
        <h4>Investigar y probar nuevos productos farmaseuticos<h4>
        <input type="radio" name="p18" value="1">Nada
        <input type="radio" name="p18" value="2">Poco
        <input type="radio" name="p18" value="3">Regular
        <input type="radio" name="p18" value="4">Mucho

        <h4>PREGUNTA 19</h4>
        <h4>Hacer propuestas y formular estrategias para aprovechar las relaciones economicas entre dos paises</h4>
        <input type="radio" name="p19" value="1">Nada
        <input type="radio" name="p19" value="2">Poco
        <input type="radio" name="p19" value="3">Regular
        <input type="radio" name="p19" value="4">Mucho

        <h4> PREGUNTA 20 </h4>
        <h4>Pintar, hacer esculturas,ilustrar libros de arte, etc</h4>
        <input type="radio" name="p20" value="1">Nada
        <input type="radio" name="p20" value="2">Nada
        <input type="radio" name="p20" value="3">Regular
        <input type="radio" name="p20" value="4">Mucho

        <h4>PREGUNTA 21</h4>
        <h4>ELABORAR CAMPAÑAS PARA INTRODUCIR UN NUEVO PRODUCTO AL MERCADO</h4>
        <input type="radio" name="p21" value="1">Nada
        <input type="radio" name="p21" value="2">Poco
        <input type="radio" name="p21" value="3">Regular
        <input type="radio" name="p21" value="4">Mucho

        <h4>PREGUNTA 22</h4>
        <h4>EXAMINAR Y TRATAR LOD PROBLEMAS VISUALES </h4>
        <input type="radio" name="p22" value="1">Nada
        <input type="radio" name="p22" value="2">Poco
        <input type="radio" name="p22" value="3">Regular
        <input type="radio" name="p22" value="4">Mucho

        <h4>PREGUNTA 23</h4>
        <h4>DEFENDER A CLIENTES INDIVIDUALES O EMPRESAS EN JUICIOS DE DIFERENTE NATURALEZA</h4>
        <input type="radio" name="p23" value="1">Nada
        <input type="radio" name="p23" value="2">Poco
        <input type="radio" name="p23" value="3">Regular
        <input type="radio" name="p23" value="4">Mucho

        <h4>PREGUNTA 24</h4>
        <h4>DIESEÑAR MAQUINAS QUE PUEDAN SIMULAR ACTIVIDADES HUMANAS </h4>
        <input type="radio" name="p24" value="1">Nada
        <input type="radio" name="p24" value="2">Poco
        <input type="radio" name="p24" value="3">Regular
        <input type="radio" name="p24" value="4">Mucho

        <h4>PREGUNTA 25</h4>
        <h4> INVESTIGAR LAS CAUSAS Y EFECTOS DE LOS TRASTORNOS EMOCIONALES </h4>
        <input type="radio" name="p25" value="1">Nada
        <input type="radio" name="p25" value="2">Poco
        <input type="radio" name="p25" value="3">Regular
        <input type="radio" name="p25" value="4">Mucho

        <h4>PREGUNTA 26</h4>
        <h4>SUPERVISAR LAS VENTAS DE UN CENTRO COMERCIAL</h4>
        <input type="radio" name="p26" value="1">Nada
        <input type="radio" name="p26" value="2">Poco
        <input type="radio" name="p26" value="3">Regular
        <input type="radio" name="p26" value="4">Mucho

        <h4>PREGUNTA 27</h4>
        <h4>ATENDER Y REALIZAR EJERCISIOS A PERSONAS QUE TIENE LIMITACIONES FISICAS ,PROBLEMAS DE LENGUAJE ,ETC</h4>
        <input type="radio" name="p27" value="1">Nada
        <input type="radio" name="p27" value="2">Poco
        <input type="radio" name="p27" value="3">Regular
        <input type="radio" name="p27" value="4">Mucho

        <h4>PREGUNTA 28</h4>
        <h4>PREPARARSE PARA SER MODELO PROFESIONAL </h4>
        <input type="radio" name="p28" value="1">Nada
        <input type="radio" name="p28" value="2">Poco
        <input type="radio" name="p28" value="3">Regular
        <input type="radio" name="p28" value="4">Mucho

        <h4>PREGUNTA 29</h4>
        <h4>ACONSEJAR A LAS PERSONAS SOBRE PLANES DE AHORRO E INVERSIONES </h4>
        <input type="radio" name="p29" value="1">Nada
        <input type="radio" name="p29" value="2">Poco
        <input type="radio" name="p29" value="3">Regular
        <input type="radio" name="p29" value="4">Mucho

        <h4>PREGUNTA 30</h4>
        <h4>ELABORAR MAPAS, PLANOS E IMAGENES PARA EL ESTUDIO Y ANALISIS DE DATOS GEOGRAFICOS </h4>
        <input type="radio" name="p30" value="1">Nada
        <input type="radio" name="p30" value="2">Poco
        <input type="radio" name="p30" value="3">Regular
        <input type="radio" name="p30" value="4">Mucho

        <h4>PREGUNTA 31</h4>
        <h4>DISEÑAR JUEGOS INTERACTIVOS ELECTRONICOS PARA COMPUTADORA </h4>
        <input type="radio" name="p31" value="1">Nada
        <input type="radio" name="p31" value="2">Poco
        <input type="radio" name="p31" value="3">Regular
        <input type="radio" name="p31" value="4">Mucho

        <h4>PREGUNTA 32</h4>
        <h4>REALIZAR EL CONTROLDE CALIDAD DE LOS ALIMENTOS </h4>
        <input type="radio" name="p32" value="1">Nada
        <input type="radio" name="p32" value="2">Poco
        <input type="radio" name="p32" value="3">Regular
        <input type="radio" name="p32" value="4">Mucho

        <h4>PREGUNTA 33</h4>
        <h4>TENER UN NEGOCIO PROPIO DE TIPO COMERCIAL </h4>
        <input type="radio" name="p33" value="1">Nada
        <input type="radio" name="p33" value="2">Poco
        <input type="radio" name="p33" value="3">Regular
        <input type="radio" name="p33" value="4">Mucho

        <h4>PREGUNTA 34</h4>
        <h4>ESCCRIBIR ARTICULOS PERIODISTICOS, CUENTOS, NOVELAS Y OTROS </h4>
        <input type="radio" name="p34" value="1">Nada
        <input type="radio" name="p34" value="2">Poco
        <input type="radio" name="p34" value="3">Regular
        <input type="radio" name="p34" value="4">Mucho

        <h4>PREGUNTA 35</h4>
        <h4> REDACTAR GUIONES Y LIBRETOS PARA UN PROGRAMA DE TELEVICION </h4>
        <input type="radio" name="p35" value="1">Nada
        <input type="radio" name="p35" value="2">Poco
        <input type="radio" name="p35" value="3">Regular
        <input type="radio" name="p35" value="4">Mucho

        <h4>PREGUNTA 36</h4>
        <h4>ORGANIZAR UN PLAN DE DISTRIBUCION Y VENTA DE UN GRAN ALMACEN </h4>
        <input type="radio" name="p36" value="1">Nada
        <input type="radio" name="p36" value="2">Poco
        <input type="radio" name="p36" value="3">Regular
        <input type="radio" name="p36" value="4">Mucho

        <h4>PREGUNTA 37</h4>
        <h4>ESTUDIAR LA DIVERSIDAD CULTURAL EN EL AMBITO RURAL Y URBANO  </h4>
        <input type="radio" name="p37" value="1">Nada
        <input type="radio" name="p37" value="2">Poco
        <input type="radio" name="p37" value="3">Regular
        <input type="radio" name="p37" value="4">Mucho

        <h4>PREGUNTA 38</h4>
        <h4>GESTIONAR Y EVALUAR CONVENIOS INTERNACIONALES DE COOPERACION PARA EL DESARROLLO SOCIAL</h4>
        <input type="radio" name="p38" value="1">Nada
        <input type="radio" name="p38" value="2">Poco
        <input type="radio" name="p38" value="3">Regular
        <input type="radio" name="p38" value="4">Mucho

        <h4>PREGUNTA 39</h4>
        <h4>CREAR CAMPAÑAS PUBLICITARIAS </h4>
        <input type="radio" name="p39" value="1">Nada
        <input type="radio" name="p39" value="2">Poco
        <input type="radio" name="p39" value="3">Regular
        <input type="radio" name="p39" value="4">Mucho

        <h4>PREGUNTA 40</h4>
        <h4>Tabajar investigando la reproduccion de peces, camarones y otros animales marinos</h4>
        <input type="radio" name="p40" value="1">Nada
        <input type="radio" name="p40" value="2">Poco
        <input type="radio" name="p40" value="3">Regular
        <input type="radio" name="p40" value="4">Mucho

        <h4>PREGUNTA 41</h4>
        <h4>Dedicsarse a fabricar productos alimenticios de consumo masivo</h4>
        <input type="radio" name="p41" value="1">Nada
        <input type="radio" name="p41" value="2">Poco
        <input type="radio" name="p41" value="3">Regular
        <input type="radio" name="p41" value="4">Mucho

        <h4>PREGUNTA 42</h4>
        <h4>Gestionar y evaluar proyectos de desarrollo en una institucion edcativa</h4>
        <input type="radio" name="p42" value="1">Nada
        <input type="radio" name="p42" value="2">Poco
        <input type="radio" name="p42" value="3">Regular
        <input type="radio" name="p42" value="4">Mucho

        <h4>PREGUNTA 43</h4>
        <h4>Rediseñar y decorar espacios fisicos en viviendas,ofisinas y locales comerciales</h4>
        <input type="radio" name="p43" value="1">Nada
        <input type="radio" name="p43" value="2">Poco
        <input type="radio" name="p43" value="3">Regular
        <input type="radio" name="p43" value="4">Mucho

        <h4>PREGUNTA 44</h4>
        <h4>Admisistrar una empresa de turismo o ajencias de viaje</h4>
        <input type="radio" name="p44" value="1">Nada
        <input type="radio" name="p44" value="2">Poco
        <input type="radio" name="p44" value="3">Regular
        <input type="radio" name="p44" value="4">Mucho

        <h4>PREGUNTA 45</h4>
        <h4>Aplicar metodos alternativos a la medicina tradicional, para atender personascon dolencias de diversa indole </h4>
        <input type="radio" name="p45" value="1">Nada
        <input type="radio" name="p45" value="2">Poco
        <input type="radio" name="p45" value="3">Regular
        <input type="radio" name="p45" value="4">Mucho

        <h4>PREGUNTA 46</h4>
        <h4>Diseñar ropa pera niños, jovenes y adultos</h4>
        <input type="radio" name="p46" value="1">Nada
        <input type="radio" name="p46" value="2">Poco
        <input type="radio" name="p46" value="3">Regular
        <input type="radio" name="p46" value="4">Mucho

        <h4>PREGUNTA 47</h4>
        <h4>Investigar organismos vivos para elaborar vacunas</h4>
        <input type="radio" name="p47" value="1">Nada
        <input type="radio" name="p47" value="2">Poco
        <input type="radio" name="p47" value="3">Regular
        <input type="radio" name="p47" value="4">Mucho

        <h4>PREGUNTA 48</h4>
        <h4>Manejar o hacerle mantenimiento a dispositivos tecnologicos en aviones, barcos, radares etc...</h4>
        <input type="radio" name="p48" value="1">Nada
        <input type="radio" name="p48" value="2">Poco
        <input type="radio" name="p48" value="3">Regular
        <input type="radio" name="p48" value="4">Mucho

        <h4>PREGUNTA 49</h4>
        <h4>Estudiar idiomas extrangeros actuales y antiguos para hacer traduccion</h4>
        <input type="radio" name="p49" value="1">Nada
        <input type="radio" name="p49" value="2">Poco
        <input type="radio" name="p49" value="3">Regular
        <input type="radio" name="p49" value="4">Mucho

        <h4>PREGUNTA 50</h4>
        <h4>Restaurar piesas y obras de arte</h4>
        <input type="radio" name="p50" value="1">Nada
        <input type="radio" name="p50" value="2">Poco
        <input type="radio" name="p50" value="3">Regular
        <input type="radio" name="p50" value="4">Mucho

        <h4>PREGUNTA 51</h4>
        <h4>Revisar y dar mantenimiento, artefactos electricos, electronicos y computadoras</h4>
        <input type="radio" name="p51" value="1">Nada
        <input type="radio" name="p51" value="2">Poco
        <input type="radio" name="p51" value="3">Regular
        <input type="radio" name="p51" value="4">Mucho

        <h4>PREGUNTA 52</h4>
        <h4>Enseñar a niños de 0 a 5 años</h4>
        <input type="radio" name="p52" value="1">Nada
        <input type="radio" name="p52" value="2">Poco
        <input type="radio" name="p52" value="3">Regular
        <input type="radio" name="p52" value="4">Mucho

        <h4>PREGUNTA 53</h4>
        <h4>Investigar y sondear nuevos mercados</h4>
        <input type="radio" name="p53" value="1">Nada
        <input type="radio" name="p53" value="2">Poco
        <input type="radio" name="p53" value="3">Regular
        <input type="radio" name="p53" value="4">Mucho

        <h4>PREGUNTA 54</h4>
        <h4>Atender la salud mental de las personas </h4>
        <input type="radio" name="p54" value="1">Nada
        <input type="radio" name="p54" value="2">Poco
        <input type="radio" name="p54" value="3">Regular
        <input type="radio" name="p54" value="4">Mucho

        <h4>PREGUNTA 55</h4>
        <h4>Tratar a niños , jovenes y adultoscon problemas sicologicos</h4>
        <input type="radio" name="p55" value="1">Nada
        <input type="radio" name="p55" value="2">Poco
        <input type="radio" name="p55" value="3">Regular
        <input type="radio" name="p55" value="4">Mucho

        <h4>PREGUNTA 56</h4>
        <h4>Crear estrategias de promocion y venta de nuevos productos nacionales</h4>
        <input type="radio" name="p56" value="1">Nada
        <input type="radio" name="p56" value="2">Poco
        <input type="radio" name="p56" value="3">Regular
        <input type="radio" name="p56" value="4">Mucho

        <h4>PREGUNTA 57</h4>
        <h4>planificar y recomendar dietas a personas diabeticas o con sobrepeso</h4>
        <input type="radio" name="p57" value="1">Nada
        <input type="radio" name="p57" value="2">Poco
        <input type="radio" name="p57" value="3">Regular
        <input type="radio" name="p57" value="4">Mucho

        <h4>PREGUNTA 58</h4>
        <h4>trabajar en una empresa petrolera en un cargo tecnico como control de promocion</h4>
        <input type="radio" name="p58" value="1">Nada
        <input type="radio" name="p58" value="2">Poco
        <input type="radio" name="p58" value="3">Regular
        <input type="radio" name="p58" value="4">Mucho

        <h4>PREGUNTA 59</h4>
        <h4>Admisitrar una empresa(familiar,privada o publica) </h4>
        <input type="radio" name="p59" value="1">Nada
        <input type="radio" name="p59" value="2">Poco
        <input type="radio" name="p59" value="3">Regular
        <input type="radio" name="p59" value="4">Mucho

        <h4>PREGUNTA 60</h4>
        <h4>tener un taller de reparacion y mantenimiento de carros</h4>
        <input type="radio" name="p60" value="1">Nada
        <input type="radio" name="p60" value="2">Poco
        <input type="radio" name="p60" value="3">Regular
        <input type="radio" name="p60" value="4">Mucho

        <h4>PREGUNTA 61</h4>
        <h4>ejecutar proyectos de extraccion minera y metarulgia</h4>
        <input type="radio" name="p61" value="1">Nada
        <input type="radio" name="p61" value="2">Poco
        <input type="radio" name="p61" value="3">Regular
        <input type="radio" name="p61" value="4">Mucho

        <h4>PREGUNTA 62</h4>
        <h4>asistir a directivos de multinaCIONALES con manejo de varios idiomas</h4>
        <input type="radio" name="p62" value="1">Nada
        <input type="radio" name="p62" value="2">Poco
        <input type="radio" name="p62" value="3">Regular
        <input type="radio" name="p62" value="4">Mucho

        <h4>PREGUNTA 63</h4>
        <h4>diseñar programnas educativos para niños con discapacidad</h4>
        <input type="radio" name="p63" value="1">Nada
        <input type="radio" name="p63" value="2">Poco
        <input type="radio" name="p63" value="3">Regular
        <input type="radio" name="p63" value="4">Mucho

        <h4>PREGUNTA 64</h4>
        <h4>aplicar conocimintos de estadistica en investigaciones en diversas areas (socil, etc)</h4>
        <input type="radio" name="p64" value="1">Nada
        <input type="radio" name="p64" value="2">Poco
        <input type="radio" name="p64" value="3">Regular
        <input type="radio" name="p64" value="4">Mucho

        <h4>PREGUNTA 65</h4>
        <h4>fotografia de hechos historicos lugare significativos rostros paisajes para el area publicitaria artistica, periodistica social</h4>
        <input type="radio" name="p65" value="1">Nada
        <input type="radio" name="p65" value="2">Poco
        <input type="radio" name="p65" value="3">Regular
        <input type="radio" name="p65" value="4">Mucho

        <h4>PREGUNTA 66</h4>
        <h4>trabajar en museos y bioblitecas naciuonales e internacionales </h4>
        <input type="radio" name="p66" value="1">Nada
        <input type="radio" name="p66" value="2">Poco
        <input type="radio" name="p66" value="3">Regular
        <input type="radio" name="p66" value="4">Mucho

        <h4>PREGUNTA 67</h4>
        <h4>ser parte deun gupoi de teatro</h4>
        <input type="radio" name="p67" value="1">Nada
        <input type="radio" name="p67" value="2">Poco
        <input type="radio" name="p67" value="3">Regular
        <input type="radio" name="p67" value="4">Mucho

        <h4>PREGUNTA 68</h4>
        <h4>producir cortometrajes </h4>
        <input type="radio" name="p68" value="1">Nada
        <input type="radio" name="p68" value="2">Poco
        <input type="radio" name="p68" value="3">Regular
        <input type="radio" name="p68" value="4">Mucho

        <h4>PREGUNTA 69</h4>
        <h4>Estudiar la influencia entre las bases marinas el clima sus consecuencias ecologicas</h4>
        <input type="radio" name="p69" value="1">Nada
        <input type="radio" name="p69" value="2">Poco
        <input type="radio" name="p69" value="3">Regular
        <input type="radio" name="p96" value="4">Mucho

        <h4>PREGUNTA 70</h4>
        <h4>Conocer las distintas religiones (su filosofia ) y transmitirlas a la comunidad en general</h4>
        <input type="radio" name="p70" value="1">Nada
        <input type="radio" name="p70" value="2">Poco
        <input type="radio" name="p70" value="3">Regular
        <input type="radio" name="p70" value="4">Mucho

        <h4>PREGUNTA 71</h4>
        <h4>Asesorar a inversionistas en la compra de vienes y a acciones en el mercado nacional e internacional</h4>
        <input type="radio" name="p71" value="1">Nada
        <input type="radio" name="p71" value="2">Poco
        <input type="radio" name="p71" value="3">Regular
        <input type="radio" name="p71" value="4">Mucho

        <h4>PREGUNTA 72</h4>
        <h4>Estudiar grupos etnicos costumbres y tradiciones, cultura y compartir sus vivencias</h4>
        <input type="radio" name="p72" value="1">Nada
        <input type="radio" name="p72" value="2">Poco
        <input type="radio" name="p72" value="3">Regular
        <input type="radio" name="p72" value="4">Mucho

        <h4>PREGUNTA 73</h4>
        <h4>Explorar el espacio sideral, los planetas, caracteristicas y componentes </h4>
        <input type="radio" name="p73" value="1">Nada
        <input type="radio" name="p73" value="2">Poco
        <input type="radio" name="p73" value="3">Regular
        <input type="radio" name="p73" value="4">Mucho

        <h4>PREGUNTA 74</h4>
        <h4>Mejorar la imagen facial y coorporal de las personas aplicanndo diferentes tecnicas</h4>
        <input type="radio" name="p74" value="1">Nada
        <input type="radio" name="p74" value="2">Poco
        <input type="radio" name="p74" value="3">Regular
        <input type="radio" name="p74" value="4">Mucho

        <h4>PREGUNTA 75</h4>
        <h4>Decorar jardines de casa y parques publicos</h4>
        <input type="radio" name="p75" value="1">Nada
        <input type="radio" name="p75" value="2">Poco
        <input type="radio" name="p75" value="3">Regular
        <input type="radio" name="p75" value="4">Mucho

        <h4>PREGUNTA 76</h4>
        <h4>Administrar y renovar menus de comida en un hotel o restaurante</h4>
        <input type="radio" name="p76" value="1">Nada
        <input type="radio" name="p76" value="2">Poco
        <input type="radio" name="p76" value="3">Regular
        <input type="radio" name="p76" value="4">Mucho

        <h4>PREGUNTA 77</h4>
        <h4>Trabajar como presentador de television locutor de radio y television animador y concursos</h4>
        <input type="radio" name="p77" value="1">Nada
        <input type="radio" name="p77" value="2">Poco
        <input type="radio" name="p77" value="3">Regular
        <input type="radio" name="p77" value="4">Mucho

        <h4>PREGUNTA 78</h4>
        <h4>Diseñar y ejecutar programas de turismo</h4>
        <input type="radio" name="p78" value="2">Poco
        <input type="radio" name="p78" value="3">Regular
        <input type="radio" name="p78" value="4">Mucho

        <h4>PREGUNTA 79</h4>
        <h4>Administrar y ordenar (planificar) adecuadamnte el espacio fisico de ciudades, paises etc, utilizando imagenes de satelite, mapas</h4>
        <input type="radio" name="p79" value="1">Nada
        <input type="radio" name="p79" value="2">Poco
        <input type="radio" name="p79" value="3">Regular
        <input type="radio" name="p79" value="4">Mucho

        <h4>PREGUNTA 80</h4>
        <h4>Organizar, planificar y administrar centros educativos</h4>
        <input type="radio" name="p80" value="1">Nada
        <input type="radio" name="p80" value="2">Poco
        <input type="radio" name="p80" value="3">Regular
        <input type="radio" name="p80" value="4">Mucho
        <br><br>
        <h4>Antes de enviar tus respuestas, revisa que todas esten contestadas</h4>
       <center><input id="btn1" type="submit" name="enviar" value="Enviar"><br></center>

        </form>
    

        </section>
        <footer id="footer"> <p>&copy; 2022 Prepara_tu_futuro</p></footer>
</body>
</html>