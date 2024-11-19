document.addEventListener("DOMContentLoaded", () => {
  // Configuración del carrusel
  const carrossel = document.querySelector(".carrossel");
  const carrosselItems = Array.from(carrossel.querySelectorAll(".carrossel-item"));
  const totalItems = carrosselItems.length;

  // Ajustes de rotación
  const rotationAngle = 360 / totalItems; 
  let currentAngle = 0;

  // Función para posicionar los elementos en 3D
  function positionItems() {
    carrosselItems.forEach((item, index) => {
      const angle = index * rotationAngle;
      item.style.transform = `rotateY(${angle}deg) translateZ(300px)`;
    });
  }

  // Función de rotación automática
  function autoRotate() {
    currentAngle -= rotationAngle; 
    carrossel.style.transform = `rotateY(${currentAngle}deg)`;
  }

  // Inicializar el carrusel
  function initCarrossel() {
    positionItems(); 
    setInterval(autoRotate, 4000); 
  }

  // Comienza el carrusel al cargar el DOM
  initCarrossel();
  
});
