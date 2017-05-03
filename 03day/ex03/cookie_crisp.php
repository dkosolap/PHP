<?php
	if ($_GET["action"] == "set" && !empty($_GET["name"]) && !empty($_GET["value"]))
		setcookie($_GET["name"], $_GET["value"], time()+3600);
	else if ($_GET["action"] == "get" && !empty($_GET["name"]) && !empty($_COOKIE[$_GET["name"]]))
		echo ($_COOKIE[$_GET["name"]])."\n";
	else if ($_GET["action"] == "del" && !empty($_GET["name"]))
		setcookie($_GET["name"], $_GET["value"], time()-1);
?>
