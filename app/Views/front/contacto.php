<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet"> <!-- Enlace a la hoja de estilo externa -->
</head>
<body>

<!-- Título -->
<div class="container">
    <h3 class="titulo text-center">CONTACTANOS</h3> 
    <?php $validation = \Config\Services::validation(); ?>
</div>

<!-- Formulario -->
<div class="container mt-3 form-container" style="text-align: center; background-color: #FFFFFF;">
    <!--<form method="post" action="<?php echo base_url('/enviarcons') ?>">-->
    <p class="p text-center">Escriba aquí su consulta. Le responderemos tan pronto como sea posible!</p>
    <div class="row">
        <div class="col-12 mb-3">
            <input id="nombre_consulta" name="nombre" type="text" class="form-control" placeholder="Nombre" required>
        </div>
        <div class="col-12 mb-3">
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" required>
        </div>
        <div class="col-12 mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="col-12 mb-3">
            <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder="Coloque aquí su mensaje" required></textarea>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
    </div>
    </form>
</div>

<!-- Información de Contacto -->
<div class="container mt-5">
    <h3 class="titulo text-center">Información de Contacto</h3>
    <p class="text-center">Nombre del Titular: Juan Pérez</p>
    <p class="text-center">Razón Social: Plantitas Tienda S.A.</p>
    <p class="text-center">Domicilio Legal: Calle Falsa 123, Ciudad, País</p>
    <p class="text-center">Teléfonos: +54 11 1234-5678</p>
    <p class="text-center">Correo Electrónico: PlantitasCorp@gmail.com </p>
    <p class="text-center">Otros Medios de Contacto: Redes sociales y WhatsApp disponible en nuestro sitio web.</p>
</div>

</body>
</html>
