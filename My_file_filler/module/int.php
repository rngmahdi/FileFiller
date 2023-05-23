<?php
class Integer
{
    public $command;
    function __construct($command)
    {
        $this->command = $command;
    }
    function isIntervale()
    {
        $isIteger = false;
        for ($i = 0; $i < strlen($this->command); $i++) {
            if ($this->command[$i] == "-") {
                $isIteger = true;
            }
        }
        return $isIteger;
    }

    function getNumber()
    {
        return $this->command;
    }

    function pickRandomNumber(){
        echo rand(0,getrandmax());
        
    }

}

$test = new Integer("10");
$test->pickRandomNumber();
