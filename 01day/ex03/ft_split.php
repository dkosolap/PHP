<?php
	function ft_split($line)
	{
		$arr = array_diff(explode(' ', $line), array(''));
		sort($arr);
		return ($arr);
	}
?>
