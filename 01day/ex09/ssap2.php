#!/usr/bin/php
<?php
	function ft_split($line)
	{
		$arr = array_diff(explode(' ', $line), array(''));
		natcasesort($arr);
		return ($arr);
	}
	if ($argc < 2)
		return ;
	$arr;
	foreach ($argv as $key => $value)
		if ($key != 0)
			$arr .= $value . " ";
	$arr = ft_split($arr);
	$arr2;
	foreach ($arr as $value) {
		if (ctype_alpha($value))
			echo "$value\n";
		else if (is_numeric)
			$arr2[] = $value;
	}
	sort($arr2, SORT_LOCALE_STRING);
	foreach ($arr2 as $value) {
		if (is_numeric($value))
			echo "$value\n";
	}
	foreach ($arr as $value) {
		if (!is_numeric($value) && !ctype_alpha($value))
			echo "$value\n";
	}
?>
