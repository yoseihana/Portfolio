<?php
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $surname = $_POST['prenom'];
    $message = $_POST['commentaire'];
    $de = 'From: abDesign'; 
    $a = 'anna.buffart@gmail.com'; 
    $sujet = 'Un nouveau message sur anna.buffart.eu';
    
    $body = "Bonjour,\nUn nouveau message a été envoyé depuis le site anna.buffart.eu. \nDe: $surname $name\n Email: $email\n Message:\n $message";
    
    mail($a, $sujet, $body, $de);
    
   if(isset($_POST['submit'])){
    	if(mail($a, $sujet, $body, $de)){
            header('Location: http://anna.buffart.eu/contact/');
    	}else{
            header('Location: http://anna.buffart.eu/404error');
    	}
    }
    
?>