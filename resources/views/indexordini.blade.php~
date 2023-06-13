<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta name="theme-color" content="#ff7c00" />
		<meta name="description" content="Eat Good Feel Good " />
    	<meta name="keywords" content="Fondazione, Ikaros, Bar, Attività, Studenti, Calcio, Scuola, Superiore" />
    	<meta name="author" content="Vinay Rathour" />
		<title>Menù Page - Fondazione Ikaros Bar</title>
		<link rel="shortcut icon" href="{{ url("/images/Site-Favicons/favicon.png") }}" />
      <link rel="stylesheet" type="text/css" href="{{ url("/lib/Dancing-Script/font.css") }}" />
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/bootstrap-5.2.3/css/bootstrap.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/fontawesome-6.2.0/css/all.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/animate.style-4.1.1/animate.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/DataTables-Bootstrap/Bootstrap-5.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/DataTables/datatables.min.css") }}"/>
		<link rel="stylesheet" type="text/css" href="{{ url("/css/indexordini_style.css") }}" />
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
   	
   	<script type="text/javascript" >
			window.addEventListener('scroll', function() {
  				var scrollIndicator = document.querySelector('.progress-bar');
  				var maxScroll = document.documentElement.scrollHeight - window.innerHeight;
  				var progress = (window.pageYOffset / maxScroll) * 100;
  				scrollIndicator.style.width = progress + '%';
  				scrollIndicator.style.position = 'fixed';
			});
		</script>
   	
   	<div class="scroll-indicator">
  			<div class="progress-bar"></div>
		</div>
		
		<!-- Page Block Message -->
		<style type="text/css">
			.overlay {
      		position: fixed;
  				top: 0;
  				left: 0;
  				width: 100%;
  				height: 100%;
  				background-color: rgba(0, 0, 0, 0.9);
  				z-index: 88;
  				text-align: center;
  				justify-content: center;
  				align-items: center;
  				color: white;
    		}
		</style>		
  		
  		<div class="overlay" id="pageblock">
    		<main class="animate__animated animate__fadeInUp animate__delay-1s mt-3 px-3">
      		<div class="my-4">
        			<p class="h2 mb-0 pb-3 px-3">Sono ancora le...</p>
        			<p class="mb-0 pb-3 px-3 fw-bold"><span style="font-size: 55px" id="clock"></span></p>
        			<p class="mb-0 pb-3 px-3"><img src="https://em-content.zobj.net/source/microsoft-teams/337/face-with-raised-eyebrow_1f928.png" style="width: 100px; pointer-events: none;" draggable="false" alt="mmm..." /></p>
        			<p class="h6 mb-0 px-3">Direi che manca ancora un bel pò di tempo all'apertura del &#160;<i class="bar-font" style="font-size: 1.5rem;">Bar</i>&#160; Online.</p>
        			<p class="h6 mb-0 pb-3 px-3">La pagina Menù verrà riaperta alle <span class="fs-6 badge bg-primary">8:00 am</span> e non prima.</p>
        	   	<hr style="border: 2px solid white; opacity: 100;">
        		   <p class="h6 mb-0 pt-3 px-3">Per tanto puoi gestire il tuo account cliccando sull'icona ( <i class="fa-solid fa-bars"></i> ) o facendo una partita a Tic-Tac-Toe.</p>
        		   <button onclick="location.href='/game'" class="btn btn-light btn-lg rounded-5 mt-4"><i class="fa-solid fa-gamepad"></i>&#160; Gioca!</button>					      		
      		</div>
    		</main>
  		</div>		
		
		<script type="text/javascript" >
			function displayTime() {
  				var currentTime = new Date();
  				var hours = currentTime.getHours();
  				var minutes = currentTime.getMinutes();
  				var seconds = currentTime.getSeconds();
  				hours = (hours < 10 ? "0" : "") + hours;
  				minutes = (minutes < 10 ? "0" : "") + minutes;
  				seconds = (seconds < 10 ? "0" : "") + seconds;
  				var timeString = hours + " : " + minutes + " : " + seconds;
  				document.getElementById("clock").innerHTML = timeString;
			}
			setInterval(displayTime, 1000);

			////////////////////////////////////////////////////////////////////

			var now = new Date();
			var hour = now.getHours();
			if (hour >= 8 && hour < 9) {
  				document.getElementById("pageblock").style.display = "none";
			} else {
  				document.getElementById("pageblock").style.display = "flex";
			}
		</script>
	
		<!-- Side Navigation Bar -->
		<span id="burger" onclick="openNav()" class="animate__animated animate__fadeInRight">&#160;&#160;<i class="fa-solid fa-bars fa-lg"></i>&#160;&#160;</span>
		<div id="home-nav" class="home-navigation">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa-solid fa-xmark fa-lg"></i></a>
   		<img class="second-logo" src="/images/Logo/ikaros-second-logo.png" draggable="false" alt="fondazioneikaros">
   		<a href="/">Pagina Home</a>
   		<a href="/contact">Informazioni e contatti</a>
   		<hr style="border: solid 1px white;">
   		<div style="color: white; padding: 0px 8px 8px 25px; margin-bottom: -15px; width: 99%;">
   			<p class="mb-0"><img src="https://em-content.zobj.net/source/microsoft-teams/337/waving-hand_1f44b.png" alt="hello" style="width: 28px; margin-left: -5px; margin-right: 5px; margin-bottom: 15px; pointer-events: none;">Ciao {{ Auth::user()->name }}.</p>
        		<p class="mb-3">Queste sono le azioni che puoi fare nel tuo account per ora:</p>
        	</div>
        	<button type="button" onclick="location.href='/profile'" class="btn btn-outline-light rounded-5 mt-1 mb-2" style="margin-left: 25px;"><i class="fa-solid fa-marker"></i>&#160; Modifica l'account</button>
        	<button type="button" class="btn btn-outline-info rounded-5" data-bs-toggle="modal" data-bs-target="#infoModal" style="margin-left: 25px;"><i class="fa-solid fa-circle-info"></i>&#160; Documentazione</button>
        	<a href="{{ route('logout') }}"><button type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline-danger rounded-5"><i class="fa-solid fa-right-from-bracket"></i>&#160; Esci dall'area privata</button></a>
        	<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        		@csrf
     		</form>
   		<hr style="border: solid 1px white;">
 			<a href="https://www.fondazioneikaros.org/dona-sostieni-la-fondazione/"><i class="fa-solid fa-hand-holding-heart"></i>&#160; Sostieni la Fondazione</a>
   		<a href="https://www.fondazioneikaros.org/blog/"><i class="fa-solid fa-rss"></i>&#160; News & Blog</a>
			<hr style="border: solid 1px white;">
   		<a href="https://www.fondazioneikaros.org/" class="text-nav-fav"><img src="/images/Site-Favicons/favicon.png" draggable="false" alt="FondazioneIkarosLogo" class="img-favicon1"> Fondazione Ikaros</a>
   		<a href="https://www.istitutopolitecnico.org/" class="text-nav-fav"><img src="/images/Site-Favicons/favicon-istitutopolitecnico.png" draggable="false" alt="IstitutoPolitecnicoLogo" class="img-favicon2"> Istituto Politecnico</a>
			<hr style="border: solid 1px white;">
			<div class="imp-note">
				<p>Avviso per i Talenti e Insegnanti: </p>
				<p>É vietato condividere le vostre informazioni relative a questo sito con qualcuno. Grazie!</p>
			</div>
			<hr style="border: solid 1px white;">
			<a href="/admin/home" target="_blank" style="font-size: 13px; color: #0088ff; width: 300px; margin-bottom: 12px;"><i class="fa-solid fa-gavel fa-lg"></i> &#160; Area riservata per gli Amministratori</a>
		</div>
		<!-- Product Table -->
		<img src="images/svg/layered-steps-top-cube.svg" alt="top-cube" class="cubes-img">
		<div class="container-sm">
    		<br>
    		<div class="animate__animated animate__fadeIn animate__delay-1s align-items-center my-4">
        		<div class="row">
            	<div class="col-md-12 mb-3 ps-3 pe-3">
                	<h2 class="justify-content-start float-start fw-bold" style="margin-left: 4px;"><i class="fa-solid fa-list"></i>&#160; Lista dei prodotti</h2>
            	</div>
        		</div>
    		</div>
    		<div class="row" id="cardsContainer" data-masonry='{"percentPosition": true }'>
        		@foreach($prodotti as $prodotto)
        			<div class="col-sm-6 col-lg-4 p-3">
            		<div class="card rounded-5 shadow-lg">
                		<img src="{{$prodotto->url_img}}" class="card-img-top" style="border-radius: 2rem 2rem 0 0; pointer-events: none;" alt="{{$prodotto->nome_prod}}">
                		<div class="card-body">
                    		<h4 class="card-title">{{$prodotto->nome_prod}}</h4>
                    		<p class="card-text h5">Prezzo: &#160;€ {{$prodotto->prezzo}}</p>
                    		<hr style="margin: 14px 0 16px 0">
                    		<div class="d-grid gap-2">
                        	<button class="btn btn-primary btn-lg rounded-5" style="--bs-btn-font-size: 1.05rem;" onclick="location.href='{{ route('add.to.cart', $prodotto->id) }}'" role="button" type="submit"><i class="fa-solid fa-cart-shopping"></i> &#160; Aggiungi al Carrello</button>
                    		</div>
                		</div>
            		</div>
        			</div>
        		@endforeach
    		</div>
		</div>
		<br><br>
		<!-- Modal with some informations -->
		<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable">
   			<div class="modal-content rounded-4">
      			<div class="modal-header">
        				<h1 class="modal-title fs-5"><i class="fa-solid fa-circle-info"></i>&#160; Guida su come usare il &#160;<i class="bar-font">Bar</i>&#160; online.</h1>
        				<button type="button" class="btn-close me-1" data-bs-dismiss="modal" aria-label="Close"></button>
      			</div>
      			<div class="modal-body" style="height: 500px;">
						<div class="accordion" id="accordion">
  							<div>
  								<h6>Vedo che hai difficoltà o domande che ti girano per la testa. Ti invito a dare un'occhiata qui sotto alle domande più comuni che uno può fare, con le risposte. </h6>
  								<h6>Ma se nessuna di queste è la tua domanda allora clicca sul pulsante <span class="badge bg-primary">Domande? Clicca qui</span> e inviaci un'email senza esitare.</h6>
							</div>
							<hr>
  							<div class="accordion-item">
    							<h6 class="accordion-header" id="headingOne">
      							<button class="accordion-button collapsed border-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
      								<div class="col-1"><i class="fa-solid fa-dice-one fa-spin fa-lg"></i></div>
      								<div class="col-10 ms-2"> Come funziona la pagina ordini?</div>
      							</button>
    							</h6>
    							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
      							<div class="accordion-body">
										<div style="max-width: 425px">
											<small><i class="fa-solid fa-caret-right"></i> &#160; La pagina ordini, è un'area del sito privata che da benvenuto solo a quelli che hanno l'account per ordinare al Bar (cioè i Talenti e Staff). Nessun'altro può accedere a quest'area. Parlando di come funziona è molto semplice da usare. Quando ti trovi in questa pagina, ti basta scorrere, scegliere il prodotto e cliccare sul pulsante <span class="badge bg-primary">Aggiungi al Carrello</span> e così il tuo prodotto verrà aggiunto al tuo carrello.</small>
										</div>
      							</div>
    							</div>
  							</div>
  							<div class="accordion-item">
    							<h6 class="accordion-header" id="headingTwo">
      							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      								<div class="col-1"><i class="fa-solid fa-dice-two fa-spin fa-lg"></i></div>
      								<div class="col-10 ms-2"> Perchè non trovo il prodotto che voglio?</div>
      							</button>
    							</h6>
    							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
      							<div class="accordion-body">
										<div>
      									<small><i class="fa-solid fa-caret-right"></i> &#160; Se non trovi il prodotto che vuoi, significa che quel prodotto per oggi non è disponibile. Quando sarà disponibile verrà visualizzato nella pagina ordini. </small>
      								</div>
      							</div>
    							</div>
  							</div>
  							<div class="accordion-item">
    							<h6 class="accordion-header" id="headingThree">
      							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      								<div class="col-1"><i class="fa-solid fa-dice-three fa-spin fa-lg"></i></div>
      								<div class="col-10 ms-2"> Come visualizzo il mio carrello?</div>
      							</button>
    							</h6>
    							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
      							<div class="accordion-body">
										<div>
      									<small><i class="fa-solid fa-caret-right"></i> &#160; Per visualizzare il carrello non è difficile, ti basta cliccare il pulsante con l'icona ( <i class="fa-solid fa-cart-shopping"></i> ) nel lato a sinistra della pagina.</small>
      								</div>
      							</div>
    							</div>
  							</div>
  							<div class="accordion-item">
    							<h6 class="accordion-header" id="headingFour">
      							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      								<div class="col-1"><i class="fa-solid fa-dice-four fa-spin fa-lg"></i></div>
      								<div class="col-10 ms-2"> Come modifico la quantità del prodotto? Lo posso anche toglierlo?</div>
      							</button>
    							</h6>
    							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
      							<div class="accordion-body">
										<div>
											<small><i class="fa-solid fa-caret-right"></i> &#160; Certamente, puoi sia rimuovere il prodotto dal tuo carrello, che modificare la quantità! Per fare questa azione ti basta cliccare sul ( <i class="fa-solid fa-cart-shopping"></i> ), poi cliccare sul pulsante <span class="badge bg-primary">Visualizza tutti</span>.</small>
										</div>
										<div class="row py-2">
      									<div class="col-xxl-4">
      										<img src="/images/info-img/3.png" alt="img 3" class="npe border border-dark shadow-lg rounded" style="width: 100%" />
      									</div>
    									</div>
    									<small><i class="fa-solid fa-caret-right"></i> &#160; Cliccando verrai reindirizzato alla pagina dove visualizzerai il tuo carrello in modo completo! Qui potrai modificare la quantità come tu desideri, e rimuovere il prodotto che non desideri ordinarlo. </small>
      							</div>
    							</div>
  							</div>
  							<div class="accordion-item">
    							<h6 class="accordion-header" id="headingFive">
      							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      								<div class="col-1"><i class="fa-solid fa-dice-five fa-spin fa-lg"></i></div>
      								<div class="col-10 ms-2"> Come confermo il mio ordine?</div>
      							</button>
    							</h6>
    							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
      							<div class="accordion-body">
										<div style="max-width: 450px;">
											<small><i class="fa-solid fa-caret-right"></i> &#160; Per confermare l'ordine ti basta premere sul pulsante <span class="badge bg-success">Vai il Checkout</span>. Verrai reindirizzato alla pagina <b>Riepilogo dell'ordine</b> dove visualizzerai per l'ultima volta la lista dei prodotti che tu hai scelto, il prezzo del prodotto, la quantità e in fine il totale.</small><br />
    										<small><i class="fa-solid fa-caret-right"></i> &#160; Alla fine scegli il metodo di pagamento, lo esegui. (Consiglio: controlla bene la Classe e il tuo Nome e Cognome).</small><br />
    										<small><i class="fa-solid fa-caret-right"></i> &#160; Quando avrai pagato, il tuo ordine verrà inviato al Bar, e ti arriverà un'email con la conferma, e verrai reindirizzato alla pagina <b>ordini</b>.</small><br />
										</div>
      							</div>
    							</div>
  							</div>
  							<div class="accordion-item">
    							<h6 class="accordion-header" id="headingSix">
      							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      								<div class="col-1"><i class="fa-solid fa-dice-six fa-spin fa-lg"></i></div>
      								<div class="col-10 ms-2"> Posso modificare i miei dati?</div>
      							</button>
    							</h6>
    							<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion">
      							<div class="accordion-body">
										<div style="max-width: 450px;">
    										<small><i class="fa-solid fa-caret-right"></i> &#160; Sì! Ma, diamo il concesso agli utenti di modificare <b>solo</b> la propria Classe. Se desideri modificare il tuo Nome e Cognome (Perchè è scritto sbagliato), ci puoi inviare un'email cliccando <a href="/contact#supportform" class="btn btn-sm btn-dark rounded-5">Qui</a>.</small>
											<div class="row py-2">
      										<div class="col-xxl-4">
      											<img src="/images/info-img/account-info-edit.png" alt="img 7" class="npe border border-dark shadow-lg rounded" style="width: 100%" />
      										</div>
    										</div>
											<hr>
											<small><i class="fa-solid fa-caret-right"></i> &#160; In più è concesso agli utenti di fare <b>Log Out</b> cioè uscire (Immagine 1) dal proprio account e di <b>Reimpostare</b> la password (Immagine 2) se la dimenticano dalla pagina <b>Log In</b>.</small>											
											<div class="row py-2">
      										<div class="col-6">
      											<small>(Immagine 1)</small>
      											<img src="/images/info-img/7.png" alt="img 8" class="npe border border-dark shadow-lg rounded" style="width: 100%" />
      										</div>
      										<div class="col-6">
      											<small>(Immagine 2)</small>
      											<img src="/images/info-img/8.png" alt="img 9" class="npe border border-dark shadow-lg rounded" style="width: 100%" />
      										</div>
    										</div>
										</div>
      							</div>
    							</div>
  							</div>
							<div class="accordion-item">
    							<h6 class="accordion-header" id="headingSeven">
      							<button class="accordion-button collapsed" type="button" style="color: orange;" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      								<div class="col-1"><i class="fa-solid fa-user-shield fa-lg fa-fade" style="--fa-animation-duration: 2s; --fa-fade-opacity: 0.6;"></i></div>
      								<div class="col-10 ms-2"> Vuoi sapere di più sulla privacy dei tuoi dati?</div>
      							</button>
    							</h6>
    							<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordion">
      							<div class="accordion-body">
										<div style="max-width: 450px;">
    										<small><i class="fa-solid fa-caret-right"></i> &#160; Per sapere di più sulla privacy dei dati &#160;<button type="submit" onclick="location.href='https://www.fondazioneikaros.org/privacy-e-cookie-policy/'" class="btn btn-sm btn-dark rounded-5" style="margin-bottom: 4px">Clicca qui</button></small>
										</div>
      							</div>
    							</div>
  							</div>  							
  							<div class="accordion-item">
    							<h6 class="accordion-header" id="headingEight">
      							<button class="accordion-button collapsed" type="button" style="color: red" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
      								<div class="col-1"><i class="fa-solid fa-circle-exclamation fa-lg fa-beat-fade" style="--fa-beat-fade-opacity: 0.1; --fa-beat-fade-scale: 1.25;"></i></div>
      								<div class="col-10 ms-2"> Usa lo strumento in modo civile.</div>
      							</button>
    							</h6>
    							<div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordion">
      							<div class="accordion-body">
										<div style="max-width: 430px;">
											<small><i class="fa-solid fa-caret-right"></i> &#160; Questo più che un informazione è un avviso. Questa appilicazione web è stata creata con l'obbiettivo di facilitare gli ordini del Bar. Se c'è presenza di un uso scorretto, verranno presi provvedimenti.</small>									
										</div>
      							</div>
    							</div>
  							</div>
						</div>
						<hr>
      				<p style="font-size: 12px; margin-bottom: -3px">PS: Il servizio è aperto solo per la Fondazione Ikaros (Calcio).</p>
      			</div>
      			<div class="modal-footer">
        				<button type="button" onclick="location.href='/contact#supportform'" class="btn btn-light rounded-5">Domande? Clicca qui</button>
        				<button type="button" class="btn btn-primary rounded-5" data-bs-dismiss="modal">Tutto chiaro!</button>
      			</div>
    			</div>
  			</div>
		</div>
		<!-- Cart Modal -->
		<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
  			<div class="modal-dialog modal-dialog-scrollable">
    			<div class="modal-content rounded-4">
      			<div class="modal-header">
        				<h1 class="modal-title fs-5" id="cartModalLabel"><i class="fa-solid fa-cart-shopping fa-lg"></i>&#160; Il tuo Carrello</h1>
					   <button type="button" class="btn-close me-1" data-bs-dismiss="modal" aria-label="Close"></button>
      			</div>
      			<div class="modal-body">
      				<div class="row mt-1">
      					<div class="col-6">
      						<h1 class="text-center fs-6 pt-1"><i class="fa-solid fa-list-ol"></i>&#160; Prodotti Selezionati: <small class="text-danger fs-5">{{ count((array) session('cart')) }}</small></h1>
								@php $total = 0 @endphp
                  		@foreach((array) session('cart') as $id => $details)
                  			@php $total += $details['prezzo'] * $details['quantity'] @endphp
                  		@endforeach
      					</div>
      					<div class="col-6 border-start">
								<h1 class="text-center fs-6 pt-1"><i class="fa-solid fa-coins"></i>&#160; Prezzo Totale: <small class="text-success fs-5">€ {{ $total }}</small></h1>
      					</div>
      				</div>
      				<hr>          	
                  @if(session('cart'))
                     @foreach(session('cart') as $id => $details)
								<div class="d-flex">
      						   <img src="{{ $details['image'] }}" alt="product" width="23%" height="23%" class="mg-thumbnail shadow" style="pointer-events: none; border-radius: 15px;" />
     								<div class="mx-3 lh-sm w-100">
          							<p class="fs-4 fw-bold">{{ $details['nome'] }}</p>
         	 						<p class="fs-6 text-success" style="margin-top: -8px"><u>Prezzo: € {{ $details['prezzo'] }}</u></p>
        								<p class="fs-6" style="margin-top: -6px">Quantità: {{ $details['quantity'] }}</p>
      							</div>
    							</div>
    							<hr>
    						@endforeach
               	@endif
      			</div>
      			<div class="modal-footer">
        				<button type="button" class="btn btn-light rounded-5" data-bs-dismiss="modal">Chiudi</button>
        				<button type="button" onclick="location.href='{{ route('cart') }}'" class="btn btn-primary rounded-5" ><i class="fa-solid fa-eye"></i>&#160; Visualizza tutti</button>
      			</div>
    			</div>
  			</div>
		</div>	
		<!-- Site Footer -->
		<div class="container-md">
			<footer class="d-flex flex-wrap justify-content-between align-items-center pt-3 my-3 border-top">
    			<div class="col-md-4 d-flex align-items-center">
      			<a href="/" class="mb-1 me-2 mb-md-0 text-muted text-decoration-none lh-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Torna alla Home">
        				<img src="/images/Site-Favicons/favicon.png" alt="FondazioneIkarosLogo" class="footer-logo" draggable="false">
      			</a>
      			<span class="mb-3 mb-md-0"><i class="fa-regular fa-copyright"></i> 2022 - <span id="year"></span> Fondazione Ikaros <i class="bar-font">Bar</i></span>
    			</div>
      		<ul class="nav col-md-5 justify-content-end list-unstyled">
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
		<img src="images/svg/layered-steps-down-cube.svg" alt="down-cube" class="cubes-img">
		<!-- Redirect to confirm the order -->
		<button type="button" title="cart" id="gocheckout" class="animate__animated animate__fadeInLeft" data-bs-toggle="modal" data-bs-target="#cartModal">&#160;&#160;<i class="fa-solid fa-cart-shopping fa-lg"></i>&#160;&#160;<span class="position-absolute top-0 translate-badge badge rounded-pill bg-danger">{{ count((array) session('cart')) }}</span></button>
		<!-- Reload Page -->
		<button type="button" id="reload" class="animate__animated animate__fadeInLeft" onclick="location.reload();" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Qualcosa non va? Ricarica la pagina cliccando sul pulsante!">&#160;&#160;<i class="fa-solid fa-rotate fa-spin fa-lg"></i>&#160;&#160;</button>
		<!-- Page Info -->
		<button type="button" id="info" title="info" class="animate__animated animate__fadeInLeft" data-bs-toggle="modal" data-bs-target="#infoModal">&#160;&#160;<i class="fa-solid fa-circle-info fa-beat-fade fa-fade fa-lg"></i>&#160;&#160;</button>
		<!-- go to top button -->
		<button onclick="topFunction()" id="GoTop" title="Go to top" class="animate__animated animate__fadeInLeft">&#160;&#160;<i class="fa-solid fa-circle-arrow-up fa-lg"></i>&#160;&#160;</button>

		<!-- JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
		<script src="/lib/bootstrap-5.2.3/js/bootstrap.min.js" type="text/javascript"></script>		
		<script src="/lib/fontawesome-6.2.0/js/all.min.js" type="text/javascript"></script>		
		<script src="/lib/bootstrap-5.2.3/js/bootstrap.bundle.min.js" type="text/javascript"></script>	
		<script type="text/javascript" >
			function openNav() {
  				document.getElementById("home-nav").style.width = "320px";
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
