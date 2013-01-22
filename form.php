<?php
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $surname = $_POST['prenom'];
    $message = $_POST['commentaire'];
    $de = 'From: abDesign'; 
    $a = 'anna.buffart@gmail.com'; 
    $sujet = 'Un nouveau message';
    
    $body = "De: $name\n Email: $email\n Message:\n $message";
    
    mail($a, $sujet, $body, $de);
    
   if(isset($_POST['submit'])){
    	if(mail($a, $sujet, $body, $de)){
    		echo'<p>Thanks for you message, it has been sent.</p>';
    		//header('Location: form-success.php');
    	}else{
    		echo '<p>Huston, we have a problem, something went wrong, please try again.</p>';
    		//redirect('abdesign.olympe.in/wpblog');
    	}
    }
    
?>