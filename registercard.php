<?php
include 'main.php';
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['name'], $_POST['lastname'], $_POST['number'], $_POST['role'], $_POST['entreprise'], $_POST['adress'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['email'])) {
	exit('Please complete the registration form');
}


else {
	// Username doesnt exists, insert new account
    $stmt = $pdo->prepare('INSERT INTO `vcar` (`name`, `lastname`, `email`, `number`, `role`, `entreprise`, `adress`) VALUES (?, ?, ?, ?, ?, ?, ?)');

	$stmt->execute([ $_POST['name'], $_POST['lastname'], $_POST['number'], $_POST['role'], $_POST['entreprise'], $_POST['adress'], $_POST['email']]);

        header('Location: ./congrats.php' );
        exit;
}
?>
