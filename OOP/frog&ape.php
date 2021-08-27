<?php

require_once("hewan.php");

class frog extends animal{
    public $legs = 2;
    public function jump(){
        echo " Hop Hop";
    }
}

class ape extends animal{

    public function yell(){
        echo"auo uo";
    }
}

?>