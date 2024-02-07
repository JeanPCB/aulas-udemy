<?php
    session_start();

    include_once "connection.php";

    $data = $_POST;

    if(!empty($data)) {
<<<<<<< HEAD
=======
        if($data["type"] === "delete") {
            $id = $data["id"];
        } else {
            $id = $data["id"];
            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];
        }

>>>>>>> f8f28e8d75d0a43eba4c782e4ca99b5fb03dccac
        switch ($data["type"]) {
            case "create":
                $name = $data["name"];
                $phone = $data["phone"];
                $observations = $data["observations"];

                $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

                $operation = "criado";

                $stmt = $conn->prepare($query);
                $stmt->bindParam("name", $name);
                $stmt->bindParam("phone", $phone);
                $stmt->bindParam("observations", $observations);

                break;
            
            case "edit":
                $id = $data["id"];
                $name = $data["name"];
                $phone = $data["phone"];
                $observations = $data["observations"];

                $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";
            
                $operation = "atualizado";

                $stmt = $conn->prepare($query);
                $stmt->bindParam("name", $name);
                $stmt->bindParam("phone", $phone);
                $stmt->bindParam("observations", $observations);
                $stmt->bindParam("id", $id);

                break;
            
            case "delete":
                $query = "DELETE FROM contacts WHERE id = :id";

                $operation = "deletado";

                $stmt = $conn->prepare($query);
                $stmt->bindParam("id", $id);

                break;

            case "delete":
                $id = $data["id"];

                $query = "DELETE FROM contacts WHERE id = :id";

                $operation = "deletado";

                $stmt = $conn->prepare($query);
                $stmt->bindParam("id", $id);

            default:
                $_SESSION["state"] = "fail";
                $_SESSION["msg"] = "Erro: problema interno (process)";
                break;
        }

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato $operation com sucesso!";
            $_SESSION["state"] = "success";
        } catch(PDOException $e) {
            $error = $e->getMessage();
            $_SESSION["msg"] = "Erro: " . $error;
            $_SESSION["state"] = "fail";
        }

        header("Location: ../index.php");  
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