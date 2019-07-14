<?php
namespace IMooc;
//数据对象映射模式
class User
{
	public $id;
	public $name;
	public $length;

	protected $db;

	function __construct($id)
	{
		$this->db = new \IMooc\Database\MySQLi();
		$this->db->connect('127.0.0.1', 'root', '', 'test');
		$res = $this->db->query("select * from user where id = $id limit 1");
		$data = $res->fetch_assoc();
		$this->id = $data['id'];
		$this->name = $data['name'];
		$this->length = $data['length'];
	}

	function __destruct()
	{
		$this->db->query("update user set name = '$this->name', length = {$this->length} where id = {$this->id}");
	}
}