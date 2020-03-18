#!/usr/bin/php
<?php
while(1)
{
	echo "Enter a number: ";
	if($var = fgets(STDIN))
	{
		$num = preg_replace("/\s+/", "", $var);
		if (is_numeric($num) == true)
		{
			if ($num % 2 == 0)
				echo "The number $num is even\n";
			else
				echo "The number $num is odd\n";
		}
		else
		{
			echo "'$num' is not a number\n";
		}
	}
	else
	{
		echo "\n";
		return;
	}
}
?>
