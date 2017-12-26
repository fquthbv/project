<?php

	$db= mysqli_connect("localhost", "root", "","addtable");
	if(isset($_POST['send'])){

	$name=$_POST["Name"];

	$des=$_POST["Description"];

	$price=$_POST["Price"];

	$photo=base64_decode(file_get_contents(addslashes($_FILES['photo']['tmp_name'])));
	$photoname=addslashes($_FILES['photo']['name']);

	$query = "INSERT INTO `mytable` (`name`,`description`,`price`,`photo`,`photoname`) values ('$name','$des',$price,'$photo','$photoname')";
	$db->query($query);}


?>