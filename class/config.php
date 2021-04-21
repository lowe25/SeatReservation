<?php
class config{
    private $user= 'root';
    private $password= 'root';
    public $pdo = null;

    public function con(){
        try{
            $this->pdo = new PDO('mysql:host=localhost;dbname=cinema;port=3307',$this->user,$this->password);
        }catch(PDOException $e){
            die($e->getMessage());
        }
        return $this->pdo;
    }
}
?>