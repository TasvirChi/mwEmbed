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
class BorhanShortLinkStatus
{
	const DISABLED = 1;
	const ENABLED = 2;
	const DELETED = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanShortLinkOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const EXPIRES_AT_ASC = "+expiresAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const EXPIRES_AT_DESC = "-expiresAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanShortLink extends BorhanObjectBase
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
	 */
	public $expiresAt = null;

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
	public $userId = null;

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
	public $systemName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fullUrl = null;

	/**
	 * 
	 *
	 * @var BorhanShortLinkStatus
	 */
	public $status = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanShortLinkListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanShortLink
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
abstract class BorhanShortLinkBaseFilter extends BorhanFilter
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
	public $expiresAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $expiresAtLessThanOrEqual = null;

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
	public $userIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;

	/**
	 * 
	 *
	 * @var BorhanShortLinkStatus
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
class BorhanShortLinkFilter extends BorhanShortLinkBaseFilter
{

}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanShortLinkService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * List short link objects by filter and pager
	 * 
	 * @param BorhanShortLinkFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanShortLinkListResponse
	 */
	function listAction(BorhanShortLinkFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("shortlink_shortlink", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanShortLinkListResponse");
		return $resultObject;
	}

	/**
	 * Allows you to add a short link object
	 * 
	 * @param BorhanShortLink $shortLink 
	 * @return BorhanShortLink
	 */
	function add(BorhanShortLink $shortLink)
	{
		$kparams = array();
		$this->client->addParam($kparams, "shortLink", $shortLink->toParams());
		$this->client->queueServiceActionCall("shortlink_shortlink", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanShortLink");
		return $resultObject;
	}

	/**
	 * Retrieve an short link object by id
	 * 
	 * @param string $id 
	 * @return BorhanShortLink
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("shortlink_shortlink", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanShortLink");
		return $resultObject;
	}

	/**
	 * Update exisitng short link
	 * 
	 * @param string $id 
	 * @param BorhanShortLink $shortLink 
	 * @return BorhanShortLink
	 */
	function update($id, BorhanShortLink $shortLink)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "shortLink", $shortLink->toParams());
		$this->client->queueServiceActionCall("shortlink_shortlink", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanShortLink");
		return $resultObject;
	}

	/**
	 * Mark the short link as deleted
	 * 
	 * @param string $id 
	 * @return BorhanShortLink
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("shortlink_shortlink", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanShortLink");
		return $resultObject;
	}

	/**
	 * Serves short link
	 * 
	 * @param string $id 
	 * @param bool $proxy Proxy the response instead of redirect
	 * @return file
	 */
	function gotoAction($id, $proxy = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "proxy", $proxy);
		$this->client->queueServiceActionCall("shortlink_shortlink", "goto", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanShortLinkClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanShortLinkService
	 */
	public $shortLink = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->shortLink = new BorhanShortLinkService($client);
	}

	/**
	 * @return BorhanShortLinkClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanShortLinkClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'shortLink' => $this->shortLink,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'shortLink';
	}
}

