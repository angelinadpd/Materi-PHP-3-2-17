<?php

    /**
    * class handphone
    */
    class handphone
    {
        function  handphone()
        {
            $this->model = "silver";
        }
    }

    $oppo = new handphone();
    echo $oppo->model;

    $vivo = new handphone();
    echo $vivo->model;

?>
