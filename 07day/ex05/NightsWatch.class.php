<?php
	class NightsWatch
	{
		function fight()
		{
		    return ;
		}
		function recruit($arg)
		{
			if ($arg instanceof IFighter)
				$arg->fight();
		}
	}
?>
