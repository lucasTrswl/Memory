<?php
require('../includes/database.inc.php');


   //Start session

   session_start();    


   

   if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $password = $_POST['password'];
       echo $username;
   }

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/all.min.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel = "stylesheet" href="../ok.css">


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
<header>
    <nav>
        <p class="power"><a href="../doc.php" class="connexion"> The power of memory</a></p>
        <p class="pad"><a href="../jeu.php" class="connexion">JEU</a></p>
        <p><a href="../scores.php" class="connexion"> SCORES</a></p>
        <p><a href="../inscription.php" class = "connexion"> INSCRIPTION </a></p>
       
        <p><a href="../myaccount.php" class="connexion"> MON ESPACE </a></p>
        <p class="pad1"><a href="../contact.php" class="connexion">NOUS CONTACTER</a></p>
    </nav>
</header>
     
     <div class="inscription">
    <img src="../Images/Background/img connexion.webp" alt="contact" class="img_contact">
    <div class="text1">
        <h1>CONNEXION</h1>
    </div>
</div>

<div class="login-page">
  <div class="form">
    
    <form class="login-form" method="POST" action="login_exec.php">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <input type="submit" value="login" name="submit">
      <p class="message">Not registered? <a href="../inscription.php">Create an account</a></p>
    </form>
  </div>
</div>






 <?php 
 // importation footer
 require('../view/footer.inc.php');
 ?>
</body>
</html>