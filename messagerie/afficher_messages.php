<?php
$bdd = new PDO('mysql:host=localhost; dbname=messagerie; charset=utf8; ', 'root', 'root');
$recupMessage = $bdd->query('SELECT * FROM message');
while($message = $recupMessage->fetch()){
    ?>

    <div class="message">
        <h4><?= $message['pseudo']; ?></h4>
        <p><?= $message['message']; ?></p>
    </div>


    <?php
}



?>