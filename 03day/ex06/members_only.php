<?php
	if (empty($_SERVER[PHP_AUTH_USER]))
		header("WWW-Authenticate: Basic realm=''Member area'");
	if ($_SERVER[PHP_AUTH_USER] == 'zaz' && $_SERVER[PHP_AUTH_PW] == 'Ilovemylittleponey')
	{
		header("Content-Type:text/html");
		$file = file_get_contents("http://localhost:8080/ex05/read_img.php");
		echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,".base64_encode($file)."'>\n</body></html>\n";
	}
	else
		echo "<html><body>That area is accessible for members only</body></html>\n";
	header('HTTP/1.0 401 Unauthorized');
?>