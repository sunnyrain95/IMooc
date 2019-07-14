<?php
namespace IMooc\Database;
use IMooc\IDatabase;
class MySQL implements IDatabase
{
	protected $conn;
	function connect($host, $user, $passwd, $dbname)
	{
		mysql_connect($host, $user, $passwd);
		mysql_select_db($dbname, $conn);
		$this->conn = $conn;
	}

	function query($sql)
	{
		$res = mysql_query($query, $this->conn);
		return $res;
	}

	function close()
	{
		mysql_close($this->conn);
	}
}