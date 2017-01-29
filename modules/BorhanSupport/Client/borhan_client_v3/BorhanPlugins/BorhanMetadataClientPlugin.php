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
class BorhanMetadataProfileCreateMode
{
	const API = 1;
	const BMC = 2;
	const APP = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataProfileStatus
{
	const ACTIVE = 1;
	const DEPRECATED = 2;
	const TRANSFORMING = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataStatus
{
	const VALID = 1;
	const INVALID = 2;
	const DELETED = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanFileAssetOrderBy
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
class BorhanMetadataObjectType
{
	const AD_CUE_POINT = "adCuePointMetadata.AdCuePoint";
	const ANNOTATION = "annotationMetadata.Annotation";
	const CODE_CUE_POINT = "codeCuePointMetadata.CodeCuePoint";
	const ENTRY = "1";
	const CATEGORY = "2";
	const USER = "3";
	const PARTNER = "4";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const METADATA_PROFILE_VERSION_ASC = "+metadataProfileVersion";
	const UPDATED_AT_ASC = "+updatedAt";
	const VERSION_ASC = "+version";
	const CREATED_AT_DESC = "-createdAt";
	const METADATA_PROFILE_VERSION_DESC = "-metadataProfileVersion";
	const UPDATED_AT_DESC = "-updatedAt";
	const VERSION_DESC = "-version";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataProfileOrderBy
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
class BorhanMetadata extends BorhanObjectBase
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
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $metadataProfileVersion = null;

	/**
	 * 
	 *
	 * @var BorhanMetadataObjectType
	 * @readonly
	 */
	public $metadataObjectType = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;

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
	 * @var BorhanMetadataStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $xml = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanMetadata
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
class BorhanMetadataProfile extends BorhanObjectBase
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
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var BorhanMetadataObjectType
	 */
	public $metadataObjectType = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;

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
	public $description = null;

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
	 * @var BorhanMetadataProfileStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $xsd = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $views = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $xslt = null;

	/**
	 * 
	 *
	 * @var BorhanMetadataProfileCreateMode
	 */
	public $createMode = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataProfileField extends BorhanObjectBase
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
	public $xPath = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $key = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $label = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataProfileFieldListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanMetadataProfileField
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
class BorhanMetadataProfileListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanMetadataProfile
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
abstract class BorhanFileAssetBaseFilter extends BorhanFilter
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
	 * @var BorhanFileAssetObjectType
	 */
	public $fileAssetObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdIn = null;

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
	 * @var BorhanFileAssetStatus
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
class BorhanImportMetadataJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileLocalPath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataId = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanMetadataBaseFilter extends BorhanFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileVersionEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileVersionGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileVersionLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var BorhanMetadataObjectType
	 */
	public $metadataObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionLessThanOrEqual = null;

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
	 * @var BorhanMetadataStatus
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
abstract class BorhanMetadataProfileBaseFilter extends BorhanFilter
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
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var BorhanMetadataObjectType
	 */
	public $metadataObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataObjectTypeIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionEqual = null;

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
	 * @var BorhanMetadataProfileStatus
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
	 * @var BorhanMetadataProfileCreateMode
	 */
	public $createModeEqual = null;

	/**
	 * 
	 *
	 * @var BorhanMetadataProfileCreateMode
	 */
	public $createModeNotEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $createModeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $createModeNotIn = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanTransformMetadataJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcXslPath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $srcVersion = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $destVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destXsdPath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCompareMetadataCondition extends BorhanCompareCondition
{
	/**
	 * May contain the full xpath to the field in three formats
	 * 	 1. Slashed xPath, e.g. /metadata/myElementName
	 * 	 2. Using local-name function, e.g. /[local-name()='metadata']/[local-name()='myElementName']
	 * 	 3. Using only the field name, e.g. myElementName, it will be searched as //myElementName
	 * 	 
	 *
	 * @var string
	 */
	public $xPath = null;

	/**
	 * Metadata profile id
	 * 	 
	 *
	 * @var int
	 */
	public $profileId = null;

	/**
	 * Metadata profile system name
	 * 	 
	 *
	 * @var string
	 */
	public $profileSystemName = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanFileAssetFilter extends BorhanFileAssetBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMatchMetadataCondition extends BorhanMatchCondition
{
	/**
	 * May contain the full xpath to the field in three formats
	 * 	 1. Slashed xPath, e.g. /metadata/myElementName
	 * 	 2. Using local-name function, e.g. /[local-name()='metadata']/[local-name()='myElementName']
	 * 	 3. Using only the field name, e.g. myElementName, it will be searched as //myElementName
	 * 	 
	 *
	 * @var string
	 */
	public $xPath = null;

	/**
	 * Metadata profile id
	 * 	 
	 *
	 * @var int
	 */
	public $profileId = null;

	/**
	 * Metadata profile system name
	 * 	 
	 *
	 * @var string
	 */
	public $profileSystemName = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataFieldChangedCondition extends BorhanMatchCondition
{
	/**
	 * May contain the full xpath to the field in three formats
	 * 	 1. Slashed xPath, e.g. /metadata/myElementName
	 * 	 2. Using local-name function, e.g. /[local-name()='metadata']/[local-name()='myElementName']
	 * 	 3. Using only the field name, e.g. myElementName, it will be searched as //myElementName
	 * 	 
	 *
	 * @var string
	 */
	public $xPath = null;

	/**
	 * Metadata profile id
	 * 	 
	 *
	 * @var int
	 */
	public $profileId = null;

	/**
	 * Metadata profile system name
	 * 	 
	 *
	 * @var string
	 */
	public $profileSystemName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $versionA = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $versionB = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataFilter extends BorhanMetadataBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataProfileFilter extends BorhanMetadataProfileBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataSearchItem extends BorhanSearchOperator
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $orderBy = null;


}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a metadata object and metadata content associated with Borhan object
	 * 
	 * @param int $metadataProfileId 
	 * @param string $objectType 
	 * @param string $objectId 
	 * @param string $xmlData XML metadata
	 * @return BorhanMetadata
	 */
	function add($metadataProfileId, $objectType, $objectId, $xmlData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "metadataProfileId", $metadataProfileId);
		$this->client->addParam($kparams, "objectType", $objectType);
		$this->client->addParam($kparams, "objectId", $objectId);
		$this->client->addParam($kparams, "xmlData", $xmlData);
		$this->client->queueServiceActionCall("metadata_metadata", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadata");
		return $resultObject;
	}

	/**
	 * Allows you to add a metadata object and metadata file associated with Borhan object
	 * 
	 * @param int $metadataProfileId 
	 * @param string $objectType 
	 * @param string $objectId 
	 * @param file $xmlFile XML metadata
	 * @return BorhanMetadata
	 */
	function addFromFile($metadataProfileId, $objectType, $objectId, $xmlFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "metadataProfileId", $metadataProfileId);
		$this->client->addParam($kparams, "objectType", $objectType);
		$this->client->addParam($kparams, "objectId", $objectId);
		$kfiles = array();
		$this->client->addParam($kfiles, "xmlFile", $xmlFile);
		$this->client->queueServiceActionCall("metadata_metadata", "addFromFile", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadata");
		return $resultObject;
	}

	/**
	 * Allows you to add a metadata xml data from remote URL
	 * 
	 * @param int $metadataProfileId 
	 * @param string $objectType 
	 * @param string $objectId 
	 * @param string $url XML metadata remote url
	 * @return BorhanMetadata
	 */
	function addFromUrl($metadataProfileId, $objectType, $objectId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "metadataProfileId", $metadataProfileId);
		$this->client->addParam($kparams, "objectType", $objectType);
		$this->client->addParam($kparams, "objectId", $objectId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("metadata_metadata", "addFromUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadata");
		return $resultObject;
	}

	/**
	 * Allows you to add a metadata xml data from remote URL.
	 Enables different permissions than addFromUrl action.
	 * 
	 * @param int $metadataProfileId 
	 * @param string $objectType 
	 * @param string $objectId 
	 * @param string $url XML metadata remote url
	 * @return BorhanMetadata
	 */
	function addFromBulk($metadataProfileId, $objectType, $objectId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "metadataProfileId", $metadataProfileId);
		$this->client->addParam($kparams, "objectType", $objectType);
		$this->client->addParam($kparams, "objectId", $objectId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("metadata_metadata", "addFromBulk", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadata");
		return $resultObject;
	}

	/**
	 * Retrieve a metadata object by id
	 * 
	 * @param int $id 
	 * @return BorhanMetadata
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("metadata_metadata", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadata");
		return $resultObject;
	}

	/**
	 * Update an existing metadata object with new XML content
	 * 
	 * @param int $id 
	 * @param string $xmlData XML metadata
	 * @param int $version Enable update only if the metadata object version did not change by other process
	 * @return BorhanMetadata
	 */
	function update($id, $xmlData = null, $version = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "xmlData", $xmlData);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("metadata_metadata", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadata");
		return $resultObject;
	}

	/**
	 * Update an existing metadata object with new XML file
	 * 
	 * @param int $id 
	 * @param file $xmlFile XML metadata
	 * @return BorhanMetadata
	 */
	function updateFromFile($id, $xmlFile = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$kfiles = array();
		$this->client->addParam($kfiles, "xmlFile", $xmlFile);
		$this->client->queueServiceActionCall("metadata_metadata", "updateFromFile", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadata");
		return $resultObject;
	}

	/**
	 * List metadata objects by filter and pager
	 * 
	 * @param BorhanMetadataFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanMetadataListResponse
	 */
	function listAction(BorhanMetadataFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("metadata_metadata", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadataListResponse");
		return $resultObject;
	}

	/**
	 * Delete an existing metadata
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("metadata_metadata", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Mark existing metadata as invalid
	 Used by batch metadata transform
	 * 
	 * @param int $id 
	 * @param int $version Enable update only if the metadata object version did not change by other process
	 * @return 
	 */
	function invalidate($id, $version = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("metadata_metadata", "invalidate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Serves metadata XML file
	 * 
	 * @param int $id 
	 * @return file
	 */
	function serve($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("metadata_metadata", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Action transforms current metadata object XML using a provided XSL.
	 * 
	 * @param int $id 
	 * @param file $xslFile 
	 * @return BorhanMetadata
	 */
	function updateFromXSL($id, $xslFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$kfiles = array();
		$this->client->addParam($kfiles, "xslFile", $xslFile);
		$this->client->queueServiceActionCall("metadata_metadata", "updateFromXSL", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadata");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataProfileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a metadata profile object and metadata profile content associated with Borhan object type
	 * 
	 * @param BorhanMetadataProfile $metadataProfile 
	 * @param string $xsdData XSD metadata definition
	 * @param string $viewsData UI views definition
	 * @return BorhanMetadataProfile
	 */
	function add(BorhanMetadataProfile $metadataProfile, $xsdData, $viewsData = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "metadataProfile", $metadataProfile->toParams());
		$this->client->addParam($kparams, "xsdData", $xsdData);
		$this->client->addParam($kparams, "viewsData", $viewsData);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadataProfile");
		return $resultObject;
	}

	/**
	 * Allows you to add a metadata profile object and metadata profile file associated with Borhan object type
	 * 
	 * @param BorhanMetadataProfile $metadataProfile 
	 * @param file $xsdFile XSD metadata definition
	 * @param file $viewsFile UI views definition
	 * @return BorhanMetadataProfile
	 */
	function addFromFile(BorhanMetadataProfile $metadataProfile, $xsdFile, $viewsFile = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "metadataProfile", $metadataProfile->toParams());
		$kfiles = array();
		$this->client->addParam($kfiles, "xsdFile", $xsdFile);
		$this->client->addParam($kfiles, "viewsFile", $viewsFile);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "addFromFile", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadataProfile");
		return $resultObject;
	}

	/**
	 * Retrieve a metadata profile object by id
	 * 
	 * @param int $id 
	 * @return BorhanMetadataProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadataProfile");
		return $resultObject;
	}

	/**
	 * Update an existing metadata object
	 * 
	 * @param int $id 
	 * @param BorhanMetadataProfile $metadataProfile 
	 * @param string $xsdData XSD metadata definition
	 * @param string $viewsData UI views definition
	 * @return BorhanMetadataProfile
	 */
	function update($id, BorhanMetadataProfile $metadataProfile, $xsdData = null, $viewsData = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "metadataProfile", $metadataProfile->toParams());
		$this->client->addParam($kparams, "xsdData", $xsdData);
		$this->client->addParam($kparams, "viewsData", $viewsData);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadataProfile");
		return $resultObject;
	}

	/**
	 * List metadata profile objects by filter and pager
	 * 
	 * @param BorhanMetadataProfileFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanMetadataProfileListResponse
	 */
	function listAction(BorhanMetadataProfileFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("metadata_metadataprofile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadataProfileListResponse");
		return $resultObject;
	}

	/**
	 * List metadata profile fields by metadata profile id
	 * 
	 * @param int $metadataProfileId 
	 * @return BorhanMetadataProfileFieldListResponse
	 */
	function listFields($metadataProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "metadataProfileId", $metadataProfileId);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "listFields", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadataProfileFieldListResponse");
		return $resultObject;
	}

	/**
	 * Delete an existing metadata profile
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Update an existing metadata object definition file
	 * 
	 * @param int $id 
	 * @param int $toVersion 
	 * @return BorhanMetadataProfile
	 */
	function revert($id, $toVersion)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "toVersion", $toVersion);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "revert", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadataProfile");
		return $resultObject;
	}

	/**
	 * Update an existing metadata object definition file
	 * 
	 * @param int $id 
	 * @param file $xsdFile XSD metadata definition
	 * @return BorhanMetadataProfile
	 */
	function updateDefinitionFromFile($id, $xsdFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$kfiles = array();
		$this->client->addParam($kfiles, "xsdFile", $xsdFile);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "updateDefinitionFromFile", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadataProfile");
		return $resultObject;
	}

	/**
	 * Update an existing metadata object views file
	 * 
	 * @param int $id 
	 * @param file $viewsFile UI views file
	 * @return BorhanMetadataProfile
	 */
	function updateViewsFromFile($id, $viewsFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$kfiles = array();
		$this->client->addParam($kfiles, "viewsFile", $viewsFile);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "updateViewsFromFile", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadataProfile");
		return $resultObject;
	}

	/**
	 * Update an existing metadata object xslt file
	 * 
	 * @param int $id 
	 * @param file $xsltFile XSLT file, will be executed on every metadata add/update
	 * @return BorhanMetadataProfile
	 */
	function updateTransformationFromFile($id, $xsltFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$kfiles = array();
		$this->client->addParam($kfiles, "xsltFile", $xsltFile);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "updateTransformationFromFile", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMetadataProfile");
		return $resultObject;
	}

	/**
	 * Serves metadata profile XSD file
	 * 
	 * @param int $id 
	 * @return file
	 */
	function serve($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Serves metadata profile view file
	 * 
	 * @param int $id 
	 * @return file
	 */
	function serveView($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "serveView", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMetadataClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanMetadataService
	 */
	public $metadata = null;

	/**
	 * @var BorhanMetadataProfileService
	 */
	public $metadataProfile = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->metadata = new BorhanMetadataService($client);
		$this->metadataProfile = new BorhanMetadataProfileService($client);
	}

	/**
	 * @return BorhanMetadataClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanMetadataClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'metadata' => $this->metadata,
			'metadataProfile' => $this->metadataProfile,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'metadata';
	}
}

