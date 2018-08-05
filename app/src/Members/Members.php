<?php

namespace MetaStore\App\Furs\Members;

use MetaStore\App\Furs\Discord\API;
use MetaStore\App\Kernel\Parser;

/**
 * Class Members
 * @package MetaStore\App\Furs\Members
 */
class Members {

	public static function getMembers() {
		$getData   = API::getAPI( 'widget' );
		$queryData = $getData['members'];

		$outUser = '';

		foreach ( $queryData as $member ) {
			$getUserID     = $member['id'];
			$getUserIMG    = $member['avatar_url'];
			$getUserStatus = Parser::clearData( $member['status'] );

			if ( array_key_exists( 'nick', $member ) ) {
				$getUserName = Parser::clearData( $member['nick'] );
			} else {
				$getUserName = Parser::clearData( $member['username'] );
			}

			$outUserIMG = '<img src="' . $getUserIMG . '" alt="' . $getUserName . '" />';

			if ( $getUserStatus == 'online' ) {
				$getUserStatus = 'online';
			} else if ( $getUserStatus == 'idle' ) {
				$getUserStatus = 'idle';
			} else if ( $getUserStatus = 'dnd' ) {
				$getUserStatus = 'dnd';
			}

			if ( array_key_exists( 'game', $member ) && array_key_exists( 'name', $member['game'] ) ) {
				$getGameName = Parser::clearData( $member['game']['name'] );
			} else {
				$getGameName = '';
			}

			$getUserBot = ( array_key_exists( 'bot', $member ) ) ? '<div class="tag is-info userBot">bot</div>' : 0;

			if ( ! $getUserBot ) {
				$outUser .= '<li>';
				$outUser .= '<div class="userStatus ' . $getUserStatus . '"></div>';
				$outUser .= '<div class="userData">';
				$outUser .= '<div class="userImg">' . $outUserIMG . '</div>';
				$outUser .= '<div class="userName"><span>' . $getUserName . '</span><span>' . $getGameName . '</span></div>';
				$outUser .= '</div>';
				$outUser .= '</li>';
			}
		}

		$outUserList = $outUser;

		return $outUserList;
	}

	public static function getMembersCount() {
		$getData   = API::getAPI( 'members' );
		$queryData = $getData;

		$getUserCountTotal = count( $queryData );

		if ( $getUserCountTotal > 1000 ) {
			$outUserCountTotal = '> 1000';
		} else {
			$outUserCountTotal = $getUserCountTotal;
		}

		return $outUserCountTotal;
	}

}