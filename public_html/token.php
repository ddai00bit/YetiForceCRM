<?php
/**
 * Token file.
 *
 * @package Token
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License 4.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
chdir(__DIR__ . '/../');
if (!\defined('IS_PUBLIC_DIR')) {
	\define('IS_PUBLIC_DIR', true);
}
require './token.php';
