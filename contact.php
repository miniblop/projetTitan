<!DOCTYPE html>
<html>
<head>
		<title>Crabe TV</title>
		<meta charset = "utf-8">
		<link rel = "stylesheet" href = "style_screen.css">
	</head>
	
	<body>		
		<?php include('inclusions/debut.inc.php'); ?>
		<article>
			<br>	
			<h1>CONTACT</h1>
			<h2><a href = 'index.php'>HOME</a>> <a href = 'contact.php'>CONTACT</a></h2>
			 <section id="arianne"><a href = 'contact.php'>WEB TV</a>> CONTACT</section>
           <form action="contact.php" ENCTYPE="text/plain" method="post" >
            <label for="nom">Votre nom :</label>
            <input type="text" name="nom" id="nom" required pattern="[Aaàé-Zz]" max=20/>
          
            <label for="email">Votre E-mail :</label>
            <input type="email" name="email" id="email" required>
            <label for="formule">Sujet :</label>
            <select name="formule" id="formule">
                <option value="probleme_technique" selected>Problème(s) technique(s)</option>
                <option value="partenariat">Partenariat/sponsoring</option>
                <option value="suggestions">Suggestion(s)</option>
                <option value="autre">Autre(s)</option>
            </select>
            <label for="message">Votre message :</label>
            <textarea id="message" rows="9" cols="50"></textarea>
            <input type="submit" name="envoyer" value="envoyer" class="bouton"  />
            </form>
    
        <?php if(isset($_POST['envoyer']))   {
   
     if(!empty($_POST['nom'])&&!empty($_POST['email'])&&!empty($_POST['message'])) {
   
        $destinataire = "remi.defonte@gmail.com";
        $sujet = "Demande de contact : ".$_POST['formule']."\r\n";
        $message = "Nom : ".$_POST['nom']."\r\n";
        $message = "Adresse email : ".$_POST['email']."\r\n";
        $message = "Message : ".$_POST['message']."\r\n";
        $entete = "From: ".$_POST['email']."\r\n".
        "Reply-To: ".$_POST['email']."\r\n"."X-Mailer: PHP/".phpversion();
        mail($destinataire,$sujet,$message,$entete) or print('<br> La fonction mail() n\'a pas pu être exécuté...');
        echo 'Message envoyé';
     }
     else{
       
        echo "Remplir tous les champs";
    }
        ?>
		<?php
exit();
?>
		</article>
		

		
		
		<?php include('inclusions/fin.inc.php'); ?>
		
	</body>
	
</html>
