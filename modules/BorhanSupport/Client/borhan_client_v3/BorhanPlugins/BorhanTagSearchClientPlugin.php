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
class BorhanTag extends BorhanObjectBase
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
	 * @readonly
	 */
	public $tag = null;

	/**
	 * 
	 *
	 * @var BorhanTaggedObjectType
	 * @readonly
	 */
	public $taggedObjectType = null;

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
	 * @var int
	 * @readonly
	 */
	public $instanceCount = null;

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
class BorhanTagListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanTag
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
class BorhanIndexTagsByPrivacyContextJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $changedCategoryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $deletedPrivacyContexts = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $addedPrivacyContexts = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanTagFilter extends BorhanFilter
{
	/**
	 * 
	 *
	 * @var BorhanTaggedObjectType
	 */
	public $objectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagStartsWith = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $instanceCountEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $instanceCountIn = null;


}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanTagService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @param BorhanTagFilter $tagFilter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanTagListResponse
	 */
	function search(BorhanTagFilter $tagFilter, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "tagFilter", $tagFilter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("tagsearch_tag", "search", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanTagListResponse");
		return $resultObject;
	}

	/**
	 * Action goes over all tags with instanceCount==0 and checks whether they need to be removed from the DB. Returns number of removed tags.
	 * 
	 * @return int
	 */
	function deletePending()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("tagsearch_tag", "deletePending", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $categoryId 
	 * @param string $pcToDecrement 
	 * @param string $pcToIncrement 
	 * @return 
	 */
	function indexCategoryEntryTags($categoryId, $pcToDecrement, $pcToIncrement)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "pcToDecrement", $pcToDecrement);
		$this->client->addParam($kparams, "pcToIncrement", $pcToIncrement);
		$this->client->queueServiceActionCall("tagsearch_tag", "indexCategoryEntryTags", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanTagSearchClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanTagService
	 */
	public $tag = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->tag = new BorhanTagService($client);
	}

	/**
	 * @return BorhanTagSearchClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanTagSearchClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'tag' => $this->tag,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'tagSearch';
	}
}
