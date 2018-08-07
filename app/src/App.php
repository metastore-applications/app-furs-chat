<?php

namespace MetaStore\App\Furs;

use MetaStore\App\Kernel\View;
use MetaStore\App\Furs\Members\{Members, Roles};
use MetaStore\App\Furs\Messages\Messages;
use MetaStore\App\Furs\JuniperBot\Cards;

/**
 * Class App
 * @package MetaStore\App\Furs
 */
class App {

	/**
	 * @return string
	 */
	public static function getMembers() {
		$members = new Members();
		$out     = $members->getMembers();

		return $out;
	}

	/**
	 * @return int|string
	 */
	public static function getMembersCount() {
		$members = new Members();
		$out     = $members->getMembersCount();

		return $out;
	}

	/**
	 * @return string
	 */
	public static function getRolesFurs() {
		$members = new Roles();
		$out     = $members->getRolesFurs();

		return $out;
	}

	/**
	 * @return string
	 */
	public static function getRolesProf() {
		$members = new Roles();
		$out     = $members->getRolesProf();

		return $out;
	}

	/**
	 * @return string
	 */
	public static function getRolesClr() {
		$members = new Roles();
		$out     = $members->getRolesClr();

		return $out;
	}

	/**
	 * @return string
	 */
	public static function getMessages() {
		$members = new Messages();
		$out     = $members->getMassages();

		return $out;
	}

	/**
	 * @return string
	 */
	public static function getRanking() {
		$ranking = new Cards();
		$out     = $ranking->getCards();

		return $out;
	}

	/**
	 *
	 */
	public static function runApp() {
		View::get( 'home', 'page' );
	}
}