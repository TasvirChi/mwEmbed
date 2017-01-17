<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Borhan Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2011  Borhan Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @package Borhan
 * @subpackage Client
 */
require_once(dirname(__FILE__) . "/../BorhanClientBase.php");
require_once(dirname(__FILE__) . "/../BorhanEnums.php");
require_once(dirname(__FILE__) . "/../BorhanTypes.php");

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanKontikiStorageProfile extends BorhanStorageProfile
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $serviceToken = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanKontikiStorageDeleteJobData extends BorhanStorageDeleteJobData
{
	/**
	 * Unique Kontiki MOID for the content uploaded to Kontiki
	 *      
	 *
	 * @var string
	 */
	public $contentMoid = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serviceToken = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanKontikiStorageExportJobData extends BorhanStorageExportJobData
{
	/**
	 * Holds the id of the exported asset
	 * 	 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * Unique Kontiki MOID for the content uploaded to Kontiki
	 * 	 
	 *
	 * @var string
	 */
	public $contentMoid = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serviceToken = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanKontikiClientPlugin extends BorhanClientPlugin
{
	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return BorhanKontikiClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanKontikiClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'kontiki';
	}
}

