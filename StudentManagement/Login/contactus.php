<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<?php
include 'links/bootstrap.php'
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<style>
body{
	background-image: url(images/workplace3.jpg);
	background-repeat: no-repeat;
	background-size: cover;
} 
	.container{
		margin-top: 3%;
		background-color: rgba(0,0,0,0.4);
	}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  border: none;
  border-bottom: 1px solid black;
}
input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  border: none;
  border-bottom: 1px solid black;
}
textarea
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  border: none;
  border-bottom: 1px solid black;
}
button{
	margin-top: 2%;
}
h1{
	font-size: 50px;
	margin-top: 5%;
	color: white;
}
p {
	font-size: 20px;
	color: white;
}
.fa {
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  color: gold;
  padding: 12px;
}
a:hover{
	color: white;
	text-decoration: none;
}
.links{
	background-color:black;
	color: gold;
	text-align: center;
	padding: 95px;
}
.first
{
	padding: 20px;
}
nav a{
background-color: black;
}
nav a:hover{
	background-color: white;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       <a class="nav-link" href="index.php" style="color: gold">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bloglist.php" style="color: gold">Blog list</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="aboutus.php" style="color: gold">About us</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="contactus.php" style="color: gold">Contact us</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-6">
			<div class="first"> 
			<h1>Contact Us</h1>
			<p>Enter your name and email to stay connected with us</p>
			<form>
 		 	<input type="text" id="fname" name="fname" placeholder="Enter your name">
  			<input type="email" id="lname" name="lname" placeholder="Enter your email address">
  			<textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Enter your message here"></textarea><br>
  			<button type="button" class="btn btn-lg btn-warning">Submit</button>
		</form>
			</div>
	</div>
<div class="col-6">
			<div class="links">
		<a href="#" class="fa fa-facebook"></a>
		<h6>Follow us on facebook</h6>
		<a href="#" class="fa fa-twitter"></a>
		<h6>Get the latest news</h6>
		<a href="#" class="fa fa-google"></a>
		<h6>Email us</h6> 
		<a href="#" class="fa fa-reddit"></a>
		<h6>Share with us</h6>
			</div>
		</div>
</div>
</div>
</body>
</html>