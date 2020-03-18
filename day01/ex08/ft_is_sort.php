<?PHP

function ft_is_sort($array)
{
	$temp_arr = $array;
	sort($temp_arr);

	if ($temp_arr == $array)
		return 1;
	else
		return 0;
}

?>
