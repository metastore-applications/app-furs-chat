<?php

namespace MetaStore\App\Furs\Members;

use MetaStore\App\Furs\Discord\API;

/**
 * Class Roles
 * @package MetaStore\App\Furs\Members
 */
class Roles {

	public static function getRoles() {
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
		$outRolesCount     = array_count_values( str_replace( 'FURS.', '', preg_grep( '/FURS/', array_values( $outRoles ) ) ) );

		ksort( $outRolesCount );

		$outRoleName = '';

		foreach ( $outRolesCount as $item => $value ) {
			$outRoleName .= '<div class="level">';
			$outRoleName .= '<div class="level-left"><div class="level-item">' . $item . '</div></div>';
			$outRoleName .= '<div class="level-right"><div class="level-item"><span class="tag is-info">' . $value . '</span></div></div>';
			$outRoleName .= '</div>';
		}

		return $outRoleName;
	}

}