#!/usr/bin/php
<?php
	preg_match("/\S.*/", preg_replace("/\s+/", " ", $argv[1]), $str);
	preg_match("/.*\S/", $str[0], $str);
	if (!empty($str))
		echo $str[0]."\n";
?>
