<?php

namespace ToDo;
use PDO;

class Task{

    protected $pdo;
    private $pavadinimas;
    private $kodas;
    private $pvm_kodas;
    private $adresas;
    private $telefonas;
    private $pastas;
    private $veikla;
    private $vadovas;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function createTask($company){
        $this->pavadinimas = $company['pavadinimas'];
        $this->kodas = $company['kodas'];
        $this->pvm_kodas = $company['pvm_kodas'];
        $this->adresas = $company['adresas'];
        $this->telefonas = $company['telefonas'];
        $this->pastas = $company['pastas'];
        $this->veikla = $company['veikla'];
        $this->vadovas = $company['vadovas'];
        $this->insertTask();
    }

    private function insertTask(){
        try{
            $query = "INSERT INTO `companies` (`pavadinimas`, `kodas`, `pvm_kodas`, `adresas`, `telefonas`, `pastas`, `veikla`, `vadovas`) 
            VALUES (:pavadinimas, :kodas, :pvm_kodas, :adresas, :telefonas, :pastas, :veikla, :vadovas)";
            $stmt = $this -> pdo->prepare($query);
            $stmt->bindParam(':pavadinimas', $this->pavadinimas, PDO::PARAM_STR);
            $stmt->bindParam(':kodas', $this->kodas, PDO::PARAM_STR);
            $stmt->bindParam(':pvm_kodas', $this->pvm_kodas, PDO::PARAM_STR);
            $stmt->bindParam(':adresas', $this->adresas, PDO::PARAM_STR);
            $stmt->bindParam(':telefonas', $this->telefonas, PDO::PARAM_STR);
            $stmt->bindParam(':pastas', $this->pastas, PDO::PARAM_STR);
            $stmt->bindParam(':veikla', $this->veikla, PDO::PARAM_STR);
            $stmt->bindParam(':vadovas', $this->vadovas, PDO::PARAM_STR);

            $stmt->execute();
            header('Location:/');

        }catch(\PDOExpection $e){
            echo $e->getMessage();
        }
    }
    public function allTasks(){
        $statement = $this->pdo->prepare('select * from companies');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC); //grazinam kaip asociatyvu masyva
    }
    public function deleteTask($id){
        $statement = $this->pdo->prepare("DELETE FROM `companies` WHERE id=$id");
        $statement->execute();
        header('Location:/');
        return $statement;
    }
    public function searchCity($pavadinimas){
        $this->pavadinimas;

        try{
            $query = "SELECT * FROM companies WHERE pavadinimas LIKE :pavadinimas";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':pavadinimas', $pavadinimas, PDO::PARAM_STR);
            $stmt->execute();
            header('Location:/');
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }
}