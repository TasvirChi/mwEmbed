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
require_once(dirname(__FILE__) . "/BorhanFileSyncClientPlugin.php");

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanTrackEntryEventType
{
	const UPLOADED_FILE = 1;
	const WEBCAM_COMPLETED = 2;
	const IMPORT_STARTED = 3;
	const ADD_ENTRY = 4;
	const UPDATE_ENTRY = 5;
	const DELETED_ENTRY = 6;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanUiConfAdminOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanTrackEntry extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var BorhanTrackEntryEventType
	 */
	public $trackEventType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $psVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $context = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hostName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $changedProperties = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $paramStr1 = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $paramStr2 = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $paramStr3 = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ks = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIp = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanTrackEntryListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanTrackEntry
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanUiConfAdmin extends BorhanUiConf
{
	/**
	 * 
	 *
	 * @var bool
	 */
	public $isPublic = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanUiConfAdminListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanUiConfAdmin
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanUiConfAdminBaseFilter extends BorhanUiConfFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanUiConfAdminFilter extends BorhanUiConfAdminBaseFilter
{

}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEntryAdminService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Get base entry by ID with no filters.
	 * 
	 * @param string $entryId Entry id
	 * @param int $version Desired version of the data
	 * @return BorhanBaseEntry
	 */
	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("adminconsole_entryadmin", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Get base entry by flavor ID with no filters.
	 * 
	 * @param string $flavorId 
	 * @param int $version Desired version of the data
	 * @return BorhanBaseEntry
	 */
	function getByFlavorId($flavorId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "flavorId", $flavorId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("adminconsole_entryadmin", "getByFlavorId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Get base entry by ID with no filters.
	 * 
	 * @param string $entryId Entry id
	 * @return BorhanTrackEntryListResponse
	 */
	function getTracks($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("adminconsole_entryadmin", "getTracks", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanTrackEntryListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanUiConfAdminService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds new UIConf with no partner limitation
	 * 
	 * @param BorhanUiConfAdmin $uiConf 
	 * @return BorhanUiConfAdmin
	 */
	function add(BorhanUiConfAdmin $uiConf)
	{
		$kparams = array();
		$this->client->addParam($kparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConfAdmin");
		return $resultObject;
	}

	/**
	 * Update an existing UIConf with no partner limitation
	 * 
	 * @param int $id 
	 * @param BorhanUiConfAdmin $uiConf 
	 * @return BorhanUiConfAdmin
	 */
	function update($id, BorhanUiConfAdmin $uiConf)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConfAdmin");
		return $resultObject;
	}

	/**
	 * Retrieve a UIConf by id with no partner limitation
	 * 
	 * @param int $id 
	 * @return BorhanUiConfAdmin
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConfAdmin");
		return $resultObject;
	}

	/**
	 * Delete an existing UIConf with no partner limitation
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Retrieve a list of available UIConfs  with no partner limitation
	 * 
	 * @param BorhanUiConfFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanUiConfAdminListResponse
	 */
	function listAction(BorhanUiConfFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConfAdminListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanReportAdminService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @param BorhanReport $report 
	 * @return BorhanReport
	 */
	function add(BorhanReport $report)
	{
		$kparams = array();
		$this->client->addParam($kparams, "report", $report->toParams());
		$this->client->queueServiceActionCall("adminconsole_reportadmin", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanReport");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $id 
	 * @return BorhanReport
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("adminconsole_reportadmin", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanReport");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param BorhanReportFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanReportListResponse
	 */
	function listAction(BorhanReportFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("adminconsole_reportadmin", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanReportListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $id 
	 * @param BorhanReport $report 
	 * @return BorhanReport
	 */
	function update($id, BorhanReport $report)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "report", $report->toParams());
		$this->client->queueServiceActionCall("adminconsole_reportadmin", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanReport");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("adminconsole_reportadmin", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $id 
	 * @param array $params 
	 * @return BorhanReportResponse
	 */
	function executeDebug($id, array $params = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		if ($params !== null)
			foreach($params as $index => $obj)
			{
				$this->client->addParam($kparams, "params:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("adminconsole_reportadmin", "executeDebug", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanReportResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $id 
	 * @return array
	 */
	function getParameters($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("adminconsole_reportadmin", "getParameters", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $id 
	 * @param int $reportPartnerId 
	 * @return string
	 */
	function getCsvUrl($id, $reportPartnerId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "reportPartnerId", $reportPartnerId);
		$this->client->queueServiceActionCall("adminconsole_reportadmin", "getCsvUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanAdminConsoleClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanEntryAdminService
	 */
	public $entryAdmin = null;

	/**
	 * @var BorhanUiConfAdminService
	 */
	public $uiConfAdmin = null;

	/**
	 * @var BorhanReportAdminService
	 */
	public $reportAdmin = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->entryAdmin = new BorhanEntryAdminService($client);
		$this->uiConfAdmin = new BorhanUiConfAdminService($client);
		$this->reportAdmin = new BorhanReportAdminService($client);
	}

	/**
	 * @return BorhanAdminConsoleClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanAdminConsoleClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'entryAdmin' => $this->entryAdmin,
			'uiConfAdmin' => $this->uiConfAdmin,
			'reportAdmin' => $this->reportAdmin,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'adminConsole';
	}
}

