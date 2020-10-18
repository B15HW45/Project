<?php
include 'header.php'
?>
<?php
include 'includes/navbar.php'
?>
<?php
include 'includes/links.php'
?>
<style type="text/css">
	body{
		background-color:rgba(0,0,0,0.2);
	}
</style>
<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Registration form
				</span>
			
				<span class="contact100-form-title-2">
					Please fill all the required areas!
				</span>
			</div>

			<form class="contact100-form validate-form" action="authentication/register.php" method="POST">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Username:</span>
					<input class="input100" type="text" name="username" placeholder="Enter full name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email:</span>
					<input class="input100" type="email" name="email" placeholder="Enter email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Passowrd is required">
					<span class="label-input100">Password:</span>
					<input class="input100" type="password" name="password" placeholder="Enter your password">
					<span class="focus-input100"></span>
				</div>
					<div class="wrap-input100 validate-input" data-validate="Passowrd is required">
					<span class="label-input100">Re Password:</span>
					<input class="input100" type="password" name="re-password" placeholder="Enter your password">
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" name="register">
						<span>
							Register
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<?php
	include 'footer.php'
	?>