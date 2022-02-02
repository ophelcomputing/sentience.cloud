<?php
session_start();
include "header.php";
?>

 <!-- Main Content -->
    <main class="main-content">

      <section class="section py-0">
        <div class="container-fluid">
              <!--Buttons-->
              <div class="row py-8 bg-gray text-mute text-center  d-flex justify-content-center">
                  <div class="col-md-4">
                      <a  class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block" href="#"><i class="fa fa-map-marker fa-3x"></i></a>
                      <p>Sentience Cloud,<br>Madhuram Flats, #25/38, Flat - G-3,<br>79th Street, Ashok Nagar,<br>Chennai, Tamil Nadu<br>India<br>PIN - 600083.</p>
                      
                  </div>

                  <div class="col-md-4">
                      <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone fa-3x"></i></a>
                      <p>
					  <a href="https://wa.me/919345152350"><i class="fa fa-whatsapp"></i> +91 9345152350</a>
                      <br>
					  <a href="https://t.me/SentienceCloud"><i class="fa fa-paper-plane"></i> +91 9345152350</a>
                      <br>
					  <a href="tel:919345152350"><i class="fa fa-phone"></i> +91 9345152350</a>
					  </p>
                  </div>

                  <div class="col-md-4">
                      <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope fa-3x"></i></a>
                      <a href="mailto:hello@sentience.cloud"><p><i class="fa fa-envelope"></i> hello@sentience.cloud</p></a>
                  </div>
              </div>  
        </div>

        <div class="row no-gutters">          
          <div class="col-md-6 align-self-center py-8">
           
            <h4 class="text-center">Drop a message</h4>
            <br>

            <div class="row">
              <div class="col-11 col-md-10 mx-auto">

				<?php
				if(isset($_SESSION['email-s']))
				{
					echo '<div class="alert alert-success d-on-success">We received your message and will contact you back soon. Thank you.</div>';
				}
				elseif(isset($_SESSION['email-f']))
				{
					echo '<div class="alert alert-success">ERROR: Kindy try again.</div>
				<form class="bg-gray p-6" action="contact-process.php" method="POST">
                  <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name" id="name" placeholder="Your Name" required>
                  </div>

                  <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="Your Email Address" required>
                  </div>
				  
				  <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="phone" id="phone" placeholder="Your Phone Number" required>
                  </div>

                  <div class="form-group">
                    <textarea class="form-control form-control-lg" rows="4" placeholder="Your Message" id="message" name="message" required></textarea>
                  </div>

                  <button class="btn btn-lg btn-block btn-primary" type="submit">SEND</button>
                </form>';
				}
				else
				{
					echo '
                <form class="bg-gray p-6" action="contact-process.php" method="POST">
                  <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name" id="name" placeholder="Your Name" required>
                  </div>

                  <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="Your Email Address" required>
                  </div>
				  
				  <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="phone" id="phone" placeholder="Your Phone Number" required>
                  </div>

                  <div class="form-group">
                    <textarea class="form-control form-control-lg" rows="4" placeholder="Your Message" id="message" name="message" required></textarea>
                  </div>

                  <button class="btn btn-lg btn-block btn-primary" type="submit">SEND</button>
                </form>';
				
				}
				session_destroy();
				?>
              </div>
            </div>
          </div>


          <div class="col-md-6 align-self-center py-8">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.952211374865!2d80.2095356148227!3d13.038713890811835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267ead1764855%3A0x1efe3537fa3b9b10!2sSentience%20Cloud!5e0!3m2!1sen!2sin!4v1584444274649!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </section>



    </main><!-- /.main-content -->

<?php include "footer.php"; ?>