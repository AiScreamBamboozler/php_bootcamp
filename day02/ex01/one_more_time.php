#!/usr/bin/php
<?php
$ustr = trim(preg_replace('/\s+/', ' ', $argv[1]));
$arr = explode(" ", $ustr);
if (count($arr) == 5)
{
	$str = strtolower($ustr);
	$str = trim(preg_replace('/janvier/', '0', $str));
	$str = trim(preg_replace('/fevrier/', '31', $str));
	$str = trim(preg_replace('/mars/', '59', $str));
	$str = trim(preg_replace('/avril/', '90', $str));
	$str = trim(preg_replace('/mai/', '120', $str));
	$str = trim(preg_replace('/juin/', '151', $str));
	$str = trim(preg_replace('/juillet/', '181', $str));
	$str = trim(preg_replace('/aout/', '212', $str));
	$str = trim(preg_replace('/septembre/', '243', $str));
	$str = trim(preg_replace('/octobre/', '273', $str));
	$str = trim(preg_replace('/novembre/', '304', $str));
	$str = trim(preg_replace('/decembre/', '334', $str));
	$str = trim(preg_replace('/:/', ' ', $str));
	$arr = explode(" ", $str);
	$day = ($arr[3] - 1970) * 365;
	$leap = (int)(($arr[3] - 1972)/4);
    $days = $day + $leap + $arr[1] + $arr[2];
    if (is_numeric($argv[4]) == true && is_numeric($argv[5] == true))
    {
    $secs = ($arr[4] * 60 * 60) + ($arr[5] * 60) + $arr[6];
    }
	echo ($days * 24 * 60 * 60) + $secs.PHP_EOL;
}
else
	echo "Wrong Format".PHP_EOL;
?>
