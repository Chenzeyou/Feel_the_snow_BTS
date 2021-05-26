<?php

    include_once 'includes/dbh.inc.php';
    
    $dbController = new DBController();
    
    
    if(!empty($_GET["action"])) 
    {
        $query = "SELECT * FROM vcar WHERE card_id = ?";
        $param_type = "i";
        $param_value_array = array($_GET["card_id"]);
        $contactResult = $dbController->runQuery($query,$param_type,$param_value_array);
        
        require_once "includes/VcardExport.inc.php";
        $vcardExport = new VcardExport();
        $vcardExport->contactVcardExportService($contactResult);
        exit;
    }
    
    
    $id = $_GET['card_id'];

    $decrypted_id = base64_decode(urldecode($id));

    


    $query = "SELECT * FROM vcar WHERE card_id ='". $decrypted_id."'";
    $result = $dbController->runBaseQuery($query);
    
    $sql = "SELECT * FROM icons";
    $resultat = $dbController->runBaseQuery($sql);


    
  
        
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

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

<body  style="background-color: black">
    
    <style>
                    .box{
                        
                        border: 2px #686868 solid;
                        border-radius: 30px;
                        margin-top: 35px;
                        padding-bottom: 35px;
                        padding-top: 35px;
                        width:85%;

                    }
                    
                    
                    
                     .profil-image {
                      position: relative;
                      width: 220px;
                      height:220px;
                    }
                    
                    .name {
                      position: relative;
                      left: 0px;
                    }
                    

                    
                
                    
                    .separateur {
                      position: relative;
                      top: 40px;
                      left: 0px;
                    }
                    
                    p
                    {
                        color:rgba(208,180,143,1);
                    }
                    
               h1
                    {
                        color:rgba(208,180,143,1);
                        font-size: 34px;
                        font-weight: bold;
                    }
                                         H2 
                    {
                        color:rgba(208,180,143,1);
                        font-size: 24px;
                    }
                    
                    
                    a
                    {
                        color:rgba(208,180,143,1);
                            font-size: 16px;
                          font-weight: bold;
                    }
                    body {
                         font-family: 'Barlow Semi Condensed';font-size: 22px;
                         }
                    
                  
                    
                    .boutan
                    {
                        background-color: #101010;
                        color: rgb(0,0,0);
                        width: 240px;
                        height: 180px;
                        border-radius: 12px;
                        border: 0.5px #686868 solid;
                    }


        
        
    </style>


<?php 
    
if(!empty($result))
{

    foreach($result as $k=>$v)
    {
?>




<!-- ce que j'affiche -->

<div class="container box text-center">
    	

            	<img class="profil-image" src="images/aurelien.png" alt="Image">
        
        
        
                <div class="col name">
                    <br>

                    <h1 class="text-center"><?php echo $result[$k]["Nom"]; ?> <?php echo $result[$k]["Prénom"]; ?></h1>
                    <h2><?php echo $result[$k]["Poste"]; ?></h2>
                    <br>
         

                    <a href="index.php?action=export&card_id=<?php echo $result[$k]["card_id"]; ?>" title="Export to vcar">
                        <button class="boutan" type="button">
                           <img src="images/dl.png" style="width: 60px;height: 85px;" alt="Image" > <br><br>
                            <p>ENREGISTRER LE CONTACT</p>
                        </button>
                    </a>
                </div>


</div>
        
<div class="container" style="    padding-top: 30px;">                              
                    <p style="text-align: center!important;     font-size: 15px;                          font-weight: bold;">
                       <img src="images/Logo_White.png" alt="Image" style="width: 50px;" >
                        THE VISIT CARD • BUSINESS CARDS <br>
                    </p> 
                    <p style="text-align: center!important;     font-size: 10px; ">©2020 by THE VISIT CARD</p>    
</div>                          
                                          
                    
                    
                    
        
        
  



<?php 
    }
}
?>
     






</body>

</html>