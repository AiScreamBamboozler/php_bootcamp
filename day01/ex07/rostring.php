#!/usr/bin/php
<?PHP

if ($argc > 1)
{

	$str = trim(preg_replace('/\s\s+/', ' ', $argv[1]));
	$arr = explode(' ', $str);

	for ($i = 1; $i < sizeof($arr); $i++)
	{
		echo "$arr[$i] ";
	}

	echo $arr[0]."\n";
}
?>
