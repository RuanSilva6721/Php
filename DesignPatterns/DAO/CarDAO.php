<?php

include_once "models/Car.php";

class CarDAO implements CarDAOInterface{
    private $conn;

    function __construct(PDO $conn) {
        $this->conn = $conn;
        
	}
    
    public function findAll(){
        $array =[];

        $stmt = $this->conn->query("SELECT * FROM dao");
        $data = $stmt->fetchAll();

        foreach ($data as $dat){
            $car = new Car();

            $car->setId($dat["id"]);
            $car->setBrand($dat["marca"]);
            $car->setKm($dat["km"]);
            $car->setColor($dat["cor"]);

            $array[] = $car;

        }
        return $array;

    } 
    public function create(Car $car){
       
        $brand = $car->getBrand();
        $km = $car->getKm();
        $color =$car->getColor();

        $stmt = $this->conn->prepare("INSERT INTO dao (marca, km , cor) VALUES (:brand, :km, :color)");

        $stmt->bindParam(":brand", $brand);
        $stmt->bindParam(":km", $km);
        $stmt->bindParam(":color", $color);

        try{
            $stmt->execute();
            
        
        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error";
        }


    }
	
	
}

?>