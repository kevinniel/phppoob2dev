<?php

Class Main
{

	public static $_instances = array();

	public function __construct()
	{
		isset(self::$_instances[get_class($this)]) ? self::$_instances[get_class($this)] += 1 : self::$_instances[get_class($this)] = 0;
	}
}