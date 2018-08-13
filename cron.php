<?php

namespace MetaStore\App\Furs;

use MetaStore\App\Kernel\Config;

define( 'ABSPATH', __DIR__ );

require_once( __DIR__ . '/vendor/autoload.php' );

class Cron {

	/**
	 * @return string
	 */
	public static function getToken() {
		$argv = $_SERVER['argv'];
		$out  = $argv[1] ?? '' ?: '';

		return $out;
	}

	/**
	 * @return bool
	 */
	public function getAPI() {
		Discord\API::getAPI( 'guilds', 60 * 60 );
		Discord\API::getAPI( 'members', 60 * 60 );
		Discord\API::getAPI( 'messages' );
		Discord\API::getAPI( 'widget', 60 * 60 );
		JuniperBot\API::getAPI( 'ranking', 60 * 60 );

		return true;
	}

	/**
	 * @return bool
	 */
	public function runCron() {
		$cfg   = Config::getFile( 'cron' );
		$token = $cfg['cron']['token'];

		switch ( self::getToken() ) {
			case $token:
				self::getAPI();
				break;
			default:
				return false;
		}

		return true;
	}
}

$cron = new Cron();
$cron->runCron();