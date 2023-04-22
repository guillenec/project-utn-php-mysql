<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<section id="contenedor">
<!-- INICIO CABECERA -->
<?php 
    include('cabecera.php'); 
?>
<!-- FIN CABECERA -->
    
    <section id="contenido" class="noticias">
        
    <h2>Noticias</h2>
        <?php 
        $noticia2 = array(
            array('El modelo matemático que explica el caso “Messi” y desató un debate en las redes','Martín Rossi, vicerrector de la Universidad de San Andrés, explicó por qué no se pueden aplicar las mismas restricciones de tope salarial en los distintos deportes','messi.jpg'),
            array('Video: el frío saludo de Leo Messi con Joan Laporta antes de la despedida de Barcelona','Se conocieron imágenes de la llegada del argentino al auditorio del club; quedó claro que la relación entre el máximo dirigente y el jugador ya no es la misma','mesi2.jpg'),
            array('Mitholz, la tranquila ciudad suiza que enfrenta una bomba de tiempo','En 1947, sufrió la peor explosión no nuclear de la época; ahora, una vieja amenaza puede convertir a esta idílica localidad alpina en un pueblo fantasma','notici3.jpg'),
            array('Javier Milei vivió un momento tenso en el programa de Ernesto Tenembaum','El precandidato a diputado porteño se negó a participar de un programa televisivo y el periodista lo cuestionó en su ciclo radial','javierMillei.jpg')
        );
        
        for ($i=0; $i < count($noticia2); $i++) { ?>
        
        <div class="cajaNoticia">
            <h3><?php echo  $noticia2[$i][0]?></h3>
            <p><?php echo $noticia2[$i][1]?></p>
            <img class="noticiaImg" src="./img_noticia/<?php echo $noticia2[$i][2]?>" alt="">
        </div>

        <?php    
        }
        ?>

    </section> 
<!-- INICIO PIE PAGINA -->
<?php 
    include('piepag.php'); 
?>
<!-- FIN PIE PAGINA -->
</section>
</body>
</html>