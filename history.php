<?php include "header.php"?>

<style>
.main-timeline{
    overflow: hidden;
    position: relative;
}

.main-timeline .timeline{ 
    position: relative;
    margin-top: -119px;
}

.main-timeline .timeline:first-child{ margin-top: 0; }

.main-timeline .timeline:before,
.main-timeline .timeline:after{
    content: "";
    display: block;
    width: 100%;
    clear: both;
}

.main-timeline .timeline:before{
    content: "";
    width: 100%;
    height: 100%;
    box-shadow: -8px 0 5px -5px rgba(0, 0, 0, 0.5) inset;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
	display:none;
}

.main-timeline .timeline-icon{
    width: 210px;
    height: 210px;
    border-radius: 50%;
    border: 25px solid transparent;
    border-top-color: #f44556;
    border-right-color: #f44556;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 1;
    transform: rotate(45deg);
}

.main-timeline .year{
    display: block;
    width: 110px;
    height: 110px;
    line-height: 110px;
    border-radius: 50%;
    background: #fff;
    box-shadow: 0 0 20px rgba(0,0,0,0.4);
    margin: auto;
    font-size: 30px;
    font-weight: bold;
    color: #f44556;
    text-align: center;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    transform: rotate(-45deg);
}

.main-timeline .timeline-content{
    width: 35%;
    float: right;
    background: #f44556;
    padding: 30px 20px;
    margin: 50px 0;
    z-index: 1;
    position: relative;
}

.main-timeline .timeline-content:before{
    content: "";
    width: 20%;
    height: 15px;
    background: #f44556;
    position: absolute;
    top: 50%;
    left: -20%;
    z-index: -1;
    transform: translateY(-50%);
}

.main-timeline .title{
    font-size: 20px;
    font-weight: bold;
    color: #fff;
    margin: 0 0 10px 0;
}

.main-timeline .description{
    font-size: 16px;
    color: #fff;
    line-height: 24px;
    margin: 0;
}

.main-timeline .timeline:nth-child(2n):before{ box-shadow: 8px 0 5px -5px rgba(0, 0, 0, 0.5) inset; }

.main-timeline .timeline:nth-child(2n) .timeline-icon{ transform: rotate(-135deg); }

.main-timeline .timeline:nth-child(2n) .year{ transform: rotate(135deg); }

.main-timeline .timeline:nth-child(2n) .timeline-content{ float: left; }

.main-timeline .timeline:nth-child(2n) .timeline-content:before{
    left: auto;
    right: -20%;
}

.main-timeline .timeline:nth-child(2n) .timeline-icon{
    border-top-color: #e97e2e;
    border-right-color: #e97e2e;
}

.main-timeline .timeline:nth-child(2n) .year{ color: #e97e2e; }

.main-timeline .timeline:nth-child(2n) .timeline-content,
.main-timeline .timeline:nth-child(2n) .timeline-content:before{ background: #e97e2e; }

.main-timeline .timeline:nth-child(3n) .timeline-icon{
    border-top-color: #13afae;
    border-right-color: #13afae;
}

.main-timeline .timeline:nth-child(3n) .year{ color: #13afae; }

.main-timeline .timeline:nth-child(3n) .timeline-content,
.main-timeline .timeline:nth-child(3n) .timeline-content:before{ background: #13afae; }

.main-timeline .timeline:nth-child(4n) .timeline-icon{
    border-top-color: #105572;
    border-right-color: #105572;
}

.main-timeline .timeline:nth-child(4n) .year{ color: #105572; }

.main-timeline .timeline:nth-child(4n) .timeline-content,
.main-timeline .timeline:nth-child(4n) .timeline-content:before{ background: #105572; }

@media only screen and (max-width: 1199px){
    .main-timeline .timeline{ margin-top: -103px; }
    .main-timeline .timeline-content:before{ left: -18%; }
    .main-timeline .timeline:nth-child(2n) .timeline-content:before{ right: -18%; }
}

@media only screen and (max-width: 990px){
    .main-timeline .timeline{ margin-top: -127px; }
    .main-timeline .timeline-content:before{ left: -2%; }
    .main-timeline .timeline:nth-child(2n) .timeline-content:before{ right: -2%; }
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1023px) {
	.main-timeline .timeline{ 
    position: relative;
    margin-top: -190px;
}
}

@media only screen and (min-device-width : 1023px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio : 2){
	.main-timeline .timeline{ 
    position: relative;
    margin-top: -142px;
}
}
@media only screen and (max-width: 767px){
    .main-timeline .timeline{
        margin-top: 0;
        overflow: hidden;
    }
    .main-timeline .timeline:before,
    .main-timeline .timeline:nth-child(2n):before{
        box-shadow: none;
    }
    .main-timeline .timeline-icon,
    .main-timeline .timeline:nth-child(2n) .timeline-icon{
        margin-top: -30px;
        margin-bottom: 20px;
        position: relative;
        transform: rotate(135deg);
    }
    .main-timeline .year,
    .main-timeline .timeline:nth-child(2n) .year{ transform: rotate(-135deg); }
    .main-timeline .timeline-content,
    .main-timeline .timeline:nth-child(2n) .timeline-content{
        width: 100%;
        float: none;
        border-radius: 0 0 20px 20px;
        text-align: center;
        padding: 25px 20px;
        margin: 0 auto;
    }
    .main-timeline .timeline-content:before,
    .main-timeline .timeline:nth-child(2n) .timeline-content:before{
        width: 15px;
        height: 25px;
        position: absolute;
        top: -22px;
        left: 50%;
        z-index: -1;
        transform: translate(-50%,0);
    }
}
</style>

    <!-- Main Content -->
    <main class="main-content">


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | How it works
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section id="how-it-works" class="section">
        <div class="container">
          <header class="section-header">
            <h2>HISTORY</h2>
            <hr>
            <p class="lead">We ride the wave that is cloud</p>
          </header>
                <div class="col-md-12">
                    <div class="main-timeline">
                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2016</span></div>
                            <div class="timeline-content">
                                <h3 class="title">TamilHymns</h3>
                                <p class="description">
                                    TamilHymns eBook of Christian Tamil Hymns was launched in cloud formats and a freely downloadable PDF eBook.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2016</span></div>
                            <div class="timeline-content">
                                <h3 class="title">SermonsPoint</h3>
                                <p class="description">
                                    SermonsPoint was launched to publish the writings of Ps. Anita Jayadas, a pastor who leads a Church that disperses faith and salvation through Jesus Christ alone.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2017</span></div>
                            <div class="timeline-content">
                                <h3 class="title">TaxInvoice.io</h3>
                                <p class="description">
                                    TaxInvoice.io was launched to ease the invoicing process with a refreshing cloud invoicing experience with intuitive dashboards and GST filing.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2018</span></div>
                            <div class="timeline-content">
                                <h3 class="title">TamilHymns</h3>
                                <p class="description">
                                    TamilHymns was launched in Amazon Kindle and Google Play.
                                </p>
                            </div>
                        </div>
						
						<div class="timeline">
                            <div class="timeline-icon"><span class="year">2019</span></div>
                            <div class="timeline-content">
                                <h3 class="title">Office</h3>
                                <p class="description">
                                    Our Office space in Ashok Nagar, Chennai was dedicated by Ps. Prabhakar and family, Almight AG Church, Chennai on April 22.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2019</span></div>
                            <div class="timeline-content">
                                <h3 class="title">Jaffni Sharon Johnson</h3>
                                <p class="description">
                                    Sentience Cloud is created with Jaffni Sharon Johnson helming the affairs.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2019</span></div>
                            <div class="timeline-content">
                                <h3 class="title">Udyog Aadhaar</h3>
                                <p class="description">
                                    Sentience Cloud is registered in Udyog Aadhaar on October 14.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2019</span></div>
                            <div class="timeline-content">
                                <h3 class="title">bridal.ltd</h3>
                                <p class="description">
                                    bridal.ltd was launched to provide cloud bookings and service aggregation for wedding related needs.
                                </p>
                            </div>
                        </div>
						
						<div class="timeline">
                            <div class="timeline-icon"><span class="year">2019</span></div>
                            <div class="timeline-content">
                                <h3 class="title">Tally.Services</h3>
                                <p class="description">
                                    Tally.Services was launched to connect Tally users with service providers.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2019</span></div>
                            <div class="timeline-content">
                                <h3 class="title">APIStack.dev</h3>
                                <p class="description">
                                    APIStack.dev was launched as an API stack engine for easy form filling with agile cloud APIs.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2019</span></div>
                            <div class="timeline-content">
                                <h3 class="title">area.rent</h3>
                                <p class="description">
                                    area.rent was launched to manage rental or leases on the cloud.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2019</span></div>
                            <div class="timeline-content">
                                <h3 class="title">Step.Academy</h3>
                                <p class="description">
                                    Step.Academy was launched to provide courses on the cloud for the smart learner and for the smart lecturer.
                                </p>
                            </div>
                        </div>
						
						<div class="timeline">
                            <div class="timeline-icon"><span class="year">2019</span></div>
                            <div class="timeline-content">
                                <h3 class="title">WorkTrip.app</h3>
                                <p class="description">
                                    An Android app to connect an organisational travel management, spends and reimbursements over the cloud.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2019</span></div>
                            <div class="timeline-content">
                                <h3 class="title">Naaladiyar.com</h3>
                                <p class="description">
                                    Naaladiyar.com was launched as a knowledge base for sharing the wisdom of Naaladiyar in a refreshing cloud experience.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2019</span></div>
                            <div class="timeline-content">
                                <h3 class="title">TheSaree.Store</h3>
                                <p class="description">
                                    TheSaree.Store was launched to enable saree lovers and buyers with the best sarees via an ecommerce cloud experience.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2019</span></div>
                            <div class="timeline-content">
                                <h3 class="title">TaxInvoice.io</h3>
                                <p class="description">
                                    TaxInvoice.io was relaunched with many exciting features and functionalities and integrations.
                                </p>
                            </div>
                        </div>

						<div class="timeline">
                            <div class="timeline-icon"><span class="year">2020</span></div>
                            <div class="timeline-content">
                                <h3 class="title">PEx.ai</h3>
                                <p class="description">
                                    PEx.ai is our futuristic cloud technology experience to merge Purchase, Production, Marketing, Stores, Sales, Finance, Facilities, People over an intelligent full-stack system.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2020</span></div>
                            <div class="timeline-content">
                                <h3 class="title">Talk.Science</h3>
                                <p class="description">
                                    An intuitive mobile app to spew information on raw nutritional values of edible foods.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2020</span></div>
                            <div class="timeline-content">
                                <h3 class="title">Capture all Continents</h3>
                                <p class="description">
                                    Sentience Cloud is working to market it`s products into foreign countries.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">****</span></div>
                            <div class="timeline-content">
                                <h3 class="title">ISO</h3>
                                <p class="description">
                                    Sentience Cloud is aiming at ISO certification in the near future.
                                </p>
                            </div>
                        </div>
						
                    </div>
                </div>
           


		</div>
		
	  </section>

	</main>


<?php include "footer.php"?>	