<?php
    function autoload($class){ //el nombre del arcjivo debe ser el mismo de la clase
        $carpeta = (array)[
            dirname(__DIR__)."/scripts/clients",
            dirname(__DIR__)."/scripts/compra",
            dirname(__DIR__)."/scripts/clients/",
        ];//dirname - saca la ruta absoluta del dominio (http://localhost/ApolT01-022/PHP%20Intermediate/Conexion%20PDO) subdominos son las carpetas dentro de ellas.
       foreach($carpeta as $ruta){
        if ($handler = opendir($ruta))
            while ($file = readdir($handler)){
                if($file!= "." && $file != ".."){
                    require_once $ruta."/".$file;
                }
            }    
        }
    }
    spl_autoload_register("autoload"); //registra la funcion autoload --como miguel no esta es lo que busca la funcion autolad esto solo funciona con instancias


  new \app\info\informacion(); //se debe instanciar la clase de esta forma

?>