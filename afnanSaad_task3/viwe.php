
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<html>
<head>
<title> VIWE page  </title>
<link rel="stylesheet" type="text/css" href="ControPanelStyle.css">
</head>
<!-- Start of the home page  -->
<body>
  <header>
<a href="Home.html"><img src="pictures/logo.png" id="home" alt="Website logo"></a>
<hr>
<h1 style="text-align: center;">
 <span style=" color:  #b3003b ;">Smart</span>
 <span style=" color:  #008080;">Methods</span>
 <br>  
 <span style=" color: #008080 ;"> الأساليب</span>
 <span style=" color: 	#b3003b ;"> الذكية </span>  
</h1>
</header>

<?php
$hostname="localhost";
$username="root";
$password="";
$database="Control_Panel";
 
$conn=mysqli_connect($hostname,$username,$password,$database);
?>
<br>
<div id="ControlPanel">
 <br>
 <hr> 
 <a style=" font-size:150%;" href="ControlPanelHome.html"> &#8617; &#8287; &#8287; Control Panel</a>
 <hr> 
 <br> <br><br> <br>
 <br> <br><br> <br>
 <em style=" font-size:150%;"> you Press - - >  </em> <em style=" font-size:200%;color:#b3003b ; "><?php echo $_GET["ch"]?></em>
 <br> <br><br> <br>
 <?php 
 @$a=$_GET['ch'];
 

if( @$a ==="Forwards")  
{
$s ="INSERT INTO `Commands`(`Forward`) VALUES ('1')";
$y = mysqli_query($conn,$s);
echo " Your Data Inserted to database";

}elseif( @$a ==="Backwards")
{
$s ="INSERT INTO `Commands`(`backward`) VALUES ('1')";
$y = mysqli_query($conn,$s);
echo " Your Data Inserted to database";
}elseif( @$a ==="Right")
{
$s ="INSERT INTO `Commands`(`right`) VALUES ('1')";
$y = mysqli_query($conn,$s);
echo " Your Data Inserted to database";
 }elseif( @$a ==="Left")
 {
$s ="INSERT INTO `Commands`(`left`) VALUES ('1')";
$y = mysqli_query($conn,$s);
echo " Your Data Inserted to database";
 }else{
$s ="INSERT INTO `Commands`(`stop`) VALUES ('1')";
$y = mysqli_query($conn,$s);
echo " Your Data Inserted to database";
 }
?>
<br> <br><br> <br>
<br> <br><br> <br>
</div> 
<br>
 <footer>
  <p>Designed by: Afnan saad <br>
  <a href="mailto:afnan.sha98@gmail.com">afnan.sha98@gmail.com</a></p	
</footer>