<?php

// use function PHPSTORM_META\type;

require_once 'index.php';
require_once 'builder.php';

class Line
{
    public $fileName;
    public $separature;
    function __construct($fileName, $separature)
    {
        $this->fileName = $fileName;
        $this->separature = $separature;
    }
    function make(Builder $command)
    {
        $commandLine =  $command->commandLine();
        $finalCommand = [];
        foreach ($commandLine as $column) {
            switch (get_class($column)) {
                case 'Id':
                    $finalCommand[]= $column->addId();
                    break;
                case 'Text':
                    if ($column->getLength() == 'none') {
                        $finalCommand[] = $column->getDefault();
                    } else {
                        // var_dump($column->getLength());
                        $finalCommand[] = $column->pickRandomCaracter();
                    }
                    break;
            }
        }
        // print_r($finalCommand);
        return $finalCommand;
    }
    function pushTo(array $expr)
    {
        $file = fopen($this->fileName, "a");
        fputcsv($file, $expr, $this->separature);
        fclose($file);
    }
    function getLineNumber()
    {
        $file = fopen($this->fileName, 'r+');
        $content = file($this->fileName);
        fclose($file);
        return count($content);
        
    }
}

