<?php

require('../includes/database.inc.php');

session_start();    

if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $password = $_POST['password'];
      
      

       $sql = "SELECT * FROM user WHERE username = '$username' ";
       $result = $db->prepare($sql);
       $result->execute();

       if($result->rowCount() > 0){

            $data = $result->fetch();
            if(password_verify($password, $data["password"])){

                $_SESSION['username'] = $username;
                

                header("Location: page_connexion.php");
            }

            else{
                echo "mot de passe ou nom d'utilisateur incorrect";
               }
       }
       
   } 

   
   ?>