<?php
$bdd = new PDO('mysql:host=localhost; dbname=messagerie; charset=utf8; ', 'root', 'root');
$recupMessage = $bdd->prepare('SELECT * FROM message')

?>