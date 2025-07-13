<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nuestra Historia - Línea de Tiempo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Inter', sans-serif;
      }
      .timeline-item {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s ease;
      }
      .timeline-item.animate {
        opacity: 1;
        transform: translateY(0);
      }
      .timeline-dot {
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        transition: all 0.3s ease;
      }
      .timeline-item:hover .timeline-dot {
        transform: scale(1.2);
        box-shadow: 0 0 0 8px rgba(59, 130, 246, 0.2);
      }
      .timeline-card {
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
      }
      .timeline-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      }
      .gradient-bg {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      }
      .timeline-line {
        background: linear-gradient(to bottom, #3b82f6, #8b5cf6, #f59e0b);
      }
    </style>
  </head>
  <body class="bg-gray-50">
    <!-- Línea del tiempo para ver mejor  -->
    <section class="py-20 bg-white relative">
      <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-blue-800 mb-4">
            Nuestra Historia
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Un viaje de transformación social que comenzó hace años y continúa evolucionando hacia un futuro mejor
          </p>
        </div>
        <!-- Línea de tiempo principal para asi llevar los items -->
        <div class="relative">
          <!-- Línea del centro -->
          <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-gray-300 h-full rounded-full"></div>
<div class="space-y-24">
  <div class="timeline-item flex items-center">
    <!-- Imagen grande a la izquierda -->
    <div class="w-1/2 pr-8 flex justify-end">
      <img src="/img_prueba.jpg" alt="Fundación 2015" class="w-96 h-64 object-cover rounded-xl shadow-xl" />
    </div>
    <div class="timeline-dot w-4 h-4 bg-blue-600 rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
    <!-- Tarjeta a la derecha -->
    <div class="w-1/2 pl-8">
      <div class="timeline-card bg-white p-6 rounded-lg shadow-md border">
        <div class="flex items-center mb-3">
          <div class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
            2015
          </div>
        </div>
        <h3 class="text-lg font-bold text-gray-800 mb-2">Fundación</h3>
        <p class="text-gray-600 text-sm mb-3">
          Fundación de la organización y primeros pasos en el impacto social. Comenzamos con una visión clara de transformar comunidades.
        </p>
      </div>
    </div>
  </div>
  <div class="timeline-item flex items-center">
    <!-- Tarjeta a la izquierda -->
    <div class="w-1/2 pr-8 text-right">
      <div class="timeline-card bg-white p-6 rounded-lg shadow-md border">
        <div class="flex items-center justify-end mb-3">
          <div class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
            2016
          </div>
        </div>
        <h3 class="text-lg font-bold text-gray-800 mb-2">Alianzas Estratégicas</h3>
        <p class="text-gray-600 text-sm mb-3">
          Desarrollo de nuestras primeras alianzas estratégicas y participación activa en redes colaborativas regionales.
        </p>
      </div>
    </div>
    <div class="timeline-dot w-4 h-4 bg-blue-600 rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
    <!-- Imagen grande a la derecha -->
    <div class="w-1/2 pl-8 flex justify-start">
      <img src="/img_prueba.jpg" alt="Alianzas 2016" class="w-96 h-64 object-cover rounded-xl shadow-xl" />
    </div>
  </div>
  <div class="timeline-item flex items-center">
    <!-- Imagen grande a la izquierda -->
    <div class="w-1/2 pr-8 flex justify-end">
      <img src="/img_prueba.jpg" alt="Expansión 2017" class="w-96 h-64 object-cover rounded-xl shadow-xl" />
    </div>
    <div class="timeline-dot w-4 h-4 bg-blue-600 rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
    <div class="w-1/2 pl-8">
      <div class="timeline-card bg-white p-6 rounded-lg shadow-md border">
        <div class="flex items-center mb-3">
          <div class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
            2017
          </div>
        </div>
        <h3 class="text-lg font-bold text-gray-800 mb-2">Expansión Sostenible</h3>
        <p class="text-gray-600 text-sm mb-3">
          Ampliación de programas con enfoque en desarrollo comunitario y sostenibilidad ambiental.
        </p>
      </div>
    </div>
  </div>
  <div class="timeline-item flex items-center">
    <!-- Tarjeta a la izquierda -->
    <div class="w-1/2 pr-8 text-right">
      <div class="timeline-card bg-white p-6 rounded-lg shadow-md border">
        <div class="flex items-center justify-end mb-3">
          <div class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
            2018
          </div>
        </div>
        <h3 class="text-lg font-bold text-gray-800 mb-2">Innovación Social</h3>
        <p class="text-gray-600 text-sm mb-3">
          Consolidación de metodologías participativas y liderazgo en innovación social a nivel nacional.
        </p>
      </div>
    </div>
    <div class="timeline-dot w-4 h-4 bg-blue-600 rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
    <!-- Imagen grande a la derecha -->
    <div class="w-1/2 pl-8 flex justify-start">
      <img src="/img_prueba.jpg" alt="Innovación 2018" class="w-96 h-64 object-cover rounded-xl shadow-xl" />
    </div>
  </div>
  <div class="timeline-item flex items-center">
    <!-- Imagen grande a la izquierda -->
    <div class="w-1/2 pr-8 flex justify-end">
      <img src="/img_prueba.jpg" alt="Reconocimiento 2019" class="w-96 h-64 object-cover rounded-xl shadow-xl" />
    </div>
    <div class="timeline-dot w-4 h-4 bg-blue-600 rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
    <!-- Tarjeta a la derecha -->
    <div class="w-1/2 pl-8">
      <div class="timeline-card bg-white p-6 rounded-lg shadow-md border">
        <div class="flex items-center mb-3">
          <div class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
            2019
          </div>
        </div>
        <h3 class="text-lg font-bold text-gray-800 mb-2">Reconocimiento</h3>
        <p class="text-gray-600 text-sm mb-3">
          Reconocimientos nacionales y expansión de proyectos en América Latina. Consolidación como referente.
        </p>
      </div>
    </div>
  </div>
  <div class="timeline-item flex justify-center">
    <div class="timeline-dot w-6 h-6 bg-blue-600 rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
    <div class="timeline-card bg-blue-600 p-6 rounded-lg shadow-lg text-white text-center max-w-md">
      <h3 class="text-lg font-bold mb-2">Hacia el Futuro</h3>
      <p class="text-blue-100 text-sm">
        Continuamos construyendo un mundo mejor, expandiendo nuestro impacto y creando nuevas oportunidades de transformación social.
      </p>
    </div>
  </div>
</div>
<!-- Versión móvil alternativa, asi quiero mirar algo movil  -->
<section class="py-16 bg-gray-50 md:hidden">
  <div class="max-w-2xl mx-auto px-6">
    <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">Nuestra Historia</h2>
    <div class="space-y-6">
      <!-- Item móvil 2015 -->
      <div class="flex items-start space-x-4">
        <img src="/img_prueba.jpg" alt="2015" class="w-20 h-20 object-cover rounded-xl shadow" />
        <div class="bg-white p-4 rounded-lg shadow-sm border flex-1">
          <h3 class="font-bold text-gray-800 mb-1">2015 - Fundación</h3>
          <p class="text-gray-600 text-sm">Fundación de la organización y primeros pasos en el impacto social.</p>
        </div>
      </div>
      <!-- Item móvil 2016 -->
      <div class="flex items-start space-x-4">
        <img src="/img_prueba.jpg" alt="2016" class="w-20 h-20 object-cover rounded-xl shadow" />
        <div class="bg-white p-4 rounded-lg shadow-sm border flex-1">
          <h3 class="font-bold text-gray-800 mb-1">2016 - Alianzas</h3>
          <p class="text-gray-600 text-sm">Desarrollo de alianzas estratégicas y participación en redes colaborativas.</p>
        </div>
      </div>
      <!-- Item móvil 2017 -->
      <div class="flex items-start space-x-4">
        <img src="/img_prueba.jpg" alt="2017" class="w-20 h-20 object-cover rounded-xl shadow" />
        <div class="bg-white p-4 rounded-lg shadow-sm border flex-1">
          <h3 class="font-bold text-gray-800 mb-1">2017 - Expansión</h3>
          <p class="text-gray-600 text-sm">Ampliación de programas con enfoque en desarrollo comunitario.</p>
        </div>
      </div>
      <!-- Item móvil 2018 -->
      <div class="flex items-start space-x-4">
        <img src="/img_prueba.jpg" alt="2018" class="w-20 h-20 object-cover rounded-xl shadow" />
        <div class="bg-white p-4 rounded-lg shadow-sm border flex-1">
          <h3 class="font-bold text-gray-800 mb-1">2018 - Innovación</h3>
          <p class="text-gray-600 text-sm">Consolidación de metodologías participativas y liderazgo.</p>
        </div>
      </div>
      <!-- Item móvil 2019 -->
      <div class="flex items-start space-x-4">
        <img src="/img_prueba.jpg" alt="2019" class="w-20 h-20 object-cover rounded-xl shadow" />
        <div class="bg-white p-4 rounded-lg shadow-sm border flex-1">
          <h3 class="font-bold text-gray-800 mb-1">2019 - Reconocimiento</h3>
          <p class="text-gray-600 text-sm">Reconocimientos nacionales y expansión en América Latina.</p>
        </div>
      </div>
    </div>
  </div>
</section>
    <script>
      // Animación de aparición al hacer scroll asi puedo hacer que se vea más atractivo 
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate');
          }
        });
      }, {
        threshold: 0.1
      });
      document.querySelectorAll('.timeline-item').forEach((item) => {
        observer.observe(item);
      });
    </script>
  </body>
</html>