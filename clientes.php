<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet" />
</head>

<body>
    <section id="contenedor">
        <!-- INICIO CABECERA -->
        <?php
        include('cabecera.php');
        ?>
        <!-- FIN CABECERA -->

        <section id="contenido" class="clientes">
            <h2>Clientes</h2>
            <div id="cajaCliente">
                <h2>Lista pedidos de clientes</h2>
                <div id="pedidos_cliente">
                    <?php
                    include('conect.php');
                    $consulta = mysqli_query($conexion, "SELECT * FROM pedidos_cliente");

                    while ($list_prod = mysqli_fetch_assoc($consulta)) { ?>
                        <div class="productos">
                            <h3>Nombre: <?php echo $list_prod['producto']; ?></h3>
                            <p>Id Producto: <?php echo $list_prod['id_pedido']; ?></p>
                            <p>Precio: <?php echo $list_prod['cantidad']; ?></p>
                            <p>Cantidad: <?php echo $list_prod['precio']; ?></p>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- INICIO PIE PAGINA -->
        <?php
        include('piepag.php');
        ?>
        <!-- FIN PIE PAGINA -->
</body>

</html>