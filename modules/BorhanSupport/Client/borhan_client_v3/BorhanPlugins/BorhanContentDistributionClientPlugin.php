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
class BorhanDistributionAction
{
	const SUBMIT = 1;
	const UPDATE = 2;
	const DELETE = 3;
	const FETCH_REPORT = 4;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionErrorType
{
	const MISSING_FLAVOR = 1;
	const MISSING_THUMBNAIL = 2;
	const MISSING_METADATA = 3;
	const INVALID_DATA = 4;
	const MISSING_ASSET = 5;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionFieldRequiredStatus
{
	const NOT_REQUIRED = 0;
	const REQUIRED_BY_PROVIDER = 1;
	const REQUIRED_BY_PARTNER = 2;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionProfileActionStatus
{
	const DISABLED = 1;
	const AUTOMATIC = 2;
	const MANUAL = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionProfileStatus
{
	const DISABLED = 1;
	const ENABLED = 2;
	const DELETED = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionProtocol
{
	const FTP = 1;
	const SCP = 2;
	const SFTP = 3;
	const HTTP = 4;
	const HTTPS = 5;
	const ASPERA = 10;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionValidationErrorType
{
	const CUSTOM_ERROR = 0;
	const STRING_EMPTY = 1;
	const STRING_TOO_LONG = 2;
	const STRING_TOO_SHORT = 3;
	const INVALID_FORMAT = 4;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEntryDistributionFlag
{
	const NONE = 0;
	const SUBMIT_REQUIRED = 1;
	const DELETE_REQUIRED = 2;
	const UPDATE_REQUIRED = 3;
	const ENABLE_REQUIRED = 4;
	const DISABLE_REQUIRED = 5;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEntryDistributionStatus
{
	const PENDING = 0;
	const QUEUED = 1;
	const READY = 2;
	const DELETED = 3;
	const SUBMITTING = 4;
	const UPDATING = 5;
	const DELETING = 6;
	const ERROR_SUBMITTING = 7;
	const ERROR_UPDATING = 8;
	const ERROR_DELETING = 9;
	const REMOVED = 10;
	const IMPORT_SUBMITTING = 11;
	const IMPORT_UPDATING = 12;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEntryDistributionSunStatus
{
	const BEFORE_SUNRISE = 1;
	const AFTER_SUNRISE = 2;
	const AFTER_SUNSET = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionProviderParser
{
	const XSL = 1;
	const XPATH = 2;
	const REGEX = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionProviderStatus
{
	const ACTIVE = 2;
	const DELETED = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanConfigurableDistributionProfileOrderBy
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
class BorhanDistributionProfileOrderBy
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
class BorhanDistributionProviderOrderBy
{
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionProviderType
{
	const IDETIC = "ideticDistribution.IDETIC";
	const YOUTUBE_API = "youtubeApiDistribution.YOUTUBE_API";
	const GENERIC = "1";
	const SYNDICATION = "2";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEntryDistributionOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const SUBMITTED_AT_ASC = "+submittedAt";
	const SUNRISE_ASC = "+sunrise";
	const SUNSET_ASC = "+sunset";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const SUBMITTED_AT_DESC = "-submittedAt";
	const SUNRISE_DESC = "-sunrise";
	const SUNSET_DESC = "-sunset";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionProfileOrderBy
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
class BorhanGenericDistributionProviderActionOrderBy
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
class BorhanGenericDistributionProviderOrderBy
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
class BorhanSyndicationDistributionProfileOrderBy
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
class BorhanSyndicationDistributionProviderOrderBy
{
}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanAssetDistributionCondition extends BorhanObjectBase
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanAssetDistributionRule extends BorhanObjectBase
{
	/**
	 * The validation error description that will be set on the "data" property on BorhanDistributionValidationErrorMissingAsset if rule was not fulfilled
	 * 	 
	 *
	 * @var string
	 */
	public $validationError = null;

	/**
	 * An array of asset distribution conditions
	 * 	 
	 *
	 * @var array of BorhanAssetDistributionCondition
	 */
	public $assetDistributionConditions;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionFieldConfig extends BorhanObjectBase
{
	/**
	 * A value taken from a connector field enum which associates the current configuration to that connector field
	 *      Field enum class should be returned by the provider's getFieldEnumClass function.
	 *      
	 *
	 * @var string
	 */
	public $fieldName = null;

	/**
	 * A string that will be shown to the user as the field name in error messages related to the current field
	 *      
	 *
	 * @var string
	 */
	public $userFriendlyFieldName = null;

	/**
	 * An XSLT string that extracts the right value from the Borhan entry MRSS XML.
	 *      The value of the current connector field will be the one that is returned from transforming the Borhan entry MRSS XML using this XSLT string.
	 *      
	 *
	 * @var string
	 */
	public $entryMrssXslt = null;

	/**
	 * Is the field required to have a value for submission ?
	 *      
	 *
	 * @var BorhanDistributionFieldRequiredStatus
	 */
	public $isRequired = null;

	/**
	 * Trigger distribution update when this field changes or not ?
	 *      
	 *
	 * @var bool
	 */
	public $updateOnChange = null;

	/**
	 * Entry column or metadata xpath that should trigger an update
	 *      
	 *
	 * @var array of BorhanString
	 */
	public $updateParams;

	/**
	 * Is this field config is the default for the distribution provider?
	 *      
	 *
	 * @var bool
	 * @readonly
	 */
	public $isDefault = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanDistributionJobProviderData extends BorhanObjectBase
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionThumbDimensions extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $height = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanDistributionProfile extends BorhanObjectBase
{
	/**
	 * Auto generated unique id
	 * 	 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Profile creation date as Unix timestamp (In seconds)
	 * 	 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Profile last update date as Unix timestamp (In seconds)
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
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionProviderType
	 * @insertonly
	 */
	public $providerType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionProfileStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionProfileActionStatus
	 */
	public $submitEnabled = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionProfileActionStatus
	 */
	public $updateEnabled = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionProfileActionStatus
	 */
	public $deleteEnabled = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionProfileActionStatus
	 */
	public $reportEnabled = null;

	/**
	 * Comma separated flavor params ids that should be auto converted
	 * 	 
	 *
	 * @var string
	 */
	public $autoCreateFlavors = null;

	/**
	 * Comma separated thumbnail params ids that should be auto generated
	 * 	 
	 *
	 * @var string
	 */
	public $autoCreateThumb = null;

	/**
	 * Comma separated flavor params ids that should be submitted if ready
	 * 	 
	 *
	 * @var string
	 */
	public $optionalFlavorParamsIds = null;

	/**
	 * Comma separated flavor params ids that required to be ready before submission
	 * 	 
	 *
	 * @var string
	 */
	public $requiredFlavorParamsIds = null;

	/**
	 * Thumbnail dimensions that should be submitted if ready
	 * 	 
	 *
	 * @var array of BorhanDistributionThumbDimensions
	 */
	public $optionalThumbDimensions;

	/**
	 * Thumbnail dimensions that required to be readt before submission
	 * 	 
	 *
	 * @var array of BorhanDistributionThumbDimensions
	 */
	public $requiredThumbDimensions;

	/**
	 * Asset Distribution Rules for assets that should be submitted if ready
	 * 	 
	 *
	 * @var array of BorhanAssetDistributionRule
	 */
	public $optionalAssetDistributionRules;

	/**
	 * Assets Asset Distribution Rules for assets that are required to be ready before submission
	 * 	 
	 *
	 * @var array of BorhanAssetDistributionRule
	 */
	public $requiredAssetDistributionRules;

	/**
	 * If entry distribution sunrise not specified that will be the default since entry creation time, in seconds
	 * 	 
	 *
	 * @var int
	 */
	public $sunriseDefaultOffset = null;

	/**
	 * If entry distribution sunset not specified that will be the default since entry creation time, in seconds
	 * 	 
	 *
	 * @var int
	 */
	public $sunsetDefaultOffset = null;

	/**
	 * The best external storage to be used to download the asset files from
	 * 	 
	 *
	 * @var int
	 */
	public $recommendedStorageProfileForDownload = null;

	/**
	 * The best Borhan data center to be used to download the asset files to
	 * 	 
	 *
	 * @var int
	 */
	public $recommendedDcForDownload = null;

	/**
	 * The best Borhan data center to be used to execute the distribution job
	 * 	 
	 *
	 * @var int
	 */
	public $recommendedDcForExecute = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionProfileListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanDistributionProfile
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
abstract class BorhanDistributionProvider extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var BorhanDistributionProviderType
	 * @readonly
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $scheduleUpdateEnabled = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $availabilityUpdateEnabled = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $deleteInsteadUpdate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $intervalBeforeSunrise = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $intervalBeforeSunset = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateRequiredEntryFields = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateRequiredMetadataXPaths = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionProviderListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanDistributionProvider
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
class BorhanDistributionRemoteMediaFile extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $remoteId = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanDistributionValidationError extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var BorhanDistributionAction
	 */
	public $action = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionErrorType
	 */
	public $errorType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEntryDistribution extends BorhanObjectBase
{
	/**
	 * Auto generated unique id
	 * 	 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Entry distribution creation date as Unix timestamp (In seconds)
	 * 	 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Entry distribution last update date as Unix timestamp (In seconds)
	 * 	 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Entry distribution submission date as Unix timestamp (In seconds)
	 * 	 
	 *
	 * @var int
	 * @readonly
	 */
	public $submittedAt = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $entryId = null;

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
	public $distributionProfileId = null;

	/**
	 * 
	 *
	 * @var BorhanEntryDistributionStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var BorhanEntryDistributionSunStatus
	 * @readonly
	 */
	public $sunStatus = null;

	/**
	 * 
	 *
	 * @var BorhanEntryDistributionFlag
	 * @readonly
	 */
	public $dirtyStatus = null;

	/**
	 * Comma separated thumbnail asset ids
	 * 	 
	 *
	 * @var string
	 */
	public $thumbAssetIds = null;

	/**
	 * Comma separated flavor asset ids
	 * 	 
	 *
	 * @var string
	 */
	public $flavorAssetIds = null;

	/**
	 * Comma separated asset ids
	 * 	 
	 *
	 * @var string
	 */
	public $assetIds = null;

	/**
	 * Entry distribution publish time as Unix timestamp (In seconds)
	 * 	 
	 *
	 * @var int
	 */
	public $sunrise = null;

	/**
	 * Entry distribution un-publish time as Unix timestamp (In seconds)
	 * 	 
	 *
	 * @var int
	 */
	public $sunset = null;

	/**
	 * The id as returned from the distributed destination
	 * 	 
	 *
	 * @var string
	 * @readonly
	 */
	public $remoteId = null;

	/**
	 * The plays as retrieved from the remote destination reports
	 * 	 
	 *
	 * @var int
	 * @readonly
	 */
	public $plays = null;

	/**
	 * The views as retrieved from the remote destination reports
	 * 	 
	 *
	 * @var int
	 * @readonly
	 */
	public $views = null;

	/**
	 * 
	 *
	 * @var array of BorhanDistributionValidationError
	 */
	public $validationErrors;

	/**
	 * 
	 *
	 * @var BorhanBatchJobErrorTypes
	 * @readonly
	 */
	public $errorType = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $errorNumber = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $errorDescription = null;

	/**
	 * 
	 *
	 * @var BorhanNullableBoolean
	 * @readonly
	 */
	public $hasSubmitResultsLog = null;

	/**
	 * 
	 *
	 * @var BorhanNullableBoolean
	 * @readonly
	 */
	public $hasSubmitSentDataLog = null;

	/**
	 * 
	 *
	 * @var BorhanNullableBoolean
	 * @readonly
	 */
	public $hasUpdateResultsLog = null;

	/**
	 * 
	 *
	 * @var BorhanNullableBoolean
	 * @readonly
	 */
	public $hasUpdateSentDataLog = null;

	/**
	 * 
	 *
	 * @var BorhanNullableBoolean
	 * @readonly
	 */
	public $hasDeleteResultsLog = null;

	/**
	 * 
	 *
	 * @var BorhanNullableBoolean
	 * @readonly
	 */
	public $hasDeleteSentDataLog = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEntryDistributionListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanEntryDistribution
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
class BorhanGenericDistributionProfileAction extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var BorhanDistributionProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverPath = null;

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
	 * @var bool
	 */
	public $ftpPassiveMode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $httpFieldName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $httpFileName = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionProviderAction extends BorhanObjectBase
{
	/**
	 * Auto generated
	 * 	 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Generic distribution provider action creation date as Unix timestamp (In seconds)
	 * 	 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Generic distribution provider action last update date as Unix timestamp (In seconds)
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
	 * @insertonly
	 */
	public $genericDistributionProviderId = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionAction
	 * @insertonly
	 */
	public $action = null;

	/**
	 * 
	 *
	 * @var BorhanGenericDistributionProviderStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var BorhanGenericDistributionProviderParser
	 */
	public $resultsParser = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverAddress = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $remotePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $remoteUsername = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $remotePassword = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $editableFields = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $mandatoryFields = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $mrssTransformer = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $mrssValidator = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $resultsTransformer = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionProviderActionListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanGenericDistributionProviderAction
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
class BorhanGenericDistributionProvider extends BorhanDistributionProvider
{
	/**
	 * Auto generated
	 * 	 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Generic distribution provider creation date as Unix timestamp (In seconds)
	 * 	 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Generic distribution provider last update date as Unix timestamp (In seconds)
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
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isDefault = null;

	/**
	 * 
	 *
	 * @var BorhanGenericDistributionProviderStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $optionalFlavorParamsIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $requiredFlavorParamsIds = null;

	/**
	 * 
	 *
	 * @var array of BorhanDistributionThumbDimensions
	 */
	public $optionalThumbDimensions;

	/**
	 * 
	 *
	 * @var array of BorhanDistributionThumbDimensions
	 */
	public $requiredThumbDimensions;

	/**
	 * 
	 *
	 * @var string
	 */
	public $editableFields = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $mandatoryFields = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionProviderListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanGenericDistributionProvider
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
class BorhanAssetDistributionPropertyCondition extends BorhanAssetDistributionCondition
{
	/**
	 * The property name to look for, this will match to a getter on the asset object.
	 * 	 Should be camelCase naming convention (defining "myPropertyName" will look for getMyPropertyName())
	 * 	 
	 *
	 * @var string
	 */
	public $propertyName = null;

	/**
	 * The value to compare
	 * 	 
	 *
	 * @var string
	 */
	public $propertyValue = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanConfigurableDistributionJobProviderData extends BorhanDistributionJobProviderData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $fieldValues = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanConfigurableDistributionProfile extends BorhanDistributionProfile
{
	/**
	 * 
	 *
	 * @var array of BorhanDistributionFieldConfig
	 */
	public $fieldConfigArray;

	/**
	 * 
	 *
	 * @var array of BorhanExtendingItemMrssParameter
	 */
	public $itemXpathsToExtend;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanContentDistributionSearchItem extends BorhanSearchItem
{
	/**
	 * 
	 *
	 * @var bool
	 */
	public $noDistributionProfiles = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $distributionProfileId = null;

	/**
	 * 
	 *
	 * @var BorhanEntryDistributionSunStatus
	 */
	public $distributionSunStatus = null;

	/**
	 * 
	 *
	 * @var BorhanEntryDistributionFlag
	 */
	public $entryDistributionFlag = null;

	/**
	 * 
	 *
	 * @var BorhanEntryDistributionStatus
	 */
	public $entryDistributionStatus = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $hasEntryDistributionValidationErrors = null;

	/**
	 * Comma seperated validation error types
	 * 	 
	 *
	 * @var string
	 */
	public $entryDistributionValidationErrors = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $distributionProfileId = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionProfile
	 */
	public $distributionProfile;

	/**
	 * 
	 *
	 * @var int
	 */
	public $entryDistributionId = null;

	/**
	 * 
	 *
	 * @var BorhanEntryDistribution
	 */
	public $entryDistribution;

	/**
	 * Id of the media in the remote system
	 * 	 
	 *
	 * @var string
	 */
	public $remoteId = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionProviderType
	 */
	public $providerType = null;

	/**
	 * Additional data that relevant for the provider only
	 * 	 
	 *
	 * @var BorhanDistributionJobProviderData
	 */
	public $providerData;

	/**
	 * The results as returned from the remote destination
	 * 	 
	 *
	 * @var string
	 */
	public $results = null;

	/**
	 * The data as sent to the remote destination
	 * 	 
	 *
	 * @var string
	 */
	public $sentData = null;

	/**
	 * Stores array of media files that submitted to the destination site
	 * 	 Could be used later for media update 
	 * 	 
	 *
	 * @var array of BorhanDistributionRemoteMediaFile
	 */
	public $mediaFiles;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanDistributionProfileBaseFilter extends BorhanFilter
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
	 * @var BorhanDistributionProfileStatus
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
abstract class BorhanDistributionProviderBaseFilter extends BorhanFilter
{
	/**
	 * 
	 *
	 * @var BorhanDistributionProviderType
	 */
	public $typeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $typeIn = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionValidationErrorInvalidData extends BorhanDistributionValidationError
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $fieldName = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionValidationErrorType
	 */
	public $validationErrorType = null;

	/**
	 * Parameter of the validation error
	 * 	 For example, minimum value for BorhanDistributionValidationErrorType::STRING_TOO_SHORT validation error
	 * 	 
	 *
	 * @var string
	 */
	public $validationErrorParam = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionValidationErrorMissingAsset extends BorhanDistributionValidationError
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $data = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionValidationErrorMissingFlavor extends BorhanDistributionValidationError
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorParamsId = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionValidationErrorMissingMetadata extends BorhanDistributionValidationError
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $fieldName = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionValidationErrorMissingThumbnail extends BorhanDistributionValidationError
{
	/**
	 * 
	 *
	 * @var BorhanDistributionThumbDimensions
	 */
	public $dimensions;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanEntryDistributionBaseFilter extends BorhanFilter
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
	public $submittedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $submittedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $distributionProfileIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $distributionProfileIdIn = null;

	/**
	 * 
	 *
	 * @var BorhanEntryDistributionStatus
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
	 * @var BorhanEntryDistributionFlag
	 */
	public $dirtyStatusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dirtyStatusIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sunriseGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sunriseLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sunsetGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sunsetLessThanOrEqual = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionJobProviderData extends BorhanDistributionJobProviderData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $xml = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resultParseData = null;

	/**
	 * 
	 *
	 * @var BorhanGenericDistributionProviderParser
	 */
	public $resultParserType = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionProfile extends BorhanDistributionProfile
{
	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $genericProviderId = null;

	/**
	 * 
	 *
	 * @var BorhanGenericDistributionProfileAction
	 */
	public $submitAction;

	/**
	 * 
	 *
	 * @var BorhanGenericDistributionProfileAction
	 */
	public $updateAction;

	/**
	 * 
	 *
	 * @var BorhanGenericDistributionProfileAction
	 */
	public $deleteAction;

	/**
	 * 
	 *
	 * @var BorhanGenericDistributionProfileAction
	 */
	public $fetchReportAction;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateRequiredEntryFields = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateRequiredMetadataXPaths = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanGenericDistributionProviderActionBaseFilter extends BorhanFilter
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
	public $genericDistributionProviderIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $genericDistributionProviderIdIn = null;

	/**
	 * 
	 *
	 * @var BorhanDistributionAction
	 */
	public $actionEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $actionIn = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSyndicationDistributionProfile extends BorhanDistributionProfile
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $xsl = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $feedId = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSyndicationDistributionProvider extends BorhanDistributionProvider
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionDeleteJobData extends BorhanDistributionJobData
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionFetchReportJobData extends BorhanDistributionJobData
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $plays = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $views = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionProfileFilter extends BorhanDistributionProfileBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionProviderFilter extends BorhanDistributionProviderBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionSubmitJobData extends BorhanDistributionJobData
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionUpdateJobData extends BorhanDistributionJobData
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionValidationErrorInvalidMetadata extends BorhanDistributionValidationErrorInvalidData
{
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
class BorhanEntryDistributionFilter extends BorhanEntryDistributionBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionProviderActionFilter extends BorhanGenericDistributionProviderActionBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanConfigurableDistributionProfileBaseFilter extends BorhanDistributionProfileFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionDisableJobData extends BorhanDistributionUpdateJobData
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionEnableJobData extends BorhanDistributionUpdateJobData
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanGenericDistributionProfileBaseFilter extends BorhanDistributionProfileFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanGenericDistributionProviderBaseFilter extends BorhanDistributionProviderFilter
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
	 * @var BorhanNullableBoolean
	 */
	public $isDefaultEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $isDefaultIn = null;

	/**
	 * 
	 *
	 * @var BorhanGenericDistributionProviderStatus
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
abstract class BorhanSyndicationDistributionProfileBaseFilter extends BorhanDistributionProfileFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanSyndicationDistributionProviderBaseFilter extends BorhanDistributionProviderFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanConfigurableDistributionProfileFilter extends BorhanConfigurableDistributionProfileBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionProfileFilter extends BorhanGenericDistributionProfileBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionProviderFilter extends BorhanGenericDistributionProviderBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSyndicationDistributionProfileFilter extends BorhanSyndicationDistributionProfileBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSyndicationDistributionProviderFilter extends BorhanSyndicationDistributionProviderBaseFilter
{

}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionProfileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Distribution Profile
	 * 
	 * @param BorhanDistributionProfile $distributionProfile 
	 * @return BorhanDistributionProfile
	 */
	function add(BorhanDistributionProfile $distributionProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "distributionProfile", $distributionProfile->toParams());
		$this->client->queueServiceActionCall("contentdistribution_distributionprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDistributionProfile");
		return $resultObject;
	}

	/**
	 * Get Distribution Profile by id
	 * 
	 * @param int $id 
	 * @return BorhanDistributionProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_distributionprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDistributionProfile");
		return $resultObject;
	}

	/**
	 * Update Distribution Profile by id
	 * 
	 * @param int $id 
	 * @param BorhanDistributionProfile $distributionProfile 
	 * @return BorhanDistributionProfile
	 */
	function update($id, BorhanDistributionProfile $distributionProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "distributionProfile", $distributionProfile->toParams());
		$this->client->queueServiceActionCall("contentdistribution_distributionprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDistributionProfile");
		return $resultObject;
	}

	/**
	 * Update Distribution Profile status by id
	 * 
	 * @param int $id 
	 * @param int $status 
	 * @return BorhanDistributionProfile
	 */
	function updateStatus($id, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("contentdistribution_distributionprofile", "updateStatus", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDistributionProfile");
		return $resultObject;
	}

	/**
	 * Delete Distribution Profile by id
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_distributionprofile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List all distribution providers
	 * 
	 * @param BorhanDistributionProfileFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanDistributionProfileListResponse
	 */
	function listAction(BorhanDistributionProfileFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("contentdistribution_distributionprofile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDistributionProfileListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param BorhanPartnerFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanDistributionProfileListResponse
	 */
	function listByPartner(BorhanPartnerFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("contentdistribution_distributionprofile", "listByPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDistributionProfileListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEntryDistributionService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Entry Distribution
	 * 
	 * @param BorhanEntryDistribution $entryDistribution 
	 * @return BorhanEntryDistribution
	 */
	function add(BorhanEntryDistribution $entryDistribution)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryDistribution", $entryDistribution->toParams());
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEntryDistribution");
		return $resultObject;
	}

	/**
	 * Get Entry Distribution by id
	 * 
	 * @param int $id 
	 * @return BorhanEntryDistribution
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEntryDistribution");
		return $resultObject;
	}

	/**
	 * Validates Entry Distribution by id for submission
	 * 
	 * @param int $id 
	 * @return BorhanEntryDistribution
	 */
	function validate($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "validate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEntryDistribution");
		return $resultObject;
	}

	/**
	 * Update Entry Distribution by id
	 * 
	 * @param int $id 
	 * @param BorhanEntryDistribution $entryDistribution 
	 * @return BorhanEntryDistribution
	 */
	function update($id, BorhanEntryDistribution $entryDistribution)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "entryDistribution", $entryDistribution->toParams());
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEntryDistribution");
		return $resultObject;
	}

	/**
	 * Delete Entry Distribution by id
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List all distribution providers
	 * 
	 * @param BorhanEntryDistributionFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanEntryDistributionListResponse
	 */
	function listAction(BorhanEntryDistributionFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEntryDistributionListResponse");
		return $resultObject;
	}

	/**
	 * Submits Entry Distribution to the remote destination
	 * 
	 * @param int $id 
	 * @param bool $submitWhenReady 
	 * @return BorhanEntryDistribution
	 */
	function submitAdd($id, $submitWhenReady = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "submitWhenReady", $submitWhenReady);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "submitAdd", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEntryDistribution");
		return $resultObject;
	}

	/**
	 * Submits Entry Distribution changes to the remote destination
	 * 
	 * @param int $id 
	 * @return BorhanEntryDistribution
	 */
	function submitUpdate($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "submitUpdate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEntryDistribution");
		return $resultObject;
	}

	/**
	 * Submits Entry Distribution report request
	 * 
	 * @param int $id 
	 * @return BorhanEntryDistribution
	 */
	function submitFetchReport($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "submitFetchReport", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEntryDistribution");
		return $resultObject;
	}

	/**
	 * Deletes Entry Distribution from the remote destination
	 * 
	 * @param int $id 
	 * @return BorhanEntryDistribution
	 */
	function submitDelete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "submitDelete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEntryDistribution");
		return $resultObject;
	}

	/**
	 * Retries last submit action
	 * 
	 * @param int $id 
	 * @return BorhanEntryDistribution
	 */
	function retrySubmit($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "retrySubmit", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEntryDistribution");
		return $resultObject;
	}

	/**
	 * Serves entry distribution sent data
	 * 
	 * @param int $id 
	 * @param int $actionType 
	 * @return file
	 */
	function serveSentData($id, $actionType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "actionType", $actionType);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "serveSentData", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Serves entry distribution returned data
	 * 
	 * @param int $id 
	 * @param int $actionType 
	 * @return file
	 */
	function serveReturnedData($id, $actionType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "actionType", $actionType);
		$this->client->queueServiceActionCall("contentdistribution_entrydistribution", "serveReturnedData", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDistributionProviderService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * List all distribution providers
	 * 
	 * @param BorhanDistributionProviderFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanDistributionProviderListResponse
	 */
	function listAction(BorhanDistributionProviderFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("contentdistribution_distributionprovider", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDistributionProviderListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionProviderService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Generic Distribution Provider
	 * 
	 * @param BorhanGenericDistributionProvider $genericDistributionProvider 
	 * @return BorhanGenericDistributionProvider
	 */
	function add(BorhanGenericDistributionProvider $genericDistributionProvider)
	{
		$kparams = array();
		$this->client->addParam($kparams, "genericDistributionProvider", $genericDistributionProvider->toParams());
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovider", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProvider");
		return $resultObject;
	}

	/**
	 * Get Generic Distribution Provider by id
	 * 
	 * @param int $id 
	 * @return BorhanGenericDistributionProvider
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovider", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProvider");
		return $resultObject;
	}

	/**
	 * Update Generic Distribution Provider by id
	 * 
	 * @param int $id 
	 * @param BorhanGenericDistributionProvider $genericDistributionProvider 
	 * @return BorhanGenericDistributionProvider
	 */
	function update($id, BorhanGenericDistributionProvider $genericDistributionProvider)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "genericDistributionProvider", $genericDistributionProvider->toParams());
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovider", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProvider");
		return $resultObject;
	}

	/**
	 * Delete Generic Distribution Provider by id
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovider", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List all distribution providers
	 * 
	 * @param BorhanGenericDistributionProviderFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanGenericDistributionProviderListResponse
	 */
	function listAction(BorhanGenericDistributionProviderFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovider", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanGenericDistributionProviderActionService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Generic Distribution Provider Action
	 * 
	 * @param BorhanGenericDistributionProviderAction $genericDistributionProviderAction 
	 * @return BorhanGenericDistributionProviderAction
	 */
	function add(BorhanGenericDistributionProviderAction $genericDistributionProviderAction)
	{
		$kparams = array();
		$this->client->addParam($kparams, "genericDistributionProviderAction", $genericDistributionProviderAction->toParams());
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Add MRSS transform file to generic distribution provider action
	 * 
	 * @param int $id The id of the generic distribution provider action
	 * @param string $xslData XSL MRSS transformation data
	 * @return BorhanGenericDistributionProviderAction
	 */
	function addMrssTransform($id, $xslData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "xslData", $xslData);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "addMrssTransform", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Add MRSS transform file to generic distribution provider action
	 * 
	 * @param int $id The id of the generic distribution provider action
	 * @param file $xslFile XSL MRSS transformation file
	 * @return BorhanGenericDistributionProviderAction
	 */
	function addMrssTransformFromFile($id, $xslFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$kfiles = array();
		$this->client->addParam($kfiles, "xslFile", $xslFile);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "addMrssTransformFromFile", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Add MRSS validate file to generic distribution provider action
	 * 
	 * @param int $id The id of the generic distribution provider action
	 * @param string $xsdData XSD MRSS validatation data
	 * @return BorhanGenericDistributionProviderAction
	 */
	function addMrssValidate($id, $xsdData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "xsdData", $xsdData);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "addMrssValidate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Add MRSS validate file to generic distribution provider action
	 * 
	 * @param int $id The id of the generic distribution provider action
	 * @param file $xsdFile XSD MRSS validatation file
	 * @return BorhanGenericDistributionProviderAction
	 */
	function addMrssValidateFromFile($id, $xsdFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$kfiles = array();
		$this->client->addParam($kfiles, "xsdFile", $xsdFile);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "addMrssValidateFromFile", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Add results transform file to generic distribution provider action
	 * 
	 * @param int $id The id of the generic distribution provider action
	 * @param string $transformData Transformation data xsl, xPath or regex
	 * @return BorhanGenericDistributionProviderAction
	 */
	function addResultsTransform($id, $transformData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "transformData", $transformData);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "addResultsTransform", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Add MRSS transform file to generic distribution provider action
	 * 
	 * @param int $id The id of the generic distribution provider action
	 * @param file $transformFile Transformation file xsl, xPath or regex
	 * @return BorhanGenericDistributionProviderAction
	 */
	function addResultsTransformFromFile($id, $transformFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$kfiles = array();
		$this->client->addParam($kfiles, "transformFile", $transformFile);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "addResultsTransformFromFile", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Get Generic Distribution Provider Action by id
	 * 
	 * @param int $id 
	 * @return BorhanGenericDistributionProviderAction
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Get Generic Distribution Provider Action by provider id
	 * 
	 * @param int $genericDistributionProviderId 
	 * @param int $actionType 
	 * @return BorhanGenericDistributionProviderAction
	 */
	function getByProviderId($genericDistributionProviderId, $actionType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "genericDistributionProviderId", $genericDistributionProviderId);
		$this->client->addParam($kparams, "actionType", $actionType);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "getByProviderId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Update Generic Distribution Provider Action by provider id
	 * 
	 * @param int $genericDistributionProviderId 
	 * @param int $actionType 
	 * @param BorhanGenericDistributionProviderAction $genericDistributionProviderAction 
	 * @return BorhanGenericDistributionProviderAction
	 */
	function updateByProviderId($genericDistributionProviderId, $actionType, BorhanGenericDistributionProviderAction $genericDistributionProviderAction)
	{
		$kparams = array();
		$this->client->addParam($kparams, "genericDistributionProviderId", $genericDistributionProviderId);
		$this->client->addParam($kparams, "actionType", $actionType);
		$this->client->addParam($kparams, "genericDistributionProviderAction", $genericDistributionProviderAction->toParams());
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "updateByProviderId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Update Generic Distribution Provider Action by id
	 * 
	 * @param int $id 
	 * @param BorhanGenericDistributionProviderAction $genericDistributionProviderAction 
	 * @return BorhanGenericDistributionProviderAction
	 */
	function update($id, BorhanGenericDistributionProviderAction $genericDistributionProviderAction)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "genericDistributionProviderAction", $genericDistributionProviderAction->toParams());
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Delete Generic Distribution Provider Action by id
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Delete Generic Distribution Provider Action by provider id
	 * 
	 * @param int $genericDistributionProviderId 
	 * @param int $actionType 
	 * @return 
	 */
	function deleteByProviderId($genericDistributionProviderId, $actionType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "genericDistributionProviderId", $genericDistributionProviderId);
		$this->client->addParam($kparams, "actionType", $actionType);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "deleteByProviderId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List all distribution providers
	 * 
	 * @param BorhanGenericDistributionProviderActionFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanGenericDistributionProviderActionListResponse
	 */
	function listAction(BorhanGenericDistributionProviderActionFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanGenericDistributionProviderActionListResponse");
		return $resultObject;
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanContentDistributionClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanDistributionProfileService
	 */
	public $distributionProfile = null;

	/**
	 * @var BorhanEntryDistributionService
	 */
	public $entryDistribution = null;

	/**
	 * @var BorhanDistributionProviderService
	 */
	public $distributionProvider = null;

	/**
	 * @var BorhanGenericDistributionProviderService
	 */
	public $genericDistributionProvider = null;

	/**
	 * @var BorhanGenericDistributionProviderActionService
	 */
	public $genericDistributionProviderAction = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->distributionProfile = new BorhanDistributionProfileService($client);
		$this->entryDistribution = new BorhanEntryDistributionService($client);
		$this->distributionProvider = new BorhanDistributionProviderService($client);
		$this->genericDistributionProvider = new BorhanGenericDistributionProviderService($client);
		$this->genericDistributionProviderAction = new BorhanGenericDistributionProviderActionService($client);
	}

	/**
	 * @return BorhanContentDistributionClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanContentDistributionClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'distributionProfile' => $this->distributionProfile,
			'entryDistribution' => $this->entryDistribution,
			'distributionProvider' => $this->distributionProvider,
			'genericDistributionProvider' => $this->genericDistributionProvider,
			'genericDistributionProviderAction' => $this->genericDistributionProviderAction,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'contentDistribution';
	}
}

