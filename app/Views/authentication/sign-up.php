<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>        
		<title>Your pet's like a son</title>
		<meta name="description" content="Your pet's like a son." />		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
        <meta property="og:locale" content="es_LA" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="PuppiePlanet" />
		<meta property="og:url" content="https://www.puppieplanet.com/" />
		<meta property="og:site_name" content="PuppiePlanet" />
		<link rel="canonical" href="https://www.puppieplanet.com" />
		<link rel="shortcut icon" href="<?=base_url()?>assets/images/ico/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?=base_url()?>assets/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/css/button.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle--> 
	</head>
	<!--end::Head-->
	
    <!--begin::Page bg image-->
    <style>
        body {
            background-image: url('<?=base_url()?>assets/images/auth/bg10.jpeg');
        }  
        .loginredes {
            display:none;
        }
        .custom-link {
            color: #737373; /* Color de texto deseado */
            text-decoration: none; /* Opcional: elimina el subrayado */
        }
        .custom-link:hover {
            color: #5f5f5f; /* Color de texto al pasar el cursor (opcional) */
        }
        .container {
                max-width: 70%; /* Ajusta según el espacio deseado */
                margin: 0 auto; /* Centra el contenedor */
                padding: 0 15px; /* Agrega algo de padding para los lados en dispositivos móviles */
            }
        .custom-heading {
            font-size: 2rem; /* Ajusta el tamaño según lo necesario */
            text-align: justify; /* Justifica el texto */
            line-height: 1.2; /* Ajusta la altura de línea si es necesario */
        }
        @media (max-width: 768px) {
            .custom-heading {
                font-size: 2rem; /* Tamaño reducido para pantallas más pequeñas */
            }            
        }
        @media (max-width: 1024px) {
            .hide-on-small-screens {
                display: none !important;
            }
        }
    </style>
    <!--end::Page bg image-->
    <body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if ( document.documentElement ) {
            if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if ( localStorage.getItem("data-bs-theme") !== null ) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }			
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }            
    </script>
    <!--end::Theme mode setup on page load-->            
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->
        
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-none d-xl-flex flex-lg-row-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">                     
                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-500px mb-10 mb-lg-20" src="<?=base_url()?>assets/images/vector.png" alt="">                      
                </div>
                <!--end::Content-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                <!--begin::Wrapper-->
                <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">                    
                            <!--begin::Form-->
                            <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="<?=base_url()?>signin" action="#">
                                <!--begin::Heading-->
                                <div class="text-center mb-8">
                                        <img class="theme-light-show mx-auto mw-100 w-150px w-lg-200px" src="<?=base_url()?>assets/images/logo.png" alt="">                                         
                                        <h1 class="text-gray-900 fw-bolder mb-3">
                                            Regístrate para ver fotos y vídeos de tus mascotas.
                                        </h1>                                    
                                    </div>   

                                <div class="row g-3 mb-9 loginredes" >
                                    <!--begin::Col-->
                                    <div class="col-md-6">
                                        <!--begin::Google link--->
                                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                            <img alt="Logo" src="<?=base_url()?>assets/icons/google-icon.svg" class="h-15px me-3">   
                                            Sign in with Google
                                        </a>
                                        <!--end::Google link--->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-6">
                                        <!--begin::Google link--->
                                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                            <img alt="Logo" src="<?=base_url()?>assets/icons/apple-black.svg" class="theme-light-show h-15px me-3">                  
                                            Sign in with Apple
                                        </a>
                                        <!--end::Google link--->
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <!--begin::Input group--->
                                <div class="fv-row mb-8 fv-plugins-icon-container">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Email" name="email" id="email" autocomplete="off" class="form-control bg-transparent"> 
                                    <!--end::Email-->
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>

                                <!--begin::Input group-->
                                <div class="fv-row mb-8 fv-plugins-icon-container" data-kt-password-meter="true">
                                    <!--begin::Wrapper-->
                                    <div class="mb-1">
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative mb-3">    
                                            <div style="position: relative;">                                                    
                                                <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control" autocomplete="off" required>
                                                <i class="fa fa-eye" aria-hidden="true"  id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                                            </div>
                                            <!--<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" id="btnPassword">
                                                <i class="ki-duotone ki-eye-slash fs-2"></i>                    
                                                <i class="ki-duotone ki-eye fs-2 d-none"></i>                
                                            </span>-->
                                        </div>
                                        <!--end::Input wrapper-->

                                        <!--begin::Meter-->
                                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                        </div>
                                        <!--end::Meter-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Hint-->
                                    <div class="text-muted">
                                        Utiliza 8 caracteres o más con una combinación de letras, números y símbolos.
                                    </div>
                                    <!--end::Hint-->
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>
                                <!--end::Input group--->

                                <!--end::Input group--->
                                <div class="fv-row mb-8 fv-plugins-icon-container">    
                                    <!--begin::Repeat Password-->
                                    <input type="password" placeholder="Repetir contraseña" id="confirm-password" name="confirm-password" autocomplete="off" class="form-control bg-transparent">
                                    <i class="fa fa-eye" aria-hidden="true" id="toggleConfirm" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                                    <!--end::Repeat Password-->
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>                                
                                </div>
                                <!--end::Input group--->

                                <!--begin::Accept-->
                                <div class="fv-row mb-8 fv-plugins-icon-container">
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="toc" value="1">
                                        <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">                                            
                                            Acepto los <a href="<?=base_url()?>condiciones" class="ms-1 link-puppie-primary">Términos y condiciones</a>
                                        </span>
                                    </label>
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>
                                <!--end::Accept-->

                                <!--begin::Submit button-->
                                <div class="d-grid mb-10">
                                    <button type="but" id="kt_sign_up_submit" class="btn btn-puppie-color">
                                                    
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Registrarte</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">
                                            Espera un momento...    
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                <!--end::Indicator progress-->        
                                    </button>
                                </div>
                                <!--end::Submit button-->
                            
                                <!--begin::Sign up-->
                                <div class="text-gray-500 text-center fw-semibold fs-6">
                                    ¿Ya tienes una cuenta? 
                                    <a href="<?=base_url()?>signin" class="link-puppie-primary fw-semibold">
                                        Inicia sesión
                                    </a>
                                </div>
                                <!--end::Sign up-->
                            </form>
                            <!--end::Form--> 
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Footer-->  
                       
                        <!--end::Footer-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Root-->        
    <!--begin::Javascript-->
    <script>
        const hostUrl = "<?=base_url()?>";    
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?=base_url()?>assets/global/plugins.bundle.js"></script>
    <script src="<?=base_url()?>assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="<?=base_url()?>assets/js/custom/authentication/sign-up/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>
</body>
	<!--end::Body-->
</html>