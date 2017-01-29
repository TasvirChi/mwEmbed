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
require_once(dirname(__FILE__) . "/BorhanBulkUploadClientPlugin.php");

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanBulkServiceFilterData extends BorhanBulkServiceData
{
	/**
	 * Filter for extracting the objects list to upload 
	 * 	 
	 *
	 * @var BorhanFilter
	 */
	public $filter;

	/**
	 * Template object for new object creation
	 * 	 
	 *
	 * @var BorhanObjectBase
	 */
	public $templateObject;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanBulkUploadFilterJobData extends BorhanBulkUploadJobData
{
	/**
	 * Filter for extracting the objects list to upload 
	 * 	 
	 *
	 * @var BorhanFilter
	 */
	public $filter;

	/**
	 * Template object for new object creation
	 * 	 
	 *
	 * @var BorhanObjectBase
	 */
	public $templateObject;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanBulkUploadFilterClientPlugin extends BorhanClientPlugin
{
	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return BorhanBulkUploadFilterClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanBulkUploadFilterClientPlugin($client);
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
		return 'bulkUploadFilter';
	}
}

