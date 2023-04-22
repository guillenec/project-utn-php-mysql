<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<!-- aca inicia bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<!-- aca finaliza bootstrap -->
<link href="estilos.css" rel="stylesheet"/>
<meta name="vieport" content="width=device-width, initial-scale=1">

</head>

<body>
<section id="contenedor">
<!-- INICIO CABECERA -->
<?php 
    include('cabecera.php'); 
?>
<!-- FIN CABECERA -->
<section id="contenido" class="formClientes"> 
    <h2>Contáctenos</h2>
    <!-- METODO POST  de ENVIO, para que la info que pase no quede guardada en el navegador -->
    <div id="caja2_formulario">
    <form method="POST" action="enviar_consulta.php">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="number" name="edad" min="13" max="105" placeholder="Edad">
        <input type="email" name="correo" placeholder="Correo" required>
        <select name="motivo" required>
            <option value="cons_tecnica">consulta tecnica</option>
            <option value="cons_logica">consulta registro</option>
            <option value="cons_otro">consulta por error</option>
            <option value="cons_otro">consulta por contacto</option>
        </select>
        <label for="mensaje">Escriba abajo su msj:</label>
        <textarea name="mensaje" id="mensaje" cols="30" rows="5" required></textarea>
        <input id="registrar" type="submit" value="Registrar">
    </form>
    </div>
</section>
<section id="contenido">
    <div id="msj_registro">
<?php 
    //se verifica
    if (isset($_GET['valorVuelta'])) {
        # code...
        echo "<h4>Consulta enviada correctamente</h4>";
    }
    else {
        echo "<h4> Contactenos... </h4>";
    }
?>
    </div>
</section>
<!-- INICIO PIE PAGINA -->
<?php 
    include('piepag.php'); 
?>
<!-- FIN PIE PAGINA -->

<!-- inicio js de bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<!-- fin js de bootstrap -->
</body>
</html>