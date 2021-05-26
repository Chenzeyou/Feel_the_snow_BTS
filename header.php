
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
					.cart h1 {
				display: block;
				font-weight: normal;
				margin: 0;
				padding: 40px 0;
				font-size: 24px;
				text-align: center;
				width: 100%;
			  }
			  
			   .cart table {
				width: 100%;
			  }
			  
			   .cart table thead td {
				padding: 30px 0;
				border-bottom: 1px solid #EEEEEE;
			  }
			  
			   .cart table thead td:last-child {
				text-align: right;
			  }
			  
			   .cart table tbody td {
				padding: 20px 0;
				border-bottom: 1px solid #EEEEEE;
			  }
			  
			   .cart table tbody td:last-child {
				text-align: right;
			  }
			  
			   .cart table .img {
				width: 80px;
			  }
			  
			   .cart table .remove {
				color: #777777;
				font-size: 12px;
				padding-top: 3px;
			  }
			  
			   .cart table .remove:hover {
				text-decoration: underline;
			  }
			  
			   .cart table .price {
				color: #999999;
			  }
			  
			   .cart table a {
				text-decoration: none;
				color: #555555;
			  }
			  
			   .cart table input[type="number"] {
				width: 68px;
				padding: 10px;
				border: 1px solid #ccc;
				color: #555555;
				border-radius: 5px;
			  }
			  
			   .cart .subtotal {
				text-align: right;
				padding: 40px 0;
			  }
			  
			   .cart .subtotal .text {
				padding-right: 40px;
				font-size: 18px;
			  }
			  
			   .cart .subtotal .price {
				font-size: 18px;
				color: #999999;
			  }
			  
			   .cart .buttons {
				text-align: right;
				padding-bottom: 40px;
			  }
			  
			   .cart .buttons input[type="submit"] {
				margin: 0 0 5px 5px;
				padding: 12px 20px;
				border: 0;
				background: #4e5c70;
				color: #FFFFFF;
				font-size: 14px;
				font-weight: bold;
				cursor: pointer;
				border-radius: 5px;
			  }
			  
			   .cart .buttons input[type="submit"]:hover {
				background: #434f61;
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
	<nav class="navbar navbar-expand-md navigation ">

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
					<? if ($_SESSION['loggedin'] == TRUE) :?>
						<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="admin/index.php"> Mes cartes</a>
						</li>				
						<li class="nav-item">
							<a href="logout.php"><i class="fas fa-sign-out-alt"></i></a> 
						</li>
					<? else: ?>
						<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="login.php"><i class="far fa-user"></i></a>
						</li>
					<?endif;?>
						<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
						</li>


				</div>  
				
	</nav>

					<div class="alert alert-dark" role="alert">
  						<p class="text">Le paiement en ligne est actuellement indisponible, contactez-nous à contact@thevisitcard.com pour un devis.</p>
					</div>  
    <!-- Fin -->





