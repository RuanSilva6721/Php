<?php
require_once "global.php";
require_once "db.php";
require_once "models/User.php";
require_once "models/Message.php";
require_once "dao/UserDAO.php";

$message = new Message($BASE_URL);
$userDAO = new UserDAO($conn, $BASE_URL);

$type = filter_input(INPUT_POST, "type");

if($type === "update"){
    $userData = $userDAO->verifyToken();
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $bio = filter_input(INPUT_POST, "bio");
    $password = filter_input(INPUT_POST, "password");
    $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

$user - new User();
   $userData->name = $name;
   $userData->lastname = $lastname;
   $userData->email = $email;
   $userData->bio = $bio;

   if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){
    $image = $_FILES["image"];

    $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
    $jpgArray =  ["image/jpeg", "image/jpg"];

    if(in_array($image["type"], $imageTypes)) {

        // Checar se jpg
        if(in_array($image, $jpgArray)) {

          $imageFile = imagecreatefromjpeg($image["tmp_name"]);

        // Imagem é png
        } else {

          $imageFile = imagecreatefrompng($image["tmp_name"]);

        }

        $imageName  =$user->imageGenarateName();

    }else{
        $message->setMessage("Tipo invalido de Imagem", "error", "back");
    }

    
   $userData->image = $image;
   
   $userDAO->update($userData);
}else if($type === "changepassword"){


}else{
    $message->setMessage("Ação indisponivel", "error", "index.php");
}

?>