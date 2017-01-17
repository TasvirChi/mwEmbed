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
class BorhanEventNotificationTemplateStatus
{
	const DISABLED = 1;
	const ACTIVE = 2;
	const DELETED = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationEventObjectType
{
	const AD_CUE_POINT = "adCuePointEventNotifications.AdCuePoint";
	const ANNOTATION = "annotationEventNotifications.Annotation";
	const CAPTION_ASSET = "captionAssetEventNotifications.CaptionAsset";
	const CODE_CUE_POINT = "codeCuePointEventNotifications.CodeCuePoint";
	const DISTRIBUTION_PROFILE = "contentDistributionEventNotifications.DistributionProfile";
	const ENTRY_DISTRIBUTION = "contentDistributionEventNotifications.EntryDistribution";
	const CUE_POINT = "cuePointEventNotifications.CuePoint";
	const METADATA = "metadataEventNotifications.Metadata";
	const ENTRY = "1";
	const CATEGORY = "2";
	const ASSET = "3";
	const FLAVORASSET = "4";
	const THUMBASSET = "5";
	const KUSER = "8";
	const ACCESSCONTROL = "9";
	const BATCHJOB = "10";
	const BULKUPLOADRESULT = "11";
	const CATEGORYKUSER = "12";
	const CONVERSIONPROFILE2 = "14";
	const FLAVORPARAMS = "15";
	const FLAVORPARAMSCONVERSIONPROFILE = "16";
	const FLAVORPARAMSOUTPUT = "17";
	const GENERICSYNDICATIONFEED = "18";
	const KUSERTOUSERROLE = "19";
	const PARTNER = "20";
	const PERMISSION = "21";
	const PERMISSIONITEM = "22";
	const PERMISSIONTOPERMISSIONITEM = "23";
	const SCHEDULER = "24";
	const SCHEDULERCONFIG = "25";
	const SCHEDULERSTATUS = "26";
	const SCHEDULERWORKER = "27";
	const STORAGEPROFILE = "28";
	const SYNDICATIONFEED = "29";
	const THUMBPARAMS = "31";
	const THUMBPARAMSOUTPUT = "32";
	const UPLOADTOKEN = "33";
	const USERLOGINDATA = "34";
	const USERROLE = "35";
	const WIDGET = "36";
	const CATEGORYENTRY = "37";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationEventType
{
	const BATCH_JOB_STATUS = "1";
	const OBJECT_ADDED = "2";
	const OBJECT_CHANGED = "3";
	const OBJECT_COPIED = "4";
	const OBJECT_CREATED = "5";
	const OBJECT_DATA_CHANGED = "6";
	const OBJECT_DELETED = "7";
	const OBJECT_ERASED = "8";
	const OBJECT_READY_FOR_REPLACMENT = "9";
	const OBJECT_SAVED = "10";
	const OBJECT_UPDATED = "11";
	const OBJECT_REPLACED = "12";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationTemplateOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationTemplateType
{
	const EMAIL = "emailNotification.Email";
	const HTTP = "httpNotification.Http";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationParameter extends BorhanObjectBase
{
	/**
	 * The key in the subject and body to be replaced with the dynamic value
	 * 	 
	 *
	 * @var string
	 */
	public $key = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * The dynamic value to be placed in the final output
	 * 	 
	 *
	 * @var BorhanStringValue
	 */
	public $value;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationTemplate extends BorhanObjectBase
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
	 * @var BorhanEventNotificationTemplateType
	 * @insertonly
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var BorhanEventNotificationTemplateStatus
	 * @readonly
	 */
	public $status = null;

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
	 * Define that the template could be dispatched manually from the API
	 * 	 
	 *
	 * @var bool
	 */
	public $manualDispatchEnabled = null;

	/**
	 * Define that the template could be dispatched automatically by the system
	 * 	 
	 *
	 * @var bool
	 */
	public $automaticDispatchEnabled = null;

	/**
	 * Define the event that should trigger this notification
	 * 	 
	 *
	 * @var BorhanEventNotificationEventType
	 */
	public $eventType = null;

	/**
	 * Define the object that raied the event that should trigger this notification
	 * 	 
	 *
	 * @var BorhanEventNotificationEventObjectType
	 */
	public $eventObjectType = null;

	/**
	 * Define the conditions that cause this notification to be triggered
	 * 	 
	 *
	 * @var array of BorhanCondition
	 */
	public $eventConditions;

	/**
	 * Define the content dynamic parameters
	 * 	 
	 *
	 * @var array of BorhanEventNotificationParameter
	 */
	public $contentParameters;

	/**
	 * Define the content dynamic parameters
	 * 	 
	 *
	 * @var array of BorhanEventNotificationParameter
	 */
	public $userParameters;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationTemplateListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanEventNotificationTemplate
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
class BorhanEventFieldCondition extends BorhanCondition
{
	/**
	 * The field to be evaluated at runtime
	 * 	 
	 *
	 * @var BorhanBooleanField
	 */
	public $field;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationArrayParameter extends BorhanEventNotificationParameter
{
	/**
	 * 
	 *
	 * @var array of BorhanString
	 */
	public $values;

	/**
	 * Used to restrict the values to close list
	 * 	 
	 *
	 * @var array of BorhanStringValue
	 */
	public $allowedValues;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationDispatchJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $templateId = null;

	/**
	 * Define the content dynamic parameters
	 * 	 
	 *
	 * @var array of BorhanKeyValue
	 */
	public $contentParameters;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationScope extends BorhanScope
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var BorhanEventNotificationEventObjectType
	 */
	public $scopeObjectType = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanEventNotificationTemplateBaseFilter extends BorhanFilter
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
	 * @var BorhanEventNotificationTemplateType
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
	 * @var BorhanEventNotificationTemplateStatus
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
class BorhanEventObjectChangedCondition extends BorhanCondition
{
	/**
	 * Comma seperated column names to be tested
	 * 	 
	 *
	 * @var string
	 */
	public $modifiedColumns = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationTemplateFilter extends BorhanEventNotificationTemplateBaseFilter
{

}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationTemplateService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new event notification template object
	 * 
	 * @param BorhanEventNotificationTemplate $eventNotificationTemplate 
	 * @return BorhanEventNotificationTemplate
	 */
	function add(BorhanEventNotificationTemplate $eventNotificationTemplate)
	{
		$kparams = array();
		$this->client->addParam($kparams, "eventNotificationTemplate", $eventNotificationTemplate->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEventNotificationTemplate");
		return $resultObject;
	}

	/**
	 * Allows you to clone exiting event notification template object and create a new one with similar configuration
	 * 
	 * @param int $id Source template to clone
	 * @param BorhanEventNotificationTemplate $eventNotificationTemplate Overwrite configuration object
	 * @return BorhanEventNotificationTemplate
	 */
	function cloneAction($id, BorhanEventNotificationTemplate $eventNotificationTemplate = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		if ($eventNotificationTemplate !== null)
			$this->client->addParam($kparams, "eventNotificationTemplate", $eventNotificationTemplate->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEventNotificationTemplate");
		return $resultObject;
	}

	/**
	 * Retrieve an event notification template object by id
	 * 
	 * @param int $id 
	 * @return BorhanEventNotificationTemplate
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEventNotificationTemplate");
		return $resultObject;
	}

	/**
	 * Update an existing event notification template object
	 * 
	 * @param int $id 
	 * @param BorhanEventNotificationTemplate $eventNotificationTemplate 
	 * @return BorhanEventNotificationTemplate
	 */
	function update($id, BorhanEventNotificationTemplate $eventNotificationTemplate)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "eventNotificationTemplate", $eventNotificationTemplate->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEventNotificationTemplate");
		return $resultObject;
	}

	/**
	 * Update event notification template status by id
	 * 
	 * @param int $id 
	 * @param int $status 
	 * @return BorhanEventNotificationTemplate
	 */
	function updateStatus($id, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "updateStatus", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEventNotificationTemplate");
		return $resultObject;
	}

	/**
	 * Delete an event notification template object
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List event notification template objects
	 * 
	 * @param BorhanEventNotificationTemplateFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanEventNotificationTemplateListResponse
	 */
	function listAction(BorhanEventNotificationTemplateFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEventNotificationTemplateListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param BorhanPartnerFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanEventNotificationTemplateListResponse
	 */
	function listByPartner(BorhanPartnerFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "listByPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEventNotificationTemplateListResponse");
		return $resultObject;
	}

	/**
	 * Dispatch event notification object by id
	 * 
	 * @param int $id 
	 * @param BorhanEventNotificationScope $scope 
	 * @return int
	 */
	function dispatch($id, BorhanEventNotificationScope $scope)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "scope", $scope->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "dispatch", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * Action lists the template partner event notification templates.
	 * 
	 * @param BorhanEventNotificationTemplateFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanEventNotificationTemplateListResponse
	 */
	function listTemplates(BorhanEventNotificationTemplateFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "listTemplates", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEventNotificationTemplateListResponse");
		return $resultObject;
	}
}
/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEventNotificationClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanEventNotificationTemplateService
	 */
	public $eventNotificationTemplate = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->eventNotificationTemplate = new BorhanEventNotificationTemplateService($client);
	}

	/**
	 * @return BorhanEventNotificationClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanEventNotificationClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'eventNotificationTemplate' => $this->eventNotificationTemplate,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'eventNotification';
	}
}

