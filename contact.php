<!doctype html>
<html>
<head>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<meta charset="utf-8">
<meta name ="keyword" content="gremio, gremio usa, futebol, soccer, clube gremio, gremio estados unidos, escolhinha">
<meta name ="description" content="Escolhinha de Futebol Oficial do Grêmio USA. Futebol do Grêmio agora em solo americano."> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Grêmio USA - Official Grêmio FBPA Soccer Training in USA </title>
	<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/agency.min.css" rel="stylesheet">
	<link href='gremio.css' rel='stylesheet' type='text/css'/>
<style>
/* Chrome, Safari, Opera*/ 
@-webkit-keyframes example {
    0%   {background: url(fotoheader1.jpg) 0px 0px no-repeat;}
    25%  {background: url(fotoheader2.jpg) 0px 0px no-repeat;}
    50%  {background: url(fotoheader3.jpg) 0px 0px no-repeat;}
    75%  {background: url(fotoheader4.jpg) 0px 0px no-repeat;}
	100% {background: url(fotoheader6.jpg) 0px 0px no-repeat;}
}

/* Standard syntax */ 
@keyframes example {
    0%   {background: url(fotoheader1.jpg) 0px 0px no-repeat;}
    25%  {background: url(fotoheader2.jpg) 0px 0px no-repeat;}
    50%  {background: url(fotoheader3.jpg) 0px 0px no-repeat;}
	75%  {background: url(fotoheader4.jpg) 0px 0px no-repeat;}
    100% {background: url(fotoheader6.jpg) 0px 0px no-repeat;}
}
</style>
</head>
<body>
	<div id = "container">
	
	<?php include 'header.php'; ?>

	<!--apenas o location.html sem include nav-->
	<?php include 'nav.php'; ?>
	
	<section class = "centro">

	 
      <div class="container">
        <div class="row">
          <div class="col-lg-11 text-center">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class = "centro">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-4" style="padding-left:30px; padding-right:60px;">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message." style="margin-top: 0px; margin-bottom: 0px; height: 210px;"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-11 text-center" style="padding-bottom:60px; padding-left:55px">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>	
	
	<div class="row" style="width:1000px;">
	
                <div class="col-md-5">			
                  <img src="telefone.png" style="width:60px; height:60px; padding-left: 190px; padding-bottom: 20px;">
				  
				  <p style="text-align:center; font-size:25px;">(508)9339124</p>
				  
                </div>
				
				
                <div class="col-md-6">
                  <img src="email.png" style="width:60px; height:60px; padding-left: 220px; padding-bottom: 20px;">
				  
				  <p style="text-align:center; font-size:25px;">gremiousa2015@gmail.com</p>
				  
                </div>
                
               
    </div>
	
	
	</section>
	
	
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

	
	<?php include 'footer.php'; ?>
	
	</div>
</body>
</html>