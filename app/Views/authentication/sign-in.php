<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>PuppiePlanet | Inicio de sesión </title>
		<meta name="description" content="Your pet's like a son." />		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
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
	<!--begin::Body-->
    <body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
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

				@media (max-width: 1024px) {
					.custom-heading {
						display:none;
						/*font-size: 1rem;  Tamaño reducido para pantallas más pequeñas */
					}
				}
				.form-control.is-invalid, .was-validated .form-control:invalid{
					background-image: none !important;					
				}

				.form-control.is-valid, .was-validated .form-control:valid{
					background-image: none !important;					
				}
		</style>
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
			<!--begin::Page bg image-->
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-up -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-none d-lg-flex flex-lg-row-fluid">				
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100"> 
						<!--begin::Image-->          
						
									<img class="theme-light-show mx-auto mw-100 w-150px w-lg-450px mb-10 mb-lg-20" src="<?=base_url()?>assets/images/vector.png" alt="">  
									<div class="container d-md-flex">
										<!--<h1 class="text-gray-800 fw-bolder mb-5 custom-heading text-">
											¡Puppie Planet lleva la diversión y el amor por nuestras mascotas al siguiente nivel!<br>
											Únete a nuestra comunidad y comparte momentos inolvidables con tus amigos peludos. Inicia sesión y forma parte de la diversión.
										</h1>-->
									</div>															
						<!--end::Image-->
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
								<form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="<?=base_url()?>signin" action="#">
									<!--begin::Heading-->
									<input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

									<div class="text-center ">
										<!--begin::Title-->																				
										<img class="theme-light-show mx-auto mw-100 w-150px w-lg-200px" src="<?=base_url()?>assets/images/logo.png" alt="">                 										
										<!--end::Title-->										
									</div>
									<!--begin::Heading-->																		

									<!--begin::Input group--->
									<div class="fv-row mb-5">
										<!--begin::Email-->
										<input type="text" placeholder="Correo electrónico" name="email" id="email" autocomplete="off" class="form-control bg-transparent"> 
										<!--end::Email-->		
									</div>
									<!--end::Input group--->
									<div class="fv-row mb-3">    
										<!--begin::Password-->
										<input type="password" placeholder="Contraseña" name="password" id="password" autocomplete="off" class="form-control bg-transparent"/>
										<i class="fa fa-eye" aria-hidden="true"  id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
										<!--end::Password-->
									</div>
									<!--end::Input group--->
								<!--	<div class="cf-turnstile" data-sitekey="0x4AAAAAAAjDsMdPesDpudtF"></div>-->

									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-wrap gap-3  fs-base fw-semibold mb-8">
										<div></div>
										<!--begin::Link-->
										<!--<a href="<?=base_url()?>signup" class="link-puppie-primary">
											¿Has olvidado tu contraseña ?
										</a>-->
										<!--end::Link-->
									</div>
									<!--end::Wrapper-->   

									<!--begin::Submit button-->
									<div class="d-grid mb-10">
									
										<button type="submit" id="kt_sign_in_submit" class="btn btn-puppie-color">
										<!--begin::Indicator label-->
										<span class="indicator-label">
											Iniciar sesión</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">
											Un momento por favor...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
										</span>
										<!--end::Indicator progress-->        
										</button>
									</div>
									<!--end::Submit button-->
									<!--begin::Sign up-->
									<div class="text-gray-500 text-center fw-semibold fs-6">
										¿Aun no eres miembro?
										<a href="<?=base_url()?>signup" class="link-puppie-primary">
											Crear cuenta
										</a>
									</div>
									<!--end::Sign up-->									
								</form>    
								<!--end::Form--> 

							</div>
							<!--end::Wrapper-->

							<!--begin::Footer-->  
							<div class="w-lg-400px d-flex flex-stack">															
								<!--begin::Links-->
								<div class="d-flex flex-wrap gap-3">
									<a href="<?=base_url()?>condiciones" target="_blank" class="custom-link">Términos y condiciones</a>
									<a href="<?=base_url()?>privacidad" target="_blank" class="custom-link">Política de privacidad</a>                                                                                            
									<a href="<?=base_url()?>planes" target="_blank" class="custom-link">Planes</a>
									<a href="<?=base_url()?>servicios" target="_blank" class="custom-link">Servicios</a>
									<a href="<?=base_url()?>contacto" target="_blank" class="custom-link">Contactanos</a>                                
								</div>
								
								<!--end::Links-->
							</div>
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
		
		<script src="<?=base_url()?>assets/js/custom/authentication/sign-in/general.js"></script>
		<!--<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>-->

		<!--end::Custom Javascript-->
        <!--end::Javascript-->
		<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>
	</body>
	<!--end::Body-->
</html>