
<html>
<head>
<title>Coffee team | Aigerim Suleimenova</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
</script>
<meta name="keywords" content="Coffee-House Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<style>
#news{
	width:400px;
	height:300px;
}
</style>
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
					<li><a class="active" href="adminmenu.php">Admin menu</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contact.php">Contact</a></li>
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

<div class="service">
	<div class="container">
		<div class="services-main d-flex flex-column justify-content-around align-items-center">
			<h3>Welcome to admin page, Aigerim Suleymenova</h3>
			<p>Would you like to see some bussiness news?</p>
			 <div id="bussiness" class="services-bwn">
		  		<a>Yes</a>
		  	 </div>

		  	 <div id="news" class="mt-5"></div>
		</div>
	</div>
</div>


<form action="adminmenu.php"  method="POST" enctype="multipart/form-data">
<div class="service">
	<div class="container">
		<div class="services-main d-flex flex-column justify-content-around align-items-center">
			<p>Add objects</p>


			<input placeholder="Name of drink" class="pl-2 mb-2" name="Name">
			<input placeholder="Description" class="pl-2 mb-2" name="Description">
			<input placeholder="Price" class="pl-2 mb-2" name="Price">
			<input type="file"  class="pl-2 mb-2" name="photo">
			<input type="submit" class="pl-2 mb-2" value="Send" name="send">



		</div>
	</div>
</div>
</form>
<?php

	$db= mysqli_connect("localhost", "root", "","addtable");
	if(isset($_POST['send'])){

		$name=$_POST["Name"];
		$des=$_POST["Description"];
		$price=$_POST["Price"];

		$photo=base64_encode(file_get_contents(addslashes($_FILES['photo']['tmp_name'])));
		$photoname=addslashes($_FILES['photo']['name']);

		$query = "INSERT INTO `mytable` (`name`,`description`,`price`,`photo`,`photoname`) values ('$name','$des',$price,'$photo','$photoname')";
		$db->query($query);
	}
?>

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


	<?php
    $db= mysqli_connect("localhost", "root", "","addtable");
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $db->query("SELECT photo FROM photo WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }

?>

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
</div>

<script type="text/javascript">
	function bussiness() {
		fetch("http://demo4296963.mockable.io/news-bussiness").then(function(response) {
			return response.text().then(onsuccess);
		});
	}	
	function onsuccess(response) {
		document.querySelector("#news").innerHTML = response;
	}
	document.querySelector("#bussiness").addEventListener("click", bussiness);
</script>
</body>
</html>