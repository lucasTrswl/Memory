<?php

session_start();
require('./includes/database.inc.php');
require('./view/header.inc.php');



if(isset($_POST['valider']))
{
    if(isset($_POST['nom']) AND isset($_POST['email']) AND isset($_POST['sujet']) AND isset($_POST['message']))
    {

        if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['sujet']) AND !empty($_POST['message']))
        {

            $nom = htmlspecialchars($_POST['nom']);
            $email = htmlspecialchars($_POST['email']);
            $sujet = htmlspecialchars($_POST['sujet']);
            $message = htmlspecialchars($_POST['message']);

            echo "Votre message a bien été pris en compte";
        }

        elseif(empty($_POST['nom'])) {

            echo "Veuillez renseigner votre nom";
        }
        elseif(empty($_POST['email'])){
            echo "Veuillez renseigner votre email";
        }
        elseif(empty($_POST['sujet'])){
            echo "Renseignez un sujet";
        }
        elseif(empty($_POST['message'])){
            echo "Renseignez votre message";
        }

    }
}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/all.min.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel = "stylesheet" href="nouscontacter.css">


    <!-- importation font family "Anton"-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <!-- ilmportation font family "Archivo"-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300&display=swap" rel="stylesheet">

    <!-- importation icones-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
    
    <title>Document</title>
</head>

<body>
<body class = "body2">
<div class="contact">
    <img src="Images/Background/img connexion.webp" alt="contact" class="img_contact">
    <div class="text">
        <h1>NOUS CONTACTER</h1>
    </div>
</div>



<section class="section6">
    <div class="card4">
        <box-icon type='solid' name='coffee-bean'></box-icon>
        <img src="Images/Logo/logo phone.jpeg" class="radius">
        <p>0605040302</p>
    </div>
    <div class="card5">
        <img src="Images/Logo/logo email.jpeg" class="radius">
        <p>support@powerofmemory.com</p>
    </div>
    <div class="card6">
        <img src="Images/Logo/logo localisation.jpeg"class="radius">
        <p>Paris</p>
    </div>
</section>

<div class="container">
  <h1>Formulaire de contact</h1>
  <form action="/action_page.php">
    <label for="fname">Nom & prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

    <label for="sujet">Sujet</label>
    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

    <label for="emailAddress">Email</label>
    <input id="emailAddress" type="email" name="email" placeholder="Votre email">


    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>

    <input type="submit" value="Envoyer">
  </form>
</div>
</form>

</div>


<?php 

 // importation footer
 require('./view/footer.inc.php');

 ?>
</body>
</html>