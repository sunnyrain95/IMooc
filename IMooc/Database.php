<?php
namespace IMooc;
//单例模式
class Database
{
	static protected $db;
	
	private function __construct()
	{
		//使其他地方无法new这个类
	}

	static function getInstance()
	{
		if (self::$db) {
			return self::$db;
		} else {
			self::$db = new self();
			return self::$db;
		}
	}

	function where($where)
	{

		//实现链式操作的语句
		return $this;
	}

	function order($order)
	{
		return $this;
	}
}