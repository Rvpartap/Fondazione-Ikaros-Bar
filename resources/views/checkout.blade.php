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
		<title>Checkout Page - Fondazione Ikaros Bar</title>
		<link rel="shortcut icon" href="{{ url("/images/Site-Favicons/favicon.png") }}" />
      <link rel="stylesheet" type="text/css" href="{{ url("/lib/Dancing-Script/font.css") }}" />
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/bootstrap-5.2.3/css/bootstrap.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/fontawesome-6.2.0/css/all.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/animate.style-4.1.1/animate.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/DataTables-Bootstrap/Bootstrap-5.min.css") }}" />		
		<link rel="stylesheet" type="text/css" href="{{ url("/lib/DataTables/datatables.min.css") }}"/>
		<link rel="stylesheet" type="text/css" href="{{ url("/css/checkout_style.css") }}" />
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
   		<button type="button" onclick="location.href='/profile'" class="btn btn-outline-light rounded-5 my-1" style="margin-left: 25px;"><i class="fa-solid fa-marker"></i>&#160; Modifica l'account</button>
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
			<div class="animate__animated animate__fadeIn animate__delay-1s align-items-center my-3">
				<h2 class="float-start pb-2"><i class="fa-regular fa-circle-check"></i>&#160; <strong>Riepilogo dell'ordine</strong></h2>
			</div>
			<br /><br /><br /><br />
 			<div style="overflow-x: auto;" class="mb-3">
 				<table class="animate__animated animate__fadeIn animate__delay-1s table table-bordered">
            	<thead class="table-dark">
            		<tr>
                		<th scope="col" style="width: 300px"><i class="fa-solid fa-burger"></i>&#160; Prodotto</th>
                		<th scope="col" style="width: 160px"><i class="fa-solid fa-coins"></i>&#160; Prezzo</th>
                 		<th scope="col" style="width: 160px"><i class="fa-solid fa-arrow-down-1-9"></i>&#160; Quantità</th>
                		<th scope="col" style="width: 160px"><i class="fa-solid fa-euro-sign"></i>&#160; SubTotale</th>
             		</tr>
             	</thead>
             	<tbody>
             		@csrf
             		@php $total = 0 @endphp
             		@php $cart = request()->session()->get('cart'); @endphp
             		@foreach(session('cart') as $id => $details)
             		@php $subtotal = 0 @endphp
             		@php $conferma = 0 @endphp
             		@php $subtotal = $details['prezzo'] * $details['quantity'] @endphp
             		@php $total += $details['prezzo'] * $details['quantity'] @endphp
             		@php $res= array('data' => Carbon\Carbon::now()->toDateString(), 'nome' => Auth::user()->name, 'classe' => Auth::user()->classe) @endphp
				 		@php $det= array( 'prodotto' => $details['nome'], 'prezzo' => $details['prezzo'], 'quantity' => $details['quantity'], 'subtotale' =>  $subtotal, 'conferma' => '0' ) @endphp            
            		<tr>
                		<td>
                			<p style="width: 280px; margin-bottom: 0;">{{ $details['nome'] }}</p>
                		</td>
                		<td>
                			<p style="width: 160px; margin-bottom: 0;">&euro; {{ $details['prezzo'] }}</p>
                		</td>
                		<td>
                			<p style="width: 160px; margin-bottom: 0;">{{ $details['quantity'] }}</p>
                		</td>
                		<td>
                			<p class="text-success" style="width: 160px; margin-bottom: 0;">&euro; {{ $details['prezzo'] * $details['quantity'] }}</p>
                		</td>
            		</tr>
            		@php $subreport[$id] = $res + $det @endphp
            		@endforeach
            	</tbody>
            	<tfoot style="border: white;">
            		<td colspan="4">
            			@php $jsoncart = json_encode($subreport) @endphp
            			<!--{{ print_r($subreport, true) }}<br><br>{{ $jsoncart }} -->
            		</td>
            	</tfoot>
        		</table>
        		<!-- Generate a Json of the data -->
        		<input type="hidden" id="todb" value="{{ $jsoncart }}"/>
        	</div>
			<style type="text/css">
				table {
  					border-collapse: collapse;
  					border-spacing: 0;
  					width: 100%;
				}
				
				th, td {
  					text-align: left;
  					padding: 8px;	
				}
			</style>
			<hr>
			<div class="row pt-3 pb-2">
				<div class="animate__animated animate__fadeIn animate__delay-1s col-xxl-4">
					<h3 class="fs-3 float-start">
              		<strong>Totale Prezzo: € {{ $total }}</strong>
					</h3>
				</div>
			</div>
			<hr>
			<div class="animate__animated animate__fadeIn animate__delay-1s pt-3 pb-2">
				<div class="row">
					<div class="col-md-6 mt-3 mb-3">
						<ul class="list-group">
  							<li class="list-group-item">
  								<p class="h5 my-1"><i class="fa-solid fa-id-card-clip fa-lg"></i>&#160; <span style="margin-top: 10px;">Controlla i tuoi dati:</span></p>							
  							</li>
  							<li class="list-group-item">
  								<i class="fa-solid fa-signature"></i>&#160; Nome: &#160;<span class="fw-bold text-break">{{ Auth::user()->name }}</span>
  							</li>
  							<li class="list-group-item">
  								<i class="fa-solid fa-at"></i>&#160; E-Mail: &#160;<span class="fw-bold text-break">{{ Auth::user()->email }}</span>
  							</li>
  							<li class="list-group-item">
  								<i class="fa-solid fa-bars-staggered"></i>&#160; Classe: &#160;<span class="fw-bold text-break">{{ Auth::user()->classe }}</span>
  							</li>
  						</ul>								
					</div>
					<div class="col-md-6 mt-3">
						<ul class="list-group">
  							<li class="list-group-item">
								<p class="fs-6 mb-0 text-break" align="justify">	
									Se i tuoi dati sono giusti e anche la lista dei prodotti che tu hai scelto, puoi passare al pagamento scegliendo uno dei metodi presenti qui sotto.
									Una volta pagato verrai reindirizzato nella pagina <b>ordini</b>, ti arriverà un'email nella posta elettronica (@stu.fondazioneikaros.org) con la conferma del tuo ordine. 
									Se scegli il metodo di pagare via cassa, hai tempo solo dalle <b>8:00 am</b> fino le <b>9:00 am</b>. Se non paghi entro quell'ora il tuo ordine verrà <b style="text-decoration: underline;">cancellato</b>.
									Una cosa, non eliminare l'email, ti servirà per ritirare il tuo ordine!
								</p>
								<p class="pt-3" align="right"><i class="bar-font">Buon Spuntino! &#160;:)</i></p>
  							</li>
						</ul>
					</div>
				</div>
			</div>
			<hr>	
			<div class="animate__animated animate__fadeIn animate__delay-1s container-lg">
     			<div class="d-grid gap-2 mt-4 mb-2">	
     				<button id='save' onclick="sendData()" class="btn btn-success btn-lg rounded-5"><i class="fa-solid fa-cash-register fa-lg"></i>&#160; Paga in Cassa</button>
     			</div>
			
			<style type="text/css">
				.container-lg {
					max-width: 770px;
				}
			</style>
			<p class="my-2 text-center fs-2"><b>O</b></p>
			<script src="https://www.paypal.com/sdk/js?client-id=AfBu-JCGRfrdr4cIzrgPrJCNIPu-n5zGEGdJdJM9iuJAPMRCgQDTLm9pnlYdzWMd5F60yupWKwxWM4Le&currency=EUR"> </script>
    		<!-- Set up a container element for the button -->
   		<div id="paypal-button-container"></div>
   		<script type="text/javascript" > 		  
    			paypal.Buttons({
      		// Sets up the transaction when a payment button is clicked
      			createOrder: (data, actions) => {
        				return actions.order.create({
          				purchase_units: [{
          	    			description: "{{ Auth::user()->classe }}",
                			custom_id: "{{ Auth::user()->name }} - {{ Auth::user()->id }}",
            				amount: {
              					value: '{{ $total }}' // Can also reference a variable or function
            				}
          				}]
        				});
      			},
      			// Finalize the transaction after payer approval
      			onApprove: (data, actions) => {
        				return actions.order.capture().then(function(orderData) {
          			// Successful capture! For dev/demo purposes:
          				console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          				const transaction = orderData.purchase_units[0].payments.captures[0];
          				console.log('CallElem', transaction );
          				alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
          				var status_tr = transaction.status;
          				console.log('transazione avvenuta con stato', status_tr);
          				//se il pagamento è andato a buon fine           
          				if (status_tr === 'COMPLETED') {
          					console.log('Transazione completata correttamente');
          					var link = document.querySelector('#todb');
        						if (link) {
        						//modifico il campo conferma a 1
           						var target = link.getAttribute('value');
           						var jsonParsed = JSON.parse(target);
     								console.log('Target', target );
     								for (var i in jsonParsed) {
     									jsonParsed[i].conferma = '1';
     									console.log(jsonParsed[i].conferma);
     									console.log(jsonParsed);
     								}
     								//imposto il valore di link a quello del nuovo json
     								link.setAttribute('value', JSON.stringify(jsonParsed));
        						}
        						//chiamo l'applicazione via ajax e invio i dati con conferma : 1 
        						sendData();
          				}
          				// When ready to go live, remove the alert and show a success message within this page. For example:
          				// const element = document.getElementById('paypal-button-container');
          				// element.innerHTML = '<h3>Thank you for your payment!</h3>';
          				// Or go to another URL:  actions.redirect('thank_you.html');
        				});
      			}
    			}).render('#paypal-button-container');
  			</script>
  			</div>
  			<hr>
  			<div class="animate__animated animate__fadeIn animate__delay-1s container-lg">
     			<div class="d-grid gap-2 mt-4">
     				<button onclick="location.href='{{ url('cart') }}'" class="btn btn-dark btn-lg mb-3 rounded-5"><i class="fa-solid fa-caret-left fa-lg"></i>&#160; Torna dietro</button>	
      		</div>
      	</div>
      </div>	
      <!-- Site Footer -->
		<div class="container-md">
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
		<img src="images/svg/layered-steps-down-cube.svg" alt="down-cube" class="cubes-img">  
  		<!-- go to top button -->
		<button onclick="topFunction()" id="GoTop" title="Go to top" class="animate__animated animate__fadeInLeft">&#160;&#160;<i class="fa-solid fa-circle-arrow-up fa-lg"></i>&#160;&#160;</button>
		<!-- JavaScript -->
		<script src="/lib/jquery-3.5.1/jquery.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="/lib/fontawesome-6.2.0/js/all.min.js" type="text/javascript"></script>			
		<script src="/lib/DataTables/DataTables-1.13.1/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="/lib/bootstrap-5.2.3/js/bootstrap.bundle.min.js" type="text/javascript"></script>
		<script type="text/javascript">
      	function sendData() {
     			var link = document.querySelector('#todb');
        		if (link) {
           		var target = link.getAttribute('value');
     				console.log(target);
        		}              	
               
            var jsondata = target;
            jQuery.ajaxSetup({
					headers: {
           			'X-CSRF-TOKEN': "{{ csrf_token()}}",
       			}
				})              
            
            $.ajax({
               url:"{{ route('order.store') }}",
              	type: 'POST',
               dataType:'json',
               contentType: 'json',
               data: jsondata,
               contentType: 'application/json; charset=utf-8',
     	      });
            window.location.href = '/ordini';
      	}
      	
      	//////////////////////////////////////////////////////////////////////////////
      	
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