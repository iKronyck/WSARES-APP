<?php
    require_once '../Config/Rutas.php';
    require_once URL_MODELS.'Usuario.php';

    $JSON = file_get_contents("php://input");
    $Request = json_decode($JSON, TRUE);
    $codiUsua = 'CNV0010';//!empty($Request['code_usua']) ? trim($Request['code_usua']) : null;
    $passUsua = '12345ISA';//!empty($Request['pass_usua']) ? trim($Request['pass_usua']) : null;
    //$responseJSON = '';
    if($codiUsua != null) {
        $Data = array();
        $User = Usuario::Auth($codiUsua, $passUsua);
        if($User) {
            $responseJSON['resultado'] = 'access-granted';
            $responseJSON['codigo'] = $codiUsua;
        }
        else {
            $responseJSON['resultado'] = 'access-denied';
        }
    }
    else {
        $responseJSON['resultado'] = 'access-denied';
    }
    /*$Users = Usuario::getAll();
    if(count($Users) > 0) {
        foreach($Users as $item) {
            $Data[] = $item;
        }
    }
    */
    echo json_encode($responseJSON);

?>