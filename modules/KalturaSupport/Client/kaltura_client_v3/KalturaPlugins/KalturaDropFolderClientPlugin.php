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
require_once(dirname(__FILE__) . "/BorhanMetadataClientPlugin.php");

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderContentFileHandlerMatchPolicy
{
	const ADD_AS_NEW = 1;
	const MATCH_EXISTING_OR_ADD_AS_NEW = 2;
	const MATCH_EXISTING_OR_KEEP_IN_FOLDER = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderFileDeletePolicy
{
	const MANUAL_DELETE = 1;
	const AUTO_DELETE = 2;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderFileStatus
{
	const UPLOADING = 1;
	const PENDING = 2;
	const WAITING = 3;
	const HANDLED = 4;
	const IGNORE = 5;
	const DELETED = 6;
	const PURGED = 7;
	const NO_MATCH = 8;
	const ERROR_HANDLING = 9;
	const ERROR_DELETING = 10;
	const DOWNLOADING = 11;
	const ERROR_DOWNLOADING = 12;
	const PROCESSING = 13;
	const PARSED = 14;
	const DETECTED = 15;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderStatus
{
	const DISABLED = 0;
	const ENABLED = 1;
	const DELETED = 2;
	const ERROR = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderErrorCode
{
	const ERROR_CONNECT = "1";
	const ERROR_AUTENTICATE = "2";
	const ERROR_GET_PHISICAL_FILE_LIST = "3";
	const ERROR_GET_DB_FILE_LIST = "4";
	const DROP_FOLDER_APP_ERROR = "5";
	const CONTENT_MATCH_POLICY_UNDEFINED = "6";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderFileErrorCode
{
	const ERROR_ADDING_BULK_UPLOAD = "dropFolderXmlBulkUpload.ERROR_ADDING_BULK_UPLOAD";
	const ERROR_ADD_CONTENT_RESOURCE = "dropFolderXmlBulkUpload.ERROR_ADD_CONTENT_RESOURCE";
	const ERROR_IN_BULK_UPLOAD = "dropFolderXmlBulkUpload.ERROR_IN_BULK_UPLOAD";
	const ERROR_WRITING_TEMP_FILE = "dropFolderXmlBulkUpload.ERROR_WRITING_TEMP_FILE";
	const LOCAL_FILE_WRONG_CHECKSUM = "dropFolderXmlBulkUpload.LOCAL_FILE_WRONG_CHECKSUM";
	const LOCAL_FILE_WRONG_SIZE = "dropFolderXmlBulkUpload.LOCAL_FILE_WRONG_SIZE";
	const MALFORMED_XML_FILE = "dropFolderXmlBulkUpload.MALFORMED_XML_FILE";
	const XML_FILE_SIZE_EXCEED_LIMIT = "dropFolderXmlBulkUpload.XML_FILE_SIZE_EXCEED_LIMIT";
	const ERROR_UPDATE_ENTRY = "1";
	const ERROR_ADD_ENTRY = "2";
	const FLAVOR_NOT_FOUND = "3";
	const FLAVOR_MISSING_IN_FILE_NAME = "4";
	const SLUG_REGEX_NO_MATCH = "5";
	const ERROR_READING_FILE = "6";
	const ERROR_DOWNLOADING_FILE = "7";
	const ERROR_UPDATE_FILE = "8";
	const ERROR_ADDING_CONTENT_PROCESSOR = "10";
	const ERROR_IN_CONTENT_PROCESSOR = "11";
	const ERROR_DELETING_FILE = "12";
	const FILE_NO_MATCH = "13";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderFileHandlerType
{
	const XML = "dropFolderXmlBulkUpload.XML";
	const CONTENT = "1";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderFileOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const FILE_NAME_ASC = "+fileName";
	const FILE_SIZE_ASC = "+fileSize";
	const FILE_SIZE_LAST_SET_AT_ASC = "+fileSizeLastSetAt";
	const ID_ASC = "+id";
	const PARSED_FLAVOR_ASC = "+parsedFlavor";
	const PARSED_SLUG_ASC = "+parsedSlug";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const FILE_NAME_DESC = "-fileName";
	const FILE_SIZE_DESC = "-fileSize";
	const FILE_SIZE_LAST_SET_AT_DESC = "-fileSizeLastSetAt";
	const ID_DESC = "-id";
	const PARSED_FLAVOR_DESC = "-parsedFlavor";
	const PARSED_SLUG_DESC = "-parsedSlug";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const NAME_ASC = "+name";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const NAME_DESC = "-name";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderType
{
	const LOCAL = "1";
	const FTP = "2";
	const SCP = "3";
	const SFTP = "4";
	const S3 = "6";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanFtpDropFolderOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const NAME_ASC = "+name";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const NAME_DESC = "-name";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanRemoteDropFolderOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const NAME_ASC = "+name";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const NAME_DESC = "-name";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanScpDropFolderOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const NAME_ASC = "+name";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const NAME_DESC = "-name";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSftpDropFolderOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const NAME_ASC = "+name";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const NAME_DESC = "-name";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSshDropFolderOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const NAME_ASC = "+name";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const NAME_DESC = "-name";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanDropFolderFileHandlerConfig extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var BorhanDropFolderFileHandlerType
	 * @readonly
	 */
	public $handlerType = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolder extends BorhanObjectBase
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
	 * @var BorhanDropFolderType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dc = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $path = null;

	/**
	 * The ammount of time, in seconds, that should pass so that a file with no change in size we'll be treated as "finished uploading to folder"
	 * 	 
	 *
	 * @var int
	 */
	public $fileSizeCheckInterval = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileDeletePolicy
	 */
	public $fileDeletePolicy = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $autoFileDeleteDays = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileHandlerType
	 */
	public $fileHandlerType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatterns = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileHandlerConfig
	 */
	public $fileHandlerConfig;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderErrorCode
	 */
	public $errorCode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorDescription = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ignoreFileNamePatterns = null;

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
	public $lastAccessedAt = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $incremental = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastFileTimestamp = null;

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
	public $categoriesMetadataFieldName = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $enforceEntitlement = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderFile extends BorhanObjectBase
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
	 * @insertonly
	 */
	public $dropFolderId = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $fileName = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $fileSize = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $fileSizeLastSetAt = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderType
	 * @readonly
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlug = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavor = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedUserId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $leadDropFolderFileId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $deletedDropFolderFileId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileErrorCode
	 */
	public $errorCode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorDescription = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $lastModificationTime = null;

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
	public $uploadStartDetectedAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uploadEndDetectedAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $importStartedAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $importEndedAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $batchJobId = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderFileListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanDropFolderFile
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
class BorhanDropFolderListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanDropFolder
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
abstract class BorhanDropFolderBaseFilter extends BorhanFilter
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
	 * @var BorhanDropFolderType
	 */
	public $typeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderStatus
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
	 * @var int
	 */
	public $conversionProfileIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $conversionProfileIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dcEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dcIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pathEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pathLike = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileHandlerType
	 */
	public $fileHandlerTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileHandlerTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatternsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatternsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatternsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderErrorCode
	 */
	public $errorCodeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorCodeIn = null;

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


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderContentFileHandlerConfig extends BorhanDropFolderFileHandlerConfig
{
	/**
	 * 
	 *
	 * @var BorhanDropFolderContentFileHandlerMatchPolicy
	 */
	public $contentMatchPolicy = null;

	/**
	 * Regular expression that defines valid file names to be handled.
	 * 	 The following might be extracted from the file name and used if defined:
	 * 	 - (?P<referenceId>\w+) - will be used as the drop folder file's parsed slug.
	 * 	 - (?P<flavorName>\w+)  - will be used as the drop folder file's parsed flavor.
	 * 	 
	 *
	 * @var string
	 */
	public $slugRegex = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderContentProcessorJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $dropFolderId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dropFolderFileIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlug = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderContentFileHandlerMatchPolicy
	 */
	public $contentMatchPolicy = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedUserId = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanDropFolderFileBaseFilter extends BorhanFilter
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
	 * @var int
	 */
	public $dropFolderIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dropFolderIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNameIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNameLike = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileStatus
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

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlugEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlugIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlugLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavorEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavorIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavorLike = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $leadDropFolderFileIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $deletedDropFolderFileIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileErrorCode
	 */
	public $errorCodeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorCodeIn = null;

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


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanRemoteDropFolder extends BorhanDropFolder
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderFileFilter extends BorhanDropFolderFileBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderFilter extends BorhanDropFolderBaseFilter
{
	/**
	 * 
	 *
	 * @var BorhanNullableBoolean
	 */
	public $currentDc = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanFtpDropFolder extends BorhanRemoteDropFolder
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $host = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $port = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $password = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanSshDropFolder extends BorhanRemoteDropFolder
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $host = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $port = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $password = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privateKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $publicKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $passPhrase = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderFileResource extends BorhanDataCenterContentResource
{
	/**
	 * Id of the drop folder file object
	 * 	 
	 *
	 * @var int
	 */
	public $dropFolderFileId = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderImportJobData extends BorhanSshImportJobData
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $dropFolderFileId = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanRemoteDropFolderBaseFilter extends BorhanDropFolderFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanScpDropFolder extends BorhanSshDropFolder
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSftpDropFolder extends BorhanSshDropFolder
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanRemoteDropFolderFilter extends BorhanRemoteDropFolderBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanFtpDropFolderBaseFilter extends BorhanRemoteDropFolderFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanSshDropFolderBaseFilter extends BorhanRemoteDropFolderFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanFtpDropFolderFilter extends BorhanFtpDropFolderBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSshDropFolderFilter extends BorhanSshDropFolderBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanScpDropFolderBaseFilter extends BorhanSshDropFolderFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanSftpDropFolderBaseFilter extends BorhanSshDropFolderFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanScpDropFolderFilter extends BorhanScpDropFolderBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSftpDropFolderFilter extends BorhanSftpDropFolderBaseFilter
{

}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new BorhanDropFolder object
	 * 
	 * @param BorhanDropFolder $dropFolder 
	 * @return BorhanDropFolder
	 */
	function add(BorhanDropFolder $dropFolder)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolder", $dropFolder->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolder");
		return $resultObject;
	}

	/**
	 * Retrieve a BorhanDropFolder object by ID
	 * 
	 * @param int $dropFolderId 
	 * @return BorhanDropFolder
	 */
	function get($dropFolderId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolder");
		return $resultObject;
	}

	/**
	 * Update an existing BorhanDropFolder object
	 * 
	 * @param int $dropFolderId 
	 * @param BorhanDropFolder $dropFolder Id
	 * @return BorhanDropFolder
	 */
	function update($dropFolderId, BorhanDropFolder $dropFolder)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->addParam($kparams, "dropFolder", $dropFolder->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolder");
		return $resultObject;
	}

	/**
	 * Mark the BorhanDropFolder object as deleted
	 * 
	 * @param int $dropFolderId 
	 * @return BorhanDropFolder
	 */
	function delete($dropFolderId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolder");
		return $resultObject;
	}

	/**
	 * List BorhanDropFolder objects
	 * 
	 * @param BorhanDropFolderFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanDropFolderListResponse
	 */
	function listAction(BorhanDropFolderFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderFileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new BorhanDropFolderFile object
	 * 
	 * @param BorhanDropFolderFile $dropFolderFile 
	 * @return BorhanDropFolderFile
	 */
	function add(BorhanDropFolderFile $dropFolderFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFile", $dropFolderFile->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFile");
		return $resultObject;
	}

	/**
	 * Retrieve a BorhanDropFolderFile object by ID
	 * 
	 * @param int $dropFolderFileId 
	 * @return BorhanDropFolderFile
	 */
	function get($dropFolderFileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFile");
		return $resultObject;
	}

	/**
	 * Update an existing BorhanDropFolderFile object
	 * 
	 * @param int $dropFolderFileId 
	 * @param BorhanDropFolderFile $dropFolderFile Id
	 * @return BorhanDropFolderFile
	 */
	function update($dropFolderFileId, BorhanDropFolderFile $dropFolderFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->addParam($kparams, "dropFolderFile", $dropFolderFile->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFile");
		return $resultObject;
	}

	/**
	 * Update status of BorhanDropFolderFile
	 * 
	 * @param int $dropFolderFileId 
	 * @param int $status 
	 * @return BorhanDropFolderFile
	 */
	function updateStatus($dropFolderFileId, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "updateStatus", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFile");
		return $resultObject;
	}

	/**
	 * Mark the BorhanDropFolderFile object as deleted
	 * 
	 * @param int $dropFolderFileId 
	 * @return BorhanDropFolderFile
	 */
	function delete($dropFolderFileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFile");
		return $resultObject;
	}

	/**
	 * List BorhanDropFolderFile objects
	 * 
	 * @param BorhanDropFolderFileFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanDropFolderFileListResponse
	 */
	function listAction(BorhanDropFolderFileFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFileListResponse");
		return $resultObject;
	}

	/**
	 * Set the BorhanDropFolderFile status to ignore (BorhanDropFolderFileStatus::IGNORE)
	 * 
	 * @param int $dropFolderFileId 
	 * @return BorhanDropFolderFile
	 */
	function ignore($dropFolderFileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "ignore", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFile");
		return $resultObject;
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDropFolderClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanDropFolderService
	 */
	public $dropFolder = null;

	/**
	 * @var BorhanDropFolderFileService
	 */
	public $dropFolderFile = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->dropFolder = new BorhanDropFolderService($client);
		$this->dropFolderFile = new BorhanDropFolderFileService($client);
	}

	/**
	 * @return BorhanDropFolderClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanDropFolderClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'dropFolder' => $this->dropFolder,
			'dropFolderFile' => $this->dropFolderFile,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'dropFolder';
	}
}

