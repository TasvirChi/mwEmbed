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
class BorhanCaptionAssetStatus
{
	const ERROR = -1;
	const QUEUED = 0;
	const READY = 2;
	const DELETED = 3;
	const IMPORTING = 7;
	const EXPORTING = 9;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionAssetOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const DELETED_AT_ASC = "+deletedAt";
	const SIZE_ASC = "+size";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const DELETED_AT_DESC = "-deletedAt";
	const SIZE_DESC = "-size";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionParamsOrderBy
{
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionType
{
	const SRT = "1";
	const DFXP = "2";
	const WEBVTT = "3";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionAsset extends BorhanAsset
{
	/**
	 * The Caption Params used to create this Caption Asset
	 * 	 
	 *
	 * @var int
	 * @insertonly
	 */
	public $captionParamsId = null;

	/**
	 * The language of the caption asset content
	 * 	 
	 *
	 * @var BorhanLanguage
	 */
	public $language = null;

	/**
	 * The language of the caption asset content
	 * 	 
	 *
	 * @var BorhanLanguageCode
	 * @readonly
	 */
	public $languageCode = null;

	/**
	 * Is default caption asset of the entry
	 * 	 
	 *
	 * @var BorhanNullableBoolean
	 */
	public $isDefault = null;

	/**
	 * Friendly label
	 * 	 
	 *
	 * @var string
	 */
	public $label = null;

	/**
	 * The caption format
	 * 	 
	 *
	 * @var BorhanCaptionType
	 * @insertonly
	 */
	public $format = null;

	/**
	 * The status of the asset
	 * 	 
	 *
	 * @var BorhanCaptionAssetStatus
	 * @readonly
	 */
	public $status = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionAssetListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanCaptionAsset
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
class BorhanCaptionParams extends BorhanAssetParams
{
	/**
	 * The language of the caption content
	 * 	 
	 *
	 * @var BorhanLanguage
	 * @insertonly
	 */
	public $language = null;

	/**
	 * Is default caption asset of the entry
	 * 	 
	 *
	 * @var BorhanNullableBoolean
	 */
	public $isDefault = null;

	/**
	 * Friendly label
	 * 	 
	 *
	 * @var string
	 */
	public $label = null;

	/**
	 * The caption format
	 * 	 
	 *
	 * @var BorhanCaptionType
	 * @insertonly
	 */
	public $format = null;

	/**
	 * Id of the caption params or the flavor params to be used as source for the caption creation
	 * 	 
	 *
	 * @var int
	 */
	public $sourceParamsId = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionParamsListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanCaptionParams
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
abstract class BorhanCaptionAssetBaseFilter extends BorhanAssetFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $captionParamsIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionParamsIdIn = null;

	/**
	 * 
	 *
	 * @var BorhanCaptionType
	 */
	public $formatEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $formatIn = null;

	/**
	 * 
	 *
	 * @var BorhanCaptionAssetStatus
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
	 * @var string
	 */
	public $statusNotIn = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanCaptionParamsBaseFilter extends BorhanAssetParamsFilter
{
	/**
	 * 
	 *
	 * @var BorhanCaptionType
	 */
	public $formatEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $formatIn = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionAssetFilter extends BorhanCaptionAssetBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionParamsFilter extends BorhanCaptionParamsBaseFilter
{

}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionAssetService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add caption asset
	 * 
	 * @param string $entryId 
	 * @param BorhanCaptionAsset $captionAsset 
	 * @return BorhanCaptionAsset
	 */
	function add($entryId, BorhanCaptionAsset $captionAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "captionAsset", $captionAsset->toParams());
		$this->client->queueServiceActionCall("caption_captionasset", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCaptionAsset");
		return $resultObject;
	}

	/**
	 * Update content of caption asset
	 * 
	 * @param string $id 
	 * @param BorhanContentResource $contentResource 
	 * @return BorhanCaptionAsset
	 */
	function setContent($id, BorhanContentResource $contentResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("caption_captionasset", "setContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCaptionAsset");
		return $resultObject;
	}

	/**
	 * Update caption asset
	 * 
	 * @param string $id 
	 * @param BorhanCaptionAsset $captionAsset 
	 * @return BorhanCaptionAsset
	 */
	function update($id, BorhanCaptionAsset $captionAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "captionAsset", $captionAsset->toParams());
		$this->client->queueServiceActionCall("caption_captionasset", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCaptionAsset");
		return $resultObject;
	}

	/**
	 * Serves caption by entry id and thumnail params id
	 * 
	 * @param string $entryId 
	 * @param int $captionParamId If not set, default caption will be used.
	 * @return file
	 */
	function serveByEntryId($entryId, $captionParamId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "captionParamId", $captionParamId);
		$this->client->queueServiceActionCall("caption_captionasset", "serveByEntryId", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Get download URL for the asset
	 * 
	 * @param string $id 
	 * @param int $storageId 
	 * @return string
	 */
	function getUrl($id, $storageId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "storageId", $storageId);
		$this->client->queueServiceActionCall("caption_captionasset", "getUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Get remote storage existing paths for the asset
	 * 
	 * @param string $id 
	 * @return BorhanRemotePathListResponse
	 */
	function getRemotePaths($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("caption_captionasset", "getRemotePaths", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanRemotePathListResponse");
		return $resultObject;
	}

	/**
	 * Serves caption by its id
	 * 
	 * @param string $captionAssetId 
	 * @return file
	 */
	function serve($captionAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall("caption_captionasset", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Serves caption by its id converting it to segmented WebVTT
	 * 
	 * @param string $captionAssetId 
	 * @param int $segmentDuration 
	 * @param int $segmentIndex 
	 * @param int $localTimestamp 
	 * @return file
	 */
	function serveWebVTT($captionAssetId, $segmentDuration = 30, $segmentIndex = null, $localTimestamp = 10000)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->addParam($kparams, "segmentDuration", $segmentDuration);
		$this->client->addParam($kparams, "segmentIndex", $segmentIndex);
		$this->client->addParam($kparams, "localTimestamp", $localTimestamp);
		$this->client->queueServiceActionCall("caption_captionasset", "serveWebVTT", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Markss the caption as default and removes that mark from all other caption assets of the entry.
	 * 
	 * @param string $captionAssetId 
	 * @return 
	 */
	function setAsDefault($captionAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall("caption_captionasset", "setAsDefault", $kparams);
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
	 * @param string $captionAssetId 
	 * @return BorhanCaptionAsset
	 */
	function get($captionAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall("caption_captionasset", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCaptionAsset");
		return $resultObject;
	}

	/**
	 * List caption Assets by filter and pager
	 * 
	 * @param BorhanAssetFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanCaptionAssetListResponse
	 */
	function listAction(BorhanAssetFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("caption_captionasset", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCaptionAssetListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $captionAssetId 
	 * @return 
	 */
	function delete($captionAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall("caption_captionasset", "delete", $kparams);
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
class BorhanCaptionParamsService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Caption Params
	 * 
	 * @param BorhanCaptionParams $captionParams 
	 * @return BorhanCaptionParams
	 */
	function add(BorhanCaptionParams $captionParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionParams", $captionParams->toParams());
		$this->client->queueServiceActionCall("caption_captionparams", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCaptionParams");
		return $resultObject;
	}

	/**
	 * Get Caption Params by ID
	 * 
	 * @param int $id 
	 * @return BorhanCaptionParams
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("caption_captionparams", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCaptionParams");
		return $resultObject;
	}

	/**
	 * Update Caption Params by ID
	 * 
	 * @param int $id 
	 * @param BorhanCaptionParams $captionParams 
	 * @return BorhanCaptionParams
	 */
	function update($id, BorhanCaptionParams $captionParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "captionParams", $captionParams->toParams());
		$this->client->queueServiceActionCall("caption_captionparams", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCaptionParams");
		return $resultObject;
	}

	/**
	 * Delete Caption Params by ID
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("caption_captionparams", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List Caption Params by filter with paging support (By default - all system default params will be listed too)
	 * 
	 * @param BorhanCaptionParamsFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanCaptionParamsListResponse
	 */
	function listAction(BorhanCaptionParamsFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("caption_captionparams", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCaptionParamsListResponse");
		return $resultObject;
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCaptionClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanCaptionAssetService
	 */
	public $captionAsset = null;

	/**
	 * @var BorhanCaptionParamsService
	 */
	public $captionParams = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->captionAsset = new BorhanCaptionAssetService($client);
		$this->captionParams = new BorhanCaptionParamsService($client);
	}

	/**
	 * @return BorhanCaptionClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanCaptionClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'captionAsset' => $this->captionAsset,
			'captionParams' => $this->captionParams,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'caption';
	}
}

