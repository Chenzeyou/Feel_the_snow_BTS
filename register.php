<?php
include 'main.php';

include 'header.php';
?>



<div class="register">

    <div  class=" row justify-content-center">
        <img class="register___logo" width="20%" src="./images/Logo_White.png"/>
    </div>


    <form action="register__fun.php" method="post" autocomplete="off">

        <input style="background-color:white" type="text" name="username" placeholder="Nom d'utilisateur" id="username" required>

        <input  style="background-color:white" type="password" name="password" placeholder="Mot de passe" id="password" required>

        <input  style="background-color:white" type="password" name="cpassword" placeholder="Confirmer Mot de passe" id="cpassword" required>

        <input   style="background-color:white" type="email" name="email" placeholder="Email" id="email" required>

        <div class="msg"></div>
        <input type="submit" value="S'inscrire"> <br>
        <a class="justify-content-center"href="login.php">se connecter</a>

    </form>
</div>


<script>
		var form = document.querySelector('.register form');
		form.onsubmit = function(event) {
			event.preventDefault();
			var form_data = new FormData(form);
			var xhr = new XMLHttpRequest();
			xhr.open('POST', form.action, true);
			xhr.onload = function () {
				document.querySelector('.msg').innerHTML = this.responseText;
			};
			xhr.send(form_data);
		};
</script>

<?php
include 'footer.php';
?>
