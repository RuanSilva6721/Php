<?php
require_once "global.php";
require_once "db.php";
require_once "models/Movie.php";
require_once "models/Message.php";
require_once "dao/UserDAO.php";
require_once "dao/MovieDAO.php";

$message = new Message($BASE_URL);
$userDao = new UserDAO($conn, $BASE_URL);


// Resgata o tipo do formulário
$type = filter_input(INPUT_POST, "type");
$userData = $userDao->verifyToken();
// Atualizar usuário
if($type === "create") {

    $title = filter_input(INPUT_POST, "title");
    $description = filter_input(INPUT_POST, "description");
    $trailer = filter_input(INPUT_POST, "trailer");
    $category = filter_input(INPUT_POST, "category");
    $length = filter_input(INPUT_POST, "length");
   

    $movie = new Movie();

    if(!empty($title) && !empty($description) && !empty($category)){
        $movie->title = $title;
        $movie->description = $description;
        $movie->image = $trailer;
        $movie->trailer = $category;
        $movie->length = $length;

        if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {
    
            $image = $_FILES["image"];
            $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
            $jpgArray = ["image/jpeg", "image/jpg"];
        
            // Checagem de tipo de imagem
            if(in_array($image["type"], $imageTypes)) {
        
              // Checar se jpg
              if(in_array($image, $jpgArray)) {
        
                $imageFile = imagecreatefromjpeg($image["tmp_name"]);
        
              // Imagem é png
              } else {
        
                $imageFile = imagecreatefrompng($image["tmp_name"]);
        
              }
        
              $imageName = $movie->imageGenarateName();
        
        
              $caminho = $_SERVER['DOCUMENT_ROOT']."/projeto3_moviestar_Ruan/img/movie/";
              $_FILES["tmp_name"] = $imageName;
        
              if (move_uploaded_file($_FILES["image"]["tmp_name"], $caminho)) {
                echo "File is valid, and was successfully uploaded.\n";
              } else {
                 echo "Upload failed";
              }
              
              imagejpeg($imageFile, $caminho . $imageName, 100);
             
        
              $movie->image = $imageName;
              $movieDAO->create($movie);
            } else {
        
              $message->setMessage("Tipo inválido de imagem, insira png ou jpg!", "error", "back");
        
            }
        
          }

        }else{
        $message->setMessage("Você precisa adicionar título, descrição e categoria!", "error", "back");
        }
       



    }else{
    $message->setMessage("Informe informações válidas!", "error", "index.php");
    }
