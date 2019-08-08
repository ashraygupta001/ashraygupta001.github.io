<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Uthaan</title>
        <link rel="icon" href="1.png">
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
         <link href="css/owl.carousel.css" rel="stylesheet">
         <link href="css/owl.transitions.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Satisfy" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
        
        <!-- -->
         <link href="css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="css/about.css" type="text/css">
    <style>
        #HR{
            visibility: hidden;
        }
        </style>
        <style type="text/css">
html {
        overflow-x: hidden;
}
</style>
</head> 
<body>
    <nav class="nav navbar-default navbar-fixed-top about">
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
    <!-- group photo -->
    <div class=" container bg"></div>
    <!-- -->
    <div class="container" style="margin-top: 70px; ">
        <center>
        <span class="fas fa-camera"></span>
        <span class="fas fa-laptop-code"></span>
        <span class="fas fa-pen-fancy"></span>
        </center>
        <div>
            <h2 style="font-family: 'Courgette', cursive; margin-top: 50px;"> working together is success and succeeding together is an achievemnet. </h2>
            <p style="font-family: 'Courgette', cursive;font-size: 20px; margin: 20px;"> Uthaan is journalism and recreational forum of the institute, by the students for the students. This forum has been formed in order to enable all round development of the students in all facets of life. Our aim is to develop and nurture every sort of quality in the students. It is a forum which serves as a bridge between academics and student welfare. We are the eyes and ears of the institute, when it comes to any event occurring inside it, We cover the events through all forms of media. The forum has been divided into various departments for this very purpose. Under the aegis of Uthaan we also hold various competitions for the students to develop their skills.</p>
        </div>
        <div style="margin-top: 50px;">
          <center>
        <span class="fas fa-camera"></span>
        <span class="fas fa-laptop-code"></span>
        <span class="fas fa-pen-fancy"></span>
        </center>
        </div>
    </div>
    <div class="foundermsg bg1">
       <center> <h1 style="font-family: 'Allura', cursive; font-size:70px; font-weight: 900; margin-top: 40px;">Founder's word</h1></center>
        
        <ul id="messages">

		<!-- 1 -->
		<li>
			<div class="infos">
				<img src="teamimg/amandeepsir.jpeg" />
			</div>
			<div class="content">
				<h3>
					Amandeep Singh
					<b>Founder</b>
				</h3>
				<p>
					The main aim of Uthann is not just to conduct events but to eliminate the distance between junior & senior.
				</p>
			</div>
		</li>
		<!-- 2 -->
		<li>
			<div class="infos">
				<img src="teamimg/arpansir2.jpg"/>
			</div>
			<div class="content">
				<h3>
					Arpan Jain
					<b>Founder</b>
				</h3>
				<p>
					Uthaan is not just a club it's a platform wherein we help each other in extrs-curricular activities, academics new project etc.
				</p>
			</div>
		</li>

		<!-- 3 -->
		<li>
			<div class="infos">
				<img src="teamimg/akshaysir.jpeg"/>
			</div>
			<div class="content">
				<h3>
					Akshay Goel
					<b>Founder</b>
				</h3>
				<p>
					In Uthaan you learn skills that you can't learn through books like swimming.
				</p>
			</div>
		</li>
	</ul>
    </div>
    <center>
        <h2 style="font-family: 'Playfair Display', serif; font-size: 40px; font-weight: bold;"> MEET THE TEAM </h2>
    </center>
    <h2> Founders </h2>
<div class="container">
   <section class="customer-logos slider">
      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/amandeepsir1.jpeg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/asr.jackson.9" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/the.real.sardar/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/amandeepsingh13/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">AMANDEEP SINGH</h3>
                </div>
            </div>
        </div>
     

      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/arpansir2.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/arpan.jain.1405" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/aj.prime/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/arpan-jain-947640126/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">ARPAN JAIN</h3>
                </div>
            </div>
        </div>
      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/akshaysir.jpeg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/akshaytheboss" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/akshayiiitm/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">AKSHAY GOEL</h3>
                   
                </div>
            </div>
        </div>
   </section>
   

</div>



<h2>Alumni</h1>




<div class="container">
   <section class="customer-logos slider">
     

      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/angelmaam.jpeg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/angelsuryavanshi11" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/angelsuryavanshi/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/angelsuryavanshi/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">ANGEL SURYAVANNSHI</h3>
                   
                </div>
            </div>
        </div>
     

      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/vaibhavsir.jpeg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/vaibhav.khandelwal.7777" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/iam.vk7/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/vaibhavk77/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">VAIBHAV KHANDELWAL</h3>
                   
                </div>
            </div>
        </div>
      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/prajwalguptasir.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/PrajvalGupta" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/prajvalgupta/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/prajvalgupta/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">PRAJVAL GUPTA</h3>
                  
                </div>
            </div>
        </div>
   </section>
   

</div>




<h2>CORE TEAM</h1>




<div class="container">
   <section class="customer-logos slider">
     

      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/hardiksir.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/hardik.khandelwal.167" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/khandelwal.hardik/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/hardik-khandelwal/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">HARDIK KHANDELWAL</h3>
                   
                </div>
            </div>
        </div>
     

      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/salonimaam.jpeg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/saloni.jain.94801" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/saloni-jain-0101/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">SALONI JAIN</h3>
                  
                </div>
            </div>
        </div>
      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/prakharsir.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/prakhar.srivastava.50746" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/prakhar-srivastava-1a7113135/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">PRAKHAR SRIVASTAVA</h3>
                  
                </div>
            </div>
        </div>

         <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/mahimamaam.png">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100001066532065" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/mahima-gupta1997/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">MAHIMA GUPTA</h3>
                  
                </div>
            </div>
        </div>

        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/ramansir.png">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/raman.prabhakar.946?ref=br_rs" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/raman.prabhakar77/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/raman-prabhakar-709447126/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">RAMAN PRABHAKAR</h3>
                  
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/shubhamsir.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/smartlink27" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/shubham_link/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/shubham-maurya-57115bba/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">SHUBHAM MOURYA</h3>
                   
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/gauravsir.jpeg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/itsmegauravagarwal" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/gaurav-agarwal-398058109/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">GAURAV AGARWAL</h3>
                   
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/sharadsir.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/sharad.krishna.510" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/sharad-mishra-/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">SHARAD MISHRA</h3>
                  
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/deepaksir.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100003788808946" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="linkedin.com/in/1327deepak/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">DEEPAK KUMAR</h3>
                    
                </div>
            </div>
        </div>
       <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/hiteshsir.jpeg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/call.me.Hits" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/this_is_hits_/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/confused1108/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">HITESH AHUJA</h3>
                  
                </div>
            </div>
        </div>
       <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/vishakhamaam.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/vishakha.gupta.188478" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/vishakha-gupta-10/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">VISHAKHA GUPTA</h3>
                   
                </div>
            </div>
        </div>
       <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/ritikamaam.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/ritika.agarwal.121398" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/ritika-agarwal-b2856912b/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">RITIKA AGARWAL</h3>
                    
                </div>
            </div>
        </div>
       <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/ayushimaam.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/ayushi.rastogi.311" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/ayu.2406/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/ayushi-rastogi-06778b160/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">AYUSHI RASTOGI</h3>
                   
                </div>
            </div>
        </div>
       <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/suryasir.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/surya.p.singh.351" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/pratap_is_here/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/isurya2312/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">SURYA PRATAP SINGH</h3>
                   
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/apoorvamaam.jpeg">
                    <ul class="social">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">APOORVA SRIVASTAVA</h3>
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/dakshsir.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/daksh.berry.5" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/im.dby/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/daksh-berry-9b738b187/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">DAKSH BERRY</h3>
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/riyamaam.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/KWL.riya?ref=br_rs"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/kwl.riya/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/riya-khandelwal-4b3595132/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">RIYA KHANDELWAL</h3>
                </div>
            </div>
        </div>
       <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/rishabhsir.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/rishabh.patel.16100" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/rishabh-patel-591643140/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">RISHABH PATEL</h3>
                </div>
            </div>
        </div>

   </section>
   

</div>
    
<h2>STUDENT CO-ORDINATORS</h2>
<div class="container">
   <section class="customer-logos slider">
     

      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/nishantsir1.jpeg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/nishantsinghtomar" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/nishant-tomar-230582153/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">NISHANT TOMAR</h3>
                </div>
            </div>
        </div>
     

      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/prajwalsir.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/prajwal.singh.338" class="fab fa-instagram" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/prajwal-singh-146b8415b/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">PRAJWAL SINGH</h3>
                </div>
            </div>
        </div>
      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/manvimaam.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100018911976586" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/manvi-gupta-a75585153/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">MANVI GUPTA</h3>
                </div>
            </div>
        </div>

         <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/amansir.jpeg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/amanmishra.dx" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/mishra_dx007/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/aman-mishra-67a4a5153/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">AMAN MISHRA</h3>
                </div>
            </div>
        </div>
          <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/nishidhamaam.jpeg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/nishidha.sri" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/nishidha_sri/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/nishidha-sri-35949793/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">NISHIDHA SRI</h3>
                </div>
            </div>
        </div>
          <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/varunsir.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/varunv153" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">VARUN VENKATESH</h3>
                </div>
            </div>
        </div>
          <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/sakshammaam.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/suman.arjani" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/sumanarjani/" class="fab fa-instagram"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">SUMAN ARJANI</h3>
                </div>
            </div>
        </div>
          <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/sawatsir.jpg">
                    <ul class="social">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">KUMAR SASWAT</h3>
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/ujwalsir.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/ujjwal.sharma.1806" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/sh.ujju/" class="fab fa-instagram"></a></li>
                        <li><a href="linkedin.com/in/ujjwal-sharma-b1066414b/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">UJJAWAL SHARMA</h3>
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/priyanshsir.jpeg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/mr.priyanshgaharana" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/priyansh-gaharana-4454a1148/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">PRIYANSH GAHARANA</h3>
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/smitamaam.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/smitasrishti?ref=br_rs" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/smitagupta517/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/smita-gupta-a1922714b/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">SMITA GUPTA</h3>
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/akashgoel.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/adg2512" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">AKASH GOEL</h3>
                </div>
            </div>
        </div>
    </section>
    </div>
       <h2>MENTORS</h2>
<div class="container">
   <section class="customer-logos slider">
     
       <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/shivam.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/shivam.agarwal.56" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/the_innocent_gamin/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/shivam-agrawal-a4a414181/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">SHIVAM AGRAWAL</h3>
                    <span class="post">SHOWS HEAD</span>
                </div>
            </div>
        </div>
      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/aditi.JPG">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100028005993257" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/aditi-singh-15230b16b/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">ADITI SINGH</h3>
                    <span class="post">EMT</span>
                </div>
            </div>
        </div>
      <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/ashray.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/ashray.gupta.568" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/ashray_gupta_/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/ashray-g-2509b988/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">ASHRAY GUPTA</h3>
                    <span class="post">TECHNICAL/PHOTOGRAPHY HEAD</span>
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/sakshi.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/doingharlemshake" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/sakshiiii_07/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/sakshi-rai-145b56186/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">SAKSHI RAI</h3>
                    <span class="post">SHOWS HEAD</span>
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/bipin.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/bipin.pathak.1656" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/_bp14/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/bipin-pathak-00ab39169/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">BIPIN PATHAK</h3>
                    <span class="post">TECHNICAL HEAD</span>
                </div>
            </div>
        </div>
         <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/madhuri.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/rsmadhuri2000" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/madhuri__raparthi/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/raparthi-madhuri-01645616b/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">MADHURI RAPARTHI</h3>
                    <span class="post">REPORTING HEAD</span>
                </div>
            </div>
       </div>
          <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/himanshu.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/himanshu.ruhela.vf" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/countawesome/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/himanshu-ruhela-vf13/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">HIMANSHU RUHELA</h3>
                    <span class="post">REPORTING HEAD</span>
                </div>
            </div>
        </div>
          <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/sayantan.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/sayantan.banerjee.7393" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/sayantanbanerjee1710/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/sayantan-banerjee-19040b175/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">SAYANTAN BANERJEE</h3>
                    <span class="post">TECHNICAL HEAD</span>
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/rishavdhyani.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/rishab.dhyani" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="https://www.instagram.com/_r_d_19/" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/rishabh-dhyani-918743173/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">RISHABH DHYANI</h3>
                    <span class="post">EMT</span>
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/piyush.jpg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100009735668141&ref=br_rs" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/piyush-chetwani-5346a516a/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">PIYUSH CHETWANI</h3>
                    <span class="post">CONTENT WRITING HEAD</span>
                </div>
            </div>
        </div>
        <div class="slide">  
            <div class="our-team">
                <div class="pic">
                    <img src="teamimg/rachit.jpeg">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/rachit.garg.792" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/rachit-garg-89a2ba16b/" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">RACHIT GARG</h3>
                    <span class="post">SHOWS HEAD</span>
                </div>
            </div>
        </div>
   </section>
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
                        <h6>uthaan.iiitmg@gmail.com</h6>
                        <h6>+01 2345 6789 12<span>|</span>+01 2345 6789 12</h6>
                            </div>
                        <div class="contact-social col-md-3" style="padding-bottom: 20px;">
                            <ul>
                                <li><a class="hover-target" href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </section>
<footer>
        <p>Copyright &copy; 2019  All Rights Reserved.</p>
</footer>
  
    <!-- scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script  type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script  type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script  type="text/javascript" src="js/wow.js"></script>
    <script src="js/main.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
    <script type="text/javascript" src="js/logic.js"></script> 
     <script type="text/javascript" src="js/aboutlogic.js"></script> 
    <!-- -->
    </body>
</html>