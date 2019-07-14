<?php
namespace IMooc;
//策略模式接口
interface UserStrategy
{
	function showAd();
	function showCategory();
}