<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Uthaan</title>
        <link rel="icon" href="1.png">
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
         <link href="css/owl.carousel.css" rel="stylesheet">
         <link href="css/owl.transitions.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
        
        <!-- -->
         <link href="css/main.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
         <link rel="stylesheet" type="text/css" href="css/swiper.min.css" />
         <link rel="stylesheet" type="text/css" href="css/plyr.css" />
        <link rel="stylesheet" href="css/gallery.css" type="text/css">
    <style>
        #HR{
            visibility: hidden;
        }
        </style>
        <style type="text/css">
html,body {
        overflow-x:hidden ;
}
</style>
</head>
    <body>
    <nav class="nav navbar-default navbar-fixed-top">
     <div class="container">
     <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
					<span style="background-color: aqua" class="icon-bar"></span>
					<span style="background-color: aqua" class="icon-bar"></span>
					<span style="background-color: aqua" class="icon-bar"></span>
                        </button>
      <div>
             <a href="/" class="page-scroll"><img src="{{ URL::asset('img/uthaan.png') }}" id="uthaanlogo"></a>
         </div>
         </div>
         <div class="collapse navbar-collapse" id="mynavbar" >
                    <ul class="nav navbar-nav navbar-right">
                         <li class="active"><a href="/">Home</a></li>
                        <li><a href="/about" class="page-scroll"> About us </a></li>
                         <li><a href="/#events"class="page-scroll"> Events </a></li>
                        <li><a href="/shows"class="page-scroll"> Shows </a> </li>
                        <li><a href="/article"class="page-scroll"> Articles </a></li> 
                        <li><a href="/interview" class="page-scroll"> Interviews </a></li>
                        <li><a href="/gallery" class="page-scroll"> Gallery </a></li>
                         <li><a href="/#contact" id="contactus" class="contactus"> Contact us </a></li>
                         @guest<li><a href="/login" class="page-scroll">Login</a></li>@endguest
                         @auth<li><a href="/login" class="page-scroll">Logout</a>@endauth
                        </ul>
                </div>          
         </div>
    </nav>  
        <div class="img-gallery">
                <svg class="hidden">
			<defs>
				<symbol id="icon-arrow" viewBox="0 0 32 32">
					<title>arrow</title>
					<path class="path1" d="M7.333 24c-0.133 0-0.4 0-0.533-0.133l-6.667-6.667c0 0-0.133-0.133-0.133-0.267s0-0.133 0-0.267c0 0 0 0 0 0 0-0.133 0-0.133 0-0.267s0.133-0.133 0.133-0.267l6.667-6.667c0.4-0.133 0.8-0.133 1.067 0s0.267 0.667 0 0.933l-5.6 5.6h29.067c0.4 0 0.667 0.267 0.667 0.667s-0.267 0.667-0.667 0.667h-29.067l5.467 5.467c0.267 0.267 0.267 0.667 0 0.933 0 0.267-0.267 0.267-0.4 0.267z"></path>
				</symbol>
				<symbol id="icon-drop" viewBox="0 0 32 32">
					<title>drop</title>
					<path class="path1" d="M17.333 32c-5.867 0-10.667-4.8-10.667-10.667 0-5.6 9.733-20.4 10.133-21.067 0.267-0.4 0.8-0.4 1.067 0 0.4 0.667 10.133 15.467 10.133 21.067 0 5.867-4.8 10.667-10.667 10.667zM17.333 1.867c-2.133 3.333-9.333 14.933-9.333 19.467 0 5.2 4.133 9.333 9.333 9.333s9.333-4.133 9.333-9.333c0-4.533-7.2-16.133-9.333-19.467z"></path>
					<path class="path2" d="M13.333 26.533c-0.133 0-0.267 0-0.4-0.133-1.467-1.333-2.267-3.2-2.267-5.067 0-1.6 1.2-4.533 3.467-8.933 0.133-0.4 0.533-0.533 0.933-0.267 0.267 0.133 0.4 0.533 0.267 0.933-2.133 4-3.333 6.933-3.333 8.267 0 1.467 0.667 2.933 1.733 4 0.267 0.267 0.267 0.667 0 0.933 0 0.133-0.267 0.267-0.4 0.267z"></path>
				</symbol>
				<!-- icons for grid -->
				<symbol id="icon-nav" viewbox="0 0 129 129">
					<title>nav</title>
					<!-- by Lucy G http://www.flaticon.com/free-icon/down-arrow_118738 -->
					<path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"/>
				</symbol>
				<symbol id="icon-cross" viewbox="0 0 129 129">
					<title>cross</title>
					<!-- by Lucy G http://www.flaticon.com/free-icon/cancel_118741 -->
					<path d="M7.6,121.4c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2l51.1-51.1l51.1,51.1c0.8,0.8,1.8,1.2,2.9,1.2c1,0,2.1-0.4,2.9-1.2c1.6-1.6,1.6-4.2,0-5.8L70.3,64.5l51.1-51.1c1.6-1.6,1.6-4.2,0-5.8s-4.2-1.6-5.8,0L64.5,58.7L13.4,7.6C11.8,6,9.2,6,7.6,7.6s-1.6,4.2,0,5.8l51.1,51.1L7.6,115.6C6,117.2,6,119.8,7.6,121.4z"/>
				</symbol>
			</defs>
		</svg>
		<main>
			<div class="grid-pages">
				<div class="grid grid--vertical grid--current grid--style-1" data-path-cover="M 0,0 L 0,0 C 0,0 0,0 0,5 C 0,10 0,10 0,10 L 0,10 Z;M 0,0 L 0,0 C 0,0 5,0 5,5 C 5,10 0,10 0,10 L 0,10 Z;M 0,0 L 10,0 C 10,0 10,0 10,5 C 10,10 10,10 10.1,10 L 0,10 Z" data-path-uncover="M 0,0 L 10,0 C 10,0 10,0 10,5 C 10,10 10,10 10,10 L 0,10 Z;M 0,0 L 10,0 C 10,0 5,0 5,5 C 5,10 10,10 10,10 L 0,10 Z;M 0,0 L 0,0 C 0,0 0,0 0,5 C 0,10 0,10 0,10 L 0,10 Z" data-duration="1000" data-easing-in="easeInExpo" data-easing-out="easeOutExpo">
					<div class="grid__column">
						<div class="grid__item grid__item--auto">
				<div class="grid__img" style="background-image: url(img/5.jpg);"></div>
						</div>
						<div class="grid__item" data-delay="75" data-duration="800">
							<div class="grid__img" style="background-image: url(img/4.jpg);"></div>
						</div>
					</div>
					<div class="grid__column">
						<div class="grid__item" data-delay="100">
							<div class="grid__img" style="background-image: url(img/15.jpg);"></div>
						</div>
						<div class="grid__item" data-delay="150" data-duration="1200">
							<div class="grid__img" style="background-image: url(img/40.jpg);"></div>
						</div>
						<div class="grid__item" data-delay="300" data-duration="500">
							<div class="grid__img" style="background-image: url(img/41.jpg);"></div>
						</div>
					</div>
					<div class="grid__column">
						<div class="grid__item grid__item--auto" data-delay="190">
				<div class="grid__img" style="background-image: url(img/13.jpg);"></div>
						</div>
						<div class="grid__item" data-delay="250">
							<div class="grid__img" style="background-image: url(img/6.jpg);"></div>
						</div>
					</div>
				</div>
				<div class="grid grid--vertical grid--style-1" data-path-cover="M 0,0 L 10,0 L 10,0 C 10,0 10,0 5,0 C 0,0 0,0 0,0 Z;M 0,0 L 10,0 L 10,0 C 10,0 10,5 5,5 C 0,5 0,0 0,0 Z;M 0,0 L 10,0 L 10,10 C 10,10 10,10 5,10 C 0,10 0,10 0,10 Z" data-path-uncover="M 10,0 L 0,0 C 0,0 0,0 0,5 C 0,10 0,10 0,10 L 10,10 Z;M 10,0 L 0,0 C 0,0 5,0 5,5 C 5,10 0,10 0,10 L 10,10 Z;M 10,0 L 10,0 C 10,0 10,0 10,5 C 10,10 10,10 10,10 L 10,10 Z" data-duration="1000" data-easing-in="easeInExpo" data-easing-out="easeOutExpo">
					<div class="grid__column">
						<div class="grid__item">
							<div class="grid__img" style="background-image: url(img/3.jpg);"></div>
						</div>
						<div class="grid__item" data-delay="150">
							<div class="grid__img" style="background-image: url(img/12.jpg);"></div>
						</div>
					</div>
					<div class="grid__column">
						<div class="grid__item" data-delay="200" data-duration="800">
							<div class="grid__img" style="background-image: url(img/2.jpg);"></div>
						</div>
					</div>
					<div class="grid__column">
						<div class="grid__item" data-delay="310" data-duration="550">
							<div class="grid__img" style="background-image: url(img/8.jpg);"></div>
						</div>
						<div class="grid__item" data-delay="250">
							<div class="grid__img" style="background-image: url(img/9.jpg);"></div>
						</div>
						<div class="grid__item" data-delay="50" data-duration="950">
							<div class="grid__img" style="background-image: url(img/10.jpg);"></div>
						</div>
					</div>
				</div>
				<div class="grid grid--vertical grid--style-1" data-path-cover="M 0,10 L 10,10 L 10,10 C 10,10 10,10 5,10 C 0,10 0,10 0,10 Z;M 0,10 L 10,10 L 10,10 C 10,10 10,5 5,5 C 0,5 0,10 0,10 Z;M 0,10 L 10,10 L 10,0 C 10,0 10,0 5,0 C 0,0 0,0 0,0 Z" data-path-uncover="M 10,10 L 10,0 C 10,0 10,0 5,0 C 0,0 0,0 0,0 L 0,10 Z;M 10,10 L 10,0 C 10,0 10,5 5,5 C 0,5 0,0 0,0 L 0,10 Z;M 10,10 L 10,10 C 10,10 10,10 5,10 C 0,10 0,10 0,10 L 0,10 Z" data-duration="1000" data-easing-in="easeInExpo" data-easing-out="easeOutExpo">
					<div class="grid__column">
						<div class="grid__item">
							<div class="grid__img" style="background-image: url(img/17.jpg);"></div>
						</div>
						<div class="grid__item" data-delay="50">
							<div class="grid__img" style="background-image: url(img/16.jpg);"></div>
						</div>
						<div class="grid__item" data-delay="150" data-duration="650">
							<div class="grid__img" style="background-image: url(img/7.jpg);"></div>
						</div>
					</div>
					<div class="grid__column">
						<div class="grid__item" data-delay="210" data-duration="800">
							<div class="grid__img" style="background-image: url(img/14.jpg);"></div>
						</div>
						<div class="grid__item" data-delay="150">
							<div class="grid__img" style="background-image: url(img/11.jpg);"></div>
						</div>
					</div>
				</div>
				<div class="grid grid--vertical grid--style-1" data-path-cover="M 10,0 L 10,10 L 10,10 C 10,10 10,10 10,5 C 10,0 10,0 10,0 Z;M 10,0 L 10,10 L 10,10 C 10,10 5,10 5,5 C 5,0 10,0 10,0 Z;M 10,0 L 10,10 L 0,10 C 0,10 0,10 0,5 C 0,0 0,0 0,0 Z" data-path-uncover="M 10,0 L 10,10 C 10,10 10,10 5,10 C 0,10 0,10 0,10 L 0,0 Z;M 10,0 L 10,10 C 10,10 10,5 5,5 C 0,5 0,10 0,10 L 0,0 Z;M 10,0 L 10,0 C 10,0 10,0 5,0 C 0,0 0,0 0,0 L 0,0 Z" data-duration="1100" data-easing-in="easeInExpo" data-easing-out="easeOutExpo">
					<div class="grid__column">
						<div class="grid__item">
							<div class="grid__img" style="background-image: url(img/1.jpg);"></div>
						</div>
					</div>
				</div>
				<nav class="grid-nav">
					<button class="grid__button grid__button--prev" aria-label="Previous page"><svg class="icon icon--nav-up"><use xlink:href="#icon-nav"></use></svg></button>
					<button class="grid__button grid__button--next" aria-label="Next page"><svg class="icon icon--nav-down"><use xlink:href="#icon-nav"></use></svg></button>
				</nav>
			</div><!-- /grid-pages -->
		</main>
                </div>
        <section class="contact-area">
        <div class="container">
            <div class="row">
                    <div class="text-center contact-content">
                        <div class="col-md-3">
                        <h6>ABV-Indian Institute of Information Technology and Management
Morena Link Road, Gwalior- 474015 </h6>
                        </div>
                        <div class="col-md-3"  style="padding-top: 20px;">
                        <h6>UTHAAN Cell
                         Room no. : 201
                         Block : A</h6>
                        </div>
                        <div class="col-md-3">
                        <h6>contact@uthaan.org</h6>
                        <h6>+01 2345 6789 12<span>|</span>+91 8317057596</h6>
                            </div>
                        <div class="contact-social col-md-3" style="padding-bottom: 20px;">
                            <ul>
							<li><a class="hover-target" href="https://www.facebook.com/uthaaniiitmg/" target = "_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="hover-target" href="https://www.instagram.com/uthaaniiitm/" target = "_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="hover-target" href="https://www.youtube.com/channel/UCcNvKCjKaxqnPX09IXcCKIg " target = "_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </section>
<footer>
<p>Developed and Maintained by-</p>
  <div class = "developer">
        <h4><a href = "https://www.linkedin.com/in/ashray-gupta-2509b988/" target = "_blank">Ashray Gupta</a></h4>
        <h4><a href = "https://www.linkedin.com/in/aditi-singh-15230b16b/" target = "_blank">Aditi Singh</a></h4>
        <h4><a href = "https://www.linkedin.com/in/shivam-agrawal-a4a414181/" target = "_blank">Shivam Agarwal</a></h4>
  </div>
</footer>
        
        
     <!-- Scripts -->  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script  type="text/javascript" src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
  <script  type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script  type="text/javascript" src="js/wow.js"></script>
     <script src="js/main.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/plyr.js"></script>
   <script src="js/anime.min.js"></script>
     <script src="js/swiper.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
     <script type="text/javascript" src="js/logic.js"></script>
        <script src="js/gallery.js"></script>
    <!-- -->
    <script>
		(function() {
			new GridSlideshow(document.querySelector('.grid-pages'));
		})();
		</script>
    </body>
</html>