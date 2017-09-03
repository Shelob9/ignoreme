<?php


namespace Shelob9\Ingoreme;


/**
 * Class Plugin
 * @package Shelob9\Ingoreme
 */
abstract class Plugin {


	private $name;
	private $path;
	private $url;
	private $version;


	public function __construct( string  $path = '', string  $url = '', string  $version = '' )
	{
		$this->name = $this->setName();
		$this->path = $path;
		$this->url = $url;
		$this->version = $version;
	}


	abstract protected function setName() : string ;


	final public function registerServices()
	{
		$container = new Container();
		do_action_ref_array( $this->get_slug() . '_register_services', [
			$container,
			$this->get_slug(),
			$this->version
		]);

	}

	final public function get_slug(){
		return sanitize_key( $this->name );
	}
}