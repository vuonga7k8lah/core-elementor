<?php

namespace WilokeCard\Share;

class App
{
	private static $aConfig=[];

	public static function bind(string $key, array $aValue)
	{
		self::$aConfig[$key] = $aValue;
	}

	public static function get(string $key)
	{
			return array_key_exists($key, self::$aConfig) ? self::$aConfig[$key] : false;
	}
}