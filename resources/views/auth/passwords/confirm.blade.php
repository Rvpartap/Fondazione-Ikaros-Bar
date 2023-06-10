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
		<title>Confirm Password Page - Fondazione Ikaros Bar</title>
		<link rel="shortcut icon" href="{{ url("/images/Site-Favicons/favicon.png") }}" />
      <link rel="stylesheet" type="text/css" href="{{ url("/lib/Dancing-Script/font.css") }}" />
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/bootstrap-5.2.3/css/bootstrap.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/fontawesome-6.2.0/css/all.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/animate.style-4.1.1/animate.min.css") }}" />
		<link rel="stylesheet" type="text/css" href="{{ url("/css/confirm_style.css") }}" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="/lib/bootstrap-5.2.3/js/bootstrap.bundle.min.js" type="text/javascript"></script>		
		<script src="/lib/fontawesome-6.2.0/js/all.min.js" type="text/javascript"></script>	
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
   	<button onclick="location.href='/'" id="gohome" title="Back To Home" class="animate__animated animate__fadeInRight">&#160;&#160;<i class="fa-solid fa-house-chimney fa-lg"></i>&#160;</button>
   	<button onclick="location.href='/home'" id="goauth" title="Back to Private Area" class="animate__animated animate__fadeInLeft">&#160;<i class="fa-solid fa-house-lock fa-lg"></i>&#160;&#160;</button>
		<div class="py-3">&#160;
			<div class="modal modal-signin position-static d-block py-3 mt-3 form-signin w-100 m-auto animate__animated animate__fadeInUp" tabindex="-1" role="LoginForm" id="modalLogin">
  				<div class="modal-dialog" role="document">
					<div class="modal-content rounded-5 shadow-lg">
      		   	<div class="modal-header p-5 pb-4 border-bottom-0">
        			  		<h6 class="fw-bold mb-0 font-size"><img src="/images/Site-Favicons/favicon.png" class="mini-logo" draggable="false" /> Conferma la Password Prima di Continuare...</h6>
      		   	</div>
      		  		<div class="modal-body p-5 pt-0">
        		   		<form method="POST" action="{{ route('password.confirm') }}">
        		   			@csrf
          		   		<div class="form-floating mb-3">
          			   		<input type="password" class="form-control rounded-4 @error('password') is-invalid @enderror" id="confirmPassword" name="confirmPassword" placeholder="Password" autocomplete="current-password" required="true">
           			   		<label for="confirmPassword">&#160;<i class="fa-solid fa-key fa-lg"></i> &#160; Inserisci la tua Password<i style="color: red;">*</i></label>
          			   	</div>
          			   	<button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Conferma</button>
          			   	@if (Route::has('password.request'))
                        	<button style="margin-left: -14px" type="button" class="btn btn-link fs-6 text-decoration-none mb-2" onclick="location.href='{{ route('password.request') }}'">Password dimenticata?</button>
                     	@endif
          			  		<br>
  			 			  		<p class="text-center note">Ingressi con simbolo <b style="color: red">*</b> non possono essere vuoti.</p>
        			  			@error('password')
                           <span class="invalid-feedback" role="alert">
                           	<strong>{{ $message }}</strong>
                        	</span>
                        @enderror
        			  		</form>
        			  		<hr>
        			  		<p class="text-center tos fw-bold">Dai un'occhiata alla pagina <a href="https://www.fondazioneikaros.org/privacy-e-cookie-policy/" class="link-decoration">Privacy e Cookie Policy</a></p>
				   		<p class="text-center mb-0 credits fw-bold"><i class="fa-regular fa-copyright"></i> <a href="/" class="link-decoration">Fondazione Ikaros Bar</a> - <a href="https://fondazioneikaros.org" class="link-decoration">Fondazione Ikaros</a></p>
				   		<p class="text-center mb-0 credits fw-bold">Progettato e codificato da <a href="https://www.artglobal.it" target="_blank" class="link-decoration">Artglobal.it</a> & <a href="https://linktr.ee/rvpartap" target="_blank" class="link-decoration" >Rathour Vinay</a></p>
      	   		</div>
    	   		</div>
  	   		</div>
     		</div>
  		</div>
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
