<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
</head>
<?php
include 'includes/links.php'
?>
<style type="text/css">
	body  {
  background-image: url(sea.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
a{
	list-style: none;
	text-decoration: none;
	text-align: center;
}
.heading{
	text-align: center;
	color: white;
	margin-top: 18%;
}
.heading h1
{
	font-family: 'Montserrat', sans-serif;
	font-size: 36px;
}
.heading p
{
	font-family: 'Rubik', sans-serif;
	font-size: 18px;
}
.heading button
{
	margin-right:4%;
}
.link1{
color: white;
}
.link1:hover{
text-decoration: none;
list-style: none;
color: white;
}
.link2{
color: white;
}
.link2:hover{
text-decoration: none;
list-style: none;
color: white;
}
</style>
<body>
<?php
include 'includes/navbar.php'
?>
<div class="container">
<div class="heading">
<h1>Welcome To Student Management Site</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<button type="button" class="btn btn-outline-dark"><a href="registrationform.php" class="link1">REGISTER</a></button><button type="button" class="btn btn-dark"><a href="Login/loginform.php" class="link2">LOGIN</a></button>
</div>
</div>
</body>
</html>