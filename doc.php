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
    <link rel = "stylesheet" href="doc.css">


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
<div class = "fond">
<?php
//importation header
require('./view/header.inc.php');
?>


<section>
    <h1 class = "Bienvenue">BIENVENUE DANS <br> NOTRE STUDIO !</h1>
    <p class = "Bienvenue1">Venez challenger les cerveaux les plus agiles!</p>

<div class = button>
    <button class="jouer">JOUER!</button>
</div>
</section>
</div>

<div class="container">
    <section>
        <div class = section2>
            <img src = "Images/retrogaming-console.jpeg" alt = "img1" class = "img1">
            <img src = "Images/trotinette.png" alt="img2" class="img2">
            <img src = "Images/royal flush.png" alt="img3" class="img3">
        </div>
        <div class = "section5">
            <div class = "un">
                <h1><span class="number">01</span> LOREM IPSUM</h1>
                <p class="deux">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur laboriosam ad dolor facilis architecto quasi corrupti earum illum quidem quod eligendi nulla impedit itaque eos sapiente excepturi, quaerat nemo vitae.</p>
            </div>
            <div class = "un">
                <h1><span class="number">02</span> LOREM IPSUM</h1>
                <p class="deux">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime totam iusto magni repellat possimus tempora, ipsum voluptatem alias amet reprehenderit doloribus, ad, accusantium repudiandae rerum? Dignissimos dolore recusandae natus optio!</p>
            </div>
            <div class = "un">
                <h1><span class="number">03</span> LOREM IPSUM</h1>
                <p class="deux">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime totam iusto magni repellat possimus tempora, ipsum voluptatem alias amet reprehenderit doloribus, ad, accusantium repudiandae rerum? Dignissimos dolore recusandae natus optio!</p>
            </div>
        </div>
    </div>
</section>

<section class = "section3">
    <img src = "Images/Background/img connexion.webp" alt = "img4" class="watchdog">
     <div class = "conteneur">
        <div class="I">310 <br>Parties Jouées</div>
        <div class="J">1020 <br>Joueurs Connectés</div>
        <div class="K">10 sec<br>Temps Record </div>
        <div class="L">21300 <br>Joueurs Inscrits</div>
    </div>
</section>

<div class="equipe">
    <h1><strong>Notre équipe</strong></h1>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, quam?</p>
     <svg id="Calque_3" data-name="Calque 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 244.89 32.44"><defs><style>.cls-1{fill:#d5aa6f;}</style></defs><path class="cls-1" d="M128.66,8.44c0,2.17-1.53,3.83-5.59,3.83,0,0,.26-4.38-.63-4.38s-.63,4.38-.63,4.38c-4.06,0-5.59-1.66-5.59-3.83S122.44,0,122.44,0,128.66,6.27,128.66,8.44Z"/><path class="cls-1" d="M118.48,16.85c0,4-1.66,5.59-3.83,5.59s-8.45-6.22-8.45-6.22S112.48,10,114.65,10s3.83,1.53,3.83,5.59c0,0-4.39-.26-4.39.63S118.48,16.85,118.48,16.85Z"/><path class="cls-1" d="M99.75,19c-2,0-57.59-1.71-84.9-2.56C12.28,16.35,2,16.28,0,16.22c2-.06,12.19-.13,14.7-.21,27.25-.84,83.06-2.57,85.05-2.57,0,0-3.73,1.56-3.73,2.78S99.75,19,99.75,19Z"/><path class="cls-1" d="M138.68,16.22s-6.28,6.22-8.45,6.22-3.83-1.54-3.83-5.59c0,0,4.39.25,4.39-.63s-4.39-.63-4.39-.63c0-4.06,1.67-5.59,3.83-5.59S138.68,16.22,138.68,16.22Z"/><path class="cls-1" d="M244.89,16.24c-1.81.05-11.21.12-13.54.19a.48.48,0,0,1-.12,0c-26.84.84-84.08,2.61-86.09,2.61,0,0,3.72-1.56,3.72-2.78v0c0-1.22-3.72-2.78-3.72-2.78,2,0,59.25,1.77,86.09,2.61h.12C233.68,16.12,243.08,16.19,244.89,16.24Z"/><path class="cls-1" d="M128.66,24c0,2.17-6.22,8.45-6.22,8.45s-6.22-6.28-6.22-8.45,1.53-3.83,5.59-3.83c0,0-.26,4.39.63,4.39s.63-4.39.63-4.39C127.13,20.16,128.66,21.83,128.66,24Z"/></svg>
</div>

<section class="section4">
    <div class="card1">
        <img src="Images/Perso/lucas.jpeg" id="per1">
        <h2>LUCAS</h2>
        <p>Game Designer</p>
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-pinterest"></i>
        <i class="fa-brands fa-instagram"></i>
    </div>
    
    <div class ="card2">
        <img src="Images/Perso/ethan.png" id="per2">
        <h2>ETHAN</h2>
        <p>Game Designer</p>
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-pinterest"></i>
        <i class="fa-brands fa-instagram"></i>
    </div>
     
    <div class="card3">
        <img src="Images/Perso/florent.png" id="per3">
        <h2>FLORENT</h2>
        <p>Game Designer</p>
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-pinterest"></i>
        <i class="fa-brands fa-instagram"></i>
    </div>
    
    <div class="card4">
        <img src="Images/Perso/mael.png" id="per3">
        <h2>MAËL</h2>
        <p>Game Designer</p>
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-pinterest"></i>
        <i class="fa-brands fa-instagram"></i>
    </div>       
</section>

<?php 

 // importation footer
 require('./view/footer.inc.php');

 ?>
</body>
</html>