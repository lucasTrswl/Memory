
<?php

            $username = 'root';
            $password = 'root';
            
            //On établit la connexion
            try{
            $db = new PDO("mysql:host=localhost;dbname=MySQL1", $username, $password);
            
            
            }
            catch (PDOException $e){
                print "Erreur: " . $e->getMessage();
                die();
            }


            ?>