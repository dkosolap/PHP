<?php
function auth($login, $passwd)
{
	$file = unserialize(file_get_contents("../private/passwd"));
	foreach ($file as $value) {
		if ($value[login] == $login && $value[passwd] == hash("md5", $passwd))
			return (true);
	}
	return (false);
}
?>