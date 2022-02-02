<?php include "header.php";?>

    <style type="text/css">

/* Vertical Tabs */
 .vertical-tabs{
    font-size:15px;
    padding:10px;
    color:#000
}
 .vertical-tabs .nav-tabs .nav-link{
    border-radius: 0;
    background:#50a1ff;
    text-align:center;
    font-size: 16px;
    border:1px solid #fff;
    color:#fff;
    height:40px;
    width: 120px;
}
 .vertical-tabs .nav-tabs .nav-link.active{
    background-color:#00ffff!important;
    color:#fff;
}
 .vertical-tabs .tab-content>.active{
    background:#fff;
    display:block;
}
 .vertical-tabs .nav.nav-tabs{
    border-bottom:0;
    border-right:3px solid #000;
    display:block;
    float:left;
    margin-right:20px;
    padding-right:15px;
}
 .vertical-tabs .sv-tab-panel{
    background:#fff;
    min-height:274px;
    padding-top:10px;
}
@media only screen and (max-width: 420px){
  .titulo{font-size: 22px}
}
@media only screen and (max-width: 325px){
  .vertical-tabs{ padding:8px;}
}
    </style>
    	 <!-- Header -->
		 <!--
    <header class="header h-fullscreen" style="background-image: url(assets/img/bg/2.jpg)">
      <div class="overlay opacity-95" style="background-image: linear-gradient(135deg, #fff 0%, #fff 40%, transparent 100%);"></div>
      <div class="container">
        <div class="row align-items-center h-100">

          <div class="col-md-8 col-lg-6">
            <h1 class="display-4"><strong>Digital Customer First</strong></h1>
            <p class="lead-2 mt-5 mb-8">Building awesome cloud experiences for the digital users. Putting technology to greater use by leveraging digital customers.</p>
            <p class="gap-xy">
              <a class="btn btn-xl btn-round btn-primary mw-200" href="#">View our products</a>
              <a class="btn btn-xl btn-round btn-outline-primary mw-200" href="#">Start trial</a>
            </p>
          </div>

        </div>
      </div>
    </header>
	-->
	<!-- /.header -->
	
	
	<!-- Main Content -->
    <main class="main-content">

	  <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Products
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
		<section class="section by-gray">

				<div class="container">
				  <header class="section-header">
					<small>Policy</small>
					<h2>Working together is better</h2>
					<hr>
					<p class="lead">Our products allow businesses to be more reliable, flexible, and scalable. They help improve communication and make sense of massive amounts of data.</p>
				  </header>
		  </div>
			  <div class="container">
				<div class="vertical-tabs">
				  <ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
					  <a class="nav-link active" data-toggle="tab" href="#pag1" role="tab" aria-controls="home">Unethical</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#pag2" role="tab" aria-controls="profile">Cybercrime</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#pag3" role="tab" aria-controls="messages">Data</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#pag4" role="tab" aria-controls="settings">Usage </a>
					</li>
      <!--    
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#pag5" role="tab" aria-controls="settings">Página 5</a>
					</li>

					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#pag6" role="tab" aria-controls="settings">Página 6</a>
					</li>

					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#pag7" role="tab" aria-controls="settings">Página 7</a>
					</li>
        -->
				  </ul>
				  <div class="tab-content">
					<div class="tab-pane active" id="pag1" role="tabpanel">
					  <div class="sv-tab-panel">
						<h3>Unethical</h3>
						<p class="lead-2 mt-5 mb-8">Using our products for unethical purposes is an offence.</p>
					  </div>
					</div>
					<div class="tab-pane" id="pag2" role="tabpanel">
					  <div class="sv-tab-panel">
						<h3>Cybercrime</h3>
						<p>Using cybercrime against or with our product is not allowed.</p>
					  </div>
					</div>
					<div class="tab-pane" id="pag3" role="tabpanel">
					  <div class="sv-tab-panel">
						<h3>Data</h3>
						<p>All your data is yours and you can delete or download at anytime.</p>
					  </div>
					</div>
					<div class="tab-pane" id="pag4" role="tabpanel">
					  <div class="sv-tab-panel">
					   <h3>Usage</h3>
						<p>You are free to use our products on your at-will decision.</p>
					  </div>
					</div>
        <!--  
					<div class="tab-pane" id="pag5" role="tabpanel">
					  <div class="sv-tab-panel">
						<h3>TAB 5</h3>
						<p>CONTEUDO 5</p>
					  </div>
					</div>

					<div class="tab-pane" id="pag6" role="tabpanel">
					  <div class="sv-tab-panel">
						<h3>TAB 6</h3>
						<p>CONTEUDO 6</p>
					  </div>
					</div>

					<div class="tab-pane" id="pag7" role="tabpanel">
					  <div class="sv-tab-panel">
						<h3>TAB 7</h3>
						<p>CONTEUDO 7</p>
					  </div>
					</div>
        -->
				  </div>
				</div>
			  </div>


		</section>
</main>


<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <p>Your Mailchimp form goes here, or whatever you like. Example input below.</p>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="email" class="form-control" placeholder="Email Address">
          </div>
        </div>
        <div class="modal-footer">
          <!-- Make sure to include the 'nothanks' class on the buttons -->
          <button class="btn btn-default nothanks" data-dismiss="modal" aria-hidden="true">Don't Show Me This Again</button>
          <button class="btn btn-primary nothanks" data-dismiss="modal" aria-hidden="true">Subscribe</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <script>
    // Delayed Modal Display + Cookie On Click
    $(document).ready(function() {

      // If no cookie with our chosen name (e.g. no_thanks)...
      if ($.cookie("no_thanks") == null) {

        // Show the modal, with delay func.
        $('#myModal').appendTo("body");
        function show_modal(){
          $('#myModal').modal();
        }

        // Set delay func. time in milliseconds
        window.setTimeout(show_modal, 3000);
        }

      // On click of specified class (e.g. 'nothanks'), trigger cookie, which expires in 100 years
      $(".nothanks").click(function() {
        $.cookie('no_thanks', 'true', { expires: 36500, path: '/' });
      });
    });
  </script>
<?php include "footer.php";?>