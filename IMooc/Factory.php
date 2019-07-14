<?php
namespace IMooc;
//工厂模式实现类
class Factory
{
	static function createDatabase()
	{
		$db = Database::getInstance();
		Register::set('db1', $db);
		return $db;
	}

	//数据对象映射模式、工厂模式、注册树模式
	static function getUser($id)
	{
		$key = 'user_'.$id;//不同id的记录是不同的对象
		$user = Register::get($key);
		if (!$user) {
			$user = new User($id);
			Register::set($key, $user);
		}
		return $user;
	}
}