#!/usr/bin/php
<?php

if ($argc != 4)
	echo "Incorrect Parameters\n";
else
{
	$a = str_replace(" ", "", $argv[1]);
	$op = str_replace(" ", "", $argv[2]);
	$b = str_replace(" ", "", $argv[3]);
	switch ($op) {
		case '+':
			echo ($a + $b);
			break;
		case '-':
			echo ($a - $b);
			break;
		case '*':
			echo ($a * $b);
			break;
		case '/':
			echo ($a / $b);
			break;
		case '%':
			echo ($a % $b);
			break;
		default:
			break;
	}
}
?>
