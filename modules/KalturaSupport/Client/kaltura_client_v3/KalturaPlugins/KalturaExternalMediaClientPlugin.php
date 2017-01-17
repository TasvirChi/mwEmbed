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
class BorhanExternalMediaEntryOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const DURATION_ASC = "+duration";
	const END_DATE_ASC = "+endDate";
	const LAST_PLAYED_AT_ASC = "+lastPlayedAt";
	const MEDIA_TYPE_ASC = "+mediaType";
	const MODERATION_COUNT_ASC = "+moderationCount";
	const NAME_ASC = "+name";
	const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
	const PLAYS_ASC = "+plays";
	const RANK_ASC = "+rank";
	const RECENT_ASC = "+recent";
	const START_DATE_ASC = "+startDate";
	const TOTAL_RANK_ASC = "+totalRank";
	const UPDATED_AT_ASC = "+updatedAt";
	const VIEWS_ASC = "+views";
	const WEIGHT_ASC = "+weight";
	const CREATED_AT_DESC = "-createdAt";
	const DURATION_DESC = "-duration";
	const END_DATE_DESC = "-endDate";
	const LAST_PLAYED_AT_DESC = "-lastPlayedAt";
	const MEDIA_TYPE_DESC = "-mediaType";
	const MODERATION_COUNT_DESC = "-moderationCount";
	const NAME_DESC = "-name";
	const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
	const PLAYS_DESC = "-plays";
	const RANK_DESC = "-rank";
	const RECENT_DESC = "-recent";
	const START_DATE_DESC = "-startDate";
	const TOTAL_RANK_DESC = "-totalRank";
	const UPDATED_AT_DESC = "-updatedAt";
	const VIEWS_DESC = "-views";
	const WEIGHT_DESC = "-weight";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanExternalMediaSourceType
{
	const INTERCALL = "InterCall";
	const YOUTUBE = "YouTube";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanExternalMediaEntry extends BorhanMediaEntry
{
	/**
	 * The source type of the external media
	 * 	 
	 *
	 * @var BorhanExternalMediaSourceType
	 * @insertonly
	 */
	public $externalSourceType = null;

	/**
	 * Comma separated asset params ids that exists for this external media entry
	 * 	 
	 *
	 * @var string
	 * @readonly
	 */
	public $assetParamsIds = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanExternalMediaEntryListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanExternalMediaEntry
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
abstract class BorhanExternalMediaEntryBaseFilter extends BorhanMediaEntryFilter
{
	/**
	 * 
	 *
	 * @var BorhanExternalMediaSourceType
	 */
	public $externalSourceTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $externalSourceTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetParamsIdsMatchOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetParamsIdsMatchAnd = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanExternalMediaEntryFilter extends BorhanExternalMediaEntryBaseFilter
{

}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanExternalMediaService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add external media entry
	 * 
	 * @param BorhanExternalMediaEntry $entry 
	 * @return BorhanExternalMediaEntry
	 */
	function add(BorhanExternalMediaEntry $entry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->queueServiceActionCall("externalmedia_externalmedia", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanExternalMediaEntry");
		return $resultObject;
	}

	/**
	 * Get external media entry by ID.
	 * 
	 * @param string $id External media entry id
	 * @return BorhanExternalMediaEntry
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("externalmedia_externalmedia", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanExternalMediaEntry");
		return $resultObject;
	}

	/**
	 * Update external media entry. Only the properties that were set will be updated.
	 * 
	 * @param string $id External media entry id to update
	 * @param BorhanExternalMediaEntry $entry External media entry object to update
	 * @return BorhanExternalMediaEntry
	 */
	function update($id, BorhanExternalMediaEntry $entry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->queueServiceActionCall("externalmedia_externalmedia", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanExternalMediaEntry");
		return $resultObject;
	}

	/**
	 * Delete a external media entry.
	 * 
	 * @param string $id External media entry id to delete
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("externalmedia_externalmedia", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List media entries by filter with paging support.
	 * 
	 * @param BorhanExternalMediaEntryFilter $filter External media entry filter
	 * @param BorhanFilterPager $pager Pager
	 * @return BorhanExternalMediaEntryListResponse
	 */
	function listAction(BorhanExternalMediaEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("externalmedia_externalmedia", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanExternalMediaEntryListResponse");
		return $resultObject;
	}

	/**
	 * Count media entries by filter.
	 * 
	 * @param BorhanExternalMediaEntryFilter $filter External media entry filter
	 * @return int
	 */
	function count(BorhanExternalMediaEntryFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("externalmedia_externalmedia", "count", $kparams);
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
class BorhanExternalMediaClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanExternalMediaService
	 */
	public $externalMedia = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->externalMedia = new BorhanExternalMediaService($client);
	}

	/**
	 * @return BorhanExternalMediaClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanExternalMediaClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'externalMedia' => $this->externalMedia,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'externalMedia';
	}
}

