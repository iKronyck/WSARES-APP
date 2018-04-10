
<?php
   
   $patch = $_SERVER['DOCUMENT_ROOT'];
   $url_carpeta = "/Proyectos/WSAres/";//Esto en servidor debe ser omitido
   $url_raiz = $patch.$url_carpeta;

   define('URL_ROOT', $url_raiz.'Config/');
   define('URL_CONTROLLERS', $url_raiz.'Controller/');
   define('URL_MODELS', $url_raiz.'Model/');

   //echo "<br>" .URL_MODELS;
?>