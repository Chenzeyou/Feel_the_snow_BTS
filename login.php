<?php
include 'main.php';


include 'header.php';
?>


			<div class="d-flex justify-content-center container login__cart">
					<form action="authenticate.php" method="POST">
                        <div  class=" row justify-content-center">
                            <img class="login___logo" width="30%" src="./images/Logo_White.png"/>
                        </div>

						<div class="input-group mb-3 justify-content-center">
							<input class="login__input form-control input_user" type="text" name="username" placeholder="Nom d'utilisateur" required>
						</div>

						<div class="login__input input-group mb-2 justify-content-center">
							<input class="form-control input_pass login__input" type="password" name="password" placeholder="Mot de passe" required>
						</div>

						<div class="custom-control custom-checkbox justify-content-center">
								<input type="checkbox" name="rememberme" class="custom-control-input" >
								<label class="custom-control-label" for="customControlInline">Remember me</label>
						</div>
						
						<div class="msg"></div>

						<div style="padding-bottom:1rem;" class="d-flex justify-content-center">
						<button type="submit" class="btn btn-primary">Se connecter</button>
				<!--	<input class="login__submit" type="submit" value="se connecter"> je te laisse l'ancien bouton au cas la classe serait utilisé ailleurs-->
				        </div>

						<div  class="d-flex justify-content-center">
							<a  href="register.php">créer un compte</a>
						</div>

					</form>

		

			</div>

			
			
			
			
			
			<script>
					document.querySelector(".login form").onsubmit = function(event) {
						event.preventDefault();
						var form_data = new FormData(document.querySelector(".login form"));
						var xhr = new XMLHttpRequest();
						xhr.open("POST", document.querySelector(".login form").action, true);
						xhr.onload = function () {
							if (this.responseText.toLowerCase().indexOf("success") !== -1) {
								window.location.href = "index.php";
							} else {
								document.querySelector(".msg").innerHTML = this.responseText;
							}
						};
						xhr.send(form_data);
					};
		</script>

        
<?php
include 'footer.php';
?>

	