<?php
//order.php
include 'order.php';
?>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link href="style.css" rel="stylesheet" type="text/css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
  <script src="https://js.stripe.com/v3/"></script>
 </head>
 <body>
  
  <div class="container">
 
        <div style= "text-align:center">
         <input type="hidden" name="total_amount" value="<?php echo $total_price; ?>" />
         <input type="hidden" name="currency_code" value="EUR" />
         <input type="hidden" name="item_details" value="<?php echo $item_details; ?>" />
         <button type="button" id="checkout-button">Checkout</button>
        </div>
        <br />
       </div>
       <div class="col-md-4">
        <h4  style= "text-align:center">détails de la commande</h4>
        <?php
        echo $order_details;
        ?>
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
  <script type="text/javascript">
    // Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe("pk_test_51GnYWKFeoY7b2LtgKXjTeFE69xLdGeg02xNqYDYis37NHr5qKkMMDEFHQxxwnOiwmscf4VGgKYiHesKecldKKVM0004lumEiyi");
    var checkoutButton = document.getElementById("checkout-button");
    
    
    

    checkoutButton.addEventListener("click", function () {
      var quantity="<?php echo json_encode ($values["product_quantity"]); ?>";
      
      fetch("create-checkout-session.php", {
        method: "POST",
        'Content-Type': 'application/json charset=utf-8',
        body: JSON.stringify({
        $quantity: quantity, // with the quantity
    }),
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (session) {
          return stripe.redirectToCheckout({ sessionId: session.id });
        })
        .then(function (result) {
          // If redirectToCheckout fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using error.message.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function (error) {
          console.error("Error:", error);
        });
    });

  </script>
 </body>

</html>