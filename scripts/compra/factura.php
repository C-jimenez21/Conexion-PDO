<?php
        namespace app\facture;
        use getInstance as instance;
        class factura{
            use instance;
            function __construct(public $nombre, public $cantidad, protected $valor){}
        }
        // class factura{ 
        //     static $getinstance;
        //     function __construct(public $nombre, public $cantidad, protected $value){}
        //     static function getInstance(){ //esta funcion me busca si hay una instancia de la clase - si no hay pues la crea - si existe, la devuelve.  
        //         $arg = (array) func_get_args()[0]; //se extrae el primer parametro del array asosiativo porque es un array 
        //         if(!self::$getinstance instanceof self){
        //             //control de error
        //             try{
        //                 self::$getinstance = new self(...$arg); //aqui se usan los [...] pues es un array asosciativo para que lo desestructure.
        //                 return self::$getinstance;
        //             }catch(\Throwable $e){
        //                 return $e-> getMessage();
        //             }
        //         }
        //         return self::$getinstance;
        //     }
        // }


?>