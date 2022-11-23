<?php

require('../includes/database.inc.php');

session_start();    

if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $password = $_POST['password'];
       echo $username;

       $sql = "SELECT * FROM user WHERE username = '$username' ";
       $result = $db->prepare($sql);
       $result->execute();

       if($result->rowCount() > 0){

            $data = $result->fetchAll();
            if(password_verify($password, $data[0]["password"])){

                echo "Connexion effectuée";
                $_SESSION['username'] = $username;
            }

       }
       else{
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user(username, password) VALUES('$username', '$password') ";
        $req = $db->prepare($sql);
        $req->execute();
        echo "Enregistrement effectué";
       }
   } 

   
   ?>