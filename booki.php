
<?php
require_once"dbconfig.php";



//session_start();
require('firstimport.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
$tbl_name="booking";




echo $uname=$_SESSION['name'];
$num=$_GET['tno'];
$seat= $_GET['selct'];
$name1=$_GET['name1'];
$age1=$_GET['age1'];
$sex1=$_GET['sex1'];
$name2=$_GET['name2'];
$name3=$_GET['name3'];
$name4=$_GET['name4'];
$name5=$_GET['name5'];
$age2=$_GET['age2'];
$age3=$_GET['age3'];
$age4=$_GET['age4'];
$age5=$_GET['age5'];
$sex2=$_GET['sex2'];
$sex3=$_GET['sex3'];
$sex4=$_GET['sex4'];
$sex5=$_GET['sex5'];
$fromstn=$_GET[	'fromstn'];
$tostn=$_GET['tostn'];
$doj=$_GET['doj'];
$dob=$_GET['dob'];




	$status="Confirmed";
	
	echo $sql="INSERT INTO $tbl_name(uname,Tnumber,class,doj,DOB,fromstn,tostn,Name,Age,sex,Status)
	VALUES ('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name1','$age1','$sex1','$status'),
	('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name2','$age2','$sex2','$status'),
	('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name3','$age3','$sex3','$status'),
	('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name4','$age4','$sex4','$status'),
	('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name5','$age5','$sex5','$status')";
	$n=iud($sql);
	
	 $qq="SELECT ".$seat." FROM `train_list`  WHERE Number ='".$num."'";
$result=select($qq ) ;
while($res=mysqli_fetch_array($result))
{
	$price=$n*$res[0];
}
	
	
	

header("location:payment.php?price=$price");


if(isset($_REQUEST['bookibooki']))
{
	$tbl_name="book";




echo $uname=$_SESSION['name'];
$num=$_GET['tno'];
$seat= $_GET['selct'];
$name1=$_GET['name1'];
$age1=$_GET['age1'];
$sex1=$_GET['sex1'];
$name2=$_GET['name2'];
$name3=$_GET['name3'];
$name4=$_GET['name4'];
$name5=$_GET['name5'];
$age2=$_GET['age2'];
$age3=$_GET['age3'];
$age4=$_GET['age4'];
$age5=$_GET['age5'];
$sex2=$_GET['sex2'];
$sex3=$_GET['sex3'];
$sex4=$_GET['sex4'];
$sex5=$_GET['sex5'];
$fromstn=$_GET[	'fromstn'];
$tostn=$_GET['tostn'];
$doj=$_GET['doj'];
$dob=$_GET['dob'];




	$status="Confirmed";
	
	echo $sql="INSERT INTO $tbl_name(uname,Tnumber,class,doj,DOB,fromstn,tostn,Name,Age,sex,Status)
	VALUES ('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name1','$age1','$sex1','$status'),
	('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name2','$age2','$sex2','$status'),
	('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name3','$age3','$sex3','$status'),
	('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name4','$age4','$sex4','$status'),
	('$uname','$num','$seat','$doj','$dob','$fromstn','$tostn','$name5','$age5','$sex5','$status')";
	$n=iud($sql);
	
	 $qq="SELECT ".$seat." FROM `train_list`  WHERE Number ='".$num."'";
$result=select($qq ) ;
while($res=mysqli_fetch_array($result))
{
	$price=$n*$res[0];
}
	
	
	

header("location:payment_book.php?price=$price");
}


?>
