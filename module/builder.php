<?php
require_once "id.php";
require_once "text.php";

class Builder
{
    public $command;
    
    function __construct($command)
    {
        $this->command = $command;

    }
    function getCommandline()
    {
        return $this->command;
    }

    public function commandLine()
    {
        $command = explode(";", $this->command);
        foreach ($command as $c) {
            $c = explode(":", $c);
            switch ($c[0]) {
                case "id":
                    $c = new Id(intval($c[1]));
                    break;
                case "Text":
                    $c = new Text($c[1], $c[2]);
                    break;
            }
            $newCommand[] = $c;
        }
        return $newCommand;
    }
}

