<?php
require_once '../Config/Class.Conexion.php';
require_once URL_ROOT.'Class.Conexion.php';

class Usuario {
    private $codi_usua;
    private $pass_usua;
    private $user_usua;

    public function __construct($codi_usua, $pass_usua, $user_usua) {
        $this->codi_usua = $codi_usua;
        $this->pass_usua = $pass_usua;
        $this->user_usua = $user_usua;
    }

    function getCodi_Usua() {
        return $this->codi_usua = $codi_usua;
    }

    function getPass_Usua() {
        return $this->pass_usua = $pass_usua;
    }

    function getUser_Usua() {
        return $this->user_usua = $user_usua;
    }

    public static function getAll() {
        $Conexion = new Conexion();
        $SQL = 'SELECT * FROM usuario';
        $Consulta = $Conexion->prepare($SQL);
        $Consulta->execute();
        $All = $Consulta->fetchAll();
        $Conexion = null;
        return $All;
    }

    public static function Auth($codi_usua, $pass_usua) {
        $Conexion = new Conexion();
        $Consulta = $Conexion->prepare('SELECT * FROM usuario WHERE codi_usua =  :codi_usua AND  pass_usua = :pass_usua');
        $Consulta->bindParam(':codi_usua', $codi_usua);
        $Consulta->bindParam(':pass_usua', $pass_usua);
        $Consulta->execute();
        $Data = $Consulta->fetchAll();
        if($Data)
            return $Data;
        else 
            return false;
    }
}

?>