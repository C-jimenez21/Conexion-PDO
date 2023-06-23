<?php
    namespace app\user;  
    use getInstance as instance;
    class usuario{
        use instance;
        function __construct(public $nombre, protected $edad ){}
    }


?>