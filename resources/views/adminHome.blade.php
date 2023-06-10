<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta name="theme-color" content="#ff7c00" />
		<meta name="description" content="Eat Good Feel Good :)" />
    	<meta name="keywords" content="Fondazione, Ikaros, Bar, Attività, Studenti, Calcio, Scuola, Superiore" />
    	<meta name="author" content="Vinay Rathour" />
		<title>Developer Admin Page - Fondazione Ikaros Bar</title>
		<link rel="shortcut icon" href="{{ url("/images/Site-Favicons/favicon.png") }}" />
      <link rel="stylesheet" type="text/css" href="{{ url("/lib/Dancing-Script/font.css") }}" />
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/bootstrap-5.2.3/css/bootstrap.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/fontawesome-6.2.0/css/all.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/animate.style-4.1.1/animate.min.css") }}" />
		<link rel="stylesheet" type="text/css" href="{{ url("/css/adminHome_style.css") }}" />
   </head>
   <body class="container">
   	<!-- Scroll Indicator -->
   	<style type="text/css">
   		.scroll-indicator {
  				position: fixed;
  				top: 0;
  				left: 0;
  				width: 100%;
  				height: 10px;
  				background-color: #000000;
  				overflow: hidden;
  				z-index: 99;
			}

			.progress-bar {
  				width: 0;
  				height: 10px;
  				background-color: #ff7c00;
  				transition: width 0.3s ease;
  				border-bottom: 2px solid black;
  				border-top: 2px solid black;
			}
   	</style>
   	
   	<div class="scroll-indicator">
  			<div class="progress-bar"></div>
		</div>
		
		<script type="text/javascript" >
			window.addEventListener('scroll', function() {
  				var scrollIndicator = document.querySelector('.progress-bar');
  				var maxScroll = document.documentElement.scrollHeight - window.innerHeight;
  				var progress = (window.pageYOffset / maxScroll) * 100;
  				scrollIndicator.style.width = progress + '%';
  				scrollIndicator.style.position = 'fixed';
			});
		</script>
		
   	<img src="/images/svg/layered-peaks-table-up.svg" class="table-img" alt="table-up">
   	<!-- Side Navigation Bar -->
		<span id="burger" onclick="openNav()" class="animate__animated animate__fadeInRight">&#160;&#160;<i class="fa-solid fa-bars fa-lg"></i>&#160;&#160;</span>
		<div id="home-nav" class="home-navigation">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa-solid fa-xmark fa-lg"></i></a>
   		<img class="second-logo" src="/images/Logo/ikaros-second-logo.png" draggable="false" alt="fondazioneikaros">
   		<a href="/">Pagina Home</a>
   		<a href="/contact">Informazioni e contatti</a>
   		<hr>
   		<a href="/ordini"><i class="fa-solid fa-shop"></i>&#160; Pagina Ordini</a>
   		<a href="https://webmail2.artglobaltech.com/" target="_blank"><i class="fa-solid fa-envelope"></i>&#160; Gestisci le E-Mail</a>
   		<hr>
   		<div style="color: white; padding: 8px 8px 8px 25px; margin-bottom: -15px; width: 99%;">
   			<p class="mb-0"><img src="https://em-content.zobj.net/source/microsoft-teams/337/waving-hand_1f44b.png" alt="hello" style="width: 28px; margin-left: -5px; margin-right: 5px; margin-bottom: 15px; pointer-events: none;">Ciao {{ Auth::user()->name }}.</p>
        		<p class="mb-3">Queste sono le azioni che puoi fare nel tuo account per ora:</p>
        	</div>
        	<button type="button" onclick="location.href='/profile'" class="btn btn-outline-light rounded-5 my-1" style="margin-left: 25px;"><i class="fa-solid fa-marker"></i>&#160; Modifica l'account</button>
  			<a href="{{ route('logout') }}"><button type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline-danger rounded-5 nav-m"><i class="fa-solid fa-right-from-bracket"></i>&#160; Esci dall'area privata</button></a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
           	@csrf
        	</form>
   		<hr>
 			<a href="https://www.fondazioneikaros.org/dona-sostieni-la-fondazione/"><i class="fa-solid fa-hand-holding-heart"></i>&#160; Sostieni la Fondazione</a>
   		<a href="https://www.fondazioneikaros.org/blog/"><i class="fa-solid fa-rss"></i>&#160; News & Blog</a>
			<hr>
   		<a href="https://www.fondazioneikaros.org/" class="text-nav-fav"><img src="/images/Site-Favicons/favicon.png" draggable="false" alt="FondazioneIkarosLogo" class="img-favicon1"> Fondazione Ikaros</a>
   		<a href="https://www.istitutopolitecnico.org/" class="text-nav-fav"><img src="/images/Site-Favicons/favicon-istitutopolitecnico.png" draggable="false" alt="IstitutoPolitecnicoLogo" class="img-favicon2"> Istituto Politecnico</a>
			<hr>
			<div class="imp-note">
				<p>Avviso per i Talenti e Insegnanti: </p>
				<p>É vietato condividere le vostre informazioni relative a questo sito con qualcuno. Grazie!</p>
			</div>
			<hr>
			<a href="/admin/home" target="_blank" style="font-size: 13px; color: #0088ff; width: 300px; margin-bottom: 12px;"><i class="fa-solid fa-gavel fa-lg"></i> &#160; Area riservata per gli Amministratori</a>
		</div>
		<main class="container-md pt-3 pb-5">
			<div class="animate__animated animate__fadeIn animate__delay-1s row my-5">
      		<div class="col-md-5 text-center"><i class="fa-solid fa-gavel fa-10x fa-shake"></i></div>
      		<div class="col-md-7 text-start mt-1">
      			<h1 class="h1">Dashboard</h1>
      			<p>Benvenuto caro {{ Auth::user()->name }}, qui lei ha poteri Amministrativi, ciò significa che lei è autorizzato a fare qualunque azione che vuole, ma basato sui livelli del potere che possiede.</p>
      			<p><i class="fa-brands fa-superpowers fa-spin"></i>&#160; Livello Potere: {{ Auth::user()->role_id }}</p>
      		</div>
    		</div>
    		<hr style="border: solid black 1px; margin-bottom: 30px;">	
    		<div class="animate__animated animate__fadeIn animate__delay-1s row text-center">
    			<div class="col">
					<h4 class="h4"><i class="fa-solid fa-users fa-1x"></i>&#160; Pulsanti per gestire gli utenti</h4>
				</div>
				<div class="col">
					<h4 class="h4"><i class="fa-solid fa-burger fa-1x"></i>&#160; Pulsanti per gestire i prodotti</h4>
				</div>
    		</div>	
    		<div class="animate__animated animate__fadeIn animate__delay-1s row text-center">
				<div class="col d-grid gap-2 my-1 py-1">
					<button onclick="location.href='/students/create'" type="button" class="btn btn-primary rounded-5 btn-lg">Registra nuovi utenti</button>
				</div>   
				<div class="col d-grid gap-2 my-1 py-1">
					<button onclick="location.href='/prodotti/create'" type="button" class="btn btn-primary rounded-5 btn-lg">Aggiungi nuovi prodotti</button>
				</div>
			</div>
			<div class="animate__animated animate__fadeIn animate__delay-1s row text-center">
				<div class="col d-grid gap-2 my-1 py-1">
					<button onclick="location.href='/students'" type="button" class="btn btn-primary rounded-5 btn-lg">Amministra utenti</button>
				</div>				
				<div class="col d-grid gap-2 my-1 py-1">
					<button onclick="location.href='/prodotti'" type="button" class="btn btn-primary rounded-5 btn-lg">Amministra prodotti</button>
				</div>    		
    		</div>
    		<div class="animate__animated animate__fadeIn animate__delay-1s row text-center">
    			<div class="d-grid gap-2 my-1 py-1">
    				<h4 class="h4"><i class="fa-solid fa-list-ol fa-1x"></i>&#160; Pulsante per gestire gli ordini</h4>
					<button onclick="location.href='/order'" type="button" class="btn btn-primary btn-lg rounded-5 mb-2">Amministra gli ordini</button>
    			</div>
    		</div>
		</main>
		<!-- Site Footer -->
		<div class="container-lg">
			<footer class="d-flex flex-wrap justify-content-between align-items-center pt-3 my-3 border-top">
    			<div class="col-md-4 d-flex align-items-center">
      			<a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Torna alla Home">
        				<img src="/images/Site-Favicons/favicon.png" alt="FondazioneIkarosLogo" class="footer-logo" draggable="false">
      			</a>
      			<span class="mb-3 mb-md-0"><i class="fa-regular fa-copyright"></i> 2022 - <span id="year"></span> Fondazione Ikaros <i class="bar-font">Bar</i></span>
    			</div>
      		<ul class="nav col-md-5 justify-content-end list-unstyled d-flex">
    				<li class="ms-0"><div class="sc1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Facebook"><a href="https://www.facebook.com/ikaroscalcio/" style="text-decoration: none;" target="_blank"><i class="fa-brands fa-facebook fa-2x sce-1"></i></a></div></li>
    				<li class="ms-3"><div class="sc2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Instagram"><a href="https://www.instagram.com/ikaroscalcio/" style="text-decoration: none;" target="_blank"><i class="fa-brands fa-instagram fa-2x sce-2"></i></a></div></li>
    				<li class="ms-3"><div class="sc3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Youtube"><a href="https://www.youtube.com/user/IKAROSwebtv/" style="text-decoration: none;" target="_blank"><i class="fa-brands fa-youtube fa-2x sce-3"></i></a></div></li>
  					<li class="ms-3"><div class="sc4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Sei uno sviluppatore? Vuoi saperne di più sull'applicazione che stai esplorando? Clicca per sapere di più!"><a href="https://github.com/Rvpartap/Fondazione-Ikaros-Bar" style="text-decoration: none;" target="_blank"><i class="fa-brands fa-github fa-2x sce-4"></i></a></div></li>
  				</ul>
   		</footer>
   		<div class="border-top d-flex flex-wrap justify-content-between">
   			<p class="text-left py-2 mb-0"><img src="https://em-content.zobj.net/source/microsoft-teams/337/eyes_1f440.png" alt="privacy" style="width: 30px; margin-bottom: 16px; pointer-events: none;">&#160; Dai un'occhiata alla pagina <a href="https://www.fondazioneikaros.org/privacy-e-cookie-policy/" target="_blank" class="fw-bold link-decoration">Privacy e Cookie Policy</a></p>
   			<p class="text-right py-2 mb-0"><img src="https://em-content.zobj.net/source/microsoft-teams/337/man-technologist_1f468-200d-1f4bb.png" alt="developer" style="width: 30px; margin-bottom: 16px; pointer-events: none;">&#160; Progettato e codificato da <a href="https://www.artglobal.it/" target="_blank" class="fw-bold link-decoration">Artglobal.it</a> & <a href="https://linktr.ee/rvpartap" target="_blank" class="fw-bold link-decoration">Rathour Vinay</a></p>
   		</div>
		</div>
		<img src="/images/svg/layered-peaks-table-down.svg" class="table-img" alt="table-down">
		<!-- JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="/lib/bootstrap-5.2.3/js/bootstrap.bundle.min.js" type="text/javascript"></script>		
		<script src="/lib/fontawesome-6.2.0/js/all.min.js" type="text/javascript"></script>
		<script type="text/javascript" >
			function openNav() {
  				document.getElementById("home-nav").style.width = "320px";
			}

			function closeNav() {
  				document.getElementById("home-nav").style.width = "0";
			}	
			
			//////////////////////////////////////////////////////////////////////////////
			
			const yearElement = document.getElementById("year");

			const currentYear = new Date().getFullYear();

			yearElement.innerHTML = currentYear;
			
			//////////////////////////////////////////////////////////////////////////////
    		
    		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
			var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  				return new bootstrap.Tooltip(tooltipTriggerEl)
			});
			
			//////////////////////////////////////////////////////////////////////////////
			
			let docTitle = document.title;
			window.addEventListener("blur", () => {
				document.title = "🥐☕... - Fondazione Ikaros Bar";			
			});
			
			window.addEventListener("focus", () => {
				document.title = docTitle;
			});
		</script>	
	</body>
</html>