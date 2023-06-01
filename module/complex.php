<?php
class Complex
{
   public $command;
   public function __construct($command)
   {
      $this->command = $command;
   }

   public function makeCommand(){
      $command = explode('+',$this->command);
      var_dump($command);
   
   }

}
$command = "id:0+Text:none:mahdi";
$do = new Complex($command);
$do->makeCommand();
