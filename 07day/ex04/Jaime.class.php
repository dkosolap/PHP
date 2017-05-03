<?php
	class  Jaime extends Lannister
	{
		public function sleepWith($var)
		{
			if (($var instanceof Tyrion))
				print ("Not even if I'm drunk !" . PHP_EOL);
			else if (($var instanceof Sansa) || ($var instanceof Jaime))
				print ("Let's do this." . PHP_EOL);
			else if (($var instanceof Cersei))
				print ("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
			else
				print ("I need to think" . PHP_EOL);
		}
	}
?>