<?php
namespace IMooc;
//注册器模式实现类
class Register
{
	static protected $objects;
	static function set($alias, $object)
	{
		self::$objects[$alias] = $object;
	}

	static function get($name)
	{
		return self::$objects[$name];
	}

	function _unset()
	{

	}
}