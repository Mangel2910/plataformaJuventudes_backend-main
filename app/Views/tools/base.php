<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title ?? 'Mi Aplicación' ?></title>
  <link href="<?= base_url('assets/styles/tools/tools.css'); ?>" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

 <button class="boton-prueba">prueba</button> 
 <button class="boton-prueba-2">prueba2</button> 
<button class="boton-prueba-servicios">servicios</button> 
<button class="boton-prueba-areas">areas</button> 
<button class="boton-prueba-testimonios">testimonios</button>
<button class="boton-prueba-publicaciones">publicaciones</button>


        <!-- Incluir el menú -->
         <!-- Contenido -->
            <div class="area-trabajo">
              <?= $this->renderSection('content') ?>
             </div>
        </div>

</body>

<script type="text/javascript" src="<?= base_url('assets/js/prueba.js'); ?>"></script>