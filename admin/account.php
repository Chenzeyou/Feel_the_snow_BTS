<?php
include 'main.php';
// Default input account values
$card = array(
    'Nom' => '',
    'Prénom' => '',
    'E-mail' => '',
    'NumPortable' => '',
    'NumFix' => '',
    'Poste' => '',
    'Entreprise' => '',
    'Adresse' => '',
);
$roles = array('Member', 'Admin');
if (isset($_GET['card_id'])) {
    // Get the account from the database
    $stmt = $pdo->prepare('SELECT * FROM vcar WHERE card_id = ?');
    $stmt->execute([ $_GET['card_id'] ]);
    $card = $stmt->fetch(PDO::FETCH_ASSOC);
    // ID param exists, edit an existing account
    $page = 'Edit';
    if (isset($_POST['submit'])) {
        // Update the account
       // $stmt = $pdo->prepare('UPDATE vcar SET name = ?, lastname = ?, email = ?, number = ?, entreprise = ?, role = ?, adress = ?, WHERE id = ?');
        $stmt = $pdo->prepare('UPDATE `vcar` SET `Nom` = ?, `Prénom` = ?, `E-mail` = ?, `NumPortable` = ?, `NumFix` = ?, `Poste` = ?, `Entreprise` = ?, `Adresse` = ?  WHERE `vcar`.`card_id` = ?;');

        $stmt->execute([ $_POST['Nom'], $_POST['Prénom'] , $_POST['E-mail'], $_POST['NumPortable'], $_POST['NumFix'], $_POST['Poste'], $_POST['Entreprise'], $_POST['Adresse'], $_GET['card_id'] ]);

        echo 'sucess';
        header('Location: index.php');
        exit;
    }
    if (isset($_POST['delete'])) {
        // Delete the account
        $stmt = $pdo->prepare('DELETE FROM vcar WHERE id = ?');
        $stmt->execute([ $_GET['id'] ]);
        header('Location: index.php');
        exit;
    }
} else {
    // Create a new account
    $page = 'Create';
    if (isset($_POST['submit'])) {
        $stmt = $pdo->prepare('INSERT IGNORE INTO vcar (username,password,email,activation_code,rememberme,role) VALUES (?,?,?,?,?,?)');
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmt->execute([ $_POST['username'], $password, $_POST['email'], $_POST['activation_code'], $_POST['rememberme'], $_POST['role'] ]);
        header('Location: index.php');
        exit;
    }
}
include './header.php';

?>


<h2><?=$page?> Account</h2>

<div style="margin:10rem;" class="designform">
    <form action="" method="post" class="form responsive-width-100">

                    <div style="margin-top:3rem;" class="input-group mb-3 justify-content-center">
                        <input style="margin-left:3rem;" class="login__input form-control input_user" type="text" id="Nom" name="Nom" placeholder="Nom" value="<?=$card['Nom']?>" >
                    </div>

                    <div style="margin-top:3rem;" class="input-group mb-3 justify-content-center">    
                        <input style="margin-left:3rem;"  class="login__input form-control input_user" type="text" id="Prénom" name="Prénom" placeholder="Prénom" value="<?=$card['Prénom']?>" >
                    </div>
                    
                    <div style="margin-top:3rem;" class="input-group mb-3 justify-content-center">    
                        <input style="margin-left:3rem;"  class="login__input form-control input_user" type="text" id="email" name="E-mail" placeholder="Email" value="<?=$card['E-mail']?>" >
                    </div>

                    <div style="margin-top:3rem;" class="input-group mb-3 justify-content-center">    
                        <input style="margin-left:3rem;"  class="login__input form-control input_user" type="text" id="NumPortable" name="NumPortable" placeholder="Numéro de portable" value="<?=$card['NumPortable']?>">
                    </div>

                    <div style="margin-top:3rem;" class="input-group mb-3 justify-content-center">    
                        <input style="margin-left:3rem;"  class="login__input form-control input_user" type="text" id="NumFix" name="NumFix" placeholder="Numéro de Fix" value="<?=$card['NumFix']?>">
                    </div>

                    <div style="margin-top:3rem;" class="input-group mb-3 justify-content-center">    
                         <input style="margin-left:3rem;"  class="login__input form-control input_user" type="text" id="Poste" name="Poste" placeholder="Poste" value="<?=$card['Poste']?>">
                    </div>

                    <div style="margin-top:3rem;" class="input-group mb-3 justify-content-center">    
                        <input style="margin-left:3rem;"  class="login__input form-control input_user" type="text" id="Entreprise" name="Entreprise" placeholder="Entreprise" value="<?=$card['Entreprise']?>">
                    </div>

                    <div style="margin-top:3rem;" class="input-group mb-3 justify-content-center">    
                        <input style="margin-left:3rem;"  class="login__input form-control input_user" type="text" id="Adresse" name="Adresse" placeholder="Adresse" value="<?=$card['Adresse']?>">
                    </div>

                    <div class="submit-btns">
                        <input type="submit" name="submit" value="Submit">
                        <?php if ($page == 'Edit'): ?>
                        <input style="visibility: hidden;" type="submit" name="delete" value="Delete" class="delete">
                        <?php endif; ?>
                    </div>
    </form>
</div>

<?php
include './footer.php';
?>
<?=template_admin_footer()?>
