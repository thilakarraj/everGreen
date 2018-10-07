<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>ECFA - Evergreen Cricket & Futsal Academy </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <!-- Font Awseome Icon Fonts-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
	  background-image: linear-gradient(15deg, #f3f108, #3c763d);
      color: #fff;
      padding: 5px 5px 5px 5px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #c9d80c;
      font-size: 50px;
  }
  .logo {
      color: #c9d80c;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #c9d80c;
  }
  .carousel-indicators li {
      border-color: #c9d80c;
  }
  .carousel-indicators li.active {
      background-color: #c9d80c;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #b2c51b; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #41793c;
      background-color: #3c763d !important;
      color: #fafafa;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #b2c51b !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #b2c51b;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      //background-color: #f4511e;
	  background-image: linear-gradient(15deg, #f3f108, #3c763d);
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #1f630c !important;
		background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
	font-size: 30px;
    color: #dfe40e;
    left: 55%;
    /* margin: 10px; */
    padding: 8px;
    border: solid #e7ea48a1;
    border-radius: 10px;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  .footer-ever{
	top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgb(62, 110, 6);
    webkit-transition: 0.5s;
    o-transition: 0.5s;
    transition: 0.5s;
	padding: 20px !important;
  }  
  
  .footer-header{
      color: #fff;
  }
  
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"> Evergreen </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">COACHING</a></li>
        <li><a href="#contact">CONTACT</a></li>
		   @if (Route::has('login'))
                     @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                       <li> <a href="{{ route('login') }}">LOGIN</a></li>
                       <li> <a href="{{ route('register') }}">REGISTER</a></li>
                    @endauth
            @endif
		
		<li><a href="https://www.facebook.com/evergreencricketandfutsal/"  target="_blank"><i class="fa fa fa-facebook-square fa-lg"></i></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <!-- <h1>Company</h1>  -->
  <!-- <p>We specialize in blablabla</p>  -->
  <!-- <form> -->
    <!-- <div class="input-group"> -->
      <!-- <input type="email" class="form-control" size="50" placeholder="Email Address" required> -->
      <!-- <div class="input-group-btn"> -->
        <!-- <button type="button" class="btn btn-danger">Subscribe</button> -->
      <!-- </div> -->
    <!-- </div> -->
  <!-- </form> -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				  <li data-target="#myCarousel" data-slide-to="3"></li>
				  <li data-target="#myCarousel" data-slide-to="4"></li>
				</ol>
			
				<!-- Wrapper for slides -->
				<div class="carousel-inner">				  
					 <div class="item active">
					<img src="{{ asset('images/107.jpg')}}" alt="New york" style="width:100%;  background-size: cover;">
				  </div>
				  
					<div class="item">
					<img src="{{ asset('images/108.jpg')}}" alt="New york"  style="width:100%; background-size: cover;">
				  </div>
				  
					<div class="item">
					<img src="{{ asset('images/104.jpg')}}" alt="New york" style="width:100%;  background-size: cover;">
				  </div>
				  
					<div class="item">
					<img src="{{ asset('images/105.jpg')}}" alt="New york" style="width:100%;  background-size: cover;">
				  </div> 
				</div>
			
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div> 
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
      <h4>Evergreen was founded in 1990 as a tennis ball cricket team. Over the years team players and grew into cricket ball players playing division matches. Later a separate team was formed to play cricket tournaments in and around the city of Chennai</p>
	  <p>
	  Evergreen has won many trophies in tennis ball and cricket ball tournaments. The characters of the movie Chennai 600028 were based on real life Evergreen team players
	  </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Mission Statement. We aim to advance the game of Cricket & Football through sportsmanship, leadership, discipline and hard work. Our goal is to provide the opportunity, environment and facilities to people of all ages and abilities to play Cricket & Football and especially train young talents of the future</h4><br>
      <p><strong>VISION:</strong> To be the best coaching academy for cricket and football, create an environment for the future and exposure & direction for young achievers. As an academy to improve the quality of coaching available along with technology to provide insights in students performance </p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>Cricket Coaching</h4>
      <p>from age of 4 till 25</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>Football Coaching</h4>
      <p>from age of 4 till 25</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>Fitness Training</h4>
      <p>for all ages</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>Practice Sessions</h4>
      <p>Team/ Individual</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>Tournaments</h4>
      <p>Cricket & Futsal</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">Corporate Packages</h4>
      <p>Full day team events</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>ECFA Venue Gallery</h2><br>
  <h4>Over 15000/- sqft. venue with two arenas for Cricket & Futsal (also multipurpose), fully covered with natural grass. Cricket practice arena with 5 wickets and one open Futsal arena. Ample space for Corporate booking</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="{{ asset('images/paris.jpg')}}" alt="Paris" width="400" height="300">
        <p><strong>Cricket Practice Arena</strong></p>
        <p>Turf, Matt & Concrete Wickets</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="{{ asset('images/newyork.jpg')}}" alt="New York" width="400" height="300">
        <p><strong>Futsal Arena</strong></p>
        <p>6000sqft of fully grass covered fun arena</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="{{ asset('images/sanfran.jpg')}}" alt="San Francisco" width="400" height="300">
        <p><strong>Floodlights</strong></p>
        <p>Game never ends</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Awesome place to play even under lights, hard to find grass covered as all the places are concrete with synthetic turf"<br><span>Rajesh Chandrasekar, Perumbakkam</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>Subhuraj, Medavakkam</span></h4>
      </div>
      <div class="item">
        <h4>"People are nice, coaching is great my son loves the place and always excited about cricket coaching."<br><span>Ramkumar, Perumbakkam</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Coaching</h2>
    <h4>Choose a plan that works for you or your kid</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Cricket</h1>
        </div>
        <div class="panel-body">
          <p>Weekly 5 classes - Mon, Wed, Fri, Sat, Sun</p>
          <p>Weekly 3 classes - Mon, Wed, Fri</p>
          <p>Weekly 2 classes - Sat, Sun</p>
        </div>
        <div class="panel-footer">
          <h4>Annual</h4>
          <h4>Half yearly</h4>
		  <h4>Quarterly</h4>
          <button class="btn btn-lg"><a href="{{ route('register') }}">Sign Up</a></button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Football</h1>
        </div>
        <div class="panel-body">
          <p>Weekly 5 classes - Mon, Wed, Fri, Sat, Sun</p>
          <p>Weekly 3 classes - Mon, Wed, Fri</p>
          <p>Weekly 2 classes - Sat, Sun</p>
        </div>
        <div class="panel-footer">
          <h4>Annual</h4>
          <h4>Half yearly</h4>
		  <h4>Quarterly</h4>
          <button class="btn btn-lg"><a href="{{ route('register') }}">Sign Up</a></button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Membership</h1>
        </div>
        <div class="panel-body">
          <p>Cricket / Futsal Coaching</p>
		  <p>Cricket / Futsal team membership</p>
		  <p>Daily one hour practice session</p> 
        </div>
        <div class="panel-footer">
           <h4>Annual</h4>
          <h4>Half yearly</h4>
		  <h4>Quarterly</h4>
          <button class="btn btn-lg"><a href="{{ route('register') }}">Sign Up</a></button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chennai, Tamil Nadu, India</p>
	  <p><span class="glyphicon glyphicon-map-marker"></span> Global hospital signal, Perumbakkam</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 98846 66248 +91 98846 66249 </p>
      <p><span class="glyphicon glyphicon-envelope"></span> evergreencricketacademy@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;"></div>
<!-- For Google Maps-->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
	<script type="text/javascript">
		function initialize() {
		   var latlng = new google.maps.LatLng(12.8475136,80.2267136);
			var map = new google.maps.Map(document.getElementById('googleMap'), {
			  center: latlng,
			  zoom: 13
			});
			var marker = new google.maps.Marker({
			  map: map,
			  position: latlng,
			  draggable: false,
			  anchorPoint: new google.maps.Point(0, -29)
		   });
			var infowindow = new google.maps.InfoWindow();   
			google.maps.event.addListener(marker, 'click', function() {
			  var iwContent = '<div id="iw_container">' +
			  '<div class="iw_title"><b>Location</b> : Noida</div></div>';
			  // including content to the infowindow
			  infowindow.setContent(iwContent);
			  // opening the infowindow in the current map and at the current marker location
			  infowindow.open(map, marker);
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center footer-ever">
  <div class="overlay"></div>
  <div class="container">
	<div class="row">
	<div class="col-md-4 col-sm-12" style="text-align:left; color: #b8b4b2;">
	<h3 class="footer-header">A Little About Evergreen</h3>
	<p>Founded in 1990 as a tennis ball cricket team, gradually grew as a team of 100+ members. </p><br>
					<p>For the past 15 years team and the players are involved in playing League matches, corporate tournaments and other cricketing events</p>
					<p><a class="btn btn-primary" href="#">Become A Member</a></p>
	</div>
	<div class="col-md-2 col-sm-12" style="text-align:left; color: #b8b4b2;">
	<h3 class="footer-header">Coaching</h3>
	<div class="col-md-4 col-sm-4 col-xs-6">
						<ul style="padding:0px; margin:0px; list-style:none;">
							<li><a href="#" style="text-align:left; color: #b8b4b2;">Cricket</a></li>
							<li><a href="#" style="text-align:left; color: #b8b4b2;">Football</a></li>
							<li><a href="#" style="text-align:left; color: #b8b4b2;">Special Coaching</a></li>
						</ul>
					</div>
	</div>
	<div class="col-md-2 col-sm-12" style="text-align:left; color: #b8b4b2;">
	<h3 class="footer-header">Other Classes</h3>
	<div class="col-md-4 col-sm-4 col-xs-6">
						<ul style="padding:0px; margin:0px; list-style:none;">
							<li><a href="#" style="text-align:auto; color: #b8b4b2;">Fitness training</a></li>
							<li><a href="#" style="text-align:left; color: #b8b4b2;">Kick Boxing</a></li>
							<li><a href="#" style="text-align:left; color: #b8b4b2;">Yoga</a></li>
							<li><a href="#" style="text-align:left; color: #b8b4b2;">Karate</a></li>
						</ul>
					</div>
	</div>
	<div class="col-md-2 col-sm-12" style="text-align:left; color: #b8b4b2;">
	<h3 class="footer-header">Events</h3>
	<div class="col-md-4 col-sm-4 col-xs-6">
						<ul style="padding:0px; margin:0px; list-style:none;">
							<li><a href="#" style="text-align:left; color: #b8b4b2;">Cricket</a></li>
							<li><a href="#" style="text-align:left; color: #b8b4b2;">Futsal</a></li>
							<li><a href="#" style="text-align:left; color: #b8b4b2;">Baseball</a></li>
							<li><a href="#" style="text-align:left; color: #b8b4b2;">Corporate</a></li>
							<li><a href="#" style="text-align:left; color: #b8b4b2;">Practice Session</a></li>
						</ul>
					</div>
	</div>
	</div>
	<a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  </div>
	
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
