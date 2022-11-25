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
    <link rel = "stylesheet" href="jeu.css">


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
            <h2><time>00:00:00</time></h2>
            <button class="bouton" id="debut">JOUER</button>
            <div class="diff"></div>
        </form>
    </div>
</div>

<div class="menuderoule">
    <section class="deroule">
        <ul>
            <li class="deroulant"><a class="menu" id="a">THEME</a>
                <ul class="sous">
                    <li><a class="menu" onclick="ChangeText1()">Super Smash Bros</a></li>
                    <li><a class="menu" onclick="ChangeText2()">Rocket League</a></li>
                    <li><a class="menu" onclick="ChangeText3()">Pokemon</a></li>
                    <li><a class="menu" onclick="ChangeText4()">Call Of Duty</a></li>
                </ul>
            </li>
        </ul>
    </section>
</div>
<div class="menuderoule2">
    <section class="deroule">
        <ul>
            <li class="deroulant"><a class="menu" id="b">DIFFICULTE</a>
                <ul class="sous">
                    <li><a class="menu" onclick="ChangeText5()">Facile</a></li>
                    <li><a class="menu" onclick="ChangeText6()">Medium</a></li>
                    <li><a class="menu" onclick="ChangeText7()">Difficile</a></li>
                    <li><a class="menu" onclick="ChangeText8()">Impossible</a></li>
                </ul>
            </li>
        </ul>
    </section>
</div>

<script src="grille.js"></script>

<?php

 // importation footer
 require('./view/footer.inc.php');

 ?>
</body>
</html>