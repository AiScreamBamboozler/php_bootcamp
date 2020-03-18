<?php
if($_POST['submit'] === "OK" && $_POST['login'] != "" && $_POST['passwd'] != "")
{
	if(!file_exists('../private')) 
	{
		mkdir('../private', 0755);
	}
	if(!file_exists('../private/passwd'))
	{
		$user = ($_POST['login']);
		$pass =  hash('whirlpool', ($_POST['passwd']));
		$account = array(login => $user, passwd => $pass);
		$holder = array($account);
		file_put_contents('../private/passwd', serialize($holder));
		echo "OK\n";
	}
	else if(file_exists('../private/passwd'))
	{
		$user = ($_POST['login']);
		$pass = hash('whirlpool', ($_POST['passwd']));
		$file = unserialize(file_get_contents('../private/passwd'));
		$i = 0;
		while ($file[$i])
		{  
			if ($file[$i]['login'] != $user)
			{
				$i++;
			}
			else if ($file[$i]['login'] == $user)
			{
				echo "ERROR\n";
				return ;
			}
		}
		$account = array(login => $user, passwd => $pass);
		$file[] = $account;
		file_put_contents('../private/passwd', serialize($file));
		echo "OK\n";
	}
}
else
{
	echo "ERROR\n";
	return ;
}
?>