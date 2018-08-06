<?php

namespace MetaStore\App\Furs\JuniperBot;

use MetaStore\App\Kernel\{Config, cURL, Parser};

/**
 * Class API
 * @package MetaStore\App\Packages\Discord
 */
class API {

	/**
	 * @param string $type
	 * @param float|int $time
	 * @param string $page
	 * @param string $size
	 *
	 * @return bool|mixed|string
	 */
	public static function getAPI( $type = '', $time = 2 * 60 * 60, $page = '0', $size = '50' ) {
		$cfg   = Config::getFile( 'api' );
		$guild = $cfg['api']['bot.juniper']['guild'];

		switch ( $type ) {
			case 'ranking':
				$api = 'https://juniperbot.ru/api/public/ranking/list/' . $guild . '?page=' . $page . '&size=' . $size;
				break;
			default:
				return false;
		}

		$out = cURL::getJSON( $api, '', '1', $time );

		return $out;
	}

	/**
	 * @param $url
	 *
	 * @return string
	 */
	public static function getUserIMG( $url ) {
		$out = '<img src="' . $url . '" alt="" itemprop="image" />';

		return $out;
	}

	/**
	 * @param $name
	 *
	 * @return string
	 */
	public static function getUserName( $name ) {
		$out = '<span itemprop="name">' . Parser::clearData( $name ) . '</span>';

		return $out;
	}

	/**
	 * @param $nick
	 *
	 * @return string
	 */
	public static function getUserNick( $nick ) {
		$out = '<span itemprop="sameAs">' . Parser::clearData( $nick ) . '</span>';

		return $out;
	}

	/**
	 * @param $rank
	 *
	 * @return string
	 */
	public static function getUserRank( $rank ) {
		$out = '<span title="Номер" class="tags has-addons">';
		$out .= '<span class="tag is-dark"><i class="fas fa-hashtag"></i></span>';
		$out .= '<span class="tag is-info">' . Parser::clearData( $rank ) . '</span>';
		$out .= '</span>';

		return $out;
	}

	/**
	 * @param $level
	 *
	 * @return string
	 */
	public static function getUserLevel( $level ) {
		$out = '<span title="Уровень" class="tags has-addons">';
		$out .= '<span class="tag is-dark"><i class="fas fa-chart-line"></i></span>';
		$out .= '<span class="tag is-success">' . Parser::clearData( $level ) . '</span>';
		$out .= '</span>';

		return $out;
	}

	/**
	 * @param $exp
	 *
	 * @return string
	 */
	public static function getUserExp( $exp ) {
		$out = '<span title="Опыт" class="tags has-addons">';
		$out .= '<span class="tag is-dark"><i class="fas fa-chart-bar"></i></span>';
		$out .= '<span class="tag is-warning">' . Parser::clearData( $exp ) . '</span>';
		$out .= '</span>';

		return $out;
	}
}