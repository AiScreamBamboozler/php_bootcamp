<?php
function auth($login, $passwd)
{
	if(file_exists('../private/passwd'))
	{
		$file = unserialize(file_get_contents('../private/passwd'));
		$hpass = hash('whirlpool', $passwd);
		$i = 0;
		$flag = 0;
		while ($file[$i])
		{
			if ($file[$i]['login'] == $login)
			{
				$flag = 1;
				$fpass = $file[$i]['passwd'];
				if ($fpass === $hpass)
				{
					return TRUE;
				}
				else
				{
					return FALSE;
				}
			}
			$i++;
		}
		if ($flag === 0)
		{
			return FALSE;
		}
	}
}
?>