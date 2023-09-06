<?php
    session_start();

    include_once "connection.php";

    $data = $_POST;

    if(!empty($data)) {
        switch ($data["type"]) {
            case "create":
                $name = $data["name"];
                $phone = $data["phone"];
                $observations = $data["observations"];

                $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

                $stmt = $conn->prepare($query);
                $stmt->bindParam("name", $name);
                $stmt->bindParam("phone", $phone);
                $stmt->bindParam("observations", $observations);
                
                try {
                    $stmt->execute();
                    $_SESSION["msg"] = "Contato criado com sucesso!";
                } catch(PDOException $e) {
                    $error = $e->getMessage();
                    echo "Erro:" . $error;
                }
                header("Location:" . $BASE_URL . "../index.php");              
                break;
            
            default:
                break;
        }
    } else {
        if(!empty($_GET)) {
            $id = $_GET["id"];
        }
    
        if(!empty($id)) {
            $query = "SELECT * FROM contacts WHERE id = :id";
    
            $stmt = $conn->prepare($query);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            
            $contact = $stmt->fetch();
        } else {
            $query = "SELECT * FROM contacts";
        
            $stmt = $conn->prepare($query);
            $stmt->execute();
    
            $contacts = $stmt->fetchAll();
        }
    }

    $conn = null;