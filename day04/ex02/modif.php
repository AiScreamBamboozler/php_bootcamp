<?php
if($_POST['submit'] === "OK" && $_POST['login'] != "" && $_POST['oldpw'] != "" && $_POST['newpw'] != "")
{
	if(file_exists('../private/passwd'))
	{
		$file = unserialize(file_get_contents('../private/passwd'));
		$user = ($_POST['login']);
		$oldpw = hash('whirlpool', ($_POST['oldpw']));
		$newpw = hash('whirlpool', ($_POST['newpw']));
		$i = 0;
		$flag = 0;
		while ($file[$i])
		{
			if ($file[$i]['login'] == $user)
			{
				$flag = 1;
				$old_pass = $file[$i]['passwd'];
				if ($old_pass === $oldpw)
				{
					$account = array(login => $user, passwd => $newpw);
					$file[$i] = $account;
					file_put_contents('../private/passwd', serialize($file));
					echo "OK\n";
					$i++;
				}
				else
				{
					echo "ERROR\n";
					return ;
				}
			}
			$i++;
		}
		if ($flag === 0)
		{
			echo "ERROR\n";
			return ;
		}
	}
}
else
{
	echo "ERROR\n";
	return ;
}
?>
