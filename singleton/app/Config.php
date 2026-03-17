<?php


namespace App;

class Config
{
	private static ?Config $instance = null;
	private array $settings;

	private function __construct(array $settings = [])
	{
		$this->settings = $settings;
	}

	public static function getInstance(array $settings = []): Config
	{
		if (self::$instance === null) {
			self::$instance = new Config($settings);
		}
		return self::$instance;
	}

	public function get(string $key, $default = null)
	{
		return $this->settings[$key] ?? $default;
	}
}