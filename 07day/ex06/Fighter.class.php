<?php
	abstract class Fighter
	{
		protected $name;
		public function __construct($arg)
		{
			$this->name = $arg;
		}
		public function __toString()
		{
			return ($this->name);
		}
		abstract function fight($target);
	}
?>