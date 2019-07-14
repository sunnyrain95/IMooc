<?php
namespace IMooc;
//策略模式的针对男性的策略
class MaleUserStrategy implements UserStrategy
{
	function showAd()
	{
		echo '壮阳广告';
	}

	function showCategory()
	{
		echo '电子产品';
	}
}