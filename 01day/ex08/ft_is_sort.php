<?php
	function ft_is_sort($tab)
	{
		$arr = $tab;
		sort($arr);
		$count = count($arr);
		for ($i = 0; $i < $count - 1; $i++) { 
			if ($arr[$i] != $tab[$i])
				return (0);
		}
		return (1);
	}
?>
