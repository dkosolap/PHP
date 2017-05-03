<?php
class  Tyrion extends Lannister
{
	public function sleepWith($var)
	{
		if (($var instanceof Cersei) ||($var instanceof Jaime))
			print ("Not even if I'm drunk !" . PHP_EOL);
		else if (($var instanceof Sansa) || ($var instanceof Tyrion))
			print ("Let's do this." . PHP_EOL);
		else
			print ("I need to think" . PHP_EOL);
	}
}
?>