<?php
include "header.php";
?>

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
					<small>OUR PRINCIPLES</small>
					<h2>The base core principles on which Sentience Cloud is established</h2>
					<hr>
					<p class="lead">Our products are all engineered with the best possible ethical values.</p>
				  </header>
		  </div>
			  <div class="container">
				<div class="vertical-tabs">
				  <ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
					  <a class="nav-link active" data-toggle="tab" href="#pag1" role="tab" aria-controls="home">Compliant</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#pag2" role="tab" aria-controls="profile">Innovation</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#pag3" role="tab" aria-controls="messages">Ethical</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#pag4" role="tab" aria-controls="settings">Value</a>
					</li>

					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#pag5" role="tab" aria-controls="settings">Research</a>
					</li>

					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#pag6" role="tab" aria-controls="settings">Security</a>
					</li>

					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#pag7" role="tab" aria-controls="settings">Customer</a>
					</li>
				  </ul>
				  <div class="tab-content">
					<div class="tab-pane active" id="pag1" role="tabpanel">
					  <div class="sv-tab-panel">
						<h3>Compliant</h3>
						<p class="lead-2 mt-5 mb-8">Our products are compliant to all degrees of governing laws. </p>
					  </div>
					</div>
					<div class="tab-pane" id="pag2" role="tabpanel">
					  <div class="sv-tab-panel">
						<h3>Innovation</h3>
						<p>All our products are continually monitored for innovative improvements.</p>
					  </div>
					</div>
					<div class="tab-pane" id="pag3" role="tabpanel">
					  <div class="sv-tab-panel">
						<h3>Ethical</h3>
						<p>Our products are ethical consciously designed and engineered.</p>
					  </div>
					</div>
					<div class="tab-pane" id="pag4" role="tabpanel">
					  <div class="sv-tab-panel">
					   <h3>Value</h3>
						<p>Our products brings value to your organisation and for the work you do.</p>
					  </div>
					</div>

					<div class="tab-pane" id="pag5" role="tabpanel">
					  <div class="sv-tab-panel">
						<h3>Research</h3>
						<p>All our products are well-researched before development commences.</p>
					  </div>
					</div>

					<div class="tab-pane" id="pag6" role="tabpanel">
					  <div class="sv-tab-panel">
						<h3>Security</h3>
						<p>All our products are secured with encrypted algorithms.</p>
					  </div>
					</div>

					<div class="tab-pane" id="pag7" role="tabpanel">
					  <div class="sv-tab-panel">
						<h3>Customer</h3>
						<p>Customer and user centricity is our strategy.</p>
					  </div>
					</div>

				  </div>
				</div>
			  </div>


		</section>
</main>



<?php include "footer.php";?>