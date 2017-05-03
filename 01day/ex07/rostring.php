#!/usr/bin/php
<?php
	function ft_split($line)
	{
		$arr = array_diff(explode(' ', $line), array(''));
		return ($arr);
	}

	$arr = ft_split($argv[1]);
	$arr = array_values($arr);
	$count = count($arr);
	foreach ($arr as $key => $value)
		if ($key != 0)
			echo "$value ";
	if ($count != 0)
		echo "$arr[0]\n";
?>
