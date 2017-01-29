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
class BorhanVirusFoundAction
{
	const NONE = 0;
	const DELETE = 1;
	const CLEAN_NONE = 2;
	const CLEAN_DELETE = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanVirusScanJobResult
{
	const SCAN_ERROR = 1;
	const FILE_IS_CLEAN = 2;
	const FILE_WAS_CLEANED = 3;
	const FILE_INFECTED = 4;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanVirusScanProfileStatus
{
	const DISABLED = 1;
	const ENABLED = 2;
	const DELETED = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanVirusScanEngineType
{
	const CLAMAV_SCAN_ENGINE = "clamAVScanEngine.ClamAV";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanVirusScanProfileOrderBy
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
class BorhanVirusScanProfile extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var BorhanVirusScanProfileStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var BorhanVirusScanEngineType
	 */
	public $engineType = null;

	/**
	 * 
	 *
	 * @var BorhanBaseEntryFilter
	 */
	public $entryFilter;

	/**
	 * 
	 *
	 * @var BorhanVirusFoundAction
	 */
	public $actionIfInfected = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanVirusScanProfileListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanVirusScanProfile
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
class BorhanParseCaptionAssetJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $captionAssetId = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanVirusScanJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFilePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 *
	 * @var BorhanVirusScanJobResult
	 */
	public $scanResult = null;

	/**
	 * 
	 *
	 * @var BorhanVirusFoundAction
	 */
	public $virusFoundAction = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanVirusScanProfileBaseFilter extends BorhanFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var BorhanVirusScanProfileStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var BorhanVirusScanEngineType
	 */
	public $engineTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $engineTypeIn = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanVirusScanProfileFilter extends BorhanVirusScanProfileBaseFilter
{

}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanVirusScanProfileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * List virus scan profile objects by filter and pager
	 * 
	 * @param BorhanVirusScanProfileFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanVirusScanProfileListResponse
	 */
	function listAction(BorhanVirusScanProfileFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanVirusScanProfileListResponse");
		return $resultObject;
	}

	/**
	 * Allows you to add an virus scan profile object and virus scan profile content associated with Borhan object
	 * 
	 * @param BorhanVirusScanProfile $virusScanProfile 
	 * @return BorhanVirusScanProfile
	 */
	function add(BorhanVirusScanProfile $virusScanProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "virusScanProfile", $virusScanProfile->toParams());
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanVirusScanProfile");
		return $resultObject;
	}

	/**
	 * Retrieve an virus scan profile object by id
	 * 
	 * @param int $virusScanProfileId 
	 * @return BorhanVirusScanProfile
	 */
	function get($virusScanProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "virusScanProfileId", $virusScanProfileId);
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanVirusScanProfile");
		return $resultObject;
	}

	/**
	 * Update exisitng virus scan profile, it is possible to update the virus scan profile id too
	 * 
	 * @param int $virusScanProfileId 
	 * @param BorhanVirusScanProfile $virusScanProfile Id
	 * @return BorhanVirusScanProfile
	 */
	function update($virusScanProfileId, BorhanVirusScanProfile $virusScanProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "virusScanProfileId", $virusScanProfileId);
		$this->client->addParam($kparams, "virusScanProfile", $virusScanProfile->toParams());
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanVirusScanProfile");
		return $resultObject;
	}

	/**
	 * Mark the virus scan profile as deleted
	 * 
	 * @param int $virusScanProfileId 
	 * @return BorhanVirusScanProfile
	 */
	function delete($virusScanProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "virusScanProfileId", $virusScanProfileId);
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanVirusScanProfile");
		return $resultObject;
	}

	/**
	 * Scan flavor asset according to virus scan profile
	 * 
	 * @param string $flavorAssetId 
	 * @param int $virusScanProfileId 
	 * @return int
	 */
	function scan($flavorAssetId, $virusScanProfileId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "flavorAssetId", $flavorAssetId);
		$this->client->addParam($kparams, "virusScanProfileId", $virusScanProfileId);
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "scan", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanVirusScanClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanVirusScanProfileService
	 */
	public $virusScanProfile = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->virusScanProfile = new BorhanVirusScanProfileService($client);
	}

	/**
	 * @return BorhanVirusScanClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanVirusScanClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'virusScanProfile' => $this->virusScanProfile,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'virusScan';
	}
}

