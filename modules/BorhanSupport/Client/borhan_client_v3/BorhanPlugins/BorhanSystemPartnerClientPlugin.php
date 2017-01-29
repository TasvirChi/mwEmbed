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
class BorhanSystemPartnerLimitType
{
	const ACCESS_CONTROLS = "ACCESS_CONTROLS";
	const ADMIN_LOGIN_USERS = "ADMIN_LOGIN_USERS";
	const BULK_SIZE = "BULK_SIZE";
	const END_USERS = "END_USERS";
	const ENTRIES = "ENTRIES";
	const LIVE_STREAM_INPUTS = "LIVE_STREAM_INPUTS";
	const LIVE_STREAM_OUTPUTS = "LIVE_STREAM_OUTPUTS";
	const LOGIN_USERS = "LOGIN_USERS";
	const MONTHLY_BANDWIDTH = "MONTHLY_BANDWIDTH";
	const MONTHLY_STORAGE = "MONTHLY_STORAGE";
	const MONTHLY_STORAGE_AND_BANDWIDTH = "MONTHLY_STORAGE_AND_BANDWIDTH";
	const MONTHLY_STREAM_ENTRIES = "MONTHLY_STREAM_ENTRIES";
	const PUBLISHERS = "PUBLISHERS";
	const USER_LOGIN_ATTEMPTS = "USER_LOGIN_ATTEMPTS";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSystemPartnerLimit extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var BorhanSystemPartnerLimitType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $max = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSystemPartnerConfiguration extends BorhanObjectBase
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
	 * @var string
	 */
	public $partnerName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminEmail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $host = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $cdnHost = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbnailHost = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerPackage = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $monitorUsage = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $moderateContent = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rtmpUrl = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $storageDeleteFromBorhan = null;

	/**
	 * 
	 *
	 * @var BorhanStorageServePriority
	 */
	public $storageServePriority = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $bmcVersion = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $restrictThumbnailByKs = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $supportAnimatedThumbnails = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $defThumbOffset = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $defThumbDensity = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $userSessionRoleId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $adminSessionRoleId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $alwaysAllowedPermissionNames = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $importRemoteSourceForConvert = null;

	/**
	 * 
	 *
	 * @var array of BorhanPermission
	 */
	public $permissions;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationsConfig = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $allowMultiNotification = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $loginBlockPeriod = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $numPrevPassToKeep = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $passReplaceFreq = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isFirstLogin = null;

	/**
	 * 
	 *
	 * @var BorhanPartnerGroupType
	 */
	public $partnerGroupType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerParentId = null;

	/**
	 * 
	 *
	 * @var array of BorhanSystemPartnerLimit
	 */
	public $limits;

	/**
	 * http/rtmp/hdnetwork
	 * 	 
	 *
	 * @var string
	 */
	public $streamerType = null;

	/**
	 * http/https, rtmp/rtmpe
	 * 	 
	 *
	 * @var string
	 */
	public $mediaProtocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $extendedFreeTrailExpiryReason = null;

	/**
	 * Unix timestamp (In seconds)
	 * 	 
	 *
	 * @var int
	 */
	public $extendedFreeTrailExpiryDate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $extendedFreeTrail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $crmId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $crmLink = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $verticalClasiffication = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerPackageClassOfService = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $enableBulkUploadNotificationsEmails = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $deliveryRestrictions = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $bulkUploadNotificationsEmail = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $internalUse = null;

	/**
	 * 
	 *
	 * @var BorhanSourceType
	 */
	public $defaultLiveStreamEntrySourceType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $liveStreamProvisionParams = null;

	/**
	 * 
	 *
	 * @var BorhanBaseEntryFilter
	 */
	public $autoModerateEntryFilter;

	/**
	 * 
	 *
	 * @var string
	 */
	public $logoutUrl = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $defaultEntitlementEnforcement = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $cacheFlavorVersion = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $apiAccessControlId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultDeliveryType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultEmbedCodeType = null;

	/**
	 * 
	 *
	 * @var array of BorhanString
	 */
	public $disabledDeliveryTypes;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $restrictEntryByMetadata = null;

	/**
	 * 
	 *
	 * @var BorhanLanguageCode
	 */
	public $language = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSystemPartnerPackage extends BorhanObjectBase
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
	 * @var string
	 */
	public $name = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSystemPartnerUsageItem extends BorhanObjectBase
{
	/**
	 * Partner ID
	 * 	 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * Partner name
	 * 	 
	 *
	 * @var string
	 */
	public $partnerName = null;

	/**
	 * Partner status
	 * 	 
	 *
	 * @var BorhanPartnerStatus
	 */
	public $partnerStatus = null;

	/**
	 * Partner package
	 * 	 
	 *
	 * @var int
	 */
	public $partnerPackage = null;

	/**
	 * Partner creation date (Unix timestamp)
	 * 	 
	 *
	 * @var int
	 */
	public $partnerCreatedAt = null;

	/**
	 * Number of player loads in the specific date range
	 * 	 
	 *
	 * @var int
	 */
	public $views = null;

	/**
	 * Number of plays in the specific date range
	 * 	 
	 *
	 * @var int
	 */
	public $plays = null;

	/**
	 * Number of new entries created during specific date range
	 * 	 
	 *
	 * @var int
	 */
	public $entriesCount = null;

	/**
	 * Total number of entries
	 * 	 
	 *
	 * @var int
	 */
	public $totalEntriesCount = null;

	/**
	 * Number of new video entries created during specific date range
	 * 	 
	 *
	 * @var int
	 */
	public $videoEntriesCount = null;

	/**
	 * Number of new image entries created during specific date range
	 * 	 
	 *
	 * @var int
	 */
	public $imageEntriesCount = null;

	/**
	 * Number of new audio entries created during specific date range
	 * 	 
	 *
	 * @var int
	 */
	public $audioEntriesCount = null;

	/**
	 * Number of new mix entries created during specific date range
	 * 	 
	 *
	 * @var int
	 */
	public $mixEntriesCount = null;

	/**
	 * The total bandwidth usage during the given date range (in MB)
	 * 	 
	 *
	 * @var float
	 */
	public $bandwidth = null;

	/**
	 * The total storage consumption (in MB)
	 * 	 
	 *
	 * @var float
	 */
	public $totalStorage = null;

	/**
	 * The change in storage consumption (new uploads) during the given date range (in MB)
	 * 	 
	 *
	 * @var float
	 */
	public $storage = null;

	/**
	 * The peak amount of storage consumption during the given date range for the specific publisher
	 * 	 
	 *
	 * @var float
	 */
	public $peakStorage = null;

	/**
	 * The average amount of storage consumption during the given date range for the specific publisher
	 * 	 
	 *
	 * @var float
	 */
	public $avgStorage = null;

	/**
	 * The combined amount of bandwidth and storage consumed during the given date range for the specific publisher
	 * 	 
	 *
	 * @var float
	 */
	public $combinedBandwidthStorage = null;

	/**
	 * Amount of deleted storage in MB
	 * 	 
	 *
	 * @var float
	 */
	public $deletedStorage = null;

	/**
	 * Amount of transcoding usage in MB
	 * 	 
	 *
	 * @var float
	 */
	public $transcodingUsage = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSystemPartnerUsageListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanSystemPartnerUsageItem
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 */
	public $totalCount = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSystemPartnerOveragedLimit extends BorhanSystemPartnerLimit
{
	/**
	 * 
	 *
	 * @var float
	 */
	public $overagePrice = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $overageUnit = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSystemPartnerUsageFilter extends BorhanFilter
{
	/**
	 * Date range from
	 * 	 
	 *
	 * @var int
	 */
	public $fromDate = null;

	/**
	 * Date range to
	 * 	 
	 *
	 * @var int
	 */
	public $toDate = null;

	/**
	 * Time zone offset
	 * 	 
	 *
	 * @var int
	 */
	public $timezoneOffset = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSystemPartnerFilter extends BorhanPartnerFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerParentIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerParentIdIn = null;


}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSystemPartnerService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve all info about partner
	 This service gets partner id as parameter and accessable to the admin console partner only
	 * 
	 * @param int $partnerId X
	 * @return BorhanPartner
	 */
	function get($partnerId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("systempartner_systempartner", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartner");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param BorhanPartnerFilter $partnerFilter 
	 * @param BorhanSystemPartnerUsageFilter $usageFilter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanSystemPartnerUsageListResponse
	 */
	function getUsage(BorhanPartnerFilter $partnerFilter = null, BorhanSystemPartnerUsageFilter $usageFilter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($partnerFilter !== null)
			$this->client->addParam($kparams, "partnerFilter", $partnerFilter->toParams());
		if ($usageFilter !== null)
			$this->client->addParam($kparams, "usageFilter", $usageFilter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("systempartner_systempartner", "getUsage", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSystemPartnerUsageListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param BorhanPartnerFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanPartnerListResponse
	 */
	function listAction(BorhanPartnerFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("systempartner_systempartner", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartnerListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $partnerId 
	 * @param int $status 
	 * @param string $reason 
	 * @return 
	 */
	function updateStatus($partnerId, $status, $reason)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "status", $status);
		$this->client->addParam($kparams, "reason", $reason);
		$this->client->queueServiceActionCall("systempartner_systempartner", "updateStatus", $kparams);
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
	 * @param int $partnerId 
	 * @param string $userId 
	 * @return string
	 */
	function getAdminSession($partnerId, $userId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("systempartner_systempartner", "getAdminSession", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $partnerId 
	 * @param BorhanSystemPartnerConfiguration $configuration 
	 * @return 
	 */
	function updateConfiguration($partnerId, BorhanSystemPartnerConfiguration $configuration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "configuration", $configuration->toParams());
		$this->client->queueServiceActionCall("systempartner_systempartner", "updateConfiguration", $kparams);
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
	 * @param int $partnerId 
	 * @return BorhanSystemPartnerConfiguration
	 */
	function getConfiguration($partnerId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("systempartner_systempartner", "getConfiguration", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSystemPartnerConfiguration");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @return array
	 */
	function getPackages()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("systempartner_systempartner", "getPackages", $kparams);
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
	 * @return array
	 */
	function getPackagesClassOfService()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("systempartner_systempartner", "getPackagesClassOfService", $kparams);
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
	 * @return array
	 */
	function getPackagesVertical()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("systempartner_systempartner", "getPackagesVertical", $kparams);
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
	 * @return array
	 */
	function getPlayerEmbedCodeTypes()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("systempartner_systempartner", "getPlayerEmbedCodeTypes", $kparams);
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
	 * @return array
	 */
	function getPlayerDeliveryTypes()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("systempartner_systempartner", "getPlayerDeliveryTypes", $kparams);
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
	 * @param string $userId 
	 * @param int $partnerId 
	 * @param string $newPassword 
	 * @return 
	 */
	function resetUserPassword($userId, $partnerId, $newPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("systempartner_systempartner", "resetUserPassword", $kparams);
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
	 * @param BorhanUserLoginDataFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanUserLoginDataListResponse
	 */
	function listUserLoginData(BorhanUserLoginDataFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("systempartner_systempartner", "listUserLoginData", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserLoginDataListResponse");
		return $resultObject;
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSystemPartnerClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanSystemPartnerService
	 */
	public $systemPartner = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->systemPartner = new BorhanSystemPartnerService($client);
	}

	/**
	 * @return BorhanSystemPartnerClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanSystemPartnerClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'systemPartner' => $this->systemPartner,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'systemPartner';
	}
}

