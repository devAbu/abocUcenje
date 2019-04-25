<?php

$name =$_POST['firstname'];
$email = $_POST['email'];
$subject = $_POST['subject'];

/*echo $name;
echo $email; 
echo $subject;*/

$mail = $email;
$admin_email = 'omar1537@gmail.com';

mail($admin_email, $name, $subject, "From:" . $mail);

if(mail){
    echo('super');
}else{
    echo('lose');
}

?>