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
class BorhanDrmProfileStatus
{
	const ACTIVE = 1;
	const DELETED = 2;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDrmProfileOrderBy
{
	const ID_ASC = "+id";
	const NAME_ASC = "+name";
	const ID_DESC = "-id";
	const NAME_DESC = "-name";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDrmProviderType
{
	const WIDEVINE = "widevine.WIDEVINE";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDrmProfile extends BorhanObjectBase
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
	 * @insertonly
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
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var BorhanDrmProviderType
	 */
	public $provider = null;

	/**
	 * 
	 *
	 * @var BorhanDrmProfileStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $licenseServerUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultPolicy = null;

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


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDrmProfileListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanDrmProfile
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
abstract class BorhanDrmProfileBaseFilter extends BorhanFilter
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
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var BorhanDrmProviderType
	 */
	public $providerEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $providerIn = null;

	/**
	 * 
	 *
	 * @var BorhanDrmProfileStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDrmProfileFilter extends BorhanDrmProfileBaseFilter
{

}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDrmProfileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new DrmProfile object
	 * 
	 * @param BorhanDrmProfile $drmProfile 
	 * @return BorhanDrmProfile
	 */
	function add(BorhanDrmProfile $drmProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmProfile", $drmProfile->toParams());
		$this->client->queueServiceActionCall("drm_drmprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDrmProfile");
		return $resultObject;
	}

	/**
	 * Retrieve a BorhanDrmProfile object by ID
	 * 
	 * @param int $drmProfileId 
	 * @return BorhanDrmProfile
	 */
	function get($drmProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmProfileId", $drmProfileId);
		$this->client->queueServiceActionCall("drm_drmprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDrmProfile");
		return $resultObject;
	}

	/**
	 * Update an existing BorhanDrmProfile object
	 * 
	 * @param int $drmProfileId 
	 * @param BorhanDrmProfile $drmProfile Id
	 * @return BorhanDrmProfile
	 */
	function update($drmProfileId, BorhanDrmProfile $drmProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmProfileId", $drmProfileId);
		$this->client->addParam($kparams, "drmProfile", $drmProfile->toParams());
		$this->client->queueServiceActionCall("drm_drmprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDrmProfile");
		return $resultObject;
	}

	/**
	 * Mark the BorhanDrmProfile object as deleted
	 * 
	 * @param int $drmProfileId 
	 * @return BorhanDrmProfile
	 */
	function delete($drmProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmProfileId", $drmProfileId);
		$this->client->queueServiceActionCall("drm_drmprofile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDrmProfile");
		return $resultObject;
	}

	/**
	 * List BorhanDrmProfile objects
	 * 
	 * @param BorhanDrmProfileFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanDrmProfileListResponse
	 */
	function listAction(BorhanDrmProfileFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("drm_drmprofile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDrmProfileListResponse");
		return $resultObject;
	}

	/**
	 * Retrieve a BorhanDrmProfile object by provider, if no specific profile defined return default profile
	 * 
	 * @param string $provider 
	 * @return BorhanDrmProfile
	 */
	function getByProvider($provider)
	{
		$kparams = array();
		$this->client->addParam($kparams, "provider", $provider);
		$this->client->queueServiceActionCall("drm_drmprofile", "getByProvider", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDrmProfile");
		return $resultObject;
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDrmClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanDrmProfileService
	 */
	public $drmProfile = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->drmProfile = new BorhanDrmProfileService($client);
	}

	/**
	 * @return BorhanDrmClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanDrmClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'drmProfile' => $this->drmProfile,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'drm';
	}
}

