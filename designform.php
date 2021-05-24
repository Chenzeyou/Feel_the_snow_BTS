
<?php
include 'main.php';

check_loggedin($pdo);

include 'header.php';

?>





















<div class="container">
	<div class="row">
		<div style="margin-top: 10rem;" class="col ">				
			<img style="box-shadow: 1rem 1rem 1rem lightgray;" src="./images/carte first.png" width="80%" />
		</div>

		<div  class="col designform">	
			

				<h2 style="text-align:center;">infos apparente sur la carte</h2>

				<form action="registerdesign.php" method="post" autocomplete="off" enctype="multipart/form-data">
				

						<div style="margin-top:3rem;" class="input-group mb-3 justify-content-center">
							<input class="login__input" type="text" name="name" class="form-control input_user" value="" placeholder="name">
						</div>

						<div class="input-group mb-3 justify-content-center">
							<input class="login__input" type="text" name="lastname" class="form-control input_user" value="" placeholder="lastname">
						</div>

						<div class="input-group mb-3 justify-content-center">
							<input class="login__input" type="text" name="number" class="form-control input_user" value="" placeholder="number">
						</div>

						<div class="input-group mb-3 justify-content-center">
							<input class="login__input" type="email" name="email" class="form-control input_user" value="" placeholder="email">
						</div>

						<div class="msg"></div>
					

						<div style="padding-bottom:1rem;" class="d-flex justify-content-center">
								<input style="margin-top:3rem;width: 10rem;height: 3rem;" class="login__submit" type="submit" value="enregistrer">
				        </div>
			
				</form>
		</div>

	</div>
</div>


































<?php
include 'footer.php';
?>

	



