<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>Marketplace</title>
    <style>
        .sidebar {
            min-width: 250px;
            position: fixed;
            height: 100%;
            z-index: 1;
            top: 56px; /* Altura del header */
            left: 0;
            background-color: #f8f9fa; /* Mismo color que el fondo del header */
            padding-top: 20px;
            padding-left: 0px;
            padding-right: 0px;
        }

        .search-bar {
            border: none;
            width: 100%;
            border-radius: 20px;
            text-align: center;
        }

        .sidebar-option {
            display: flex;
            align-items: center;
            text-align: left;
        }

        .sidebar-option:hover img {
            fill: #3CBABA; /* Ajusta el brillo al posicionar el mouse */
        }

        .sidebar-option:hover button {
            border-left: 4px solid #3CBABA;
            background-color: #ffffff; /* Añade una franja en el borde izquierdo al posicionar el mouse */
        }

        .separation {
            border-top: 1px solid #ddd;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-top: 10px;
        }
        

        .location {
            color: #3CBABA; /* Color azul */
            font-weight: 500;
        }

        .main-content {
            min-height: 100vh;
            margin-left: 250px; /* Ancho de la barra lateral */
            padding-top: 8%; /* Altura del header */
            padding-left: 10%;
        }

        .btn-alto {
            color:#ACACAC;
            height: 50px; /* Puedes ajustar el valor según tus necesidades */
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
        }

        .button-container2 {
            display: flex;
            gap: 15px; 
            margin: 20px;
            justify-content: center; 
        }

        .button-container3 {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin: 20px;
        }

        /* Elimina el margen derecho del último botón */
        .button-category:last-child {
            margin-right: 0;
        }
        .btn-pill {
          display: inline-block;
          padding: 14px 45px; /* Ajusta el relleno según tus preferencias */
          font-size: 12px; /* Ajusta el tamaño de la fuente según tus preferencias */
          font-weight: 500;
          text-align: center;
          text-decoration: none;
          cursor: pointer;
          border: none;
          border-radius: 25px; /* Controla la redondez de los bordes */
          background-color: #3CBABA; /* Ajusta el color de fondo según tus preferencias */
          color: #fffff; /* Ajusta el color del texto según tus preferencias */
          transition: background-color 0.3s ease; /* Añade transición al color de fondo */
        }
        .btn-pill:hover {
          background-color: #40adad; /* Ajusta el color de fondo según tus preferencias */
        }
        .btn-filter {
          font-size: 12px; /* Ajusta el tamaño de la fuente según tus preferencias */
          font-weight: 500;
          text-align: center;
          text-decoration: none;
          cursor: pointer;
          border: none;
          width: 120px; /* Ajusta el ancho según sea necesario */
          height: 120px; /* Ajusta la altura según sea necesario */
          border-radius: 50%;
          padding: 10px;
          background-color: #f1f1f1; 
          color: #79CDCD; /* Ajusta el color del texto según tus preferencias */
          transition: background-color 0.3s ease; /* Añade transición al color de fondo */
        }
        .btn-category {
          font-size: 12px; /* Ajusta el tamaño de la fuente según tus preferencias */
          font-weight: 500;
          text-align: center;
          text-decoration: none;
          cursor: pointer;
          border: none;
          width: 80px; /* Ajusta el ancho según sea necesario */
          height: 80px; /* Ajusta la altura según sea necesario */
          border-radius: 50%;
          padding: 10px;
          background-color: #f1f1f1; 
          color: #79CDCD; /* Ajusta el color del texto según tus preferencias */
          transition: background-color 0.3s ease; /* Añade transición al color de fondo */
        }
        .btn-category:hover {
          background-color: #3CBABA;
        }
        .btn-category.active {
            background-color: #3CBABA; /* Cambia el color al hacer clic */
        }
        .button-text {
            margin: 0; /* Elimina el margen predeterminado del párrafo */
            font-size: 14px;
            color: #333;
        }
        .btn-square {
          display: inline-block;
          font-size: 12px; /* Ajusta el tamaño de la fuente según tus preferencias */
          font-weight: bold;
          text-align: center;
          text-decoration: none;
          cursor: pointer;
          border: none;
          border-radius: 10px; /* Controla la redondez de los bordes */
          background-color: #3CBABA; /* Ajusta el color de fondo según tus preferencias */
          color: white; /* Ajusta el color del texto según tus preferencias */
        }
        .btn-square:hover {
          background-color: #40adad; /* Ajusta el color de fondo según tus preferencias */
          color: white;
        }
        .rounded-button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 25px;
            background-color: #f1f1f1;
            color: black;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }
        .rounded-button:hover {
            background-color: #dbdbdb;
            color: black;
        }
        .custom-card {
            border: none; /* Elimina los bordes de la tarjeta */

            transition: box-shadow 0.3s ease; /* Añade una transición suave al cambiar la sombra */
        
            /* Puedes ajustar otros estilos según sea necesario */
        }
        
        .custom-title {
            font-size: 1.5em; /* Ajusta el tamaño de la fuente del título según sea necesario */
            font-weight: bold; /* Hace que el título sea más negrita */
            margin-bottom: 5px; /* Ajusta el margen inferior según sea necesario */
        }
        
        .custom-text {
            font-size: 1em; /* Tamaño de fuente para los otros textos */
            /* Puedes agregar más estilos según sea necesario */
        }

        .hidden-section {
            display: none;
        }

        .filter-button {
            background-color:white;
            padding: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .modal-content {
            border-radius: 15px; /* Cambiar el radio de borde */
        }
        .modal-body {
            min-height: 40vh;
            overflow-y: auto;
            text-align: center;
        }

        .modal-title {
            font-weight: bold;
        }

        .subtitulo {
            font-size: 14px;
        }
    </style>
</head>
<body >

<!-- Header -->
<header class="bg-light p-2 fixed-top">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-4 col-8 text-start">
                <button type="button" class="btn btn-square" style="margin-right:20px;">
                    <i class="bi bi-arrow-left"></i>
                </button>
                <button type="button" class="btn btn-square">
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
            <div class="col-md-4 col-12 text-center mt-2 mt-md-0">
                <input class="form-control me-2" type="search" placeholder="¿Qué buscas hoy?" aria-label="Search">
            </div>
            <div class="col-md-4 col-4 text-end">
                <button type="button" class="btn btn-light">
                    <img src="<?= base_url('assets/icons/marketPlace/Lateral/gris/Carro.png');?>" style="width:25px; height:25px;">
                </button>
            </div>
        </div>
    </div>
</header>


<!-- Contenido principal -->
<div class="container-fluid mt-4">
    <div class="row">
        <!-- Barra lateral -->
        <nav class="col-md-2 d-md-block bg-light sidebar" >
            <div class="sidebar-sticky">
                <h4 style="font-weight: 700; padding:20px; font-size:20px;">Bienvenido Sebastián!</h4>
                <div class="sidebar-option" onmouseover="changeImage('hover', 'imageElement1', 'assets/icons/marketPlace/Lateral/celeste/Market.png', 'assets/icons/marketPlace/Lateral/gris/Market.png')" onmouseout="changeImage('normal', 'imageElement1', 'assets/icons/marketPlace/Lateral/celeste/Market.png', 'assets/icons/marketPlace/Lateral/gris/Market.png')" >
                    <button style="font-weight: 500;" type="button" class="btn btn-light btn-alto d-flex align-items-center justify-content-start w-100">
                        <img id="imageElement1" src="<?= base_url('assets/icons/marketPlace/Lateral/gris/Market.png');?>" alt="Ícono de Explorar todo" style="width:25px; height:25px; margin-right: 15px; margin-left: 15px;">
                        Explorar todo
                    </button>
                </div>
                <div class="sidebar-option" onmouseover="changeImage('hover', 'imageElement2', 'assets/icons/marketPlace/Lateral/celeste/Notificaciones.png', 'assets/icons/marketPlace/Lateral/gris/Notificaciones.png')" onmouseout="changeImage('normal', 'imageElement2', 'assets/icons/marketPlace/Lateral/celeste/Notificaciones.png', 'assets/icons/marketPlace/Lateral/gris/Notificaciones.png')">
                    <button style="font-weight: 500;" type="button" class="btn btn-light btn-alto d-flex align-items-center justify-content-start w-100">
                        <img id="imageElement2" src="<?= base_url('assets/icons/marketPlace/Lateral/gris/Notificaciones.png');?>" style="width:25px; height:25px; margin-right: 15px; margin-left: 15px;">
                        Notificaciones
                    </button>
                </div>
                <div class="sidebar-option" onmouseover="changeImage('hover', 'imageElement3', 'assets/icons/marketPlace/Lateral/celeste/Mensajes.png', 'assets/icons/marketPlace/Lateral/gris/Mensajes.png')" onmouseout="changeImage('normal', 'imageElement3', 'assets/icons/marketPlace/Lateral/celeste/Mensajes.png', 'assets/icons/marketPlace/Lateral/gris/Mensajes.png')">
                    <button style="font-weight: 500;" type="button" class="btn btn-light btn-alto d-flex align-items-center justify-content-start w-100">
                        <img id="imageElement3" src="<?= base_url('assets/icons/marketPlace/Lateral/gris/Mensajes.png');?>" style="width:25px; height:25px; margin-right: 15px; margin-left: 15px;">     
                        Mensajes
                    </button>
                </div>
                <div class="separation"></div>
                <div class="sidebar-option" onmouseover="changeImage('hover', 'imageElement4', 'assets/icons/marketPlace/Lateral/celeste/Favoritos.png', 'assets/icons/marketPlace/Lateral/gris/Favoritos.png')" onmouseout="changeImage('normal', 'imageElement4', 'assets/icons/marketPlace/Lateral/celeste/Favoritos.png', 'assets/icons/marketPlace/Lateral/gris/Favoritos.png')">
                    <button style="font-weight: 500;" type="button" class="btn btn-light btn-alto d-flex align-items-center justify-content-start w-100">
                        <img id="imageElement4" src="<?= base_url('assets/icons/marketPlace/Lateral/gris/Favoritos.png');?>" style="width:25px; height:25px; margin-right: 15px; margin-left: 15px;">
                        Favoritos
                    </button>
                </div>
                <div class="sidebar-option" onmouseover="changeImage('hover', 'imageElement5', 'assets/icons/marketPlace/Lateral/celeste/Compras.png', 'assets/icons/marketPlace/Lateral/gris/Compras.png')" onmouseout="changeImage('normal', 'imageElement5', 'assets/icons/marketPlace/Lateral/celeste/Compras.png', 'assets/icons/marketPlace/Lateral/gris/Compras.png')">
                    <button style="font-weight: 500;" type="button" class="btn btn-light btn-alto d-flex align-items-center justify-content-start w-100">
                        <img id="imageElement5" src="<?= base_url('assets/icons/marketPlace/Lateral/gris/Compras.png');?>" style="width:25px; height:25px; margin-right: 15px; margin-left: 15px;">
                        Tus compras
                    </button>
                </div>
                <div class="sidebar-option" onmouseover="changeImage('hover', 'imageElement6', 'assets/icons/marketPlace/Lateral/celeste/Ventas.png', 'assets/icons/marketPlace/Lateral/gris/Ventas.png')" onmouseout="changeImage('normal', 'imageElement6', 'assets/icons/marketPlace/Lateral/celeste/Ventas.png', 'assets/icons/marketPlace/Lateral/gris/Ventas.png')">
                    <button style="font-weight: 500;" type="button" class="btn btn-light btn-alto d-flex align-items-center justify-content-start w-100">
                        <img id="imageElement6" src="<?= base_url('assets/icons/marketPlace/Lateral/gris/Ventas.png');?>" style="width:25px; height:25px; margin-right: 15px; margin-left: 15px;">
                        Tus ventas
                    </button>
                </div>
                <div class="sidebar-option" onmouseover="changeImage('hover', 'imageElement7', 'assets/icons/marketPlace/Lateral/celeste/Estadísticas.png', 'assets/icons/marketPlace/Lateral/gris/Estadísticas.png')" onmouseout="changeImage('normal', 'imageElement7', 'assets/icons/marketPlace/Lateral/celeste/Estadísticas.png', 'assets/icons/marketPlace/Lateral/gris/Estadísticas.png')">
                    <button style="font-weight: 500;" type="button" class="btn btn-light btn-alto d-flex align-items-center justify-content-start w-100">
                        <img id="imageElement7" src="<?= base_url('assets/icons/marketPlace/Lateral/gris/Estadísticas.png');?>" style="width:25px; height:25px; margin-right: 15px; margin-left: 15px;">
                        Estadísticas
                    </button>
                </div>
                <div class="sidebar-option" onmouseover="changeImage('hover', 'imageElement8', 'assets/icons/marketPlace/Lateral/celeste/Listas.png', 'assets/icons/marketPlace/Lateral/gris/Listas.png')" onmouseout="changeImage('normal', 'imageElement8', 'assets/icons/marketPlace/Lateral/celeste/Listas.png', 'assets/icons/marketPlace/Lateral/gris/Listas.png')">
                    <button style="font-weight: 500;" type="button" class="btn btn-light btn-alto d-flex align-items-center justify-content-start w-100">
                        <img id="imageElement8" src="<?= base_url('assets/icons/marketPlace/Lateral/gris/Listas.png');?>" style="width:25px; height:25px; margin-right: 15px; margin-left: 15px;">
                        Listas
                    </button>
                </div>
                <div class="separation"></div>
                <div class="row w-100" style="padding-left:20px;">
                    <p>Buscando en</p>
                    <p class="location">Valparaíso</p>
                </div>
                <div class="separation"></div>
                <div class="row w-100" style="padding-left:20px;">
                    <button type="button" class="btn btn-primary btn-pill">
                        + Nueva publicación
                    </button>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <main role="main" class="main-content col-md-9 ml-sm-auto col-lg-9 ">
            <div class="row mb-4">
                <!-- Fila de categorías -->
                    <div  class="col">
                       <div class="button-container">
                        <h4 style="padding-right:100px">Categorías</h4>
                        <button id="button1" onclick="mostrarSeccion(1)" type="button" class="btn btn-category" onmouseover="changeImage('hover', 'ImageCategory1', 'assets/icons/marketPlace/Blanco/Alimentos.png', 'assets/icons/marketPlace/Celeste/Alimentos.png','miSeccion1')" onmouseout="changeImage('normal', 'ImageCategory1', 'assets/icons/marketPlace/Blanco/Alimentos.png', 'assets/icons/marketPlace/Celeste/Alimentos.png','miSeccion1')">
                            <img id="ImageCategory1" src="<?= base_url('assets/icons/marketPlace/Celeste/Alimentos.png');?>" style="width:40px; height:40px;">
                        </button>
                        <button id="button2" onclick="mostrarSeccion(2)" type="button" class="btn btn-category" onmouseover="changeImage('hover', 'ImageCategory2', 'assets/icons/marketPlace/Blanco/Higiene y cuidado.png', 'assets/icons/marketPlace/Celeste/Higiene y cuidado.png','miSeccion2')" onmouseout="changeImage('normal', 'ImageCategory2', 'assets/icons/marketPlace/Blanco/Higiene y cuidado.png', 'assets/icons/marketPlace/Celeste/Higiene y cuidado.png','miSeccion2')">
                            <img id="ImageCategory2" src="<?= base_url('assets/icons/marketPlace/Celeste/Higiene y cuidado.png');?>" style="width:40px; height:40px;">
                        </button>
                        <button id="button3" onclick="mostrarSeccion(3)" type="button" class="btn btn-category" onmouseover="changeImage('hover', 'ImageCategory3', 'assets/icons/marketPlace/Blanco/Vestuario.png', 'assets/icons/marketPlace/Celeste/Vestuario.png','miSeccion3')" onmouseout="changeImage('normal', 'ImageCategory3', 'assets/icons/marketPlace/Blanco/Vestuario.png', 'assets/icons/marketPlace/Celeste/Vestuario.png','miSeccion3')">
                            <img id="ImageCategory3" src="<?= base_url('assets/icons/marketPlace/Celeste/Vestuario.png');?>" style="width:40px; height:40px;">
                        </button>
                        <button id="button4" onclick="mostrarSeccion(4)" type="button" class="btn btn-category" onmouseover="changeImage('hover', 'ImageCategory4', 'assets/icons/marketPlace/Blanco/Entretenimiento.png', 'assets/icons/marketPlace/Celeste/Entretenimiento.png','miSeccion4')" onmouseout="changeImage('normal', 'ImageCategory4', 'assets/icons/marketPlace/Blanco/Entretenimiento.png', 'assets/icons/marketPlace/Celeste/Entretenimiento.png','miSeccion4')">
                            <img id="ImageCategory4" src="<?= base_url('assets/icons/marketPlace/Celeste/Entretenimiento.png');?>" style="width:40px; height:40px;">
                        </button>
                        <button id="button5" onclick="mostrarSeccion(5)" type="button" class="btn btn-category" onmouseover="changeImage('hover', 'ImageCategory5', 'assets/icons/marketPlace/Blanco/Gratuito.png', 'assets/icons/marketPlace/Celeste/Gratuito.png','miSeccion5')" onmouseout="changeImage('normal', 'ImageCategory5', 'assets/icons/marketPlace/Blanco/Gratuito.png', 'assets/icons/marketPlace/Celeste/Gratuito.png','miSeccion5')">
                            <img id="ImageCategory5" src="<?= base_url('assets/icons/marketPlace/Celeste/Gratuito.png');?>" style="width:40px; height:40px;">
                        </button>
                        </div>
                    </div>
                </div>
            <div id="miSeccion1" class="row hidden-section">
                <h5 style="text-align:center;">Buscar en Alimentos</h5>
                <div class="button-container2">
                    <!-- Botones -->
                    <a href="#" class="rounded-button">Comida Perros</a>
                    <a href="#" class="rounded-button">Comida Gatos</a>
                    <a href="#" class="rounded-button">Comida Pajaro</a>
                    <a href="#" class="rounded-button">Platos Comida</a>
                    <a href="#" class="rounded-button">Snacks</a>
                </div>
            </div>
            <div id="miSeccion2" class="row hidden-section">
                <h5 style="text-align:center;">Buscar en Higiene y cuidado</h5>
                <div class="button-container2">
                    <!-- Botones -->
                    <a href="#" class="rounded-button">Comida Perros</a>
                    <a href="#" class="rounded-button">Comida Gatos</a>
                    <a href="#" class="rounded-button">Comida Pajaro</a>
                    <a href="#" class="rounded-button">Platos Comida</a>
                    <a href="#" class="rounded-button">Snacks</a>
                </div>
            </div>
            <div id="miSeccion3" class="row hidden-section">
                <h5 style="text-align:center;">Buscar en Vestuario</h5>
                <div class="button-container2">
                    <!-- Botones -->
                    <a href="#" class="rounded-button">Comida Perros</a>
                    <a href="#" class="rounded-button">Comida Gatos</a>
                    <a href="#" class="rounded-button">Comida Pajaro</a>
                    <a href="#" class="rounded-button">Platos Comida</a>
                    <a href="#" class="rounded-button">Snacks</a>
                </div>
            </div>
            <div id="miSeccion4" class="row hidden-section">
                <h5 style="text-align:center;">Buscar en Entretenimiento y Educación</h5>
                <div class="button-container2">
                    <!-- Botones -->
                    <a href="#" class="rounded-button">Comida Perros</a>
                    <a href="#" class="rounded-button">Comida Gatos</a>
                    <a href="#" class="rounded-button">Comida Pajaro</a>
                    <a href="#" class="rounded-button">Platos Comida</a>
                    <a href="#" class="rounded-button">Snacks</a>
                </div>
            </div>
            <div id="miSeccion5" class="row hidden-section">
                <h5 style="text-align:center;">Buscar en Gratuitos</h5>
                <div class="button-container2">
                    <!-- Botones -->
                    <a href="#" class="rounded-button">Comida Perros</a>
                    <a href="#" class="rounded-button">Comida Gatos</a>
                    <a href="#" class="rounded-button">Comida Pajaro</a>
                    <a href="#" class="rounded-button">Platos Comida</a>
                    <a href="#" class="rounded-button">Snacks</a>
                </div>
            </div>
            <!-- Container de publicaciones -->
            <div class="row">
                <h4 id="Explorar" style="font-size:20px; font-weight:630;">Explora cerca de ti <p class="float-end" style="font-size:13px;"><button class="filter-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Filtrar resultados por <i class="bi bi-chevron-down"></i>
                </button></p></h4>
                <div class="col-3">
                    <div class="custom-card">
                        <img src="https://via.placeholder.com/150" alt="Imagen de ejemplo" class="card-img">
                        <div class="card-body">
                            <h5 class="card-title custom-title">$1.500</h5>
                            <p class="card-text custom-text">Set de ropa para cachorro</p>
                            <p class="card-text custom-text">Viña del Mar, Valparaíso</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="custom-card">
                        <img src="https://via.placeholder.com/150" alt="Imagen de ejemplo" class="card-img">
                        <div class="card-body">
                            <h5 class="card-title custom-title">$1.500</h5>
                            <p class="card-text custom-text">Set de ropa para cachorro</p>
                            <p class="card-text custom-text">Viña del Mar, Valparaíso</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="custom-card">
                        <img src="https://via.placeholder.com/150" alt="Imagen de ejemplo" class="card-img">
                        <div class="card-body">
                            <h5 class="card-title custom-title">$1.500</h5>
                            <p class="card-text custom-text">Set de ropa para cachorro</p>
                            <p class="card-text custom-text">Viña del Mar, Valparaíso</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="custom-card">
                        <img src="https://via.placeholder.com/150" alt="Imagen de ejemplo" class="card-img">
                        <div class="card-body">
                            <h5 class="card-title custom-title">$1.500</h5>
                            <p class="card-text custom-text">Set de ropa para cachorro</p>
                            <p class="card-text custom-text">Viña del Mar, Valparaíso</p>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Puedes repetir estas tarjetas según sea necesario -->
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5 class="modal-title" id="exampleModalLabel">¿Deseas filtrar tus resultados?</h5>
                            <p class="subtitulo">¡Encuentra lo que buscas con más facilidad!</p>
                            <!-- Botones circulares -->
                            <div class="button-container3" >
                                <button class="btn btn-filter">1</button>
                                <button class="btn btn-filter">2</button>
                                <button class="btn btn-filter">3</button>
                                <button class="btn btn-filter">4</button>
                                <button class="btn btn-filter">5</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<script>
    function changeImage(state, imageId, newImagePath, originalImagePath, sectionId) {
        const imageElement = document.getElementById(imageId);
        const sectionElement = document.getElementById(sectionId);

        if (imageElement && sectionElement) {
            if (state === 'hover') {
                // Cambia a la nueva imagen al pasar el ratón
                imageElement.src = newImagePath;
            } else if (state === 'normal') {
                // Verifica si la sección está visible antes de cambiar a la imagen original
                const isSectionVisible = window.getComputedStyle(sectionElement).display !== 'none';

                if (isSectionVisible) {
                    // No cambia a la imagen original si la sección está visible
                    console.log(`La sección con ID ${sectionId} está visible. No se cambia a la imagen original.`);
                } else {
                    // Restaura la imagen original si la sección no está visible
                    imageElement.src = originalImagePath;
                }
            }
        } else {
            console.error(`No se encontró un elemento con ID ${imageId} o ${sectionId}`);
        }
    }
    function mostrarSeccion(numeroSeccion) {
        // Cerrar todas las demás secciones
        for (let i = 1; i <= 5; i++) {
            if (i !== numeroSeccion) {
                const seccion = document.getElementById("miSeccion" + i);
                const buttonElement = document.getElementById("button" + i);
                const imageElement = document.getElementById('ImageCategory' + i);

                // Ocultar la sección y quitar la clase 'active' al botón
                seccion.style.display = "none";
                buttonElement.classList.remove('active');
                
                // Cambiar la imagen a la versión original
                if(i == 1){
                    imageElement.src = 'assets/icons/marketPlace/Celeste/Alimentos.png';
                }else if(i == 2){
                    imageElement.src = 'assets/icons/marketPlace/Celeste/Higiene y cuidado.png';
                }else if(i == 3){
                    imageElement.src = 'assets/icons/marketPlace/Celeste/Vestuario.png';
                }else if(i == 4){
                    imageElement.src = 'assets/icons/marketPlace/Celeste/Entretenimiento.png';
                }else if(i == 5){
                    imageElement.src = 'assets/icons/marketPlace/Celeste/Gratuito.png';
                }
            }
        }

        // Abrir la sección actual
        const seccionActual = document.getElementById("miSeccion" + numeroSeccion);
        const buttonActual = document.getElementById("button" + numeroSeccion);
        const imageActual = document.getElementById('ImageCategory' + numeroSeccion);
        const seccionAbierta = seccionActual.style.display === "block";

        if (seccionAbierta) {
            // Ocultar la sección y quitar la clase 'active' al botón
            seccionActual.style.display = "none";
            buttonActual.classList.remove('active');

            // Cambiar la imagen a la versión original
            if(numeroSeccion == 1){
                imageActual.src = 'assets/icons/marketPlace/Celeste/Alimentos.png';
            }else if(numeroSeccion == 2){
                imageActual.src = 'assets/icons/marketPlace/Celeste/Higiene y cuidado.png';
            }else if(numeroSeccion == 3){
                imageActual.src = 'assets/icons/marketPlace/Celeste/Vestuario.png';
            }else if(numeroSeccion == 4){
                imageActual.src = 'assets/icons/marketPlace/Celeste/Entretenimiento.png';
            }else if(numeroSeccion == 5){
                imageActual.src = 'assets/icons/marketPlace/Celeste/Gratuito.png';
            }
        } else {
            // Si está cerrada, abrir la sección actual
            // Cambiar la imagen y agregar la clase 'active' al botón
            if(numeroSeccion == 1){
            imageActual.src = 'assets/icons/marketPlace/Blanco/Alimentos.png';
            }else if(numeroSeccion == 2){
                imageActual.src = 'assets/icons/marketPlace/Blanco/Higiene y cuidado.png';
            }else if(numeroSeccion == 3){
                imageActual.src = 'assets/icons/marketPlace/Blanco/Vestuario.png';
            }else if(numeroSeccion == 4){
                imageActual.src = 'assets/icons/marketPlace/Blanco/Entretenimiento.png';
            }else if(numeroSeccion == 5){
                imageActual.src = 'assets/icons/marketPlace/Blanco/Gratuito.png';
            }
            buttonActual.classList.add('active');

            // Mostrar la sección actual y agregar la clase 'active'
            seccionActual.style.display = "block";
            seccionActual.classList.add("active");
        }
    }
 
</script>