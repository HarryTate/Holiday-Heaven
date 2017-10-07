<?php include "../includes/header.php"; ?>






<?PHP
	session_start();
	session_destroy();

?>
<div class="container">
	<div class="row">
		<div class= "loggedout">
  		<div class="col-sm-12"><h3>Successfully Logged Out</h3>
				<a href="login.php"><p>Click here to login as a new user</p></a>
			</div>
		</div>
	</div>

		<div class="row">
<div class="logout-images">
			<div class="col-sm-6"><img src="../images/logoutimage2.jpg"></div>
			<div class="col-sm-6"><img src="../images/logoutimage3.jpg"></div>
		</div>
	</div>

</div>


<?php include "../includes/footer.php"; ?>
