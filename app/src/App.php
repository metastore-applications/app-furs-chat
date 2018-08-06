<?php

namespace MetaStore\App\Furs;

use MetaStore\App\Kernel\View;
use MetaStore\App\Furs\Members\{Members, Roles};
use MetaStore\App\Furs\Messages\Messages;

/**
 * Class App
 * @package MetaStore\App\Furs
 */
class App {

	public static function getMembers() {
		$members = new Members();
		$out     = $members->getMembers();

		return $out;
	}

	public static function getMembersCount() {
		$members = new Members();
		$out     = $members->getMembersCount();

		return $out;
	}

	public static function getRolesFurs() {
		$members = new Roles();
		$out     = $members->getRolesFurs();

		return $out;
	}

	public static function getRolesProf() {
		$members = new Roles();
		$out     = $members->getRolesProf();

		return $out;
	}

	public static function getRolesClr() {
		$members = new Roles();
		$out     = $members->getRolesClr();

		return $out;
	}

	public static function getMessages() {
		$members = new Messages();
		$out     = $members->getMassages();

		return $out;
	}

	/**
	 *
	 */
	public static function Run() {
		View::get( 'home', 'page' );
	}
}