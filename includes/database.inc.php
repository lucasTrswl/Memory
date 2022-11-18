
<?php

            
            
            //On établit la connexion
            try{
            $db = new PDO("mysql:host=localhost;dbname=MySQL1", 'root', 'root');
            
            
            }
            catch (PDOException $e){
                print "Erreur: " . $e->getMessage();
                die();
            }


            ?>