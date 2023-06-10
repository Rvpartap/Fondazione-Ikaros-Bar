<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta name="theme-color" content="#ff7c00" />
		<title>Product Create Page - Fondazione Ikaros Bar</title>
		<link rel="shortcut icon" href="{{ url("/images/Site-Favicons/favicon.png") }}" />
      <link rel="stylesheet" type="text/css" href="{{ url("/lib/Dancing-Script/font.css") }}" />
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/bootstrap-5.2.3/css/bootstrap.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/fontawesome-6.2.0/css/all.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/animate.style-4.1.1/animate.min.css") }}" /><link rel="stylesheet" type="text/css" href="{{ url("/css/createprod_style.css") }}" />
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
		<button onclick="location.href='/prodotti'" id="gotofood" class="animate__animated animate__fadeInRight">&#160;&#160;<i class="fa-solid fa-gavel fa-lg"></i>&#160; Amministra i Prodotti</button>
		<button onclick="location.href='/admin/home'" id="goback" class="animate__animated animate__fadeInLeft">Torna alla pagina Admin &#160;<i class="fa-solid fa-reply fa-lg"></i>&#160;&#160;</button>
		<center>
   		<img src="/images/Logo/fondazioneikaros-logo.svg" class="logo animate__animated animate__fadeInUp" draggable="false" />
		</center>
		<div class="modal modal-signin position-static d-block py-4 animate__animated animate__fadeInUp" tabindex="-1" role="dialog" id="modalSignin">
			<div class="modal-dialog" role="document">
   			<div class="modal-content rounded-5 shadow">
      			<div class="modal-header p-5 pb-4 border-bottom-0">
						<h6 class="fw-bold mb-0 font-size"><i class="fa-solid fa-cart-plus fa-lg"></i>&#160; Crea un Nuovo Prodotto</h6>
					</div>
      			<div class="modal-body p-5 pt-0">
      				<form method="post" action="{{ route('prodotti.store') }}" enctype="multipart/form-data">
      					@csrf
      					<div class="form-floating mb-3">
         					<input type="text" class="form-control rounded-4" name="nome_prod" id="nome_prod" placeholder="Nome del Prodotto" required="true">
            				<label for="nome_prod">&#160;<i class="fa-solid fa-burger"></i> &#160; Nome del Prodotto<i style="color: red">*</i></label>
         				</div>
      			      <div class="form-floating mb-3">
            				<input type="text" class="form-control rounded-4" name="url_img" id="url_img" placeholder="Immagine del Prodotto" required="true">
            				<label for="url_img">&#160;<i class="fa-solid fa-image"></i> &#160; URL - Immagine del Prodotto<i style="color: red">*</i></label>
         				</div>
      					<div class="form-floating mb-3">
            				<input type="text" class="form-control rounded-4" name="prezzo" id="prezzo" placeholder="Prezzo del Prodotto" required="true">
            				<label for="prezzo">&#160;<i class="fa-solid fa-coins"></i> &#160; Prezzo del Prodotto<i style="color: red;">*</i></label>
         				</div>
         				<button type="submit" class="w-100 btn btn-lg rounded-4 btn-primary mb-3">Crea il Prodotto</button>
							@if ($errors->any())
      						<div class="alert alert-danger">
        							<ul>
            						@foreach ($errors->all() as $error)
              							<li>{{ $error }}</li>
            						@endforeach
        							</ul>
      						</div>
    						@endif       				
         				<p class="note mt-3">Ingressi con simbolo <b style="color: red">*</b> non possono essere vuoti.</p>
       				</form>
					</div>
				</div>
			</div>
		</div>
		<p class="text-center tos fw-bold">Dai un'occhiata alla pagina <a href="https://www.fondazioneikaros.org/privacy-e-cookie-policy/" class="link-decoration">Privacy e Cookie Policy</a></p>
		<p class="text-center credits fw-bold"><i class="fa-regular fa-copyright"></i> <a href="/" class="link-decoration">Fondazione Ikaros Bar</a> - Progettato e codificato da <a href="https://www.artglobal.it" target="_blank" class="link-decoration">Artglobal.it</a> & <a href="https://linktr.ee/rvpartap" target="_blank" class="link-decoration" >Rathour Vinay</a></p>
		<!-- JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="/lib/bootstrap-5.2.3/js/bootstrap.min.js" type="text/javascript"></script>		
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