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
class BorhanAttachmentAssetStatus
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
class BorhanAttachmentAssetOrderBy
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
class BorhanAttachmentType
{
	const TEXT = "1";
	const MEDIA = "2";
	const DOCUMENT = "3";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanAttachmentAsset extends BorhanAsset
{
	/**
	 * The filename of the attachment asset content
	 * 	 
	 *
	 * @var string
	 */
	public $filename = null;

	/**
	 * Attachment asset title
	 * 	 
	 *
	 * @var string
	 */
	public $title = null;

	/**
	 * The attachment format
	 * 	 
	 *
	 * @var BorhanAttachmentType
	 */
	public $format = null;

	/**
	 * The status of the asset
	 * 	 
	 *
	 * @var BorhanAttachmentAssetStatus
	 * @readonly
	 */
	public $status = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanAttachmentAssetListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanAttachmentAsset
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
abstract class BorhanAttachmentAssetBaseFilter extends BorhanAssetFilter
{
	/**
	 * 
	 *
	 * @var BorhanAttachmentType
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
	 * @var BorhanAttachmentAssetStatus
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
class BorhanAttachmentAssetFilter extends BorhanAttachmentAssetBaseFilter
{

}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanAttachmentAssetService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add attachment asset
	 * 
	 * @param string $entryId 
	 * @param BorhanAttachmentAsset $attachmentAsset 
	 * @return BorhanAttachmentAsset
	 */
	function add($entryId, BorhanAttachmentAsset $attachmentAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "attachmentAsset", $attachmentAsset->toParams());
		$this->client->queueServiceActionCall("attachment_attachmentasset", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAttachmentAsset");
		return $resultObject;
	}

	/**
	 * Update content of attachment asset
	 * 
	 * @param string $id 
	 * @param BorhanContentResource $contentResource 
	 * @return BorhanAttachmentAsset
	 */
	function setContent($id, BorhanContentResource $contentResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("attachment_attachmentasset", "setContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAttachmentAsset");
		return $resultObject;
	}

	/**
	 * Update attachment asset
	 * 
	 * @param string $id 
	 * @param BorhanAttachmentAsset $attachmentAsset 
	 * @return BorhanAttachmentAsset
	 */
	function update($id, BorhanAttachmentAsset $attachmentAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "attachmentAsset", $attachmentAsset->toParams());
		$this->client->queueServiceActionCall("attachment_attachmentasset", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAttachmentAsset");
		return $resultObject;
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
		$this->client->queueServiceActionCall("attachment_attachmentasset", "getUrl", $kparams);
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
		$this->client->queueServiceActionCall("attachment_attachmentasset", "getRemotePaths", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanRemotePathListResponse");
		return $resultObject;
	}

	/**
	 * Serves attachment by its id
	 * 
	 * @param string $attachmentAssetId 
	 * @return file
	 */
	function serve($attachmentAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "attachmentAssetId", $attachmentAssetId);
		$this->client->queueServiceActionCall("attachment_attachmentasset", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * 
	 * 
	 * @param string $attachmentAssetId 
	 * @return BorhanAttachmentAsset
	 */
	function get($attachmentAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "attachmentAssetId", $attachmentAssetId);
		$this->client->queueServiceActionCall("attachment_attachmentasset", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAttachmentAsset");
		return $resultObject;
	}

	/**
	 * List attachment Assets by filter and pager
	 * 
	 * @param BorhanAssetFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanAttachmentAssetListResponse
	 */
	function listAction(BorhanAssetFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("attachment_attachmentasset", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAttachmentAssetListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $attachmentAssetId 
	 * @return 
	 */
	function delete($attachmentAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "attachmentAssetId", $attachmentAssetId);
		$this->client->queueServiceActionCall("attachment_attachmentasset", "delete", $kparams);
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
class BorhanAttachmentClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanAttachmentAssetService
	 */
	public $attachmentAsset = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->attachmentAsset = new BorhanAttachmentAssetService($client);
	}

	/**
	 * @return BorhanAttachmentClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanAttachmentClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'attachmentAsset' => $this->attachmentAsset,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'attachment';
	}
}

