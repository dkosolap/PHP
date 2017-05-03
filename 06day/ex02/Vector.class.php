<?php
require_once 'Vertex.class.php';

class Vector
{
	private $_x;
	private $_y;
	private $_z;
	private $_w = 0;
	static	$verbose = false;

	function __construct(Array $args)
	{
		if ($args['dest'] instanceof Vertex && $args['orig'] instanceof Vertex)
		{
			$this->_x =  $args['dest']->x - $args['orig']->x;
			$this->_y =  $args['dest']->y - $args['orig']->y;
			$this->_z =  $args['dest']->z - $args['orig']->z;
			$this->_w =  $args['dest']->w - $args['orig']->w;
		}
		else if ($args['dest'] instanceof Vertex)
		{
			$args['orig'] = new Vertex( array( 'x' => 0.0, 'y' => 0.0, 'z' => 0.0 ) );
			$this->_x =  $args['dest']->x - $args['orig']->x;
			$this->_y =  $args['dest']->y - $args['orig']->y;
			$this->_z =  $args['dest']->z - $args['orig']->z;
			$this->_w =  $args['dest']->w - $args['orig']->w;
		}
		else
		{
			print ("Must fallowing 'dest' \n");
			return ;
		}
		if (Vector::$verbose)
			print ($this . ' constructed' . PHP_EOL);
		return ;
	}
	public function __destruct()
	{
		if (Vector::$verbose)
			print ($this . ' destructed' . PHP_EOL);
		return ;
	}

	public function __toString()
	{
		$str = sprintf ("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
		return $str;
	}

	public function __get($name)
	{
		$name = '_' . $name;
		if (property_exists($this, $name))
			return $this->$name;
	}

	public	static function doc()
	{
		$file = file_get_contents("./Vector.doc.txt");
		print ($file . PHP_EOL);
	}
	public function magnitude()
	{
		$res = pow($this->_x, 2) + pow($this->_y, 2) + pow($this->_z, 2);
		return (sqrt($res));
	}
	public function normalize()
	{
		$mag = $this->magnitude();
		$new = new Vertex( array(
		'x' => ($this->x / $mag),
		'y' => ($this->y / $mag),
		'z' => ($this->z / $mag)));
		$new = new Vector( array( 'dest' => $new) );
		return $new;
	}
	public function  add( Vector $rhs )
	{
		$new = new Vertex( array(
		'x' => ($this->x + $rhs->x),
		'y' => ($this->y + $rhs->y),
		'z' => ($this->z + $rhs->z)));
		$new = new Vector( array( 'dest' => $new) );
		return $new;
	}
	public function  sub( Vector $rhs )
	{
		$new = new Vertex( array(
		'x' => ($this->x - $rhs->x),
		'y' => ($this->y - $rhs->y),
		'z' => ($this->z - $rhs->z)));
		$new = new Vector( array( 'dest' => $new) );
		return $new;
	}
	public function  opposite()
	{
		$new = new Vertex( array(
		'x' => ($this->x * -1),
		'y' => ($this->y * -1),
		'z' => ($this->z * -1)));
		$new = new Vector( array( 'dest' => $new) );
		return $new;
	}
	public function  scalarProduct($k)
	{
		$new = new Vertex( array(
		'x' => ($this->x * $k),
		'y' => ($this->y * $k),
		'z' => ($this->z * $k)));
		$new = new Vector( array( 'dest' => $new) );
		return $new;
	}
	public function  dotProduct( Vector $rhs )
	{
		$res = ($this->_x * $rhs->x) + ($this->_y * $rhs->y) + ($this->_z * $rhs->z);
		return $res;
	}
	public function cos( Vector $rhs )
	{
		return ($this->dotProduct($rhs) / ($this->magnitude() * $rhs->magnitude()));
	}
	public function crossProduct( Vector $rhs )
	{
		$new = new Vertex( array(
		'x' => ($this->_y * $rhs->z - $this->_z * $rhs->y),
		'y' => ($this->_z * $rhs->x - $this->_x * $rhs->z),
		'z' => ($this->_x * $rhs->y - $this->_y * $rhs->x)));
		$new = new Vector( array( 'dest' => $new) );
		return $new;
	}
}
?>
