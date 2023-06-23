<?php
    namespace app\info;  
    use getInstance as instance;
    class informacion{
        use instance;
        function __construct(public $nombre, protected $edad ){}
    }


?>