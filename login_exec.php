<?php

require('./includes/database.inc.php');

session_start();    

if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $password = $_POST['password'];
       //echo $username;

       $sql = "SELECT * FROM user WHERE username = '$username', password='$password' ";
       $result = $db->prepare($sql);
       $result->execute();

       if($result->rowCount() > 0){

            $data = $result->fetchAll();
            if(password_verify($password, $data[0]["password"])){

                echo "Connexion effectuée";
                $_SESSION['username'] = $username;
            }

       }
       else if(empty($username) || empty($password)){
        echo "Veuillez remplir tous les champs";
       }
       else{
        echo "Pseudo ou mot de passe incorrects";
       }
   } 

   
   ?>