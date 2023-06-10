<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#ff7c00">
  <meta name="description" content="Eat Good Feel Good">
  <meta name="keywords" content="Fondazione, Ikaros, Bar, Attività, Studenti, Calcio, Scuola, Superiore">
  <meta name="author" content="Vinay Rathour" >
  <title>Tic Tac Toe Game - Fondazione Ikaros Bar</title>
  <link rel="shortcut icon" href="{{ url("/images/Site-Favicons/favicon.png") }}">
  <link rel="stylesheet" type="text/css" href="{{ url("/lib/Dancing-Script/font.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ url("/lib/bootstrap-5.2.3/css/bootstrap.min.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ url("/lib/fontawesome-6.2.0/css/all.min.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ url("/lib/animate.style-4.1.1/animate.min.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ url("/css/game.css") }}">
  
  <style type="text/css">
		body {
			background-image: url('/images/Background-Pictures/game-bg.gif');	
			margin: 0;
			padding: 0;	
		}  
  
  		.table-img {
	 		 width: 100%;
			 position: relative;
			 background-position: center;
   		 background-repeat: no-repeat;
   		 background-size: cover;
			 pointer-events: none;
		}	
	
		::-webkit-scrollbar {
  			width: 10px;
		}

		::-webkit-scrollbar-track {
  			background: black; 
		}

		::-webkit-scrollbar-thumb {
  			background: #ff7c00; 
  			border: 2px solid black;
		}

		::-webkit-scrollbar-thumb:hover {
  			background: #F47600; 
  			border: 2px solid black;
		}
		
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
		
		.link-decoration {
			text-decoration: none; 
			color: black;
			transition: 0.5s;
		}

		.link-decoration:hover {
			color: #e4871b;
		}
  </style>  
  
</head>
<body>	

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
  
    <!-- SELECT PLAYER BOX -->
    <div class="select-box text-center">
        <header><i class="fa-solid fa-gamepad"></i>&#160; Gioca a Tic Tac Toe!</header>
        <div class="content">
            <div class="title">Seleziona quale icona vuoi essere:</div>
            <div class="options">
                <button class="playerX">Giocatore X</button>
                <button class="playerO">Giocatore O</button>
            </div>
            <button class="btn btn-primary btn-lg rounded-5 mt-4" onclick="location.href='/ordini'"><i class="fa-solid fa-arrow-left"></i>&#160; Torna dietro</button>
            <p class="mt-4 mb-0"><a class="link-decoration fw-bold" href="https://linktr.ee/rvpartap" target="_blank">Vinay Rathour</a> ringrazia <a class="link-decoration fw-bold" href="https://github.com/Andrew-FungKinHo" target="_blank">@Andrew_Fung</a></p>
        </div>
    </div>

    <!-- LAYOUT/BOARD -->
    <div class="play-board">
        <div class="details">
            <div class="players">
                <span class="Xturn">Turno di X</span>
                <span class="Oturn">Turno di O</span>
                <div class="slider"></div>
            </div>
        </div>
        <!-- play area -->
        <div class="play-area">
            <section>
                <span class="box1"></span>
                <span class="box2"></span>
                <span class="box3"></span>
            </section>
            <section>
                <span class="box4"></span>
                <span class="box5"></span>
                <span class="box6"></span>
            </section>
            <section>
                <span class="box7"></span>
                <span class="box8"></span>
                <span class="box9"></span>
            </section>
        </div>
    </div>

    <!-- RESULT -->
    <div class="result-box">
        <div class="won-text"></div>
        <div class="btn">
            <button style="margin:5px"><i class="fa-solid fa-arrows-spin"></i>&#160; Riprova</button>
            <button style="margin:5px" onclick="location.href='/ordini';"><i class="fa-solid fa-hand"></i>&#160; Smetti</button>
        </div>
    </div>
    
  <!-- JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  <script src="/lib/bootstrap-5.2.3/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="/lib/fontawesome-6.2.0/js/all.min.js" type="text/javascript"></script>
  <script src="/lib/bootstrap-5.2.3/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="/js/game.js" type="text/javascript"></script>
  <script src="/js/game_ai.js" type="text/javascript"></script>
  
</body>
</html>