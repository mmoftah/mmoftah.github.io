<!DOCTYPE html>

<!-- Icons are mainly Font Awesome icons! -->
<!-- Icons are mainly Font Awesome icons! -->
<!-- Icons are mainly Font Awesome icons! -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Minecraft OnePage - Sam Austin Design">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>BattleMC</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">
    <link href="assets/css/nprogress.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/nprogress.js"></script>
    <script src="//fast.eager.io/b9RZHmKEcw.js"></script>
    <script src="assets/js/scrollblur.js"></script>
    
    <!-- Preloader -->
    <script type="text/javascript">
	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$('#status').fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
			$('body').delay(350).css({'overflow':'visible'});
		})
	//]]>
    </script>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
    
  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">

  <!-- Preloader -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    
  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a style="color:#3498db;" class="navbar-brand hidden-xs hidden-sm" href="#home"><b>Minecraft Server</b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothScroll">Home</a></li>
			<li> <a href="#about" class="smoothScroll"> About</a></li>
			<li> <a href="#services" class="smoothScroll"> Vote</a></li>
			<li> <a href="#team" class="smoothScroll"> Team</a></li>
			<li> <a href="#donate" class="smoothScroll"> Donate</a></li>
			<li> <a href="#join" class="smoothScroll"> Join Us</a></li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
	<?php
	include_once 'assets/includes/status.class.php';
	$status = new MinecraftServerStatus();
	$host = 'battlemc.serveminecraft.net';
	$response = $status->getStatus($host);
	if(!$response) {
		echo"<li class='nav-pull-right'> <a><i class='fa fa-circle text-danger'></i> Server offline!</a></li>";
	} else {
		echo"<li class='nav-pull-right'> <a><i class='fa fa-circle text-success'></i> ".$response['players']."/".$response['maxplayers']." Online</a></li>";
	}
	?>
	</ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>  
  
		<!-- HEADERWRAP -->
	    <div class="headerwrap" id="headerwrap" id="home" name="home">
			<header class="clearfix content">
	  		 		<h1><span class="fa fa-code fa-2x"></span></h1>
	  		 		<p>BattleMC Faction Server</p>
	  		 		<p>battlemc.serveminecraft.net</p>
	  		</header>	    
	    </div><!-- /headerwrap -->

		<!-- GREYWRAP -->
		<div id="greywrap">
			<div class="row">
				<div class="col-lg-4 callout">
					<span class="fa fa-cloud fa-4x"></span>
					<h2>Our servers</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta condimentum facilisis. Quisque quis arcu varius...</p>
				</div><!-- col-lg-4 -->
					
				<div class="col-lg-4 callout">
					<span class="fa fa-users fa-4x"></span>
					<h2>Our staff</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta condimentum facilisis. Quisque quis arcu varius...</p>
				</div><!-- col-lg-4 -->	
				
				<div class="col-lg-4 callout">
					<span class="fa fa-globe fa-4x"></span>
					<h2>Our community</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta condimentum facilisis. Quisque quis arcu varius...</p>
				</div><!-- col-lg-4 -->	
			</div><!-- row -->
		</div><!-- greywrap -->
		
		<!-- ABOUT -->
		<div class="container" id="about" name="about">
			<div class="row white">
			<br>
				<h1 class="centered">A LITTLE ABOUT OUR SERVER</h1>
				<hr>
				
				<div class="col-lg-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta condimentum facilisis. Quisque quis arcu varius, iaculis ligula et, porta ipsum. Pellentesque fringilla blandit nibh adipiscing malesuada. Maecenas nec tempor lectus, sed ultrices justo. Mauris consectetur, arcu vel hendrerit fermentum, ante risus scelerisque arcu, eget egestas mauris velit quis dui. Phasellus suscipit tempus quam vitae tincidunt. Ut hendrerit sit amet ante ut tincidunt.</p>
				</div><!-- col-lg-6 -->
				
				<div class="col-lg-6">
					<p>Duis mattis neque in tellus sagittis, luctus dignissim risus blandit. Aliquam blandit turpis vitae elit imperdiet interdum. Cras fermentum nisl a justo facilisis, vel placerat lacus tincidunt. Nulla suscipit vulputate nunc non pretium. Donec sollicitudin volutpat lobortis. Sed scelerisque mauris nibh, non sollicitudin tortor laoreet a. Vivamus pretium convallis fermentum. Proin ante ipsum, fermentum ac mollis et, malesuada at est.</p>
				</div><!-- col-lg-6 -->
			</div><!-- row -->
		</div><!-- container -->
		
		<!-- SECTION DIVIDER1 -->
		<section class="section-divider textdivider divider1">
			<div class="container">
				<h1>UNIQUE FEATURES</h1>
				<hr>
				<p>We have great features that you wont find on any other Minecraft server! For example, we have loads of great...</p>
			</div><!-- container -->
		</section><!-- section -->
		
		
		<!-- VOTE -->
		<div class="container" id="services" name="services">
			<br>
			<br>
			<div class="row">
				<h2 class="centered">OUR VOTING SITES ARE BELOW.</h2>
				<hr>
				<br>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjE1MCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjE5cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MzAweDIwMDwvdGV4dD48L3N2Zz4=" style="width: 300px; height: 200px;" data-src="holder.js/300x200" alt="300x200">
          <div class="caption">
           <center>
            <h3>Planet Minecraft</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Vote!</a></p>
           </center>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjE1MCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjE5cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MzAweDIwMDwvdGV4dD48L3N2Zz4=" style="width: 300px; height: 200px;" data-src="holder.js/300x200" alt="300x200">
          <div class="caption">
           <center>
            <h3>Minecraft Server List</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Vote!</a></p>
           </center>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjE1MCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjE5cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MzAweDIwMDwvdGV4dD48L3N2Zz4=" style="width: 300px; height: 200px;" data-src="holder.js/300x200" alt="300x200">
          <div class="caption">
           <center>
            <h3>Minecraft Forum</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Vote!</a></p>
           </center>
          </div>
        </div>
      </div>
    

				</div><!-- col-lg -->
			</div><!-- row -->
		</div><!-- container -->
  		

		<!-- SECTION DIVIDER2 -->
		<section class="section-divider textdivider divider2">
			<div class="container">
				<h1>HERE'S SOME PLACEHOLDER TEXT.</h1>
				<hr>
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div><!-- container -->
		</section><!-- section -->

		<!-- TEAM MEMBERS -->
		<div class="container" id="team" name="team">
		<br>
			<div class="row white centered">
				<h1 class="centered">MEET OUR AWESOME TEAM</h1>
				<hr>
				<br>
				<br>
				<div class="col-lg-3 centered">
					<img class="img img-circle" src="https://minotar.net/avatar/SatanicMC/120" height="120px" width="120px" alt="">
					<br>
					<h4><b>SatanicMC</b></h4>
					<a href="http://twitter.com/swamminsam" class="icon icon-twitter"></a>
					<p>The head designer, oh wait, the only designer, of this great Minecraft theme!</p>
				</div><!-- col-lg-3 -->
				
				<div class="col-lg-3 centered">
					<img class="img img-circle" src="https://minotar.net/avatar/XD_Killz/120" height="120px" width="120px" alt="">
					<br>
					<h4><b>XD_Killz</b></h4>
					<a href="http://twitter.com/_ElliotHicks" class="icon icon-twitter"></a>
					<p>The source of all of my themes shader pics! Big thanks to him!</p>
				</div><!-- col-lg-3 -->
				
				<div class="col-lg-3 centered">
					<img class="img img-circle" src="https://minotar.net/avatar/Notch/120" height="120px" width="120px" alt="">
					<br>
					<h4><b>Notch</b></h4>
					<a href="#" class="icon icon-twitter"></a>
					<p>The Founder of Mojang and creator of Minecraft. It started so small, now look what it's built up to!</p>
				</div><!-- col-lg-3 -->
				
				<div class="col-lg-3 centered">
					<img class="img img-circle" src="https://minotar.net/avatar/jeb_/120" height="120px" width="120px" alt="">
					<br>
					<h4><b>jeb_</b></h4>
					<a href="#" class="icon icon-twitter"></a>
					<p>Something wrong with Minecraft? Blame Jeb, if it's not his fault, then it's almost certainly DinnerBone's. Still, one of my favourites of the bunch!</p>
				</div><!-- col-lg-3 -->
				
			</div><!-- row -->
		</div><!-- container -->

		<!-- GREYWRAP -->
		<div id="greywrap">
			<div name="donate" id="donate" class="container">
			<br>
			<br>
				<div class="row">
					<div class="col-lg-8 centered">
						<img class="img-responsive" src="assets/img/macbook.png" align="">
					</div>
					<div class="col-lg-4">
						<h2>Thought About Donating?</h2>
						<p>We work extremely hard for this server! Be sure to show your appreciation by heading over to our BuyCraft page!</p>
						<p><a href="http://shop.therealm.eu/" class="btn btn-success">Go!</a></p>
					</div>					
				</div><!-- row -->
			</div>
			<br>
			<br>
		</div><!-- greywrap -->
		
		<!-- SECTION DIVIDER3 -->
		<section class="section-divider textdivider divider3">
			<div class="container">
				<h1>JOIN US NOW.</h1>
				<hr>
				<p>battlemc.serveminecraft.net</p>
				<p><a class="icon icon-twitter" href="#"></a> | <a class="icon icon-facebook" href="#"></a></p>
			</div><!-- container -->
		</section><!-- section -->
		
		<div class="container" id="join" name="join">
			<div class="row">
			<br>
				<h1 class="centered">THANKS FOR VISITING US</h1>
				<hr>
				<br>
				<br>

		<div id="footerwrap">
			<div class="container">
				<!--<h4>Created by Sam Austin Design</a> - Copyright 2014</h4> -->
			</div>
		</div>

    <!-- Bootstrap core JavaScript
 ========================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>
  </body>
</html>

                            
                            
                            
                            