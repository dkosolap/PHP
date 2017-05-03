<?php

class Color
{
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	static public $verbose = false;

	function __construct(array $args)
	{
		if ($args['rgb'])
		{
			$this->red = $args['rgb'] >> 16;
			$this->green = ($args['rgb'] >> 8) - ($this->red << 8);
			$this->blue = ($args['rgb']) - ($this->red << 16) - ($this->green << 8);
		}
		else 
		{
			$this->red = (int)$args['red'];
			$this->green = (int)$args['green'];
			$this->blue = (int)$args['blue'];
		}
		$this->prov();
		if (Color::$verbose)
			print ($this . ' constructed.' . PHP_EOL);
		return ;
	}

	public function __toString()
	{
		return sprintf ("Color( red: % 3d, green: % 3d, blue: % 3d )", $this->red, $this->green, $this->blue);
	}

	public function __destruct()
	{
		if (Color::$verbose)
			print ($this . ' destructed.' . PHP_EOL);
		return ;
	}

	private function prov()
	{
		if ($this->red > 255)
			$this->red = 255;
		else if ($this->red < 0)
			$this->red = 0;
		if ($this->green > 255)
			$this->green = 255;
		else if ($this->green < 0)
			$this->green = 0;
		if ($this->blue > 255)
			$this->blue = 255;
		else if ($this->blue < 0)
			$this->blue = 0;
	}

	static function doc()
	{
		$file = file_get_contents("./Color.doc.txt");
		print ($file . PHP_EOL);
	}

	public function add(Color $clr)
	{
		$new = new Color(
			array(
			'red' => $this->red + $clr->red,
			'green' => $this->green + $clr->green,
			'blue' => $this->blue + $clr->blue));
		return $new;
	}

	public function sub(Color $clr)
	{
		$new = new Color(
			array(
			'red' => $this->red - $clr->red,
			'green' => $this->green - $clr->green,
			'blue' => $this->blue - $clr->blue));
		return $new;
	}

	public function mult($value)
	{
		$new = new Color (
			array(
			'red' => $this->red * $value,
			'green' => $this->green * $value,
			'blue' => $this->blue * $value));
		return ($new);
	}
}
?>