<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="./estilos.css" type="text/css" rel="stylesheet"/>
<link href="./estiloBotonera.css" type="text/css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<section id="contenedor">
<!-- INICIO CABECERA -->
<?php 
    include('cabecera.php'); 
?>
<!-- FIN CABECERA -->
    
    <section id="contenido">
        <h2>Catálogo</h2>
    </section>
    <section id="contenido1">
        
        <h2>productos disponibles</h2>
        <nav  id="botoneraProds">
            <ul>
                <li><a href="./catalogo.php?id=sil#contenido2">Sillon Capri</a></li>
                <!-- uso de metodo get ?id=sil-->
                <li><a href="./catalogo.php?id=mes#contenido2">Mesa Impanema</a></li>
                <li><a href="./catalogo.php?id=ban#contenido2">Banco Venecia</a></li>          
            </ul>
        </nav>
    </section>
        <?php
        if (isset($_GET['id'])) {
            # code...
        switch ($_GET['id']) {
            case 'sil':
                # code...
                $titulo = 'Producto: Sillón Capri';
                $precio = 'Precio: $ 345.00 ';
                $caracteristicas = 'Características: Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
                $imagen = 'sillon1.jpg';
                break;
            case 'mes':
                # code...
                $titulo = 'Producto: Mesa Ipanema';
                $precio = 'Precio: $ 500.00 ';
                $caracteristicas = 'Características: Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms';
                $imagen = 'ipanema.jpg';
                break;
            case 'ban':
                # code...
                $titulo = 'Producto: Banco Venecia';
                $precio = 'Precio: $ 450.00';
                $caracteristicas = 'Características: Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms';
                $imagen = 'venecia.jpg';
                break;
            default:
                # code...
                break;
        }
        ?>
        <section id="contenido2">  
            <div id="imgProducto">
                <img class="zoom" src="./imagenes/<?php echo $imagen ?>">
            </div>
            <div id="infoProd">
                <h3>
                    <?php echo $titulo  
                    ?>
                </h3>
                <h4>
                    <?php echo $precio ?>
                </h4>
                <p>
                    <?php echo $caracteristicas ?>
                </p>
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

