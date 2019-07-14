<?php
define('BASEDIR', __DIR__);
include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

//工厂模式实例化对象
// $db = IMooc\Factory::createDatabase();

// 单例模式实例化对象
// $db = IMooc\Database::getInstance();

// 注册器模式实例化对象
// $db = IMooc\Register::get('db1');

//适配器模式
// $db = new IMooc\Database\PDO();
// $db->connect('127.0.0.1', 'root', '', 'test');
// var_dump($db->query("show databases"));
// $db->close();

// 策略模式
// class Page
// {
// 	protected $strategy;
// 	function index()
// 	{
// 		$this->strategy->showAd();
// 	}

// 	function setStrategy(\IMooc\UserStrategy $strategy)
// 	{
// 		$this->strategy = $strategy;
// 	}
// }
// $page = new Page;
// if (isset($_GET['female'])) {
// 	$strategy = new \IMooc\FemaleUserStrategy();
// } else {
// 	$strategy = new \IMooc\MaleUserStrategy();
// }
// $page->setStrategy($strategy);
// $page->index();

// 数据对象映射模式
// $user = new IMooc\User(1);
// $user->name = 'wowo';

// // 数据对象映射模式、工厂模式
// class Page
// {
// 	function index()
// 	{
// 		$user = IMooc\Factory::getUser(1);
// 		$user->name = 'heihei';
// 		var_dump($user);
// 	}

// 	function test()
// 	{
// 		$user = IMooc\Factory::getUser(1);
// 		$user->length = 13.5;
// 		var_dump($user);
// 	}
// }
// $page = new Page();
// $page->index();
// $page->test();
 
//观察者模式
// class Event extends \IMooc\EventGenerator
// {
// 	function trigger()
// 	{
// 		echo 'Event<br/>';
// 		$this->notify();
// 	}
// }
// class Observer1 implements \IMooc\Observer
// {
// 	function update($event_info = null)
// 	{
// 		echo '逻辑1<br/>';
// 	}
// }
// $event = new Event;
// $event->addObserver(new Observer1);
// $event->trigger();

//原型模式
// $prototype = new IMooc\Canvas();
// $prototype->init();

// $canvas1 = clone $prototype;
// $canvas1->rect(3, 6, 4, 12);
// $canvas1->draw();

//装饰器模式
// $canvas1 = new IMooc\Canvas();
// $canvas1->init();
// $canvas1->addDecorator(new \IMooc\ColorDrawDecorator('green'));
// $canvas1->rect(3, 6, 4, 12);
// $canvas1->draw();

//迭代器模式
// $users = new \IMooc\AllUser();
// foreach ($users as $user) {
// 	var_dump($user);
// }

//代理模式
// $proxy = new \IMooc\Proxy();
// $proxy->getUserName($id);
// $proxy->setUserName($id, $proxy);