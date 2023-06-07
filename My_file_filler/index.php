<?php
require_once 'module/builder.php';
$command = $argv[1];
$separature = $argv[2];
$lines = $argv[3];
$fileName = $argv[4];


$builder = new Builder($command,$separature);
$line = new Line($fileName,$separature);
for($i=0;$i<$lines;$i++){

    $expression = $line->make($builder);
    $line->pushTo($expression);
    
}
// print 'hello world!';
