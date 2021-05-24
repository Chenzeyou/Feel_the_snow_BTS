<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];
    $tel = $_POST['tel'];

    $mailto = "contact@thevisitcard.com";
    $headers = "from: ". $mailfrom;
    $txt = "you have received an email from ".$name.".\n\n".$message;
    

    mail($mailto, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}