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
		<title>Home Page - Fondazione Ikaros Bar</title>
		<link rel="shortcut icon" href="{{ url("/images/Site-Favicons/favicon.png") }}" />
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/Dancing-Script/font.css") }}" />
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/bootstrap-5.2.3/css/bootstrap.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/fontawesome-6.2.0/css/all.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/animate.style-4.1.1/animate.min.css") }}" />
		<link rel="stylesheet" type="text/css" href="{{ url("/css/welcome_style.css") }}" />
   </head>
   <body>
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
		
		<!-- Welcome Logo -->
		<div class="container">
			<div class="hero-image"></div>
			<div class="separate-line"></div>
		</div>
		<!-- Side Navigation Bar -->
		<span id="burger" onclick="openNav()" class="animate__animated animate__fadeInRight">&#160;&#160;<i class="fa-solid fa-bars fa-lg"></i>&#160;&#160;</span>
		<div id="home-nav" class="home-navigation">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa-solid fa-xmark fa-lg"></i></a>
   		<img class="second-logo" src="/images/Logo/ikaros-second-logo.png" draggable="false" alt="fondazioneikaros">
   		<a href="/">Pagina Home</a>   		
			@if (Route::has('login'))
         	@auth
            	<a href="{{ url('/home') }}">Entra nell'area privata</a>
            @else
               <a href="{{ route('login') }}">Accedi per ordinare</a>
				@endauth
         @endif		
   		<a href="/contact">Informazioni e contatti</a>
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
			<a href="/admin/home" target="_blank" style="font-size: 14px; color: #0088ff; width: 310px; margin-bottom: 12px;"><i class="fa-solid fa-gavel fa-lg"></i>&#160; Area riservata per gli Amministratori</a>
		</div>
		<!-- Food Picture Slider -->
		<div class="slider-bg">
			<center>
				<div class="animate__animated animate__fadeIn animate__delay-1s px-2 pt-5" id="FadeInUp">
    				<span id="typewriter"></span>
  				</div>
  			</center>
			<div class="slider animate__animated animate__fadeIn animate__delay-1s">
				<div class="slide-track">
					<div class="slide">
						<img src="/images/Products/Focaccia.jpg" alt="img1" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Panino-Cotto.jpg" alt="img2" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Panino-Salame.jpg" alt="img3" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Panino-Vegetariano.jpg" alt="img4" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Pizza.jpg" alt="img5" width="200px" class="slide-picture" />
					</div>
					<!-- CSS Rule to Follow -->
					<div class="slide">
						<img src="/images/Products/Focaccia.jpg" alt="img1" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Panino-Cotto.jpg" alt="img2" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Panino-Salame.jpg" alt="img3" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Panino-Vegetariano.jpg" alt="img4" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Pizza.jpg" alt="img5" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Focaccia.jpg" alt="img1" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Panino-Cotto.jpg" alt="img2" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Panino-Salame.jpg" alt="img3" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Panino-Vegetariano.jpg" alt="img4" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Pizza.jpg" alt="img5" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Focaccia.jpg" alt="img1" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Panino-Cotto.jpg" alt="img2" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Panino-Salame.jpg" alt="img3" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Panino-Vegetariano.jpg" alt="img4" width="200px" class="slide-picture" />
					</div>
					<div class="slide">
						<img src="/images/Products/Pizza.jpg" alt="img5" width="200px" class="slide-picture" />
					</div>
				</div>
			</div>
			<br>
  		</div>
  		<div class="separate-line"></div>
  		<!--  Presentation of the site -->
		<div class="container presentation-bg">
			<div class="container-md">
				<br>
				<h1 class="animate__animated animate__fadeIn animate__delay-1s py-5 mb-0 display-5 fw-bold text-body-emphasis lh-1 text-center">Come funziona il Bar online?</h1>
				<div class="animate__animated animate__fadeIn animate__delay-1s container col-xxl-8 px-4 pb-3 pt-1">
    				<div class="row flex-lg-row-reverse align-items-center g-5 py-3">
      				<div class="col-lg-6">
        					<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-1 text-break">Esegui l'accesso con il tuo account</h1>
      					<p class="text-break mb-0">Fai l'accesso utilizzando l'email della scuola (@stu.fondazioneikaros.org) e la tua password per accedere all'area del menù per effettuare ordini.</p>
      				</div>
      				<div class="col-sm-8 col-lg-6">
        					<img src="../images/info-img/login.png" class="d-block mx-lg-auto img-fluid shadow-lg rounded-4" alt="Info Access" draggable="false" style="pointer-events: none;" />
      				</div>
    				</div>
  				</div>
  				<br><hr style="border: 2px solid black; opacity: 100;"><br>
  				<div class="animate__animated animate__fadeIn animate__delay-1s container col-xxl-8 px-4 py-3">
    				<div class="row flex-lg-row-reverse align-items-center g-5 py-3">
    					<div class="col-lg-6">
        					<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-break">Scegli il tuo prodotto</h1>
      					<p class="text-break mb-0">Scegli il prodotto che desideri ordinare. Puoi visualizzare il tuo carrello per modificare la quantità del prodotto o rimuoverlo.</p>
      				</div>
      				<div class="col-sm-8 col-lg-6">
        					<img src="../images/info-img/shop.png" class="d-block mx-lg-auto img-fluid shadow-lg rounded-4" alt="Info Choose Food" draggable="false" style="pointer-events: none;" />
      				</div>
    				</div>
  				</div>
				<br><hr style="border: 2px solid black; opacity: 100;"><br>
  				<div class="animate__animated animate__fadeIn animate__delay-1s container col-xxl-8 px-4 py-3">
    				<div class="row flex-lg-row-reverse align-items-center g-5 py-3">
      				<div class="col-lg-6">
        					<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-break">Esegui il pagamento online</h1>
        					<p class="text-break mb-0">Hai la possibilità di effettuare il pagamento online utilizzando i metodi disponibili o di pagare direttamente in cassa entro un determinato orario.</p>
      				</div>
      				<div class="col-sm-8 col-lg-6">
        					<img src="../images/info-img/paymethods.png" class="d-block mx-lg-auto img-fluid shadow-lg rounded-4" alt="Info Pay" draggable="false" style="pointer-events: none;" />
      				</div>
    				</div>
  				</div>
  				<br><hr style="border: 2px solid black; opacity: 100;"><br>
  				<div class="animate__animated animate__fadeIn animate__delay-1s container col-xxl-8 px-4 pt-3 pb-5">
    				<div class="row flex-lg-row-reverse align-items-center g-5 py-3">
    					<div class="col-lg-6">
        					<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-break">Ritira il tuo ordine</h1>
      					<p class="text-break mb-0">Una volta che il tuo ordine è pronto, puoi ritirarlo comodamente presso il Bar durante l'intervallo.</p>
      				</div>
      				<div class="col-sm-8 col-lg-6">
        					<img src="../images/info-img/Bar-2.png" class="d-block mx-lg-auto img-fluid shadow-lg rounded-4" alt="Info Recive" draggable="false" style="pointer-events: none;" />
      				</div>
    				</div>
  				</div>
  				<br>
			</div>
		</div>
		<div class="separate-line"></div>
		<!-- Time of Bar and Online Orders -->
		<div class="container timer-bg">
			<div class="container-md">
				<br><br><br>
				<div class="row mt-2 mb-3 text-center" style="--bs-gutter-x: 0 rem;">
      			<div class="border border-dark"><p class="animate__animated animate__fadeIn animate__delay-1s py-2 mb-0 fw-bolder fs-2">Orario Bar della Scuola</p></div>
    			</div>
				<div class="table-responsive">
					<table class="table table-bordered border-dark">
						<tbody class="text-center">
    						<tr>
      						<th scope="row"><p class="py-2 mb-0 fw-bolder fs-6 animate__animated animate__fadeIn animate__delay-1s">Giorni della settimana</p></th>
      						<td><p class="py-2 mb-0 fw-bolder fs-6 animate__animated animate__fadeIn animate__delay-1s">Primo Intervallo</p></td>
      						<td><p class="py-2 mb-0 fw-bolder fs-6 animate__animated animate__fadeIn animate__delay-1s">Secondo Intervallo</p></td>
      						<td><p class="py-2 mb-0 fw-bolder fs-6 animate__animated animate__fadeIn animate__delay-1s">Pomeriggio</p></td>
      						<td><p class="py-2 mb-0 fw-bolder fs-6 animate__animated animate__fadeIn animate__delay-1s">Orario per gli ordini</p></td>
    						</tr>
    						<tr>
    							<th scope="row"><p class="py-2 mb-0 fw-bolder fs-6 animate__animated animate__fadeIn animate__delay-1s">Lunedì</p></th>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">10:20 - 10:35</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">12:25 - 12:35</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">13:30 - 14:30</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">8:00 - 9:00</p></td>
    						</tr>
    						<tr>
    							<th scope="row"><p class="py-2 mb-0 fw-bolder fs-6 animate__animated animate__fadeIn animate__delay-1s">Martedì</p></th>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">10:20 - 10:35</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">12:25 - 12:35</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">13:30 - 14:30</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">8:00 - 9:00</p></td>
    						</tr>
    						<tr>
    							<th scope="row"><p class="py-2 mb-0 fw-bolder fs-6 animate__animated animate__fadeIn animate__delay-1s">Mercoledì</p></th>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">10:20 - 10:35</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">12:25 - 12:35</p></td>
    							<td><p class="py-2 mb-0 fs-6 fw-bolder animate__animated animate__fadeIn animate__delay-1s">Chiuso</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">8:00 - 9:00</p></td>
    						</tr>
    						<tr>
    							<th scope="row"><p class="py-2 mb-0 fw-bolder fs-6 animate__animated animate__fadeIn animate__delay-1s">Giovedì</p></th>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">10:20 - 10:35</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">12:25 - 12:35</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">13:30 - 14:30</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">8:00 - 9:00</p></td>
    						</tr>
    						<tr>
    							<th scope="row"><p class="py-2 mb-0 fw-bolder fs-6 animate__animated animate__fadeIn animate__delay-1s">Venedì</p></th>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">10:20 - 10:35</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">12:25 - 12:35</p></td>
    							<td><p class="py-2 mb-0 fs-6 fw-bolder animate__animated animate__fadeIn animate__delay-1s">Chiuso</p></td>
    							<td><p class="py-2 mb-0 fs-6 animate__animated animate__fadeIn animate__delay-1s">8:00 - 9:00</p></td>
    						</tr>
    						<tr>
    							<th scope="row"><p class="py-2 mb-0 fw-bolder fs-6 animate__animated animate__fadeIn animate__delay-1s">Sabato</p></th>
    							<td><p class="py-2 mb-0 fs-6 fw-bolder animate__animated animate__fadeIn animate__delay-1s">Chiuso</p></td>
    							<td><p class="py-2 mb-0 fs-6 fw-bolder animate__animated animate__fadeIn animate__delay-1s">Chiuso</p></td>
    							<td><p class="py-2 mb-0 fs-6 fw-bolder animate__animated animate__fadeIn animate__delay-1s">Chiuso</p></td>
    							<td><p class="py-2 mb-0 fs-6 fw-bolder animate__animated animate__fadeIn animate__delay-1s">Chiuso</p></td>
    						</tr>
    						<tr>
    							<th scope="row"><p class="py-2 mb-0 fw-bolder fs-6 animate__animated animate__fadeIn animate__delay-1s">Domenica</p></th>
    							<td><p class="py-2 mb-0 fs-6 fw-bolder animate__animated animate__fadeIn animate__delay-1s">Chiuso</p></td>
    							<td><p class="py-2 mb-0 fs-6 fw-bolder animate__animated animate__fadeIn animate__delay-1s">Chiuso</p></td>
    							<td><p class="py-2 mb-0 fs-6 fw-bolder animate__animated animate__fadeIn animate__delay-1s">Chiuso</p></td>
    							<td><p class="py-2 mb-0 fs-6 fw-bolder animate__animated animate__fadeIn animate__delay-1s">Chiuso</p></td>
    						</tr>
  						</tbody>
					</table>
				</div>
    			<br><br>
    			<div class="row mb-3 text-center">
      			<div class="animate__animated animate__fadeIn animate__delay-1s col text-break mb-0">Non riesci ha visualizzare bene l'orario? Clicca <button onclick="window.open('/Download/Orario%20Bar%20della%20Scuola%20v0.2.pdf', '_blank');" class="btn btn-dark rounded-5">Qui</button> per visualizzarlo correttamente in versione <kbd>.pdf</kbd>.</div>
    			</div>
    			<br>
			</div>
			<br>
			<!-- Something to know -->
			<div class="container-lg px-4 py-1" id="icon-grid">
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 pb-5 pt-3">
      			<div class="animate__animated animate__fadeIn animate__delay-1s col d-flex align-items-start text-center">
        				<div>
          				<h1 class="fw-bold mb-0 fs-4"><i class="fa-regular fa-clock fa-4x"></i></h1>
          				<br>
          				<p class="text-break mb-0">Dalle <kbd>8:00</kbd> alle <kbd>9:00</kbd> avrai la possibilità di effettuare ordini sul portale. Tuttavia, dopo le <kbd>9:00</kbd> il sistema si bloccherà e non sarà più possibile effettuare nuovi ordini.</p>
        				</div>
      			</div>
      			<div class="animate__animated animate__fadeIn animate__delay-1s col d-flex align-items-start text-center">
        				<div>
          				<h3 class="fw-bold mb-0 fs-4"><i class="fa-solid fa-utensils fa-4x"></i></h3>
          				<br>
          				<p>La sezione <kbd>Pomeriggio</kbd> è riservata esclusivamente ai Talenti che partecipano alle lezioni nel pomeriggio. Solo loro hanno il permesso di consumare il pranzo presso il Bar.</p>
        				</div>
      			</div>
      			<div class="animate__animated animate__fadeIn animate__delay-1s col d-flex align-items-start text-center">
        				<div>
          				<h3 class="fw-bold mb-0 fs-4"><i class="fa-solid fa-gavel fa-4x"></i></h3>
          				<br>
          				<p>Questo orario non ha alcun impatto sui Docenti, ma riguarda esclusivamente solo i <kbd>Talenti</kbd>. Si prega cortesemente ai Talenti di rispettarlo attentamente.</p>
        				</div>
      			</div>
				</div>
			</div>
			<br>
		</div>
		<div class="separate-line"></div>
		<!-- Access Invite -->
		<div class="container access-bg">
   		<div class="animate__animated animate__fadeIn animate__delay-1s modal modal-alert position-static d-block py-5">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content shadow-lg rounded-4 border-0">
      				<div class="modal-body px-4 pt-4 pb-0 text-center">
        					<h4 class="mb-0">Pronto per ordinare?</h4>
        					<br>
        					<h6 class="mb-4 mx-6">Cosa aspetti? Esegui l'accesso e ordina ora! Hai tempo solo dalle 8:00 fino le 9:00.</h6>
        					<hr class="border-top border-dark">
      				</div>
      				<div class="modal-footer flex-column border-top-0 px-4 pb-3 pt-0">
							@if (Route::has('login'))
         					@auth
            					<button type="submit" onclick="location.href='/home'" class="btn btn-lg btn-light rounded-5 w-100 mx-0">L'accesso eseguito, entra in area Menù</button>
            				@else
               				<button type="submit" onclick="location.href='/login'" class="btn btn-lg btn-light rounded-5 w-100 mx-0">Clicca qui per accedere</button>
								@endauth
         				@endif	      				
						</div>
    				</div>
  				</div>
			</div>
		</div>
		<div class="separate-line"></div>
		<!-- Site Footer -->
		<div class="container-sm">
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
			
		<!-- Go to Top Button -->
		<button onclick="topFunction()" id="GoTop" title="Go to top" class="animate__animated animate__fadeInLeft">&#160;&#160;<i class="fa-solid fa-circle-arrow-up fa-lg"></i>&#160;&#160;</button>

		@include('cookieConsent::index')

		<!-- JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="/lib/bootstrap-5.2.3/js/bootstrap.bundle.min.js" type="text/javascript"></script>		
		<script src="/lib/fontawesome-6.2.0/js/all.min.js" type="text/javascript"></script>		
		
		<script type="text/javascript" >
			function openNav() {
  				document.getElementById("home-nav").style.width = "325px";
			}

			function closeNav() {
  				document.getElementById("home-nav").style.width = "0";
			}
	
			//////////////////////////////////////////////////////////////////////////////
	
			let mybutton = document.getElementById("GoTop");
	
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
  				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    				mybutton.style.display = "block";
  				} else {
    				mybutton.style.display = "none";
  				}
			}

			function topFunction() {
  				document.body.scrollTop = 0; 
  				document.documentElement.scrollTop = 0; 
			}

			//////////////////////////////////////////////////////////////////////////////
			
			const yearElement = document.getElementById("year");

			const currentYear = new Date().getFullYear();

			yearElement.innerHTML = currentYear;

			//////////////////////////////////////////////////////////////////////////////
	
			const typewriter = document.getElementById('typewriter');
    		const text = "Un buon panino è uno scrigno che racchiude un tesoro 🍔❤️"; 

    		function typeEffect() {
      		let i = 0;
      		const speed = 300;

      		function typeWriter() {
        			if (i < text.length) {
          			typewriter.innerHTML += text.charAt(i);
          			i++;
          			setTimeout(typeWriter, speed);
        			} else {
          			setTimeout(resetText, 300000); 
        			}
      		}

      		function resetText() {
        			typewriter.innerHTML = '';
        			setTimeout(typeWriter, speed);
      		}

      		typeWriter();
    		}

    		typeEffect();
    		
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