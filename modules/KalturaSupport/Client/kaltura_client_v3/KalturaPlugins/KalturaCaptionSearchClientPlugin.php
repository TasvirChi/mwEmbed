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
require_once(dirname(__FILE__) . "/BorhanCaptionClientPlugin.php");

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionAssetItem extends BorhanObjectBase
{
	/**
	 * The Caption Asset object
	 * 	 
	 *
	 * @var BorhanCaptionAsset
	 */
	public $asset;

	/**
	 * The entry object
	 * 	 
	 *
	 * @var BorhanBaseEntry
	 */
	public $entry;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startTime = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endTime = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $content = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionAssetItemListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanCaptionAssetItem
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
class BorhanCaptionAssetItemFilter extends BorhanCaptionAssetFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $contentLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerDescriptionLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerDescriptionMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerDescriptionMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var BorhanLanguage
	 */
	public $languageEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $languageIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $labelEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $labelIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endTimeLessThanOrEqual = null;


}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionAssetItemService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Search caption asset items by filter, pager and free text
	 * 
	 * @param BorhanBaseEntryFilter $entryFilter 
	 * @param BorhanCaptionAssetItemFilter $captionAssetItemFilter 
	 * @param BorhanFilterPager $captionAssetItemPager 
	 * @return BorhanCaptionAssetItemListResponse
	 */
	function search(BorhanBaseEntryFilter $entryFilter = null, BorhanCaptionAssetItemFilter $captionAssetItemFilter = null, BorhanFilterPager $captionAssetItemPager = null)
	{
		$kparams = array();
		if ($entryFilter !== null)
			$this->client->addParam($kparams, "entryFilter", $entryFilter->toParams());
		if ($captionAssetItemFilter !== null)
			$this->client->addParam($kparams, "captionAssetItemFilter", $captionAssetItemFilter->toParams());
		if ($captionAssetItemPager !== null)
			$this->client->addParam($kparams, "captionAssetItemPager", $captionAssetItemPager->toParams());
		$this->client->queueServiceActionCall("captionsearch_captionassetitem", "search", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCaptionAssetItemListResponse");
		return $resultObject;
	}

	/**
	 * Search caption asset items by filter, pager and free text
	 * 
	 * @param BorhanBaseEntryFilter $entryFilter 
	 * @param BorhanCaptionAssetItemFilter $captionAssetItemFilter 
	 * @param BorhanFilterPager $captionAssetItemPager 
	 * @return BorhanBaseEntryListResponse
	 */
	function searchEntries(BorhanBaseEntryFilter $entryFilter = null, BorhanCaptionAssetItemFilter $captionAssetItemFilter = null, BorhanFilterPager $captionAssetItemPager = null)
	{
		$kparams = array();
		if ($entryFilter !== null)
			$this->client->addParam($kparams, "entryFilter", $entryFilter->toParams());
		if ($captionAssetItemFilter !== null)
			$this->client->addParam($kparams, "captionAssetItemFilter", $captionAssetItemFilter->toParams());
		if ($captionAssetItemPager !== null)
			$this->client->addParam($kparams, "captionAssetItemPager", $captionAssetItemPager->toParams());
		$this->client->queueServiceActionCall("captionsearch_captionassetitem", "searchEntries", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntryListResponse");
		return $resultObject;
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionSearchClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanCaptionAssetItemService
	 */
	public $captionAssetItem = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->captionAssetItem = new BorhanCaptionAssetItemService($client);
	}

	/**
	 * @return BorhanCaptionSearchClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanCaptionSearchClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'captionAssetItem' => $this->captionAssetItem,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'captionSearch';
	}
}

