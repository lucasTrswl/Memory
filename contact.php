<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/all.min.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel = "stylesheet" href="contact.css">


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
        <p class="power"><a href="doc.html" class="connexion"> The power of memory</a></p>
        <p><a href="scores.html" class="connexion"> SCORES</a></p>
        <p><a href="inscription.html" class = "connexion"> INSCRIPTION </a></p>
        <p><a href="connexion.html"  class="connexion"> CONNEXION</a></p>
        <p><a href="myaccount.html" class="connexion"> MON ESPACE </a></p>
        <p class="pad1"><a href="contact.html" class="connexion">NOUS CONTACTER</a></p>
    </nav>
</header>

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

<div class="formContact">
    <form>
        <label for="nom">
            <input type="text" id="nom" placeholder="Nom" class="form1">
        </label>
        <label for="email">
            <input type="email" id="email" placeholder="Email" class="form1">
        </label>
    </form>
    <form>
        <label for="sujet">
            <input type="text" id="sujet" placeholder="Sujet"  class="form2">
        </label>
    </form>
    <textarea id="message" name="story"rows="10" cols="45" class="form3">Message</textarea>
</div>
<button type="submit" class="buttonContact">Envoyer</button>

<footer>
    <div class="footer1">
        <h1>Informations</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, dolore!</p>
        <p> <div class="orange"> Mail: </div> support@powerofmemory.com</p>
        <p><div class="orange">Location : </div> Paris</p>
            
<div class="icones">
    <div class="icone1">
        <i class="fa-brands fa-facebook"></i>
    </div>
    <div class="icone2">
        <i class="fa-brands fa-twitter"></i>
    </div>
    <div class="icone3">
        <i class="fa-brands fa-google"></i>
    </div>
    <div class="icone4">
        <i class="fa-brands fa-pinterest"></i>
    </div>
    <div class="icone5">
        <i class="fa-brands fa-instagram"></i>
    </div>
</div>

<p class="copyright">Copyright © 2022 Tous droits réservés</p>
</div>
<div class="footer2">
    <h1>Power Of Memory</h1>
    <ul>
        <li>Jouer!</li>
        <li>Les scores</li>
        <li>Nous contacter</li>
        </ul>
</div>
</footer>
</body>
</html>