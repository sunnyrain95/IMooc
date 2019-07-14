<?php
namespace IMooc;
//策略模式的针对女性策略
class FemaleUserStrategy implements UserStrategy
{
	function showAd()
	{
		echo '女装广告';
	}

	function showCategory()
	{
		echo '女装';
	}
}