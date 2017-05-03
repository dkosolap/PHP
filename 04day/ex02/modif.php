<?php
	function ft_find($file)
	{
		foreach ($file as $key => $value) {
			if ($value['login'] == $_POST['login'] && $value['passwd'] == hash("md5", $_POST[oldpw]))
			{
				$file[$key]['passwd'] = hash("md5", $_POST[newpw]);
				file_put_contents("../private/passwd", serialize($file));
				return 0;
			}
		}
		return (1);
	}

	if (empty($_POST[login]) || empty($_POST[oldpw]) || empty($_POST[newpw]) || $_POST[submit] != "OK")
		echo "ERROR\n";
	else
	{
		$file;
		if (!file_exists("../private"))
		{
			echo "ERROR\n";
			return ;
		}
		$file = unserialize(file_get_contents("../private/passwd"));

		if (ft_find($file))
		{
			echo "ERROR\n";
			return ;
		}
		echo "OK\n";
	}
?>