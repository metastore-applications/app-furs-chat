<?php

namespace MetaStore\App\Furs\JuniperBot;

use MetaStore\App\Kernel\Parser;

/**
 * Class Members
 * @package MetaStore\App\Furs\Members
 */
class Card {

	/**
	 * @param $entry
	 *
	 * @return string
	 */
	public static function getCard( $entry ) {
		$out = '<div class="column"><div class="card" itemscope itemtype="http://schema.org/Person">';
		$out .= '<div class="card-content">';
		$out .= '<div class="media">';
		$out .= '<div class="media-left"><figure class="image is-64x64">' . API::getUserIMG( $entry['avatarUrl'] ) . '</figure></div>';
		$out .= '<div class="media-content">';
		$out .= '<h4 class="title is-4">' . API::getUserNick( $entry['nick'] ) . '</h4><p class="subtitle is-6">@' . API::getUserName( $entry['name'] ) . '</p>';
		$out .= '</div>';
		$out .= '</div>';
		$out .= '</div>';
		$out .= '<div class="card-footer">';
		$out .= '<div class="card-footer-item">' . API::getUserRank( $entry['rank'] ) . '</div>';
		$out .= '<div class="card-footer-item is-hidden-touch">' . API::getUserLevel( $entry['level'] ) . '</div>';
		$out .= '<div class="card-footer-item is-hidden-touch">' . API::getUserExp( $entry['totalExp'] ) . '</div>';
		$out .= '</div>';
		$out .= '</div></div>';

		return $out;
	}
}