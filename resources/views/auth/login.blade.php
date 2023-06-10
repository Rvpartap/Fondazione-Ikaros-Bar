<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta name="theme-color" content="#ff7c00" />
		<meta name="description" content="Eat Good Feel Good :)" />
    	<meta name="keywords" content="Fondazione, Ikaros, Bar, Attività, Studenti, Calcio, Scuola, Superiore" />
    	<meta name="author" content="Vinay Rathour" />
		<title>Login Page - Fondazione Ikaros Bar</title>
		<link rel="shortcut icon" href="{{ url("/images/Site-Favicons/favicon.png") }}" />
      <link rel="stylesheet" type="text/css" href="{{ url("/lib/Dancing-Script/font.css") }}" />
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/bootstrap-5.2.3/css/bootstrap.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/fontawesome-6.2.0/css/all.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/animate.style-4.1.1/animate.min.css") }}" />
      <link rel="stylesheet" type="text/css" href="{{ url("/css/login_style.css") }}" />
   </head>
   <body class="container">
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
		
   	<button onclick="location.href='/'" id="gohome" class="animate__animated animate__fadeInRight">&#160;&#160;<i class="fa-solid fa-house-chimney fa-lg"></i>&#160;</button>
   	<button class="impinfo animate__animated animate__fadeInLeft" data-bs-toggle="modal" data-bs-target="#impinfo">&#160;<i class="fa-solid fa-triangle-exclamation fa-shake fa-lg"></i>&#160;&#160;</button>
		<center>
   		<img src="/images/Logo/fondazioneikaros-logo.svg" class="logo animate__animated animate__fadeInUp" draggable="false" />
		</center>
		<br>
		<div class="modal modal-signin position-static d-block py-4 animate__animated animate__fadeInUp" tabindex="-1" role="LoginForm" id="modalLogin">
  			<div class="modal-dialog" role="document">
   			<div class="modal-content rounded-5 shadow">
      			<div class="modal-header p-5 pb-4 border-bottom-0">
        				<h6 class="fw-bold mb-0 font-size"><i class="fa-solid fa-right-to-bracket fa-lg"></i> &#160; Accedi con le tue credenziali</h6>
      			</div>
      			<div class="modal-body p-5 pt-0">
        				<form method="POST" action="{{ route('login') }}">
        					@csrf
          				<div class="form-floating mb-3">
            				<input type="email" id="email" placeholder="name@example.com" class="form-control rounded-4  @error('email') is-invalid @enderror" name="email" autocomplete="email" value="{{ old('email') }}" required="true">
            				<label for="email">&#160;<i class="fa-solid fa-at"></i> &#160; Indirizzo Email<i style="color: red">*</i></label>
          					@error('email')
                     		<span class="invalid-feedback" role="alert">
                        		<strong>{{ $message }}</strong>
                        	</span>
                     	@enderror
          				</div>
          				<div class="form-floating mb-3">
            				<input type="password" id="password" placeholder="Password" class="form-control rounded-4 @error('password') is-invalid @enderror" name="password" autocomplete="current-password" required="true">
            				<label for="password">&#160;<i class="fa-solid fa-key"></i> &#160; Password<i style="color: red;">*</i></label>
          					@error('password')
                           <span class="invalid-feedback" role="alert">
                           	<strong>{{ $message }}</strong>
                        	</span>
                        @enderror
          				</div>
          				<button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Accedi</button>
          				@if (Route::has('password.request'))
                        <button style="margin-left: -14px" type="button" class="btn btn-link fs-6 text-decoration-none" onclick="location.href='{{ route('password.request') }}'">Password dimenticata?</button>
                     @endif
  			 				<p class="note">Ingressi con simbolo <b style="color: red">*</b> non possono essere vuoti.</p>
        				</form>
      			</div>
    			</div>
  			</div>
		</div>
		<p class="text-center tos fw-bold">Dai un'occhiata alla pagina <a href="https://www.fondazioneikaros.org/privacy-e-cookie-policy/" class="link-decoration">Privacy e Cookie Policy</a></p>
		<p class="text-center credits fw-bold"><i class="fa-regular fa-copyright"></i> <a href="/" class="link-decoration">Fondazione Ikaros Bar</a> - Progettato e codificato da <a href="https://www.artglobal.it" target="_blank" class="link-decoration">Artglobal.it</a> & <a href="https://linktr.ee/rvpartap" target="_blank" class="link-decoration" >Rathour Vinay</a></p>
		<!-- Remember Modal -->
		<div class="modal fade" id="impinfo" tabindex="-1" aria-labelledby="impInfoModalLabel" aria-hidden="true">
  			<div class="modal-dialog modal-dialog-scrollable">
    			<div class="modal-content rounded-4" style="cursor: help">
      			<div class="modal-header">
        				<h1 class="modal-title fs-5 pt-2" id="impInfoModalLabel"><img src="https://em-content.zobj.net/source/microsoft-teams/337/thinking-face_1f914.png" style="width: 40px; margin-top: -15px; pointer-events: none;" draggable="false" alt="ooofff_:/">&#160; Da Ricordare:</h1>
        				<button type="button" class="btn-close me-1" data-bs-dismiss="modal" aria-label="Close"></button>
     				</div>
      			<div class="modal-body">
      				<div class="mb-4 mt-1">
      					<p>Facciamo ricordare ai Talenti e Insegnanti che quando cliccano su <span class="badge bg-primary">ACCEDI</span> viene automaticamente abilitato il <b>Ricordami</b> ciò significa che se voi fate l'accesso e poi uscite dall'area privata, potete entrare nell'area privata direttamente senza accedere di nuovo. Ma, se cliccate sul pulsante <span class="badge bg-danger">Esci dall'area privata</span> il <b>Ricordami</b> viene disabilitato e dovrete accedere di nuovo per entrare nell'area privata.</p>
      					<hr>
      					<p class="pb-2">Ricordiamo anche di aggiornare i dati del proprio account ogni anno. In questo caso di aggiornare il dato <span class="badge bg-primary">CLASSE</span>. Il dato <span class="badge bg-primary">CLASSE</span> è un dato essenziale, per questo le informiamo specialmente di darci un'occhiata prima di confermare il proprio l'ordine.</p>      					
      					<p><i class="fa-solid fa-caret-right"></i>&#160; Vi chiederete come si fa? Non è difficile. Dovrete accedere all'area privata, cliccare sull'icona ( <i class="fa-solid fa-bars"></i> ), poi cliccare su <span class="badge bg-primary">Modifica l'account</span> che vi redirige alla pagina dove potrete modificare i vostri dati.</p>
      					<center class="pb-4 pt-2"><img src="/images/info-img/img-button.png" alt="img-button" draggable="false" width="100%" style="pointer-events: none;" class="rounded-4 shadow-lg" /></center>
							<p><i class="fa-solid fa-caret-right"></i>&#160; Nell pagina (come viene visualizzato nella foto qui sotto) cliccate sul "dropdown" e scegliete la classe in cui siete e poi cliccate su <span class="badge bg-primary">Aggiorna l'account</span>. Così il vostro dato <span class="badge bg-primary">CLASSE</span> verrà aggiornato.</p>      					
      					<center class="pt-2"><img src="/images/info-img/account-info-edit.png" alt="img-infoedit" draggable="false" width="100%" style="pointer-events: none;" class="rounded-4 shadow-lg" /></center>
						</div>      			
      			</div>
      			<div class="modal-footer">
        				<button type="button" class="btn btn-primary rounded-5" data-bs-dismiss="modal">&#160;<i class="fa-solid fa-thumbs-up"></i> &#160; Va bene!&#160;</button>
      			</div>
   			</div>
  			</div>
		</div>
		
		@include('cookieConsent::index')
		
		<!-- JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="/lib/bootstrap-5.2.3/js/bootstrap.bundle.min.js" type="text/javascript"></script>		
		<script src="/lib/fontawesome-6.2.0/js/all.min.js" type="text/javascript"></script>	
		<script type="text/javascript" >
			
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