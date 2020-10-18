<?php
include 'links/bootstrap.php'
?>

<style type="text/css">
.carousel-item {
  height: 400px;
}

.carousel-item img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    min-height: 400px;
}
.btn {
  border: 1px solid white;
  background-color: white;
  color: black;
  padding: 10px 50px;
  font-size: 16px;
  cursor: pointer;
}

button
{
	margin: 10px 2%;

}
.success {
  border-color: white;
  color: white;
  background-color:rgba(0,0,0,0.2);
}
.info {
  border-color: white;
  color: white;
  background-color:rgba(0,0,0,0.2);
}
.carousel-caption
{
	margin-bottom: 5%;
}
</style>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/7.jpg" class="d-block w-100" alt="images">
      <div class="carousel-caption d-none d-md-block">
        <h2>Welcome To About Us Page</h2>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        <button class="btn info">Our Work</button><button class="btn success">Contact Us</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/8.jpg" class="d-block w-100" alt="images">
      <div class="carousel-caption d-none d-md-block">
        <h2>Welcome To About Us Page</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="btn info">Our Work</button><button class="btn success">Contact Us</button>
      </div>
    </div>
        <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-100" alt="images">
      <div class="carousel-caption d-none d-md-block">
        <h2>Welcome To About Us Page</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="btn info">Our Work</button><button class="btn success">Contact Us</button>
      </div>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php
	include 'links/fontawesome.php'
?>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><h3>ABOUT US</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bloglist.php">Blog list</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About us</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact us</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<style type="text/css">
	.firstheading{
		text-align: center;
		margin-top: 2%;
		letter-spacing: 3px;
	}
</style>
<div class="firstheading">
	<div class="container">
	<h1>TEAM OF EXPERT DESIGNERS</h1>
	<p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.</i></p>
	</div>
</div>

<?php
include 'links/js.php'
?>
<style type="text/css">
	.guides{
		margin-top: 4%;
	}
 .card p{
    position: absolute;
    background-color: white;
    bottom: -5%;
    padding: 18px;
    letter-spacing: 2;
  }
  .card{
    border: 0px ;
  }
  .card img:hover{
   transform: scale(0.9);
   transition: 0.8s;
  }
</style>
<div class="guides">
<div class="container">
	<div class="row">
		<div class="col-4">
			<div class="card" style="width: 18rem;">
 			 <img class="card-img-top" src="images/K.jpg" alt="Card image cap">
          <p><span style="font-size:26px"><b>- Kanye West</b><br></span><span style="font-size: 22px">Meet the designers</span><br>Happy To help you</p>
			</div>
		</div>
		<div class="col-4">
			<div class="card" style="width: 18rem;">
  			<img class="card-img-top" src="images/N.jpg" alt="Card image cap">
          <p><span style="font-size:26px"><b>- Dayana</b><br></span><span style="font-size: 22px">Meet the designers</span><br>Happy To help you</p>
			</div>
		</div>
		<div class="col-4">
				<div class="card" style="width: 18rem;">
  			<img class="card-img-top" src="images/1236071.jpg" alt="Card image cap">
          <p><span style="font-size:26px"><b>- Mathew</b><br></span><span style="font-size: 22px">Meet the designers</span><br>Happy To help you</p>    
			</div>
		</div>
	</div>
</div>
</div>