<?php
    namespace app\details;  
    /**
     * ? Se usa el patron de diseño singleton el cual nos sirve para instanciar automaticamente la clase. el atributo static de la clase se debe manejar de este tipo por sus propiedades.
     * * self es como el suṕer en Js - ademas de hacer enfasis en los atributos estaticos es como el "this" en otro tipo de variables [public, private]
     * * el self en la estatica sirve como un __CLASS__ solo que esta ultima es cuando ya esta instanciado
     */
    class detalle{ 
        static $getinstance;
        function __construct(public $nombre, protected $edad){}
        static function getInstance(){ //esta funcion me busca si hay una instancia de la clase - si no hay pues la crea - si existe, la devuelve.  
            $arg = (array) func_get_args()[0]; //se extrae el primer parametro del array asosiativo porque es un array 
            if(!self::$getinstance instanceof self){
                self::$getinstance = new self(...$arg); //aqui se usan los [...] pues es un array asosciativo para que lo desestructure.
                return self::$getinstance;
            }
            return self::$getinstance;
        }
    }

?>