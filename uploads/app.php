<?php
    trait getInstance{ 
        static $getinstance;
        static function getInstance(){ //esta funcion me busca si hay una instancia de la clase - si no hay pues la crea - si existe, la devuelve.  
            $arg = (array) func_get_args()[0]; //se extrae el primer parametro del array asosiativo porque es un array 
            if(!self::$getinstance instanceof self){
                //control de error
                try{
                    self::$getinstance = new self(...$arg); //aqui se usan los [...] pues es un array asosciativo para que lo desestructure.
                    return self::$getinstance;
                }catch(\Throwable $e){
                    return $e-> getMessage();
                }
            }
            return self::$getinstance;
        }
    }

    function autoload($class){ //el nombre del arcjivo debe ser el mismo de la clase
        $carpeta = (array)[
            dirname(__DIR__)."/scripts/clients",
            dirname(__DIR__)."/scripts/compra",
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


 print_r(\app\details\detalle::getInstance(["nombre"=>"Cristian","edad"=> 21])); //se debe instanciar la clase de esta forma
 print_r(\app\facture\factura::getInstance(["nombre"=>"Cristian","cantidad"=> 2, "valor" => 5000])); //Se deben llamar tal cual el nombre que esta en el constructor
 print_r(\app\user\usuario::getInstance(["nombre"=>"Cristian","edad"=> 2])); //Se deben llamar tal cual el nombre que esta en el constructor
 print_r(\app\info\informacion::getInstance(["nombre"=>"Cristian","edad"=> 2])); //Se deben llamar tal cual el nombre que esta en el constructor



?>