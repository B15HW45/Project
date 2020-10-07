<?php
include 'includes/header.php';
?>
<style type="text/css">
	form{
		padding-top:40px;
		text-align: center;
	}
	input{
		margin-left: 2%;
	}
	button
	{
		padding: 0px;
	}
	h1{
		text-align: center;
		color: black;
		margin-top: 7%;
	}
</style>
<div class="container">
	<h1>Enter Student's or Teacher's details</h1>
	<div class="row">
		<div class="col-6">
			<h1>For Student</h1>
<form method="POST" action="Config/insert_in_db.php">
<label>UserId:<input type="text" name="idd"></label><br>
<label>Name:<input type="text" name="namee"></label><br>
<label>Phone:<input type="text" name="phonee"></label><br>
<label>Address:<input type="text" name="addresss"></label><br>
<label>Email:<input type="text" name="emaill"></label><br>
<label>Qualification:<input type="text" name="qualificationn"></label><br>
<label>Experience:<input type="text" name="Experiencee"></label><br>
<label>About:<input type="text" name="aboutt"></label><br>
<button class="btn btn-lg btn-outline-danger" name="submit">I am a Student</button>
</form>
</div>
<div class="col-6">
	<h1>For Teacher</h1>
<form method="POST" action="Config/insert_in_db.php">
<label>UserId:<input type="text" name="iddd"></label><br>
<label>Name:<input type="text" name="nameed"></label><br>
<label>Phone:<input type="text" name="phoneed"></label><br>
<label>Address:<input type="text" name="addresssd"></label><br>
<label>Email:<input type="text" name="emailld"></label><br>
<label>Qualification:<input type="text" name="qualificationnd"></label><br>
<label>Experience:<input type="text" name="Experienceed"></label><br>
<label>About:<input type="text" name="abouttd"></label><br>
<button class="btn btn-lg btn-outline-danger" name="submit">I am a Teacher</button>
</form>
</div>
</div>
</div>
<?php
include 'includes/footer.php';
?>