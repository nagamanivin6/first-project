<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
 <?= Html::csrfMetaTags() ?>
 -->
 
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
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
					<h1>Skill Refer</h1>

	                </a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <nav class="collapse navbar-collapse" id="navbar">
	                <ul class="nav navbar-nav navbar-right" id="top-nav">
	                    <li class="current"><a href="#body">Home</a></li>
			
	                    <li><a href="#about">About us</a></li>
	                    <li><a href="#service">Services</a></li>
	                    <li><a href="#contact">Contact</a></li>
<li class="current"><a href="#body" class="" data-toggle="modal" data-target="#login-modal">Log in</a></li>
	                </ul>
	            </nav><!-- /.navbar-collapse -->
	        </div><!-- /.container-fluid -->
	    </div>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	    <section id="hero-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6" style="background: rgba(255, 255, 255, 0.2);">

                    	<div class="form-group">
<br>
                    	    <form action="/index.php/welcome/register" method="post" id="contact-form">
							<div  class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
							<div class="input-field">
                    	            <input type="text" class="form-control" placeholder="Your Name " name="name">
                    	        </div>
                    	        <div class="input-field">
                    	            <input type="email" class="form-control" placeholder="Email Address" name="email">
                    	        </div>
                    	        <div class="input-field">
                    	             <input type="text" class="form-control" placeholder="Contact " name="contact">
                    	        </div>


								</div>
								<div  class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
                    	        <div class="input-field">
                    	             <input type="text" class="form-control" placeholder="Passsword " name="name">
                    	        </div>
									<div class="input-field">
										<input type="text" class="form-control" placeholder="Conform Password" name="name">
									</div>
									<div class="input-field">
<select class="form-control dp"><option>Select your skill</option><option>Computers</option><option>Electricals</option><option>Mechanical</option></select>
									</div>
								</div>
									<div class="bts_group">
										<button class="btn btn-send" type="submit">Register</button>	
									</div>								

								</form>
						</div>
	                </div>
	                <div class="col-md-6 wow zoomIn">
	                    <div class="block">
	                        <div class="counter">
	                            <h2>We’re launching very soon</h2>

We are a social network and online platform for various skilled resources.
     <p>      “Be in our platform and explore various opportunities related to your skillset”</p>	                        </div>
	                    </div>
	                </div>

	            </div><!-- .row close -->


	        </div><!-- .container close -->



	    </section><!-- header close -->



        <!-- 
        About start
        ==================== -->
        <section id="about" class="section">
           <div class="container">
                <div class="row">
                    <div class="heading wow fadeInUp">
                        <h2>About Us</h2>
                        <p>We are different, our aim is to highlight the skillset of an individual, many skilled people in today’s world are waiting for an opportunity, same way many organizations are looking for multi skilled people.,
An unique platform where various skilled resources show case their profiles to world  
Our aim is every individual shall be recognized with his/her skillset. Our platform shall be useful for any individual to promote their talent</p>


<h3>Captions: </h3>

<p>“We connect skilled individuals to world of opportunities”<p>
<ul>
   <li>      Industry needs skilled resources - skilled people needs an opportunity to work, our platform enables both parties to connect each other.</li>
<li>         Be in our skill Refer page and promote your skills to world.</li>

<li>      Are you looking for specific skill, service, product, please connect with us, we will refer the right choice.</li>

<li>       You are impressed with any individual skill set ,  share it with world</li>

<li>       Use our platform to connect yourself with various skilled profiles</li>
</ul>
                    </div>

                 </div>
            </div>
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->

        <!-- 
        Service start
        ==================== -->
        <section id="service" class="section">
            <div class="container">
                <div class="row">
                    <div class="heading wow fadeInUp">
                        <h2>Our service</h2>
                       
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-android-desktop"></i>   
                                </span>
                            </div>
                            <div class="caption">
                                <h3>Promoting various Skills on the net</h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-speedometer"></i>   
                                </span>
                            </div>
                            <div class="caption">
                            	<h3>A platform for employees & employers</h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-ios-infinite-outline"></i>   
                                </span>
                            </div>
                            <div class="caption">
                                <h3>Staff augmentation services</h3>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-ios-cloud-outline"></i>   
                                </span>
                            </div>
                            <div class="caption">
                                <h3>  IT Offshore engagements</h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .container close -->
        </section><!-- #service close -->

        <section id="call-to-action" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow text-center">
                        <div class="block">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Email Address">
                                <button class="btn btn-default btn-submit" type="submit">Get Notified</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #call-to-action close -->

        <!-- 
        Contact start
        ==================== -->
        <section id="contact" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="block">
                            <div class="heading wow fadeInUp">
                                <h2>Get In Touch</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp">
						<div class="block text-left">
							<div class="sub-heading">
								<h4>Iconwave Technologies Pvt. Ltd</h4>
								<p>Plot No : 170/67/171, 2nd Floor, Balaji Empire</p>
                                                                 <p>Patrika Nagar, Behind Cyber Towers.</p>
<p>Hyderabad - 500080, Telangagana India.</p>
<p>Tel.(O) : +91-40-60121515</p>
<p>Website :<a href="www.iconwavetech.com"> www.iconwavetech.com</a></p>
<p>Email: info@iconwavetech.com</p>
							</div>
							
						</div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
                    	<div class="form-group">
                    	    <form action="#" method="post" id="contact-form">
						
							<div class="input-field">
                    	            <input type="text" class="form-control" placeholder="Your Name" name="name">
                    	        </div>
                    	        <div class="input-field">
                    	            <input type="email" class="form-control" placeholder="Email Address" name="email">
                    	        </div>
                    	        <div class="input-field">
                    	            <textarea class="form-control" placeholder="Your Message" rows="3" name="message"></textarea>
                    	        </div>
								<div class="bts_group">
                    	        <button class="btn btn-send" type="submit">Send me</button>
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
            </div>
        </section>

        <section clas="wow fadeInUp">
        	<div class="map-wrapper">
        	</div>
        </section>

		
		<div id="login-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login into Account</h4>
      </div>
      <div class="modal-body">
	  <div  class="login_modal" >
                    	    <form action="/index.php/welcome/profile" method="post" id="contact-form">

							<div class="input-field">
								<label>Uaser name</label>
                    	            <input type="text" class="form-control" required placeholder="Username" name="name">
                    	       </div>
                    	       <div class="input-field">
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
