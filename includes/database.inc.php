
<?php

            
            
            //On établit la connexion
            try{
            $db = new PDO("mysql:host=localhost;dbname=doc", 'root', 'root');
            
            
            }
            catch (PDOException $e){
                print "Erreur: " . $e->getMessage();
                die();
            }


            ?>