<?php
	class UnholyFactory
	{
		public $arr;
		public function __construct()
		{
			$this->arr = array();
		}
		public function absorb($arg)
		{
			if ($arg instanceof Fighter)
			{
				if (!in_array(($arg->__toString()), $this->arr) != false)
				{
					print ("(Factory absorbed a fighter of type " . $arg . ")\n");
					$this->arr[($arg->__toString())] = $arg;
				}
				else
					print ("(Factory already absorbed a fighter of type " . $arg . ")\n");
			}
			else
				print ("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
		}
		public function fabricate($arg)
		{
			if ($this->arr[$arg] instanceof Fighter)
			{
				print ("(Factory fabricates a fighter of type " . $arg . ")" . PHP_EOL);
				return ($this->arr[$arg]);
			}
			else
			{
				print ("(Factory hasn't absorbed any fighter of type " . $arg . ")" . PHP_EOL);
				return null;
			}
		}
	}
?>