<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puppie Planet</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            text-align: center;
            margin: 0 auto;
            padding-top: 100px; /* Espacio superior para el logo */
        }

        .logo {
            position: fixed;
            top: 0;
            right: 20px; /* Alinea el logo a la derecha */
            max-width: 100px;
            z-index: 1000; /* Asegura que el logo esté por encima de otros elementos */
        }

        .main-image {
            width: 80%;
            max-width: 800px;
            margin: 0 auto;
        }

        @media (max-width: 768px) {
            .main-image {
                width: 90%;
            }

            .logo {
                max-width: 80px;
                right: 10px; /* Ajuste para pantallas pequeñas */
            }
        }
    </style>
</head>
<body>
    <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Puppie Planet Logo" class="logo">
    <div class="container">
        <img src="<?php echo base_url('assets/images/desarrollo.png'); ?>" alt="Desarrollo" class="main-image">
    </div>
</body>
</html>
