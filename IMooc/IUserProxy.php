<?php
namespace IMooc;
//代理模式 接口
interface IUserProxy
{
	function getUserName($id);
	function setUserName($id, $name);
}