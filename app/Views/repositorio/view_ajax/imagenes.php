<div class="relative w-full max-w-4xl overflow-hidden rounded-2xl shadow-lg">
    <!-- Slider para el container -->
    <div id="slider" class="flex transition-transform duration-500 ease-in-out">
      
      <!-- Slide 1 -->
      <div class="relative min-w-full group">
        <img src="/img_prueba.jpg" class="w-full h-[500px] object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white text-xl font-semibold p-4 text-center">
          Imagen número 1.
        </div>
      </div>
      
      <!-- Slide 2 -->
      <div class="relative min-w-full group">
        <img src="/img_prueba.jpg" class="w-full h-[500px] object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white text-xl font-semibold p-4 text-center">
          Imagen número 2.
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="relative min-w-full group">
        <img src="/img_prueba.jpg" class="w-full h-[500px] object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white text-xl font-semibold p-4 text-center">
          Imagen número 3.
        </div>
      </div>

    </div>

    <!-- aqui pondre los botones  -->
    <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white text-gray-800 p-2 rounded-full shadow hover:bg-gray-200 z-10">
      ←
    </button>
    <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white text-gray-800 p-2 rounded-full shadow hover:bg-gray-200 z-10">
      →
    </button>
  </div>
  
  <script>
    const slider = document.getElementById('slider');
    const next = document.getElementById('next');
    const prev = document.getElementById('prev');

    let index = 0;

    next.addEventListener('click', () => {
      if (index < slider.children.length - 1) {
        index++;
        updateSlider();
      }
    });

    prev.addEventListener('click', () => {
      if (index > 0) {
        index--;
        updateSlider();
      }
    });

    function updateSlider() {
      slider.style.transform = `translateX(-${index * 100}%)`;
    }
  </script>