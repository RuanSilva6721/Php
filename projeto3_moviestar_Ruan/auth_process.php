<?php
require_once "global.php";
require_once "db.php";
require_once "models/User.php";
require_once "models/Message.php";
require_once "dao/UserDAO.php";

$message = new Message($BASE_URL);
$userDAO = new UserDAO($conn, $BASE_URL);

$type = filter_input(INPUT_POST, "type");

if($type ==="register"){
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    $confirmpassword = filter_input(INPUT_POST, "confirmpassword");
    
     //print_r($email);exit;
    // Verificação de dados mínimos 
    if($name && $lastname && $email && $password) {
        if($password===$confirmpassword){

        if($userDAO->findByEmail($email) === false) {

          $user = new User();

          $userToken = $user->generateToken();
          $finalPassword = $user->generatePassword($password);

          $user->name =$name;
          $user->lastname =$lastname;
          $user->email =$email;
          $user->password =$finalPassword;
          $user->token = $userToken;

          $auth = true;
         
          $userDAO->create($user, $auth);
          
        } else {
          
          // Enviar uma msg de erro, usuário já existe
          $message->setMessage("Usuário já cadastrado, tente outro e-mail.", "error", "back");

        }

      } else {

        // Enviar uma msg de erro, de senhas não batem
        $message->setMessage("As senhas não são iguais.", "error", "back");

      }

    } else {

      // Enviar uma msg de erro, de dados faltantes
      $message->setMessage("Por favor, preencha todos os campos.", "error", "back");

    }

} else if($type === "login"){

  $email = filter_input(INPUT_POST, "email");
  $password = filter_input(INPUT_POST, "password");

  if($userDAO->authenticateUser($email, $password)){
    $message->setMessage("Seja bem-vindo!", "success", "editprofile.php");


}else{
    $message->setMessage("Usuário e/ou senha incorretos.", "error", "back");
}
}else{
    $message->setMessage("Informações invalidas!", "error", "index.php");

}