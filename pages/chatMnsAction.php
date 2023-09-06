<?php 
require_once "../connexion/connect.php";
session_start();
require_once "../include/_protect.php"; // Récupère le fichier protect

$json = file_get_contents('php://input');
$data = json_decode($json);
         
         setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);  
         date_default_timezone_set('Europe/Paris');
         $dateMessage = date('Y-m-d');
         $timeMessage = date('H:i:s');
         
         $userId = $_SESSION['userid'];
         $groupeId = "";
         $message = '';
            
             
             // Récupère la valeur des input et les mets dans une variable
             $message = $data->message;
        
            // Pour la securité des failles XSS par injection de code
            $message = htmlspecialchars($message);

    
        //     
            
    
        //   
        
        // // On fait la requête SQL pour insérer les données saisies par l'utilisateur
        $sql = "INSERT INTO `messages` (`messageEntite`, `messageDate`, `messageHeure`, `utilisateurId`)
                VALUES 
                (:message, :dateMessage, :timeMessage, :userId)";
    
        $requeteMessage = $database->prepare($sql); // On prépare la requête pour éviter les injections SQL
        
        $requeteMessage->execute([ // On execute la requête
            ":message" => $message, 
            ":dateMessage" => $dateMessage, 
            ":timeMessage" => $timeMessage, 
            ":userId" => $userId
        ]);
                
        $messageId = $database->lastInsertId();
      


        
           
        $sql = "INSERT INTO `associe` (`messageId`, `groupeId`)
                VALUES 
                (:messageid, :groupeid)";
    
        $requeteMessage = $database->prepare($sql); // On prépare la requête pour éviter les injections SQL
        
       $requeteMessage->execute([ // On execute la requête
            ":messageid" => $messageId, 
            ":groupeid" => $_SESSION['groupeid']
            ]);
                

            header('Content-Type: application/json');
            echo '{"messageId":"'.$messageId .'"}';

            
