<?php

require_once 'Color.class.php';

class Vertex
{
	private $_x = 0;
	private $_y = 0;
	private $_z = 0;
	private $_w = 1.0;
	private $_color;
	static	$verbose = false;

	public function __get($name)
	{
		$name = '_' . $name;
		if (property_exists($this, $name))
		{
			return $this->$name;
		}
	}
	public function __set($name, $var)
	{
		$name = '_' . $name;
		if (property_exists($this, $name))
		{
			if ($name == '_color')
				if (!($var instanceof Color))
					return ;
			$this->$name = $var;
		}
	}

	function __construct(array $args)
	{
		$this->_x = $args['x'];
		$this->_y = $args['y'];
		$this->_z = $args['z'];
		if ($args['w'])
			$this->_w = $args['w'];
		if ($args['color'] instanceof Color)
		{
			$this->_color = new Color( array(
				'red' => $args['color']->red,
				'green' => $args['color']->green,
				'blue' => $args['color']->blue));
		}
		else
			$this->_color = new Color(array('rgb' => 0xffffff));

		if (Vertex::$verbose)
			print( $this . " constructed" . PHP_EOL);
	}

	public function __destruct()
	{
		if (Vertex::$verbose)
			print ($this . ' destructed' . PHP_EOL);
		return ;
	}

	public function __toString()
	{
		$str = sprintf ("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f", $this->_x, $this->_y, $this->_z, $this->_w);
		if (Vertex::$verbose)
			$str .= ', '. $this->_color;
		$str .= " )";
		return $str;
	}

	static function doc()
	{
		$file = file_get_contents("./Vertex.doc.txt");
		print ($file . PHP_EOL);
	}
}
?>
