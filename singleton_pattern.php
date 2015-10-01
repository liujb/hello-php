<?php

/**
 * Author liujiangbei@diditaxi.com.cn
 * Class Singleton
 */
class Singleton {
	private static $_instance = null;

	private function __construct() {}

	/**
	 * 获得实例
	 * @return null
	 */
	public static function getInstance() {
		$class = __CLASS__;
		if (!self::$_instance instanceof $class) {
			return self::$_instance = new $class;
		}
		return self::$_instance;
	}

	public function test() {
		echo "Hello, php singleton";
	}
}

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

echo ($s1 === $s2) . "\r\n";