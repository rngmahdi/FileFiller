<?php
require_once "id.php";
require_once "text.php";

class Builder
{
    public $command;
    # command line is the head 
    function __construct($command)
    {
        $this->command = $command;

    }
    function getCommandline()
    {
        return $this->command;
    }
    # separate the command line to parts and replace every part with the appropriate class with their own parameters 
    public function commandLine()
    {
        $command = explode(";", $this->command);
        foreach ($command as $c) {
            $c = explode(":", $c);
            switch ($c[0]) {
                case "id":
                    $c = new Id(intval($c[1]));
                case "Text":
                    $c = new Text($c[1], $c[2]);
            }
            $newCommand[] = $c;
        }
        return $newCommand;
        # line that contains the type of every part 
    }
}

