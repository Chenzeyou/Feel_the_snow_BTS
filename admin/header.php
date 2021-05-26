
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>thevisitcard</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


		<style>

			body{
				background-color: #fbfbfd;
				margin: 0rem;

			}

			.navigation{
				list-style-type: none;
				background-color: #707070;
			}
			.navigation div {
				justify-content: center;
			}
			.navigation a {
				color: white;
			}
			
			.text{
				text-align: center;
			}

			.content1{
				margin-bottom: 7rem;
			}

			.content1 p {
				text-align: center;
			}
			.content1 a {
				text-decoration: none;
			}

			.content2 {
				background-color: black;
				color: white;
				padding-bottom: 3rem;
			}

			.content2 p {
				text-align: center;
			}
			.content2 a {
				text-decoration: none;
			}

			.content3{
				background-color: black;
				padding-bottom: 3rem;
				color: white;
			}
			.content4{
				padding-bottom: 3rem;
			}
			.footer{
                margin-top: 100px;
                padding:2rem;
                background:#404040;
                color: white;
               
            }

            .footer__logo{
                border-radius: 100px;
                border: solid 0.5px #615d5d;
                padding: 10px;
            }

            .footer__contact{
                border-left: solid 0.5px #615d5d;
                text-align: center;
            }

            .footer__copyright{
                border-right: solid 0.5px #615d5d;
                text-align: center;
                justify-content: center;
                padding-top: 60px;
            }
            
            .footer__discours{
                text-align: center;

            }


            .login{
                background: lightgray;
                padding:2rem;
                text-align: center;

            }
            .login___logo{
                width: 100px;
                border: solid 0.5px lightblue;
                border-radius: 54px;
                padding: 20px;
                justify-content: center;
                margin-bottom: 1rem;
                
            }


            .login__cart{
                background: #707070;
                width: 20rem;
                margin-top: 10rem;
                border: solid 1px #3a3a3a;
                border-radius: 35px;
                padding: 3rem;
                color: white;
            }

            .login__button{
                background-color: #3C3C3C;
                color: white;
                border: solid 0.5px white;
                border-radius: 60px;

            }

			.register{
				background-color: #7f7979 ;
				border-radius: 35px !important;
				border: solid 3px black !important;
				background: lightgray;
				padding:2rem;
				text-align: center;
				width: 400px;
   				box-shadow: 0 0 9px 0 rgb(0 0 0 / 30%);
    			margin: 100px auto;
			}

			.register input{
				border: solid 3px black !important;
				border-radius: 35px !important;
				background-color: #3C3C3C !important;
				margin-bottom: 3rem;
			}

			.register___logo{
				width: 100px;
				border: solid 2px black;
				border-radius: 54px;
				padding: 20px;
				justify-content: center;
				margin-bottom: 1rem;
			}

			.col-sm{
				text-align: center;
			}

			figcaption{
				text-align: center;
				color: white;

			}
			.container-fluid{
				background-color: black;
				height: 7rem;
				display: flex;
  				justify-content: center;
				align-items: center;
				
				
			}

			.designform {
				background-color: white;
				box-shadow: 1rem 1rem 1rem lightgray;
				margin-top: 2rem;
				padding: 2rem;		
				border-radius:60px;	
			}

			.designform input {
				outline: none;
				border: none;
				background: #F2F2F2;
				border-radius: 40px;
				text-align: center;
				width: 32rem;
   				height: 3rem;

			}

			textarea:focus, input:focus{
    		outline: none;
			}
			table {
			border-collapse: collapse;
			border-radius: 1em;
			overflow: hidden;
			}

			th, td {
			padding: 1em;
			background: #ddd;
			border-bottom: 2px solid white; 
			}

			.css-mine {
			margin-top: 2em;
			clear: both;
			}
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


	<!-- ici se trouve la navbar -->
	<nav class="navbar navbar-expand-md navigation ">

				<div class="navbar-collapse  w-100 order-2 ">
					<li class="nav-item">
						<a style="margin-left:1rem;" class="navbar-brand" href="index.php"><img src="../images/Logo_White.png" width="20%" /></a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="../cartedevisite.php">Carte de visite</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="../carte_rs.php">Carte de réseaux sociaux</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="../comingsoon.php">Carte Immobilier</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="../comingsoon.php">Carte Restaurant</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="../comingsoon.php">Carte Etudiant</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="../assistance.php">Assistance</a>
					</li>
					<? if ($_SESSION['loggedin'] == TRUE) :?>
						<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="index.php"> Mes cartes</a>
						</li>				
						<li class="nav-item">
							<a href="../logout.php"><i class="fas fa-sign-out-alt"></i></a> 
						</li>
					<? else: ?>
						<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="../login.php"><i class="far fa-user"></i></a>
						</li>
					<?endif;?>
					<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="../cart.php"><i class="fas fa-shopping-cart"></i></a>
					</li>
				</div>  
				
	</nav>

					<div class="alert alert-dark" role="alert">
  						<p class="text">Le paiement en ligne est actuellement indisponible, contactez-nous à contact@thevisitcard.com pour un devis.</p>
					</div>  
    <!-- Fin -->


