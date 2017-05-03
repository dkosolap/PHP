#!/usr/bin/php
<?php
	date_default_timezone_set("Europe/Kiev");
	$file = fopen("/var/run/utmpx", "r");
	while ($data = fread($file, 628))
	{
		$arr = unpack("Z256user/Z4id/Z32tty/Iasvirido/Itype/Itime", $data);
		if ($arr[type] == "7")
			echo $arr[user]." ".$arr[tty]."  ".date("M  j H:i ", $arr[time])."\n";
	}
?>
