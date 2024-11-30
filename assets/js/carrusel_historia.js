 // aca debemos listar las imagenes de los usuarios con historias recientes
 const amigosHistorias = [
  hostUrl+"assets/images/imgs/2.jpg",
  hostUrl+"assets/images/imgs/3.jpg",
  hostUrl+"assets/images/imgs/7.jpg",
  hostUrl+"assets/images/imgs/2.jpg",
  hostUrl+"assets/images/imgs/3.jpg",
  hostUrl+"assets/images/imgs/7.jpg",
  hostUrl+"assets/images/imgs/2.jpg",
  hostUrl+"assets/images/imgs/3.jpg",
  hostUrl+"assets/images/imgs/7.jpg",
  hostUrl+"assets/images/imgs/2.jpg",
  hostUrl+"assets/images/imgs/3.jpg",
  hostUrl+"assets/images/imgs/7.jpg",
  hostUrl+"assets/images/imgs/2.jpg",
  hostUrl+"assets/images/imgs/3.jpg",
  hostUrl+"assets/images/imgs/7.jpg",
  hostUrl+"assets/images/imgs/2.jpg",
  hostUrl+"assets/images/imgs/3.jpg",
  hostUrl+"assets/images/imgs/7.jpg",
  hostUrl+"assets/images/imgs/2.jpg",
  hostUrl+"assets/images/imgs/3.jpg",
  hostUrl+"assets/images/imgs/7.jpg",
];

// Función para cargar las imágenes en el carrusel
function cargarHistorias() {
    const carrusel = document.getElementById("ig_header_stories");
    if (carrusel) {
        amigosHistorias.forEach((url) => {
            const amigoElement = document.createElement("div");
            amigoElement.classList.add("ig_friend");
            const imagenElement = document.createElement("img");
            imagenElement.classList.add("ig_story_img");
            imagenElement.src = url;
            amigoElement.appendChild(imagenElement);
            carrusel.appendChild(amigoElement);
        });
    }
}
// Función para desplazar el carrusel
function desplazarCarrusel(direccion) {
    const carrusel = document.getElementById('ig_header_stories');
    if (carrusel) {
        const desplazamiento = 100; // Ajusta este valor según el tamaño de tus elementos
        carrusel.scrollLeft += (direccion === 'derecha' ? desplazamiento : -desplazamiento);
    }
}
//listener para los botones izquierda y derecha
document.getElementById('btnDerecha').addEventListener('click', () => desplazarCarrusel('derecha'));
document.getElementById('btnIzquierda').addEventListener('click', () => desplazarCarrusel('izquierda'));
// Llama a la función para cargar las historias cuando se carga la página
window.onload = cargarHistorias;