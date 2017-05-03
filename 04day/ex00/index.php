<?php
session_start();

if ($_GET[login] && $_GET[passwd])
{
	$_SESSION[login] = $_GET[login];
	$_SESSION[passwd] = $_GET[passwd];
	$_SESSION[time] = 60;
}
?>
<html><body>
<form>
	<input type="text" name="login"	action="index.php" method="_GET" placeholder="login" value="<?php echo $_SESSION[login];?>"><br>
	<input type="password" name="passwd" action="index.php" method="_GET" placeholder="password" value="<?php echo $_SESSION[passwd];?>"><br>
	<input type="submit" name="submit" action="index.php" method="_GET" value="OK">
</form>
</body></html>