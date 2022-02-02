<?php
	include "meta.php";
?>
    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
	
	<style id="compiled-css" type="text/css">
	header .container1 {
		position: relative;
		z-index: 2;
	}
	</style>
	
	<link href="https://fonts.googleapis.com/css?family=Exo:500i&display=swap" rel="stylesheet">
	
	<script>
	var randomlinks=new Array()

	randomlinks[0]="http://apistack.dev"
	randomlinks[1]="http://area.rent"
	randomlinks[2]="http://bridal.ltd"
	randomlinks[3]="http://naaladiyar.com"
	randomlinks[4]="http://pex.ai"
	randomlinks[5]="http://sermonspoint.com"
	randomlinks[6]="http://step.academy"
	randomlinks[7]="http://tally.services"
	randomlinks[8]="http://tamilhymns.com"
	randomlinks[9]="http://taxinvoice.io"
	randomlinks[10]="http://thesaree.store"
	randomlinks[11]="http://worktrip.app"
	randomlinks[12]="http://helensatya.com"
	randomlinks[13]="http://talk.science"

	function randomlink(){
	window.open(randomlinks[Math.floor(Math.random()*randomlinks.length)], '_blank')
	}
	</script>
	<!-- window.location=randomlinks[Math.floor(Math.random()*randomlinks.length)] -->
  </head>

  <body>

	
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" data-navbar="fixed">
      <div class="container" >

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="../sentience.cloud/">
            <img class="logo-dark" src="assets/img/logo-dark.png" alt="logo">
            <img class="logo-light" src="assets/img/logo-light.png" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <nav class="nav nav-navbar ml-auto">
            <a class="nav-link" href="about">About</a>
            <a class="nav-link" href="portfolio">Portfolio</a>
            <a class="nav-link" href="portfolio-domains">Domains</a>
            <a class="nav-link" href="people">People</a>
            <a class="nav-link" href="contact">Support</a>
          </nav>
        </section>

      </div>
    </nav><!-- /.navbar -->

	<div class="scroll-bar"></div>
	<div class="content"></div>
	
	 <header class="header  h-fullscreen p-0 overflow-hidden" >
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="bg-video" >
			<source  src="assets/video/Painting-and-Drawing.mp4"/>
		</video>
	  <div class="overlay opacity-75" style="background-image: linear-gradient(135deg, #fff 0%, #fff 40%, transparent 100%);"></div>

	   <div class="container container1 mb-8">
			<div class="row align-items-center h-100">

			  <div class="col-md-8 col-lg-6 mt-8">
				<h1 class="display-2" style="font-family: 'Exo', sans-serif; color:#ff0000;"><strong>sentience cloud</strong></h1>
				<p class="lead-2 mt-5 mb-8"><b>Building awesome cloud experiences for you - the smart digital user.</b><br><br>At Sentience Cloud, we believe in putting cloud technology to greater use by leveraging digital consumers.</p>
				<p class="gap-xy">
				  <a class="btn btn-xl btn-round btn-primary mw-200" href="portfolio">Our Awesome Products</a>
				  <a class="btn btn-xl btn-round btn-outline-primary mw-200" href="javascript:randomlink()">I`m lucky</a>
				  
				</p>
			  </div>

			</div>
		  </div>
	</header>
	<!-- /.header -->