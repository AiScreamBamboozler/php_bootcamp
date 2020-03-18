#!/usr/bin/php
<?php

$argv;
unset($argv[0]);
$concatenate = implode(" ", $argv);
$parameters = explode(" ", $concatenate);
$filtered = array_filter($parameters);
sort($filtered);
foreach ($filtered as $elem){
	echo "$elem\n";
}

?>
