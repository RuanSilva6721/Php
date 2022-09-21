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

            if($userDAO->findByEmail($email)===false){
                 ///echo "nenhum usuário encontrado!";
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



               
            }else{
                $message->setMessage("e-mail já está cadastrado", "error", "back");
            }

        }else{
             //mensagem de dados faltando
        $message->setMessage("As senhas não são iguais", "error", "back");
        }
        }
    else{
        //mensagem de dados faltando
        $message->setMessage("Por favor preencha todos os campos", "error", "back");
    }


}else if($type=== "login"){
  
}

?>