<?php
class Text
{
    public static $caracters = [
    "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o",
    "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E",
    "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U",
    "V", "W", "X", "Y", "Z"];
    public $length;
    private $default;

    function __construct($length,$default){
        $this->length  = $length;
        $this->default = $default;
    }
    function getLength(){
        return $this->length;
    }

    function pickRandomCaracter(){
        $array = Text::$caracters;
        
        $result = '';
        $test = array_rand($array,$this->length);
        for($i=0;$i<$this->length;$i++){       
            $result .= $array[$test[$i]];
            
        }
        return $result;

    }

    function getDefault(){
        return $this->default;
    }

    function setDefault($default){
        $this->default = $default;
    }

}


// $text1 = new Text(1,0);
// $caracter = $text1->pickRandomCaracter();
// echo $caracter;
