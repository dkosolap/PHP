#!/usr/bin/php
<?php
	function ft_split($line)
	{
		$arr = array_diff(explode(' ', $line), array(''));
		sort($arr);
		return ($arr);
	}

	$arr;
	foreach ($argv as $key => $value)
		if ($key != 0)
			$arr .= $value . " ";
	$arr = ft_split($arr);
	foreach ($arr as $value) {
		echo "$value\n";
	}
?>