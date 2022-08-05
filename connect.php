<?php
            $servername = 'localhost';
            $username = 'root';
            $dbname = 'bdd-ecf-backend-2';
            $password = '';
            
            //On établit la connexion
            
            
            try{
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo 'Connexion réussie';
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
            // $conn = null;
            ?>
           