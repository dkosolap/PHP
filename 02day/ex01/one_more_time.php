#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		date_default_timezone_set("Europe/Paris");
		setlocale(LC_TIME, "fr_FR");
		$arr = strptime($argv[1], "%A %d %B %Y %X");
		if ($arr["tm_year"] > 99)
			$arr["tm_year"] += 1900;
		if (!$arr["tm_hour"] || $arr["unparsed"])
			echo "Wrong Format\n";
		else
			echo mktime($arr["tm_hour"], $arr["tm_min"], $arr["tm_sec"], $arr["tm_mon"] + 1, $arr["tm_mday"], $arr["tm_year"])."\n";
	}
?>
