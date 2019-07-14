<?php
namespace IMooc;
//适配器模式接口
interface IDatabase
{
	function connect($host, $user, $passwd, $dbname);
	function query($sql);
	function close();
}