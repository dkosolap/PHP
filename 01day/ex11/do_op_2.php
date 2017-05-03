#!/usr/bin/php
<?php

$arr = sscanf($argv[1], "%f %c %f %s");
if ($argc != 2)
	echo "Incorrect Parameters";
else if ($arr[3])
	echo "Syntax Error";
else
{
	switch ($arr[1]) {
		case '+':
			echo ($arr[0] + $arr[2]);
			break;
		case '-':
			echo ($arr[0] - $arr[2]);
			break;
		case '*':
			echo ($arr[0] * $arr[2]);
			break;
		case '/':
			echo ($arr[0] / $arr[2]);
			break;
		case '%':
			echo ($arr[0] % $arr[2]);
			break;
		default:
			echo "Syntax Error";
			break;
	}
}
echo "\n";
?>
