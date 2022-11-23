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
    <link rel = "stylesheet" href="game.css">


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
        <h1>JEU</h1>
        <form>
            <div class="timer">00:00.000</div>
            <button class="bouton">JOUER</button>
            <div class="diff"></div>
        </form>
        <script>
            chrono=document.querySelector('.timer');
            function(timer){

            }

        </script>
    </div>
</div>

<div class="grille">
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
</div>
    
<div class="chat">
    <i class="fa-regular fa-headset" id="chat"></i>
    <p class="chat">Chat Général</p>
</div>

<div class="msgg1">
    <p class="me">Moi</p>
    <button id="hello">Hello</button>
    <p class="me">Aujourd'hui à 15H42</p>
</div>

<i class="fa-regular fa-headset" id="chat1"></i>

<p class="me1">Arthur</p>
<button id="rep">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius enim quibusdam accusamus reprehenderit corrupti consectetur.</button>
<p class="me1">Aujourd'hui à 15h48</p>

<div class="msg">
<form>
    <label for="message">
        <input type="text" id="message" placeholder="Votre message...">
    </label>    
</form>
<button type="submit" id="envoyer">Envoyer</button>
</div>


<?php 

 // importation footer
 require('./view/footer.inc.php');

 ?>
</body>
</html>