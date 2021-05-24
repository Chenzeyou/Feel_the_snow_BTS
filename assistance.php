<?php
include 'header.php';
?>
  <div class="container col-md-12">
    <h2 style="text-align: center"class="name_form">Formulaire de contact</h2>
      <div class="container col-md-8">
        <div class="row">
                <form class="form_contact" action="contact.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="InputUsername" class="form-label">Nom et Prénom</label>
                          <input type="text" name="name" class="form-controledit" id="InputName"required>
                        </div>
                        <div class="mb-3">
                          <label for="InputEmail1" class="form-label">Adresse e-mail</label>
                          <input type="email" name="mail" class="form-controledit" id="InputEmailC"  aria-describedby="emailHelp"required>
                          <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec qui que ce soit.</div>
                        </div>
                        <div class="mb-3">
                          <label for="InputPhoneNumber" class="form-label">Numéro de téléphone</label>
                          <input type="tel" name="tel" class="form-controledit" id="Phone">
                        </div>
                        <div class="mb-3">
                          <label for="message" class="form-label">Votre besoin</label>
                          <select  class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option name="subject" value="1">Devis</option>
                            <option name="subject" value="2">Information</option>
                            <option name="subject" value="3">Support</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="message" name="" class="form-label">Votre message</label>
                          <textarea type="text" id="message" name="message" rows="3" class="form-controledit md-textarea" required></textarea>
                        </div>
                      <button type="submit" name="submit" class="btn_command btn-primary">Envoyer</button>
                </form>
        </div>
      </div>
  </div>
<?php
include 'footer.php';
?>
