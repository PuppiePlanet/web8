<?php
$session = session(); // Obtiene la instancia de la sesión

// Obtiene la URL configurada en el archivo .env
$pathImg = env('UPLOAD_TUTOR_URL');

// Valor predeterminado para la imagen del avatar
$imgAvatar = $pathImg . "placeholder.jpg";

// Verifica si la imagen del tutor está disponible en la sesión
if ($session->has('imagen') && $session->has('id_tutor')) {
    $imagenAva = $session->get('imagen');
    $id_tutor = $session->get('id_tutor');

    // Extraer el ID de la imagen
    preg_match('/_(\d+)_/', $imagenAva, $matches);

    if (isset($matches[1]) && $matches[1] == $id_tutor) {
        $imgAvatar = $pathImg . $imagenAva; // Imagen personalizada
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PuppiePlanet</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="puppieplanet.com">
    <meta name="description" content="PuppiePlanet red social para tus mascotas">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/ico/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_feed/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_feed/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_feed/vendor/OverlayScrollbars-master/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_feed/vendor/tiny-slider/dist/tiny-slider.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_feed/vendor/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_feed/vendor/glightbox-master/dist/css/glightbox.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_feed/vendor/dropzone/dist/dropzone.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_feed/vendor/flatpickr/dist/flatpickr.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_feed/vendor/plyr/plyr.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_feed/vendor/zuck.js/dist/zuck.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_feed/css/main.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_feed/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/footer.css">
</head>
<body>
<header class="navbar-light fixed-top header-static bg-mode">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>Wall">
                <img class="light-mode-item navbar-brand-item" src="<?= base_url() ?>assets/images/logo.png" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="<?= base_url() ?>assets/images/logo.png" alt="logo">
            </a>
            <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
                <li class="nav-item ms-2 dropdown">
                    <a class="nav-link btn icon-md p-0" href="#" id="profileDropdown" data-bs-toggle="dropdown">
                        <img class="avatar-img rounded-2" src="<?= $imgAvatar; ?>" alt="">
                    </a>
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3">
                        <li class="px-3">
                            <div class="d-flex align-items-center position-relative">
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle" src="<?= $imgAvatar; ?>" alt="avatar">
                                </div>
                                <div>
                                    <a class="h6 stretched-link" href="#">
                                        <?= $session->get('nombres_tutor') ?? 'Usuario'; ?>
                                        <?= $session->get('apellidos_tutor') ?? ''; ?>
                                    </a>
                                    <p class="small m-0"><?= $session->get('alias') ?? '@Alias'; ?></p>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>settings">Editar Perfil</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>close">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
