<?php

namespace MetaStore\App\Furs;

use MetaStore\App\Kernel\{Config, Request};

require_once( __DIR__ . '/vendor/autoload.php' );

class Cron {

	/**
	 * @return string
	 */
	public static function getToken() {
		$out = Request::getParam( 'token' );

		return $out;
	}

	/**
	 * @return bool
	 */
	public function getAPI() {
		Discord\API::getAPI( 'guilds' );
		Discord\API::getAPI( 'members' );
		Discord\API::getAPI( 'messages' );
		Discord\API::getAPI( 'widget' );
		JuniperBot\API::getAPI( 'ranking' );

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