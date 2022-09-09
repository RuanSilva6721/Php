<?php


    session_start();

    include_once "connection.php";
    include_once "url.php";

    $data = $_POST;
//modificações de dados no banco
    if(!empty($data)){
        print_r($data); exit;
        


//seleção de dados
    }else{
        $id;

        if(!empty($_GET)){
            $id = $_GET["id"];
        }
        //Retorna o dado
        if(!empty($id)){
            $query = "SELECT * FROM contacts WHERE id= :id";
    
            $stmt = $conn->prepare($query);
    
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            
            $contact = $stmt->fetch();
        }else{
    
        //retorna todos os contatos
        $contacts = [];
    
        $query = "SELECT * FROM contacts";
    
        $stmt = $conn->prepare($query);
    
        $stmt->execute();
    
        $contacts = $stmt->fetchAll();
    
        }

    }





 

?>