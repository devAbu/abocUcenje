<?php
 
$mail = false;
$godina = false;

if(isset($_POST['mail'])){
    $mail = $_POST['mail'];
}
if(isset($_POST['godina'])){
    $godina = $_POST['godina'];
}
echo 'Received email was: ' . $mail;
echo 'godina: ' . $godina;


?>
