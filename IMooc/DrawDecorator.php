<?php
namespace IMooc;
//装饰器模式接口
interface DrawDecorator
{
	function beforeDraw();
	function afterDraw();
}
