<?php
require('./includes/database.inc.php');
if(isset($_POST["inscription"])){
    if(!empty($_POST["email"])AND !empty($_POST["pseudo"])AND !empty($_POST["mdp"])AND !empty($_POST["confirm_mdp"])){

    }else{
        echo "Veuillez remplir tous les champs"
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
    <link rel = "stylesheet" href="inscription.css">


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
<?php
//importation header
require('./view/header.inc.php');
?>


<div class="inscription">
    <img src="Images/Background/img connexion.webp" alt="contact" class="img_contact">
    <div class="text1">
        <h1>INSCRIPTION</h1>
    </div>
</div>

           
<section>
<div class="formInscription">
<form method="POST" action="">
    <label for="email">
        <input type="email" id="email" placeholder="Email" name="email" class="formInscription1">
    </label>

    <label for="pseudo">
        <input type="text" id="pseudo" placeholder="Pseudo" name="pseudo" class="formInscription2">
    </label>

    <label for="password">
        <input type="password" id="password" placeholder="Mot de passe" name="mdp"  class="formInscription3">
    </label>

    <label for="password">
        <input type="password" id="password" placeholder="Confirmer le mot de passe" name="confirm_mdp"  class="formInscription3">
    </label>
</form>
</div>
    <button type="submit" class="buttonInscription" name="inscription">Inscription</button>
</section>

<?php 

 // importation footer
 require('./view/footer.inc.php');

 ?>
</body>
</html>