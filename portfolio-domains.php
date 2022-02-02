<?php include "header.php"?>
<style>

#filters {
	margin:1%;
	padding:0;
	list-style:none;
	font-size: 16px;
	font-weight: 600px;
}

	#filters li {
		float:left;
		text-align:center;
		!width: 100px;
	}
	
	#filters li span {
		display: block;
		padding:5px 20px;		
		text-decoration:none;
		color:#666;
		cursor: pointer;
	}
	
	#filters li span.active {
		background: #e95a44;
		color:#fff;
	}
	
#portfoliolist .portfolio {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-o-box-sizing: border-box;
	width:23%;
	margin:1%;
	display:none;
	float:left;
	overflow:hidden;
}

	.portfolio-wrapper {
		overflow:hidden;
		position: relative !important;
		background: #666;
		cursor:pointer;
	}

	.portfolio img {
		max-width:100%;
		position: relative;
		top:0;
    -webkit-transition: all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);
    transition:         all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);		
	}
	
	.portfolio .label {
		position: absolute;
		width: 100%;
		height:40px;
		bottom:-40px;
    -webkit-transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
    transition:         all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
	}

		.portfolio .label-bg {
			background: #e95a44;
			width: 100%;
			height:100%;
			position: absolute;
			top:0;
			left:0;
		}
	
		.portfolio .label-text {
			color:#fff;
			position: relative;
			z-index:500;
			padding:2px 8px;
		}
			
			.portfolio .text-category {
				display:block;
				font-size:9px;
			}
	
	.portfolio:hover .label {
    bottom:0;
  }
	.portfolio:hover img {
    top:-30px;
  }  

/*  #Mobile (Portrait) - Note: Design for a width of 320px */
@media only screen and (max-width: 767px) {
	#filters li {
		float:left;
		width: auto;	
		font-size: 14px;
		font-weight: 300px;
	}
	
	#portfoliolist .portfolio {
		width:48%;
		margin:1%;
	}		

}


/* #Clearing */

/* Self Clearing Goodness */

.clearfix:before,
.clearfix:after,
.row:before,
.row:after {
  content: '\0020';
  display: block;
  overflow: hidden;
  visibility: hidden;
  width: 0;
  height: 0; }
.row:after,
.clearfix:after {
  clear: both; }
.row,
.clearfix {
  zoom: 1; }

</style>


    <!-- Main Content -->
    <main class="main-content">

      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Features
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section id="features" class="section bg-gray">
        <div class="container">
          <header class="section-header ">
           <ul id="filters" class="clearfix">
			<li><span class="filter active" data-filter=".app, .data, .cloud, .knowledge, .services, .education, .retail">All</span></li>
			<li><span class="filter" data-filter=".app">App</span></li>
			<li><span class="filter" data-filter=".data">Data</span></li>
			<li><span class="filter" data-filter=".cloud">Cloud</span></li>
			<li><span class="filter" data-filter=".knowledge">Knowledge</span></li>
			<li><span class="filter" data-filter=".services">Services</span></li>
			<li><span class="filter" data-filter=".education">Education</span></li>
			<li><span class="filter" data-filter=".retail">Retail</span></li>
			</ul>
          </header>

          <div class="row gap-y text-center">
			<div id="portfoliolist">
				
				<div class="portfolio app" data-cat="app">
					<div class="portfolio-wrapper">		
						<a  href="javascript:void(0);" onclick="window.location.href='worktrip.app'">
						<img src="assets/img/portfolio/worktrip.png" alt="worktrip | work hard travel smart" />
						<div class="label">
							<div class="label-text">
								<a href="worktrip.app" class="text-title">Worktrip.app</a>
								<span class="text-category">App</span>
							</div>
							<div class="label-bg"></div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="portfolio data" data-cat="data">
					<div class="portfolio-wrapper">				
						<a href="javascript:void(0);" onclick="window.location.href='apistack.dev'">
						<img src="assets/img/portfolio/apistack.dev.png" alt="APIStack.dev | Connecting Interfaces" />
						<div class="label">
							<div class="label-text">
								<a href="apistack.dev" class="text-title">APIStack.dev</a>
								<span class="text-category">Data</span>
							</div>
							<div class="label-bg"></div>
						</div>
						</a>
					</div>
				</div>

				<div class="portfolio cloud" data-cat="cloud">
					<div class="portfolio-wrapper">			
						<a href="javascript:void(0);" onclick="window.location.href='area.rent'">
						<img src="assets/img/portfolio/area.rent.png" alt="area.rent | manage massive" />
						<div class="label">
							<div class="label-text">
								<a href="area.rent" class="text-title">area.rent</a>
								<span class="text-category">Cloud</span>
							</div>
							<div class="label-bg"></div>
						</div>
						</a>
					</div>
				</div>
				
				
				<div class="portfolio services" data-cat="services">
					<div class="portfolio-wrapper">						
						<a href="javascript:void(0);" onclick="window.location.href='bridal.ltd'">
						<img src="assets/img/portfolio/bridal.ltd.png" alt="bridal.ltd" />
						<div class="label">
							<div class="label-text">
								<a href="bridal.ltd" class="text-title">bridal.ltd</a>
								<span class="text-category">Services</span>
							</div>
							<div class="label-bg"></div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="portfolio cloud" data-cat="cloud">
					<div class="portfolio-wrapper">
						<a href="javascript:void(0);" onclick="window.location.href='pex.ai'"> 
						<img src="assets/img/portfolio/pex.ai.png" alt="PEX.AI | Complex Made Simple" />
						<div class="label">
							<div class="label-text">
								<a href="pex.ai" class="text-title">PEX.ai</a>
								<span class="text-category">Cloud</span>
							</div>
							<div class="label-bg"></div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="portfolio knowledge" data-cat="knowledge">
					<div class="portfolio-wrapper">
						<a href="javascript:void(0);" onclick="window.location.href='naaladiyar'">
						<img src="assets/img/portfolio/naaladiyar.png" alt="Naaladiyar | Naaladiyar.com" />
						<div class="label">
							<div class="label-text">
								<a href="naaladiyar" class="text-title">Naaladiyar</a>
								<span class="text-category">Knowledge</span>
							</div>
							<div class="label-bg"></div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="portfolio services" data-cat="services">
					<div class="portfolio-wrapper">	
						<a href="javascript:void(0);" onclick="window.location.href='tally.services'">
						<img src="assets/img/portfolio/tally.services.png" alt="Tally.services" />
						<div class="label">
							<div class="label-text">
								<a href="tally.services" class="text-title">Tally.services</a>
								<span class="text-category">Services</span>
							</div>
							<div class="label-bg"></div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="portfolio cloud" data-cat="cloud">
					<div class="portfolio-wrapper">	
						<a href="javascript:void(0);" onclick="window.location.href='taxinvoice.io'">		
						<img src="assets/img/portfolio/taxinvoice.io.png" alt="TaxInvoice.io | Close Elegantly" />
						<div class="label">
							<div class="label-text">
								<a href="taxinvoice.io" class="text-title">TaxInvoice.io</a>
								<span class="text-category">Cloud</span>
							</div>
							<div class="label-bg"></div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="portfolio knowledge" data-cat="knowledge">
					<div class="portfolio-wrapper">	
						<a href="javascript:void(0);" onclick="window.location.href='sermonspoint'">	
						<img src="assets/img/portfolio/sermonspoint.png" alt="Sermons Point | Sermons by Anita Jayadas" />
						<div class="label">
							<div class="label-text">
								<a href="sermonspoint" class="text-title">Sermons Point</a>
								<span class="text-category">Knowledge</span>
							</div>
							<div class="label-bg"></div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="portfolio education" data-cat="education">
					<div class="portfolio-wrapper">
						<a href="javascript:void(0);" onclick="window.location.href='step.academy'">			
						<img src="assets/img/portfolio/setp.academy.png" alt="step | Make Your Move" />
						<div class="label">
							<div class="label-text">
								<a href="step.academy" class="text-title">Step.academy</a>
								<span class="text-category">Knowledge</span>
							</div>
							<div class="label-bg"></div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="portfolio retail" data-cat="retail">
					<div class="portfolio-wrapper">	
						<a href="javascript:void(0);" onclick="window.location.href='thesaree.store'">
						<img src="assets/img/portfolio/thesaree.store.png" alt="TheSaree.store | wear. feel. love." />
						<div class="label">
							<div class="label-text">
								<a href="thesaree.store" class="text-title">TheSaree.store</a>
								<span class="text-category">Knowledge</span>
							</div>
							<div class="label-bg"></div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="portfolio services" data-cat="services">
					<div class="portfolio-wrapper">			
						<img src="assets/img/portfolio/backup.jpg"/>
					</div>
				</div>
				
				<div class="portfolio app" data-cat="app">
					<div class="portfolio-wrapper">			
						<img src="assets/img/portfolio/backup.jpg"/>
					</div>
				</div>
				
				<div class="portfolio app" data-cat="app">
					<div class="portfolio-wrapper">			
						<img src="assets/img/portfolio/backup.jpg"/>
					</div>
				</div>
				
				<div class="portfolio data" data-cat="data">
					<div class="portfolio-wrapper">			
						<img src="assets/img/portfolio/backup.jpg"/>
					</div>
				</div>
				
				<div class="portfolio data" data-cat="data">
					<div class="portfolio-wrapper">			
						<img src="assets/img/portfolio/backup.jpg"/>
					</div>
				</div>
				
				<div class="portfolio knowledge" data-cat="knowledge">
					<div class="portfolio-wrapper">			
						<img src="assets/img/portfolio/backup.jpg"/>
					</div>
				</div>
				
				<div class="portfolio education" data-cat="education">
					<div class="portfolio-wrapper">			
						<img src="assets/img/portfolio/backup.jpg"/>
					</div>
				</div>
				
				<div class="portfolio education" data-cat="education">
					<div class="portfolio-wrapper">			
						<img src="assets/img/portfolio/backup.jpg"/>
					</div>
				</div>
				
				<div class="portfolio retail" data-cat="retail">
					<div class="portfolio-wrapper">			
						<img src="assets/img/portfolio/backup.jpg"/>
					</div>
				</div>
				
				<div class="portfolio retail" data-cat="retail">
					<div class="portfolio-wrapper">			
						<img src="assets/img/portfolio/backup.jpg"/>
					</div>
				</div>				
				
			</div>

          </div>

        </div>
      </section>

    </main><!-- /.main-content -->


<?php include "footer.php"; ?>

<script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.app, .data, .cloud, .knowledge, .services, .education, .retail'  
      		}     
				});								
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
</script>