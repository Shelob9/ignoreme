<?php


namespace Shelob9\Ingoreme;


/**
 * Class Container
 * @package Shelob9\Ingoreme
 */
class Container extends \Pimple\Container{

	/**
	 * Get item from container
	 *
	 * @param string $id
	 *
	 * @return mixed
	 */
	public function get( string $id )
	{
		return $this->offsetGet( $id );
	}

	/**
	 * @param string $id
	 * @param mixed $value
	 */
	public function set( string $id, $value )
	{
		return $this->offsetSet( $id, $value );
	}

}

