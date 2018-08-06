<?php

namespace MetaStore\App\Furs\Members;

use MetaStore\App\Furs\Discord\API;
use MetaStore\App\Kernel\Translit;

/**
 * Class Roles
 * @package MetaStore\App\Furs\Members
 */
class Roles {

	/**
	 * @param $prefix
	 *
	 * @return string
	 */
	public static function getRoles( $prefix ) {
		$getDataGuild    = API::getAPI( 'guilds' );
		$getDataMember   = API::getAPI( 'members' );
		$queryDataGuild  = $getDataGuild;
		$queryDataMember = $getDataMember;

		$getGuildRoles   = array_column( $queryDataGuild['roles'], 'name', 'id' );
		$getMemberRoleID = [];

		foreach ( $queryDataMember as $member ) {
			$getMemberRoles = $member['roles'];
			foreach ( $getMemberRoles as $role ) {
				$getMemberRoleID[] = $role;
			}
		}

		$setGuildRolesID   = array_keys( $getGuildRoles );
		$setGuildRolesName = array_values( $getGuildRoles );
		$outRoles          = str_replace( $setGuildRolesID, $setGuildRolesName, $getMemberRoleID );
		$outRolesCount     = array_count_values( str_replace( $prefix . '.', '', preg_grep( '/' . $prefix . '/', array_values( $outRoles ) ) ) );

		ksort( $outRolesCount );

		$outRoleName = '';

		foreach ( $outRolesCount as $item => $value ) {
			$block = ( $prefix === 'CLR' ) ? '<span class="role-color-block" style="background-color: #' . $item . ';"></span>' : '';

			$outRoleName .= '<tr>';
			$outRoleName .= '<td>' . $block . '<span class="role-' . Translit::get( $item ) . '">' . $item . '</span></td>';
			$outRoleName .= '<td class="has-text-right"><span class="tag is-link">' . $value . '</span></td>';
			$outRoleName .= '</tr>';
		}

		return '<table class="table is-fullwidth">' . $outRoleName . '</table>';
	}

	/**
	 * @return string
	 */
	public static function getRolesFurs() {
		$out = self::getRoles( 'FURS' );

		return $out;
	}

	/**
	 * @return string
	 */
	public static function getRolesProf() {
		$out = self::getRoles( 'PROF' );

		return $out;
	}

	/**
	 * @return string
	 */
	public static function getRolesClr() {
		$out = self::getRoles( 'CLR' );

		return $out;
	}

}