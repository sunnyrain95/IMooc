<?php
namespace IMooc;

class Config implements \ArrayAccess //ArrayAccess接口可以使一个对象使用数组的访问方式
{
	protected $path;
	protected $configs = [];

	function __construct($path)
	{
		$this->path = $path;
	}

	function offsetGet($key)
	{
		if (empty($this->configs[$key])) {
			$file_path = $this->path.'/'.$key.'.php';
			$config = require $file_path;
			$this->configs[$key] = $config;
		}
		return $this->configs[$key];
	}

	function offsetSet($key, $value)
	{
		throw new \Exception("cannot write config file.");
	}

	function offsetExists($key)
	{
		return isset($this->configs[$key]);
	}

	function offsetUnset($key)
	{
		unset($this->configs[$key]);
	}
}