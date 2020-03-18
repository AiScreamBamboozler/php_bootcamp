#!/usr/bin/php
<?php

function myComp($a, $b){
    if(is_numeric($a) && !is_numeric($b))
        return 1;
    else if(!is_numeric($a) && is_numeric($b))
        return -1;
    else
        return ($a < $b) ? -1 : 1;
} 

$argv;
unset($argv[0]);
$concatenate = implode(" ", $argv);
$parameters = explode(" ", $concatenate);
$filtered = array_filter($parameters);
natcasesort($filtered);
usort($filtered, 'myComp');
foreach ($filtered as $elem){
	echo "$elem\n";
}

?>
