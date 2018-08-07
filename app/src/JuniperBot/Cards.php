<?php

namespace MetaStore\App\Furs\JuniperBot;

/**
 * Class Members
 * @package MetaStore\App\Furs\Members
 */
class Cards {

	/**
	 * @return string
	 */
	public static function getCards() {
		$api   = API::getAPI( 'ranking' )['content'];
		$out   = '';
		$count = 0;

		foreach ( $api as $entry ) {
			if ( $count % 2 == 0 ) {
				$out .= '<div class="columns">';
			}

			$out .= Card::getCard( $entry );

			if ( $count % 2 != 0 ) {
				$out .= '</div>';
			}

			$count ++;
		}

		if ( $count % 2 != 0 ) {
			$out .= '</div>';
		}

		return $out;
	}
}