#!/usr/bin/php
<?php
	$res = explode(' ', $argv[1]);
	$res = array_diff($res, array(''));
	$res = array_values($res);
	$count = count($res);
	foreach ($res as $key => $value) {
		if ($key == 0)
			echo $value;
		else
			echo " ".$value;

	}
	if ($count != 0)
		echo "\n";
?>
