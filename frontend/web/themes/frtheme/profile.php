<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Notes </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!-- Fonts -->
        <!-- Lato -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- CSS -->

        <link rel="stylesheet" href="<?php echo base_url("assest/css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assest/css/font-awesome.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assest/css/owl.carousel.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assest/css/animate.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assest/css/main.css"); ?>">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url("assest/css/responsive.css"); ?>">
    </head>

    <body id="body">

    	<div id="preloader">
    		<div class="book">
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		</div>
    	</div>

	    <!-- 
	    Header start
	    ==================== -->
	    <div class="navbar-default navbar-fixed-top" id="navigation">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="#">
					<h1>Skill Reff</h1>

	                </a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <nav class="collapse navbar-collapse" id="navbar">
	                <ul class="nav navbar-nav navbar-right" id="top-nav">
	                    <li class="current"><a href="#body">Home</a></li>
	                    <li><a href="#about">About us</a></li>
	                    <li><a href="#service">Services</a></li>
	                    <li><a href="#contact">Contact</a></li>
	                </ul>
	            </nav><!-- /.navbar-collapse -->
	        </div><!-- /.container-fluid -->
	    </div>

	    <section id="hero-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
                  <div>
                    	<div class="form-group">
                    	    <form action="/coi/index.php/welcome/profile" method="post" id="contact-form">
							<div  class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
							<div class="input-field">
                    	            <input type="text" class="form-control" placeholder="Your Name " name="name">
                    	        </div>
                    	        <div class="input-field">
                    	            <input type="email" class="form-control" placeholder="Email Address" name="email">
                    	        </div>
                    	        <div class="input-field">
                    	             <input type="text" class="form-control" placeholder="Passsword " name="name">
                    	        </div>
                    	        <div class="input-field">
                    	             <input type="text" class="form-control" placeholder="Conform Passsword " name="name">
                    	        </div>

							</div>
							<div  class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
							<div class="input-field">
                    	            <input type="text" class="form-control" placeholder="Last Name" name="name">
                    	        </div>
                    	        <div class="input-field">
                    	            <input type="email" class="form-control" placeholder="Address" name="email">
                    	        </div>
                    	        <div class="input-field">
                    	            <textarea class="form-control" placeholder="Your Message" rows="3" name="message"></textarea>
                    	        </div>
                    	        <button class="btn btn-send" type="submit">Register</button>							
							</div>
							</form>

                    	    <div id="success">
                    	        <p>Your Message was sent successfully</p>
                    	    </div>
                    	    <div id="error">
                    	        <p>Your Message was not sent successfully</p>
                    	    </div>
                    	</div>
                    </div>
	                </div>

	            </div><!-- .row close -->
	        </div><!-- .container close -->
	    </section><!-- header close -->




        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <p>Copyright &copy; <a href="http://www.Themefisher.com">Themefisher</a>| All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Js -->
        <script src="<?php echo base_url("assest/js/vendor/modernizr-2.6.2.min.js"); ?>"></script>
        <script src="<?php echo base_url("assest/js/vendor/jquery-1.10.2.min.js"); ?>"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="<?php echo base_url("assest/js/jquery.lwtCountdown-1.0.js"); ?>"></script>
        <script src="<?php echo base_url("assest/js/bootstrap.min.js"); ?>"></script>
        <script src="<?php echo base_url("assest/js/owl.carousel.min.js"); ?>"></script>
        <script src="<?php echo base_url("assest/js/jquery.validate.min.js"); ?>"></script>
        <script src="<?php echo base_url("assest/js/jquery.form.js"); ?>"></script>
        <script src="<?php echo base_url("assest/js/jquery.nav.js"); ?>"></script>
        <script src="<?php echo base_url("assest/js/jquery.sticky.js"); ?>"></script>
        <script src="<?php echo base_url("assest/js/plugins.js"); ?>"></script>
        <script src="<?php echo base_url("assest/js/wow.min.js"); ?>"></script>
        <script src="<?php echo base_url("assest/js/main.js"); ?>"></script>
        
    </body>
</html>
