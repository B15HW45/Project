<style type="text/css">
	h2{
		text-align: center;
		padding-bottom: 15px;
	}
	.container
	{
		margin-top: 4%;
	}
	.cookie
	{
		padding: 15px;
		font-size: 22px;
	}
	.card
	{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.25);
		margin-left: 15%;

	}
	.card img
	{
		  transition: transform .9s; 
	}
	.card img:hover{
		transform: scale(0.9);
	}
	.cookie a{
		margin-top: 2%;
	}
</style>
<?php
include 'includes/header.php'
?>
<br>
<h3 style="text-align: center;">This is <mark>about</mark> section of web page and here lies the main content.</h3>
<div class="container">
	<h2>About Me</h2>
	<div class="row">
		<div class="col-6">
<div class="card" style="width: 18rem;">
  <img src="1.jpg" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Bishwas Shrestha</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="blog_list.php" class="btn btn-primary">Other Students Recoreds</a>
  </div>
</div>
</div>
<div class="col-6">
	<div class="cookie">
<?php
	if (!isset($_COOKIE[$randomcookie])) {
		echo "<h2> Cookie name not set";
	}
	else
	{
		echo "Cookie ".$randomcookie." is set<br>";
		echo "and the value is " .$cookievalue;
	}
?>
<?php
	if (!isset($_SESSION['userid'])) {
		echo "<br><h2>You are not currently authenticated</h2>";
	}
	else
	{
		echo "<br>Session is available and you are logged in as :".$_SESSION['userid'];
	}
?>
<br>
<a href="addblog.php" class="btn btn-danger">Enter a Students Details</a>
</div>
</div>
</div>
</div>
<?php
include 'includes/footer.php'
?>