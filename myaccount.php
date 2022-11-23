<?php
require('./includes/database.inc.php');

// Valider l'email
$email = $_POST['email'];
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo "$email est une adresse e-mail  valide";
}else{
    echo  "$email est une adresse e-mail invalide";
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/all.min.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
   <link rel = "stylesheet" href="moncompte.css">


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


<!-- importation icones-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Myaccount</title>
</head>
<body class = "body2">
<?php
//importation header
require('./view/header.inc.php');
?>

<div class="inscription">
    <img src="Images/Background/img connexion.webp" alt="contact" class="img_contact">
    <div class="text1">
        <h1>MON ESPACE</h1>
    </div>
</div>

<div class="telephone">
    <section class="deroule">
        <ul>
            <li class="deroulant"><a class="menu" href="./myaccount.php">Profil</a>
                <ul class="sous">
                    <li><a class="menu" href="./">Modifier mon profil</a></li>
                    <li><a class="menu" href="./">Modifier mon adresse mail</a></li>
                    <li><a class="menu" href="./">Modifier mon mot de passe</a></li>
                    <li><a class="menu" href="./">Déconnexion</a></li>
                </ul>
            </li>
        </ul>
    </section>
</div>

<div class="champ_modif">   
    <div class="formInscription">
        <form method="POST">
                    <input type="email" name = "email" id="email" placeholder="Ancien email" class="formInscription1">
                    <label for="confirm_e"></label>
                        <input type="text"  id="confirm_e" placeholder="Nouvel email" class="formInscription2">
                <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe"  class="formInscription3">
                </form>
            
            <form method="POST">
                <label for="password_conf">
                    <input type="password" name="confirm_password" id="password" placeholder="Confirmer le mot de passe"  class="formInscription3">
                </label>
            </form>
            <button type="submit" class="buttonConfirm">Confirmer</button>
        </div>
            
        <div class="formInscription">
            <form method="POST">
                <label for="password">
                    <input type="password" id="password" placeholder="Ancien mot de passe"  class="formInscription3">
                </label>
            </form>
            <form method="POST">
                <label for="password">
                    <input type="password" id="password" placeholder="Nouveau mot de passe"  class="formInscription3">
                </label>
            </form>
            <form method="POST">
                <label for="password">
                    <input type="password" id="password" placeholder="Confirmer le mot de passe"  class="formInscription3">
                </label>
            </form>
            <button type="submit" class="buttonConfirm">Confirmer</button>
        </div>
    </div>
    <div class="card">
    <div class="top-container">   
        <img src="https://i.imgur.com/G1pXs7D.jpg" class="img-fluid profile-image" width="70">
        <div class="ml-3">
            <h5 class="name">Clarke Jeffery</h5>
            <p class="mail">clark@zmail.com</p>
        </div>
        </div>
        <div class="middle-container d-flex justify-content-between align-items-center mt-3 p-2">
        <div class="dollar-div px-3">   
        <div class="round-div"><i class="fa fa-dollar dollar"></i></div>
        </div>
        <div class="d-flex flex-column text-right mr-2">
            <span class="Monprofil">Profil</span>
        </div> 
        </div>
        <div class="Bscores">
            <span class="scoredefou">scores< /span>
        </div>
        <div class="modifprofil">
            <span class="modif">Modifier profile</span>
        </div>
     </div>
</div>
</body>
<?php 
 // importation footer
 require('./view/footer.inc.php');
 ?>
</body>
</html>