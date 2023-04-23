
<!DOCTYPE html>
<html>
<?php include('form_process.php'); ?>
<head><link rel="icon" type="image/png" href="../images/favicon.png">
<title>Blog Of Rajendra</title>
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="../css/lightbox.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta name="author" content="Rajendra Ranjan Choudhary">
    <meta name="description" content="Contact for any type of online problems, our team will give you the best solution available.">
	<meta name="keywords" content="online solution, online problems, faq, contact rajendra, all bout problems, all about solutions, blog of rajendra, rajendra's blog, rajendra blog, unique contents, system security, virus deletion" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="../js/jquery-1.11.1.min.js"></script>

</head>
<body>
<div class="top-nav">
<nav class="navbar navbar-default">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<h1><a class="navbar-brand" href="../">Rajendra's Blog</a></h1>
</div>
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-left">
<li><a href="../" class="ani">Home</a></li>
<li><a href="../post" class="ani">Blog</a></li>
<li><a href="../ebook" class="ani">Ebook</a></li>
<li><a href="../#about" class="ani">About</a></li>
<li><a href="../#services" class="ani">services</a></li>
<li><a href="../contact" class="ani active">Contact</a></li>
</ul>
<div class="clearfix"> </div>
</div>
</div>
</nav>			
</div>

<header class="intro-header" style="background-image: url('../images/contact-bg.jpg')">
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<div class="post-heading">
<div class="brand" style="color:white">CONTACT</div>
</div>
</div>
</div>
</div>
</header>
<div class="contact-form pt-section">
<div class="container">
			<div class="col-md-7 contact-right wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">				
				<form id="conatct" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
					<input placeholder="Your name ( Required )" type="text" name="name" value="<?= $name ?>" tabindex="1" required="">
					
					
					<input placeholder="Your Email Address ( Required ) " type="email" name="email" value="<?= $email ?>" required="">
					
    
					<input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" >
					
    
					<textarea value="<?= $message ?>" placeholder="Your Message"></textarea>
					
					<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
					
					<div class="success"><?= $success; ?></div>
				</form>
			</div>
			<div class="col-md-5 contact-left wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
				<p><font size="4px">"Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!"</font></p>
				<ul>
					<li><span class="glyphicon glyphicon-map-marker"></span>Jamshedpur, INDIA</li>
					<li><span class="glyphicon glyphicon-envelope"></span><a href="mailto:raj.choudhary01@outlook.com"><font size="4px">raj.choudhary01@outlook.com</font></a></li>
				</ul>
			</div><br/>						
			<br/>						
			<div class="clearfix"> </div>
		</div>			
	</div>
	<div class="container" style="padding:15px">
   
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- rajendra.tk -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4873807903312117"
     data-ad-slot="2823653909"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="container-fluid"  style="background:silver;background-image:url('../images/about-bg.jpg')">
<center>
<div class="col-md-8 col-md-offset-2" style="padding:20px">
					<h4 class="head">Stay in Touch</h4><hr>
					<form class="form-inline" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
						<input placeholder="Your Email Address" type="email" name="email" value="<?= $email ?>" required="">
						<input name="submit" type="submit" id="contact-submit" data-submit="...Sending" value="Subscribe">
					</form>
	</div>
	</center>
	</div>

<!--footer-->
	<div class="footer">
		<div class="container">
		<div class="row">
		<div class="col-md-6">
			<p>Copyright © 2017 All rights reserved | Design by <a href="../#about">RAJENDRA</a></p>
		</div>
		<div class="col-md-6">
		<ul class="list-inline">
		   		<li><a href="../legal/terms-conditions" class="link1">Terms & Conditions</a><span></span></li>
		   		<li><a href="../legal/privacy" class="link1">Privacy Policy</a><span></span></li>
		   		<li><a href="../post" class="link1">Blog Section</a><span></span></li>
		   		<li><a href="../ebook" class="link1">Ebook Section</a><span></span></li>
		   		<li><a href="" class="link1">Contact Us</a></li>
		   	</ul>
		</div>
	</div>
	</div>
	</div>
	
				<script src="../js/responsiveslides.min.js"></script>
<script>
			$(function () {
				
					$("#slider3").responsiveSlides({
					auto: true,
					pager:true,
					nav:true,
					speed: 500,
					namespace: "callbacks",
					before: function () {
					$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});	
			});
		</script>
	
		<script type="text/javascript" src="../js/move-top.js"></script>
		<script type="text/javascript" src="../js/easing.js"></script>	
		<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
		</script>
		
		<script type="text/javascript">
			$(document).ready(function() {

				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		
    <script src="../js/bootstrap.js"></script>
</body>
</html>