<?php

/**
 * Class SocialMedia Record Model.
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Arkadiusz Adach <a.adach@yetiforce.com>
 */
class SocialMedia_Record_Model extends \App\Base
{
	/**
	 * The name of the table in the database for Twitter.
	 */
	private const TABLE_TWITTER = 'u_yf_social_media_twitter';
	/**
	 * Table name in the database for the twitter archive.
	 */
	private const TABLE_TWITTER_BACKUP = 'b_yf_social_media_twitter';
	/**
	 * Allowed fields as they are in the table.
	 */
	private const ALLOWED_FIELDS = ['id', 'twitter_login', 'id_twitter', 'message', 'created_at', 'data_json', 'createdtime'];

	/**
	 * Function to get the id of the record.
	 *
	 * @return int - Record Id
	 */
	public function getId()
	{
		return $this->get('id');
	}

	/**
	 * Function to set the id of the record.
	 *
	 * @param int $value - id value
	 */
	public function setId($value)
	{
		return $this->set('id', (int) $value);
	}

	/**
	 * Is new record.
	 *
	 * @return bool
	 */
	public function isNew()
	{
		return empty($this->get('id'));
	}

	/**
	 * Save to the database.
	 */
	public function save()
	{
	}
}
