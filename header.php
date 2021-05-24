
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1 shrink-to-fit=no">
		<title>thevisitcard</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet" type="text/css">


		<style>
			/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
			@media screen and (max-width: 600px) {
			.topnav a:not(:first-child) {display: none;}
			.topnav a.icon {
				float: right;
				display: block;
			}
			}

			/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
			@media screen and (max-width: 600px) {
			.topnav.responsive {position: relative;}
			.topnav.responsive a.icon {
				position: absolute;
				right: 0;
				top: 0;
			}
			.topnav.responsive a {
				float: none;
				display: block;
				text-align: left;
			}
			}
		</style>

	</head>
	<body>
			
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://js.stripe.com/v3/"></script>
	<script src="script.js"></script>
	
	
	<!-- ici se trouve la navbar -->
	<nav class="navbar navbar-expand-md navigation topnav ">

		<div class="navbar-collapse  w-100 order-2 ">
					
		
					<li class="nav-item">
						<a style="margin-left:1rem;" class="navbar-brand" href="index.php"><img src="./images/Logo_White.png" width="20%" /></a>
					</li>

					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="cartedevisite.php">Carte de visite</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="carte_rs.php">Carte de réseaux sociaux</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="comingsoon.php">Carte Immobilier</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="comingsoon.php">Carte Restaurant</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="comingsoon.php">Carte Etudiant</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="assistance.php">Assistance</a>
					</li>

					<li>
						<a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
						<span class="glyphicon glyphicon-shopping-cart"></span>
						<span class="badge"></span>
						<span class="total_price">€ 0.00</span>
						</a>
					</li>

					<div id="popover_content_wrapper" style="display: none">
						<span id="cart_details"></span>
						<div style= "text-align:right">
							<a href="order_process.php" class="btn btn-primary" id="checkout-button">
								<span id="checkout-submit" class="glyphicon glyphicon-shopping-cart"></span> Check out
							</a>
							<a href="#" class="btn btn-default" id="clear_cart">
								<span class="glyphicon glyphicon-trash"></span> Clear
							</a>
						</div>
					</div>










					<? if ($_SESSION['loggedin'] == TRUE) :?>
						
						<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="admin/index.php"> Mes cartes</a>
						</li>

					<? else: ?>

						<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="login.php"><i class="far fa-user">
									
									</i></a>
									
						</li>
					<?endif;?>

					<a href="logout.php"><i class="fas fa-sign-out-alt"></i></a> 
					
					<a href="javascript:void(0);" class="icon" onclick="myFunction()">
   			 <i class="fa fa-bars"></i>
  		</a>
		</div>  
		
		
				
	</nav>

					<div class="alert alert-dark" role="alert">
  						<p class="text">Le paiement en ligne est actuellement indisponible, contactez-nous à contact@thevisitcard.com pour un devis.</p>
					</div>  
    <!-- Fin -->





<script>
	function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
	}
</script>