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
class BorhanDocumentType
{
	const DOCUMENT = 11;
	const SWF = 12;
	const PDF = 13;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDocumentEntryOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const END_DATE_ASC = "+endDate";
	const MODERATION_COUNT_ASC = "+moderationCount";
	const NAME_ASC = "+name";
	const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
	const RANK_ASC = "+rank";
	const RECENT_ASC = "+recent";
	const START_DATE_ASC = "+startDate";
	const TOTAL_RANK_ASC = "+totalRank";
	const UPDATED_AT_ASC = "+updatedAt";
	const WEIGHT_ASC = "+weight";
	const CREATED_AT_DESC = "-createdAt";
	const END_DATE_DESC = "-endDate";
	const MODERATION_COUNT_DESC = "-moderationCount";
	const NAME_DESC = "-name";
	const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
	const RANK_DESC = "-rank";
	const RECENT_DESC = "-recent";
	const START_DATE_DESC = "-startDate";
	const TOTAL_RANK_DESC = "-totalRank";
	const UPDATED_AT_DESC = "-updatedAt";
	const WEIGHT_DESC = "-weight";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDocumentFlavorParamsOrderBy
{
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDocumentFlavorParamsOutputOrderBy
{
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanImageFlavorParamsOrderBy
{
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanImageFlavorParamsOutputOrderBy
{
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanPdfFlavorParamsOrderBy
{
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanPdfFlavorParamsOutputOrderBy
{
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSwfFlavorParamsOrderBy
{
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSwfFlavorParamsOutputOrderBy
{
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDocumentEntry extends BorhanBaseEntry
{
	/**
	 * The type of the document
	 * 	 
	 *
	 * @var BorhanDocumentType
	 * @insertonly
	 */
	public $documentType = null;

	/**
	 * Comma separated asset params ids that exists for this media entry
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
class BorhanDocumentListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanDocumentEntry
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
class BorhanDocumentFlavorParams extends BorhanFlavorParams
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanImageFlavorParams extends BorhanFlavorParams
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $densityWidth = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $densityHeight = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sizeWidth = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sizeHeight = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $depth = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanPdfFlavorParams extends BorhanFlavorParams
{
	/**
	 * 
	 *
	 * @var bool
	 */
	public $readonly = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSwfFlavorParams extends BorhanFlavorParams
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $flashVersion = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $poly2Bitmap = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanDocumentEntryBaseFilter extends BorhanBaseEntryFilter
{
	/**
	 * 
	 *
	 * @var BorhanDocumentType
	 */
	public $documentTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $documentTypeIn = null;

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
class BorhanDocumentFlavorParamsOutput extends BorhanFlavorParamsOutput
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanImageFlavorParamsOutput extends BorhanFlavorParamsOutput
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $densityWidth = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $densityHeight = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sizeWidth = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sizeHeight = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $depth = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanPdfFlavorParamsOutput extends BorhanFlavorParamsOutput
{
	/**
	 * 
	 *
	 * @var bool
	 */
	public $readonly = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSwfFlavorParamsOutput extends BorhanFlavorParamsOutput
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $flashVersion = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $poly2Bitmap = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDocumentEntryFilter extends BorhanDocumentEntryBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanDocumentFlavorParamsBaseFilter extends BorhanFlavorParamsFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanImageFlavorParamsBaseFilter extends BorhanFlavorParamsFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanPdfFlavorParamsBaseFilter extends BorhanFlavorParamsFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanSwfFlavorParamsBaseFilter extends BorhanFlavorParamsFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDocumentFlavorParamsFilter extends BorhanDocumentFlavorParamsBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanImageFlavorParamsFilter extends BorhanImageFlavorParamsBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanPdfFlavorParamsFilter extends BorhanPdfFlavorParamsBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSwfFlavorParamsFilter extends BorhanSwfFlavorParamsBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanDocumentFlavorParamsOutputBaseFilter extends BorhanFlavorParamsOutputFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanImageFlavorParamsOutputBaseFilter extends BorhanFlavorParamsOutputFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanPdfFlavorParamsOutputBaseFilter extends BorhanFlavorParamsOutputFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanSwfFlavorParamsOutputBaseFilter extends BorhanFlavorParamsOutputFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDocumentFlavorParamsOutputFilter extends BorhanDocumentFlavorParamsOutputBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanImageFlavorParamsOutputFilter extends BorhanImageFlavorParamsOutputBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanPdfFlavorParamsOutputFilter extends BorhanPdfFlavorParamsOutputBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSwfFlavorParamsOutputFilter extends BorhanSwfFlavorParamsOutputBaseFilter
{

}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDocumentsService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new document entry after the specific document file was uploaded and the upload token id exists
	 * 
	 * @param BorhanDocumentEntry $documentEntry Document entry metadata
	 * @param string $uploadTokenId Upload token id
	 * @return BorhanDocumentEntry
	 */
	function addFromUploadedFile(BorhanDocumentEntry $documentEntry, $uploadTokenId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("document_documents", "addFromUploadedFile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}

	/**
	 * Copy entry into new entry
	 * 
	 * @param string $sourceEntryId Document entry id to copy from
	 * @param BorhanDocumentEntry $documentEntry Document entry metadata
	 * @param int $sourceFlavorParamsId The flavor to be used as the new entry source, source flavor will be used if not specified
	 * @return BorhanDocumentEntry
	 */
	function addFromEntry($sourceEntryId, BorhanDocumentEntry $documentEntry = null, $sourceFlavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "sourceEntryId", $sourceEntryId);
		if ($documentEntry !== null)
			$this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
		$this->client->addParam($kparams, "sourceFlavorParamsId", $sourceFlavorParamsId);
		$this->client->queueServiceActionCall("document_documents", "addFromEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}

	/**
	 * Copy flavor asset into new entry
	 * 
	 * @param string $sourceFlavorAssetId Flavor asset id to be used as the new entry source
	 * @param BorhanDocumentEntry $documentEntry Document entry metadata
	 * @return BorhanDocumentEntry
	 */
	function addFromFlavorAsset($sourceFlavorAssetId, BorhanDocumentEntry $documentEntry = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "sourceFlavorAssetId", $sourceFlavorAssetId);
		if ($documentEntry !== null)
			$this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
		$this->client->queueServiceActionCall("document_documents", "addFromFlavorAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}

	/**
	 * Convert entry
	 * 
	 * @param string $entryId Document entry id
	 * @param int $conversionProfileId 
	 * @param array $dynamicConversionAttributes 
	 * @return int
	 */
	function convert($entryId, $conversionProfileId = null, array $dynamicConversionAttributes = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		if ($dynamicConversionAttributes !== null)
			foreach($dynamicConversionAttributes as $index => $obj)
			{
				$this->client->addParam($kparams, "dynamicConversionAttributes:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("document_documents", "convert", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * Get document entry by ID.
	 * 
	 * @param string $entryId Document entry id
	 * @param int $version Desired version of the data
	 * @return BorhanDocumentEntry
	 */
	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("document_documents", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}

	/**
	 * Update document entry. Only the properties that were set will be updated.
	 * 
	 * @param string $entryId Document entry id to update
	 * @param BorhanDocumentEntry $documentEntry Document entry metadata to update
	 * @return BorhanDocumentEntry
	 */
	function update($entryId, BorhanDocumentEntry $documentEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
		$this->client->queueServiceActionCall("document_documents", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}

	/**
	 * Delete a document entry.
	 * 
	 * @param string $entryId Document entry id to delete
	 * @return 
	 */
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("document_documents", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List document entries by filter with paging support.
	 * 
	 * @param BorhanDocumentEntryFilter $filter Document entry filter
	 * @param BorhanFilterPager $pager Pager
	 * @return BorhanDocumentListResponse
	 */
	function listAction(BorhanDocumentEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("document_documents", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentListResponse");
		return $resultObject;
	}

	/**
	 * Upload a document file to Borhan, then the file can be used to create a document entry.
	 * 
	 * @param file $fileData The file data
	 * @return string
	 */
	function upload($fileData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("document_documents", "upload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * This will queue a batch job for converting the document file to swf
	 Returns the URL where the new swf will be available
	 * 
	 * @param string $entryId 
	 * @return string
	 */
	function convertPptToSwf($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("document_documents", "convertPptToSwf", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Serves the file content
	 * 
	 * @param string $entryId Document entry id
	 * @param string $flavorAssetId Flavor asset id
	 * @param bool $forceProxy Force to get the content without redirect
	 * @return file
	 */
	function serve($entryId, $flavorAssetId = null, $forceProxy = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "flavorAssetId", $flavorAssetId);
		$this->client->addParam($kparams, "forceProxy", $forceProxy);
		$this->client->queueServiceActionCall("document_documents", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Serves the file content
	 * 
	 * @param string $entryId Document entry id
	 * @param string $flavorParamsId Flavor params id
	 * @param bool $forceProxy Force to get the content without redirect
	 * @return file
	 */
	function serveByFlavorParamsId($entryId, $flavorParamsId = null, $forceProxy = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->addParam($kparams, "forceProxy", $forceProxy);
		$this->client->queueServiceActionCall("document_documents", "serveByFlavorParamsId", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Replace content associated with the given document entry.
	 * 
	 * @param string $entryId Document entry id to update
	 * @param BorhanResource $resource Resource to be used to replace entry doc content
	 * @param int $conversionProfileId The conversion profile id to be used on the entry
	 * @return BorhanDocumentEntry
	 */
	function updateContent($entryId, BorhanResource $resource, $conversionProfileId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("document_documents", "updateContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}

	/**
	 * Approves document replacement
	 * 
	 * @param string $entryId Document entry id to replace
	 * @return BorhanDocumentEntry
	 */
	function approveReplace($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("document_documents", "approveReplace", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}

	/**
	 * Cancels document replacement
	 * 
	 * @param string $entryId Document entry id to cancel
	 * @return BorhanDocumentEntry
	 */
	function cancelReplace($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("document_documents", "cancelReplace", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDocumentClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanDocumentsService
	 */
	public $documents = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->documents = new BorhanDocumentsService($client);
	}

	/**
	 * @return BorhanDocumentClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanDocumentClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'documents' => $this->documents,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'document';
	}
}

