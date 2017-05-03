<?php
	if (empty($_POST[login]) || empty($_POST[passwd]) || $_POST[submit] != "OK")
		echo "ERROR\n";
	else
	{
		$file;
		if (!file_exists("../private"))
			mkdir("../private");
		if (file_exists("../private/passwd"))
		{
			$file = unserialize(file_get_contents("../private/passwd"));
			foreach ($file as $value) {
				if ($value['login'] == $_POST['login'])
				{
					echo "ERROR\n";
					return ;
				}
			}
		}
		$file[] = array('login'=> $_POST['login'], 'passwd' => hash("md5", $_POST[passwd]));
		file_put_contents("../private/passwd", serialize($file));
		echo "OK\n";
	}
?>