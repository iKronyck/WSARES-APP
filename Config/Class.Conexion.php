<?php

class Conexion extends PDO {
    private $typeBD = 'mysql';
    private $hostBD = 'localhost';
    private $userBD = 'root';
    private $passBD = '71214953';
    private $nameBD = 'aresapp';
    
    public function __construct(){
        try{
            parent::__construct($this->typeBD.':host='.$this->hostBD.';dbname='.$this->nameBD, $this->userBD, $this->passBD);
        }
        catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
        }
    }
}

?>