
<?php

$id= $_GET["card_id"];

$salt="MY_SECRET_STUFF";
$encrypted_id = base64_encode($id . $salt);

$decrypted_id_raw = base64_decode($encrypted_id);

$decrypted_id = preg_replace(sprintf('/%s/', $salt), '', $decrypted_id_raw);
?>
















<!DOCTYPE html>
<html style="width: 426px;">

<head>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,   shrink-to-fit=no">
    <title>thevisitcard</title>
  
</head>

<body>


 


<a href="index.php?card_id=<?php echo $encrypted_id ?>"> voir contact </a>


</body>