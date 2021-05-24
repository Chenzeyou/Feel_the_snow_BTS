<?php
include 'header.php';
?>

<div class="container" style="text-align:center" >
<div class="row">
<div class="col-md-12 dropdown">

<script>
$(function() {
 $('#fblogo').click(function(e){
     e.preventDefault();
   $("#imgtochange").attr('src',"./img_rs/Fb.png");
 });
 $('#instalogo').click(function(e){
     e.preventDefault();
   $("#imgtochange").attr('src',"./img_rs/Insta.png");
 });
 $('#lkilogo').click(function(e){
     e.preventDefault();
   $("#imgtochange").attr('src',"./img_rs/LinkedIn.png");
 });
 $('#snaplogo').click(function(e){
     e.preventDefault();
   $("#imgtochange").attr('src',"./img_rs/Snapchat.png");
 });
 $('#spotifylogo').click(function(e){
     e.preventDefault();
   $("#imgtochange").attr('src',"./img_rs/Spotify.png");
 });
 $('#tiktoklogo').click(function(e){
     e.preventDefault();
   $("#imgtochange").attr('src',"./img_rs/TikTok.png");
 });
 $('#twitterlogo').click(function(e){
     e.preventDefault();
   $("#imgtochange").attr('src',"./img_rs/Twitter.png");
 });
 $('#ytblogo').click(function(e){
     e.preventDefault();
   $("#imgtochange").attr('src',"./img_rs/Youtube.png");
 });
});
</script>

<ul class="list-inline">
  <li class="list-inline-item"><button type="button" class="btn_rs"><img id="fblogo" src="./logo_rs/fb.png" width="40px;" height="40px;" object-fit="contain;" /></li>
  <li class="list-inline-item"><button type="button" class="btn_rs"><img id="instalogo" src="./logo_rs/Insta.png"  width="40px;" height="40px;" object-fit="contain;"/></li>
  <li class="list-inline-item"><button type="button" class="btn_rs"><img id="lkilogo" src="./logo_rs/LinkedIn.png"  width="40px;" height="40px;" object-fit="contain;"/></li>
  <li class="list-inline-item"><button type="button" class="btn_rs"><img id="snaplogo" src="./logo_rs/Snapchat.png"  width="40px;" height="40px;" object-fit="contain;"/></li>
  <li class="list-inline-item"><button type="button" class="btn_rs"><img id="spotifylogo" src="./logo_rs/Spotify.png"  width="40px;" height="40px;" object-fit="contain;"/></li>
  <li class="list-inline-item"><button type="button" class="btn_rs"><img id="tiktoklogo" src="./logo_rs/TikTok.png"  width="40px;" height="40px;" object-fit="contain;"/></li>
  <li class="list-inline-item"><button type="button" class="btn_rs"><img id="twitterlogo" src="./logo_rs/twitter.png" width="40px;" height="40px;" object-fit="contain;"/></li>
  <li class="list-inline-item"><button type="button" class="btn_rs"><img id="ytblogo" src="./logo_rs/Ytb.png" width="40px;" height="40px;"  object-fit="contain;"/></li>
</ul>

<!--  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 50px">
    Choisissez un réseau social
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Facebook</a></li>
    <li><a class="dropdown-item" href="#">Snapchat</a></li>
    <li><a class="dropdown-item" href="#">Twitter</a></li>
    <li><a class="dropdown-item" href="#">Instagram</a></li>
    <li><a class="dropdown-item" href="#">TikTok</a></li>
    <li><a class="dropdown-item" href="#">Youtube</a></li>
    <li><a class="dropdown-item" href="#">LinkedIn</a></li>
    <li><a class="dropdown-item" href="#">Spotify</a></li>
  </ul>-->
</div> 
  </div>
</div> 

<div class="container" style="text-align:center" >
<div class="row">
  <div class="col-md-6">
  <img src="./img_rs/Fb.png" id="imgtochange" class="imgtochange"> 
  <img src="./img_rs/prix-rs.png" class="imgprice">
  </div>
  <div class="col-md-6">
  <form action="/action_page.php">
  <div class="form-group" style="width:500px;height:300px;margin-top:200px;margin-bottom:200px;">
    <label for="url">Entrer votre lien permettant d'accéder à votre réseau social</label>
    <input type="url" class="form-controlrs" placeholder="Lien URL" id="url">
    <button type="submit" class="btn_command btn-secondary" disabled>Ajouter au panier</button>
  </div>
  
  
</form> 

<div class="container" style="text-align:center">
<div class="row">
<div class="col-md-6">

    </div>
  </div>
</div>
  </div>
  </div>
</div> 





<?php
include 'footer.php';
?>