<?php

include_once "models/Car.php";

class CarDAO implements CarDAOInterface{
    private $conn;

    function __construct(PDO $conn) {
        $this->conn = $conn;
        
	}
    
    public function findAll(){

    } 
    public function create(Car $car){
        
        $stmt = $this->conn->prepare("INSERT INTO dao (brand,km,color) VALUES (:brad, :km, :color)");

        $stmt->bindParam(":brand", $car->getBrand());
        $stmt->bindParam(":km", $car->getKm());
        $stmt->bindParam(":color", $car->getColor());

        $stmt->execute();


    }
	
	
}

?>