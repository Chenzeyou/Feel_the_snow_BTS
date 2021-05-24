<?php
include 'header.php';
?>
<div class="container col-md-12">
<h2 style="text-align: center" class="name_form">Modification des informations d'utilisateur</h2>
<div class="container col-md-8">
<div class="row">
<form class="form_edit">
<div class="mb-3">
    <label for="InputUsername" class="form-label">Nom d'utilisateur</label>
    <input type="username" class="form-controledit" id="InputUsername">
  </div>
  <div class="mb-3">
    <label for="InputEmail1" class="form-label">Adresse e-mail</label>
    <input type="email" class="form-controledit" id="InputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec qui que ce soit.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Mot de passe</label>
    <input type="password" class="form-controledit" id="InputPassword1">
  </div>
  <div class="mb-3">
    <label for="InputPassword2" class="form-label">Confirmer le Mot de passe</label>
    <input type="password" class="form-controledit" id="InputPassword2">
  </div>
  <button type="submit" class="btn_command btn-primary">Sauvergarder</button>
</form>
</div>
</div>
</div>
<?php
include 'footer.php';
?>