<?php
$errors = [];

if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = 'Vous devez entrer un message !';
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == ''){
    $errors['email'] = 'Vous devez entrer votre Email !';
}
if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
    $errors['name'] = 'Vous devez entrer votre nom !';
}

if(!empty($errors)){
    session_start();
    $_SESSION['inputs'] = $_POST;
    $_SESSION['errors'] = $errors;
    header('Location: contact.php');
}
else{
    $message = $_POST['message'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    $message = str_replace("\n.", "\n..", $message);

    mail('whatsthetgeek@gmail.com', 'Message Reçu', $message, $headers);
    session_start();
    $_SESSION['email_sent'] = 'sent!';
    header('Location: contact.php');
}
?>