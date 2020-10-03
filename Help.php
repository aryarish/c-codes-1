<?php
//session_start();
require('dbconfig.php');
require('firstimport.php');

$tbl_name="interlist";

 

?>
<!DOCTYPE html>
<html>
<head>
	<title> Find Train </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});

	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
</head>
<body>
	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 ?>
			
			</div>
			<div id="heading">
				<a href="index.php">Indian Railways</a>
			</div>
			</div>
		</div>
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="PNR.php" >PNR ENQUIRY</a>
					<a class="brand" href="Help.php" >HELP ENQUIRY</a>
			
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="booking_h.php">BOOKING HISTORY</a>
				</div>
			</div>
		</div>
		
		<div class="span12 well" id="boxh"><h3 style="color:#0089C7">HELP ENQUIRY</h3>
		<div style="margin-left:300px">
			<form  method="post" class="form">
			 <div class="form-group">
			 <label>Name-<label>
			<input type="text" class="form-control" name="name" placeholder="Name"></div>
			 <div class="form-group">
		<label>Mobile Number-<label>
		
		<input type="text" class="form-control" name="mobile" placeholder="Mobile"></div>
		<div class="form-group"><label>Help-<label>
		
		<textarea name="help" class="form-control"> Type Here..</textarea>
		</div>
		<input type="submit" name="submit" class="btn btn-success">
			</form>
		</div>
		</div>
<!-- display result --><?php
if(isset($_POST['submit']))
{
	extract($_POST);
	//$pnr=$_POST['pnr'];
	//$from=strtoupper($from);
	//$to=strtoupper($to);
	$sql="INSERT INTO `Help`( `name`, `mobile`, `help`) VALUES ('$name', '$mobile', '$help') ";
	$n=iud($sql);
	if($n==1)
	{
		echo'<script>alert("Successful")</script>';
	}
}
?>
	
		
		<footer >
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2018 Copyright PVT Ltd.</p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">	Desinged By : <a href="https://projecttunnel.com/">projecttunnel</a>.com</p>
			</div>
		</div>
		</footer>	</div>
</body>
</html>