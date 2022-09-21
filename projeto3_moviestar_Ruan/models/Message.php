<?php

class Message{

    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }
    public function getMessage(){
        if(!empty($_SESSION["msg"])){
            return[
            "msg" => $_SESSION["msg"],
            "type" => $_SESSION["type"]
            ];
        }else{
            return false;
        }

    }
    public function setMessage($msg, $type, $redirect = "index.php"){
        $_SESSION["type"] = $type;
        $_SESSION["msg"] = $msg;
        
        if($redirect != "back"){
            header("Location: $this->url" . $redirect);
        }else{
            header("Location: ". $_SERVER["HTTP_REFERER"]);
        }
    }
    public function cleanMessage(){
        $_SESSION["type"] = "";
        $_SESSION["msg"] = "";

    }



}



?>