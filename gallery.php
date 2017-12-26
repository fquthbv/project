<!DOCTYPE HTML>
<html>
<head>
<title>Coffee team | Aigerim Suleimenova</title>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<style>
.grid{
	display:flex;
	margin:30px;
}
.row{
	display:block;
	margin:10px;
}
.spann{
	color:red;
	font-weight: bold;
}
</style>

</head>


<body>
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
					<li><a class="active" href="gallery.php">Gallery</a></li>
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
</div>

<div class="grid">
		<div class="row">


<?php
	$con=mysqli_connect("localhost","root","","addtable");
	$sql="select * from mytable  where 1=1";
	$query=mysqli_query($con,$sql);
	$num=mysqli_num_rows($query);
	for ($i=0; $i <$num ; $i++) { 
		$result=mysqli_fetch_array($query);
		$photo=$result['photoname'];
		$name=$result['name'];
		$des=$result['description'];
		$price=$result['price'];
		
		print "<div class=\"grid\">
		 <img src='$photo' width=300 height=200  />
		 <div class=\"row\"> 
		 <p> <span class='spann'>Name:</span> ".$name."</p>
		 <p> <span class='spann'>Description:</span> ".$des."</p>
		 <p> <span class='spann'>Price: </span> ".$price." $ </p>
		 </div>
		 </div><br/>";
	}

?>


		</div>
	</div>
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
<script src="js/jquery.min.js"></script>

<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script>

</body> 
</html>