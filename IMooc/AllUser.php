<?php
namespace IMooc;
//迭代器模式
class AllUser implements \Iterator
{
	protected $ids;
	protected $index;
	protected $data = [];
	function __construct()
	{
		$this->ids = [1, 2, 3];
	}
	function current()
	{
		$id = $this->ids[$this->index];
		return Factory::getUser($id);
	}
	function next()
	{
		$this->index ++;
	}
	function valid()
	{
		return $this->index < count($this->ids);
	}
	function rewind()
	{
		$this->index = 0;
	}
	function key()
	{
		return $this->index;
	}
}