<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/all.min.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
   
   
    <link rel = "stylesheet" href="myaccount.css">


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
        <header>
            <nav>
                <p class="power"><a href="doc.php" class="connexion"> The power of memory</a></p>
                <p class = "pad"><a href="jeu.php" class="connexion"> JEU</a></p>
                <p><a href="scores.php" class="connexion"> SCORES</a></p>
                <p><a href="inscription.php" class = "connexion"> INSCRIPTION </a></p>
                <p><a href="connexion.php"  class="connexion"> CONNEXION</a></p>
                <p><a href="myaccount.php" class="connexion"> MON ESPACE </a></p>
                <p class="pad1"><a href="contact.php" class="connexion">NOUS CONTACTER</a></p>
                </nav>
            </header>
            <div class="inscription">
                <img src="Images/Background/img connexion.webp" alt="contact" class="img_contact">
                <div class="text1">
                    <h1>MON ESPACE</h1>
                </div>
            </div>
        <div class="champ_modif">   
            <div class="formInscription">
                <form>
                    <label for="email">
                    <input type="email" id="email" placeholder="Ancien email" class="formInscription1">
                    </label>
    
                </form>

                <form>
                    <label for="confirm_e">
                        <input type="text" id="confirm_e" placeholder="Nouvel email" class="formInscription2">
                    </label>
                </form>
                
    
                <form>
                    <label for="password">
                        <input type="password" id="password" placeholder="Mot de passe"  class="formInscription3">
                    </label>
                </form>
    
                <form>
                    <label for="password_conf">
                        <input type="password" id="password" placeholder="Confirmer le mot de passe"  class="formInscription3">
                    </label>
                </form>
                <button type="submit" class="buttonConfirm">Confirmer</button>
            </div>
            
            
            <div class="formInscription">
                <form>
                    <label for="password">
                        <input type="password" id="password" placeholder="Ancien mot de passe"  class="formInscription3">
                    </label>
                </form>
                <form>
                    <label for="password">
                        <input type="password" id="password" placeholder="Nouveau mot de passe"  class="formInscription3">
                    </label>
                </form>

                <form>
                    <label for="password">
                        <input type="password" id="password" placeholder="Confirmer le mot de passe"  class="formInscription3">
                    </label>
                </form>
                <button type="submit" class="buttonConfirm">Confirmer</button>
            </div>
        </div>
    </body>
    <footer>

    <div class="footer1">
    <h1>Informations</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, dolore!</p>

    <p><div class="orange"> Tél: </div> 0605040302 </p>
    <p> <div class="orange"> Mail: </div> support@powerofmemory.com</p>
    <p><div class="orange">Location : </div> Paris</p>

    <div class="icones">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-google"></i>
        <i class="fa-brands fa-pinterest"></i>
        <i class="fa-brands fa-instagram"></i>
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