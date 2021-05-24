<?php
include 'main.php';
$stmt = $pdo->prepare('SELECT * FROM vcar INNER JOIN accounts ON vcar.id = accounts.id');
$stmt->execute();
$cards = $stmt->fetchAll(PDO::FETCH_ASSOC);
include './header.php';
?>

<?//=template_admin_header('Accounts')?>

<h2 style="text-align:center; margin-bottom: 5rem;">Cartes</h2>
<p style="text-align:center;">cliquez sur une ligne pour modifier</p>

<!--<div class="links">
    <a href="account.php">Create Account</a>    
</div>-->

    <div class="container">
        <table >
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Numéro de Portable</th>
                    <th scope="col">Numéro de Fix</th>
                    <th scope="col">Entreprise</th>
                    <th scope="col">Poste</th>
                    <th scope="col">Adresse</th>

                </tr>
            </thead>
            <tbody >
                <?php if (empty($cards)): ?>
                <tr>
                    <td colspan="8" style="text-align:center;">There are no accounts</td>
                </tr>
                <?php else: ?>
                <?php foreach ($cards as $card): ?>
                <tr  onclick="location.href='account.php?card_id=<?=$card['card_id']?>'">
                    <th ><?=$card['card_id']?></th>
                    <td ><?=$card['Nom']?></td>
                    <td ><?=$card['Prénom']?></td>
                    <td ><?=$card['E-mail']?></td>
                    <td ><?=$card['NumPortable']?></td>
                    <td ><?=$card['NumFix']?></td>
                    <td ><?=$card['Poste']?></td>
                    <td ><?=$card['Entreprise']?></td>
                    <td ><?=$card['Adresse']?></td>

                    

                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?=template_admin_footer()?>
<?php
include './footer.php';
?>