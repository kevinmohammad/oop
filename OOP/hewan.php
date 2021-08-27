<?php


class animal{
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    public function __contsruct($string){
        $this->name = $string;
    }

}

?>