<?php
require('./includes/database.inc.php');
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
<div class="login-page">
<div class="form">
<form method="POST" action="">
    <label for="email">
        <input type="email" id="email" placeholder="Email" name="email" autocomplete="off" class="formInscription1">
    </label>

    <label for="pseudo">
        <input type="text" id="pseudo" placeholder="Pseudo" name="pseudo" autocomplete="off" class="formInscription2">
    </label>


               
               
        <input type="password" id="password" placeholder="Mot de passe" name="mdp" autocomplete="off"  class="formInscription3">


    <label for="password">
        <input type="password" id="confirm_password" placeholder="Confirmer le mot de passe" name="confirm_mdp"  autocomplete="off" class="formInscription3">

       
    </label>
    <input type="submit" class="buttonInscription" name="inscription">
    <p class="message">Registered ? <a href="connexion.php">Connect to your account</a></p>
</form>



<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="inscription.js"></script>
      <script type="text/javascript">
      $(document).ready(function($) {
        $('#password').passtrength({
          minChars: 4,
          passwordToggle: true,
          tooltip: true
        });
      });
      </script>
      <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<div class="btnGen">
    <a href="generateurMP/generateurMP.php" id="btnGen2">
        <button>Générer un mot de passe</button>
    </div>

<?php

//session_start();

$bdd=new PDO('mysql:host=localhost;dbname=MySQL1;charset=utf8;','root','root');
if(isset($_POST["inscription"])){
    if(!empty($_POST["email"])AND !empty($_POST["pseudo"])AND !empty($_POST["mdp"])AND !empty($_POST["confirm_mdp"])AND $_POST['mdp']==
    $_POST['confirm_mdp']AND strlen($_POST['pseudo']>4) AND strlen($_POST['mdp']>8)AND
    preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{10,}$#',$_POST['mdp'])AND filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $email=htmlspecialchars($_POST["email"]);
        $pseudo=htmlspecialchars($_POST["pseudo"]);
        $mdp=sha1($_POST["mdp"]);
        $insertUser = $bdd->prepare('INSERT INTO utilisateur(email,mot_de_passe,pseudo) VALUES(?, ?, ?)');
        $insertUser->execute(array($email,$mdp,$pseudo));
    }   
    else{
        if(empty($_POST["email"])AND empty($_POST["pseudo"])AND empty($_POST["mdp"])AND empty($_POST["confirm_mdp"])){
            echo "Veuillez remplir tous les champs";
        }
        elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            echo "L'adresse email doit être valide";
        }
        elseif(strlen($_POST['pseudo']<=4)){
            echo "Le nom d'utilisateur doit contenir au moins 4 caractères";
        }
        elseif($_POST['mdp']!=$_POST['confirm_mdp']){
            echo "Veuillez répéter le mot de passe à confirmer";
        }
        elseif(strlen($_POST['mdp']<=8)){
            echo "Le mot de passe doit contenir au moins 8 caractères";
        }
        elseif(!preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{10,}$#',$_POST['mdp'])){
            echo "Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial (. * $ etc)";
        }
    }
}
?>
</div>
</section>

<?php 

 // importation footer
 require('./view/footer.inc.php');

 ?>
</body>
</html>