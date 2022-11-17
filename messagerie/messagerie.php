<?php
$bdd = new PDO('mysql:host=localhost; dbname=messagerie; charset=utf8; ', 'root', 'root');

if(isset($_POST['Valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['message'])){

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $message = nl2br(htmlspecialchars($_POST['message']));

        $insererMessage = $bdd->prepare('INSERT INTO message(pseudo, message) VALUES(?, ?)');
        $insererMessage->execute(array($pseudo, $message));

    }else{
        echo "Veuillez compléter tous les champs";
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="messagerie.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>


    <form method="POST" action="">

    
        <label for="pseudo">Pseudo</label><br>
        <input type ="text" name="pseudo" placeholder="Pseudo">
        <br><br>

        <label for="message">Message</label>
        <br>
        <textarea name="message"></textarea>
        <br>
        <input type="submit" name="Valider">
        
    </form>



    <section id="messages"></section>

    <script>
        setInterval('afficher_messages()', 500);
        function afficher_messages(){
            $('#messages').load('afficher_messages.php');
        }
    </script>
</body>
</html>