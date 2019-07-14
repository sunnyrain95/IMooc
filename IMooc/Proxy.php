<?php
namespace IMooc;
//代理模式
class Proxy implements IUserProxy
{
	function getUserName($id)
	{
		$db = Factory::getDatabase('slave');
		$db->query("select name from user where id = $id");
	}
	function setUserName($id, $name)
	{
		$db = Factory::getDatabase('master');
		$db->query("update user set name = $name where id = $id");
	}
}