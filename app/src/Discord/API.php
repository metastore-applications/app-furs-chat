<?php

namespace MetaStore\App\Furs\Discord;

use MetaStore\App\Kernel\{Config, cURL, Date};

/**
 * Class API
 * @package MetaStore\App\Packages\Discord
 */
class API {

	/**
	 * @param string $type
	 * @param float|int $time
	 *
	 * @return bool|mixed|string
	 */
	public static function getAPI( $type = '', $time = 60 * 60 ) {
		$cfg   = Config::getFile( 'api' );
		$token = $cfg['api']['discord']['token'];
		$guild = $cfg['api']['discord']['guild'];

		switch ( $type ) {
			case 'guilds':
				$api = 'https://discordapp.com/api/guilds/' . $guild;
				break;
			case 'members':
				$api = 'https://discordapp.com/api/guilds/' . $guild . '/members?limit=1000';
				break;
			case 'messages':
				$api = 'https://discordapp.com/api/channels/' . $guild . '/messages';
				break;
			case 'widget':
				$api = 'https://canary.discordapp.com/api/guilds/' . $guild . '/widget.json';
				break;
			default:
				return false;
		}

		$header = [
			'Authorization: Bot ' . $token,
		];

		$out = cURL::getJSON( $api, $header, '1', $time );

		return $out;
	}
}