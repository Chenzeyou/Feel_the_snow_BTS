<?php
// database hostname, you don't usually need to change this
define('db_host', 'localhost');
// database username
define('db_user', 'root');
// database password
define('db_pass', '');
// database name
define('db_name', 'testform');
// database charset, change this only if utf8 is not supported by your language
define('db_charset', 'utf8');
// Email activation variables
// account activation required?
define('account_a ctivation', false);
// Change "Your Company Name" and "yourdomain.com", do not remove the < and >
define('mail_from', 'Your Company Name <noreply@yourdomain.com>');
// Link to activation file, update this
define('activation_link', 'http://yourdomain.com/ph
plogin/activate.php');

$productName = "Demo Product";  
$productID = "DP12345";  
$productPrice = 25; 
$currency = "usd"; 
 
// Convert product price to cent 
$stripeAmount = round($productPrice*100, 2); 
  
// Stripe API configuration   
define('STRIPE_API_KEY', 'Your_API_Secret_key');  
define('STRIPE_PUBLISHABLE_KEY', 'Your_API_Publishable_key');  
define('STRIPE_SUCCESS_URL', 'https://example.com/success.php'); 
define('STRIPE_CANCEL_URL', 'https://example.com/cancel.php'); 
?>
