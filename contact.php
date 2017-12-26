<!DOCTYPE HTML>
<html>
<head>
<title>Coffee team | Aigerim Suleimenova</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Coffee-House Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--banner start here-->
<div class="banner-bg">
	<div class="container">
		<div class="header-main">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt=""/></a>
			</div>
			<span class="menu"> <img src="images/icon.png" alt=""/></span>
				<div class="clear"> </div>
			<div class="navg">
				<ul class="res"> 
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="adminmenu.php">Admin menu</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a class="active" href="contact.php">Contact</a></li>
				</ul>
			</div>
				<script>
                                  $( "span.menu").click(function() {
                                                                    $(  "ul.res" ).slideToggle("slow", function() {
                                                                     // Animation complete.
                                                                     });
                                                                     });
		       </script>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
	</div>
<!--banner end here-->	
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h3>CONTACT US</h3>
				<P>Aliquam erat volutpat. Suspendisse congue massa quisenim sollicitudin, in pharetra lectus tempor. Duis sit amet efficitur and web page editors now use Lorem Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium licabo.</P>
			</div>


<form action="contact.php" method="POST" enctype="multipart-form-data">

	<div class="contact-bottom">
		<div class="col-md-6 contact-bottom-left">
			<h4>Get in Touch</h4>
			<p>Name</p>
			<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" name="name"/>
			<p>Email</p>
			<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"name="email"/>
			<p>Telephone</p>
			<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"name="telephone"/>
					
			<input type="submit" value="Send" name="send">
		</div>
		<div class="col-md-6 contact-bottom-right">
			<p>Message</p>
			<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" name="text"/> </textarea>
			<div class="addre">
				<h4>Contact</h4>
				<p>Address : Kaskelen</p>
				<p>New Stree : Abylaikhan street</p>
				<p>ph : 7777-555-555</p>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>

</form>

<?php

	$db= mysqli_connect("localhost", "root", "","message");
	if(isset($_POST['send'])){

		$name=$_POST["name"];
		$email=$_POST["email"];
		$telephone=$_POST["telephone"];
		$text=$_POST["text"];

		$query = "INSERT INTO `message` (`name`,`email`,`telephone`,`text`) values ('$name','$email','$telephone','$text')";
		$db->query($query);
	}
?>

		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--contact end here-->
<!--map start here -->
<div class="map">
	<div class="container">
	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.007583421!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1415253431785"  frameborder="0" style="border:0"> </iframe>
	</div>
</div>





<!--map end here-->
<!--footer start here-->
<div class="footer">
	<div class="footer-main">
		<div class="container">
		   <div class="footer-top">
			   <div class="ftr-img"><img src="images/ftr-contact.png" alt=""/></div>
				<div class="sub">
					<input type="text" value="Enter email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email';}"/>
					<input type="submit" value="Submit">
				</div>
				<div class="clearfix"></div>
				<div class="para">
					<p>Subscribe for New Letter</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-4 ftr-bottom bgimg-top">
				<h3>Follow Us Here</h3>
				<ul class="imagesprite">
					<li><a class="g" href="#"> </a></li>
					<li><a class="fa" href="#"> </a></li>
					<li><a class="tw" href="#"> </a></li>
					<li><a class="p" href="#"> </a></li>
					<li><a class="y" href="#"> </a></li>
				</ul>
				<h4>Mail us On : <a href="mailto:aigerim.suleymenova@gmail.com">aigerim.suleymenova@gmail.com</a> </h4>
			</div>
			<div class="col-md-4 ftr-bottom">
				<p>Abylaikhana 1/1, Kaskelen, Almaty District</p>
				<ul class="ftr-navg">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="service.html">Services</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-4 ftr-bottom">
				<p>Call Us: +7(778) 328-70-49</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="clearfix"> </div>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!--footer end  here-->
</body>
</html>
