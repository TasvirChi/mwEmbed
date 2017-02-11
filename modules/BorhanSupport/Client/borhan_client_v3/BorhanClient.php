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
require_once(dirname(__FILE__) . "/BorhanClientBase.php");
require_once(dirname(__FILE__) . "/BorhanEnums.php");
require_once(dirname(__FILE__) . "/BorhanTypes.php");


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanAccessControlProfileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new access control profile
	 * 
	 * @param BorhanAccessControlProfile $accessControlProfile 
	 * @return BorhanAccessControlProfile
	 */
	function add(BorhanAccessControlProfile $accessControlProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "accessControlProfile", $accessControlProfile->toParams());
		$this->client->queueServiceActionCall("accesscontrolprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAccessControlProfile");
		return $resultObject;
	}

	/**
	 * Get access control profile by id
	 * 
	 * @param int $id 
	 * @return BorhanAccessControlProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("accesscontrolprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAccessControlProfile");
		return $resultObject;
	}

	/**
	 * Update access control profile by id
	 * 
	 * @param int $id 
	 * @param BorhanAccessControlProfile $accessControlProfile 
	 * @return BorhanAccessControlProfile
	 */
	function update($id, BorhanAccessControlProfile $accessControlProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "accessControlProfile", $accessControlProfile->toParams());
		$this->client->queueServiceActionCall("accesscontrolprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAccessControlProfile");
		return $resultObject;
	}

	/**
	 * Delete access control profile by id
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("accesscontrolprofile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List access control profiles by filter and pager
	 * 
	 * @param BorhanAccessControlProfileFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanAccessControlProfileListResponse
	 */
	function listAction(BorhanAccessControlProfileFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("accesscontrolprofile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAccessControlProfileListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanAccessControlService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Access Control Profile
	 * 
	 * @param BorhanAccessControl $accessControl 
	 * @return BorhanAccessControl
	 */
	function add(BorhanAccessControl $accessControl)
	{
		$kparams = array();
		$this->client->addParam($kparams, "accessControl", $accessControl->toParams());
		$this->client->queueServiceActionCall("accesscontrol", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAccessControl");
		return $resultObject;
	}

	/**
	 * Get Access Control Profile by id
	 * 
	 * @param int $id 
	 * @return BorhanAccessControl
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("accesscontrol", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAccessControl");
		return $resultObject;
	}

	/**
	 * Update Access Control Profile by id
	 * 
	 * @param int $id 
	 * @param BorhanAccessControl $accessControl 
	 * @return BorhanAccessControl
	 */
	function update($id, BorhanAccessControl $accessControl)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "accessControl", $accessControl->toParams());
		$this->client->queueServiceActionCall("accesscontrol", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAccessControl");
		return $resultObject;
	}

	/**
	 * Delete Access Control Profile by id
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("accesscontrol", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List Access Control Profiles by filter and pager
	 * 
	 * @param BorhanAccessControlFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanAccessControlListResponse
	 */
	function listAction(BorhanAccessControlFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("accesscontrol", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAccessControlListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanAdminUserService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Update admin user password and email
	 * 
	 * @param string $email 
	 * @param string $password 
	 * @param string $newEmail Optional, provide only when you want to update the email
	 * @param string $newPassword 
	 * @return BorhanAdminUser
	 */
	function updatePassword($email, $password, $newEmail = "", $newPassword = "")
	{
		$kparams = array();
		$this->client->addParam($kparams, "email", $email);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "newEmail", $newEmail);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("adminuser", "updatePassword", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAdminUser");
		return $resultObject;
	}

	/**
	 * Reset admin user password and send it to the users email address
	 * 
	 * @param string $email 
	 * @return 
	 */
	function resetPassword($email)
	{
		$kparams = array();
		$this->client->addParam($kparams, "email", $email);
		$this->client->queueServiceActionCall("adminuser", "resetPassword", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Get an admin session using admin email and password (Used for login to the BMC application)
	 * 
	 * @param string $email 
	 * @param string $password 
	 * @param int $partnerId 
	 * @return string
	 */
	function login($email, $password, $partnerId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "email", $email);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("adminuser", "login", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Set initial users password
	 * 
	 * @param string $hashKey 
	 * @param string $newPassword New password to set
	 * @return 
	 */
	function setInitialPassword($hashKey, $newPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hashKey", $hashKey);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("adminuser", "setInitialPassword", $kparams);
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
class BorhanBaseEntryService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Generic add entry, should be used when the uploaded entry type is not known.
	 * 
	 * @param BorhanBaseEntry $entry 
	 * @param string $type 
	 * @return BorhanBaseEntry
	 */
	function add(BorhanBaseEntry $entry, $type = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("baseentry", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Attach content resource to entry in status NO_MEDIA
	 * 
	 * @param string $entryId 
	 * @param BorhanResource $resource 
	 * @return BorhanBaseEntry
	 */
	function addContent($entryId, BorhanResource $resource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->queueServiceActionCall("baseentry", "addContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Generic add entry using an uploaded file, should be used when the uploaded entry type is not known.
	 * 
	 * @param BorhanBaseEntry $entry 
	 * @param string $uploadTokenId 
	 * @param string $type 
	 * @return BorhanBaseEntry
	 */
	function addFromUploadedFile(BorhanBaseEntry $entry, $uploadTokenId, $type = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("baseentry", "addFromUploadedFile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Get base entry by ID.
	 * 
	 * @param string $entryId Entry id
	 * @param int $version Desired version of the data
	 * @return BorhanBaseEntry
	 */
	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("baseentry", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Get remote storage existing paths for the asset.
	 * 
	 * @param string $entryId 
	 * @return BorhanRemotePathListResponse
	 */
	function getRemotePaths($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("baseentry", "getRemotePaths", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanRemotePathListResponse");
		return $resultObject;
	}

	/**
	 * Update base entry. Only the properties that were set will be updated.
	 * 
	 * @param string $entryId Entry id to update
	 * @param BorhanBaseEntry $baseEntry Base entry metadata to update
	 * @return BorhanBaseEntry
	 */
	function update($entryId, BorhanBaseEntry $baseEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "baseEntry", $baseEntry->toParams());
		$this->client->queueServiceActionCall("baseentry", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Update the content resource associated with the entry.
	 * 
	 * @param string $entryId Entry id to update
	 * @param BorhanResource $resource Resource to be used to replace entry content
	 * @param int $conversionProfileId The conversion profile id to be used on the entry
	 * @return BorhanBaseEntry
	 */
	function updateContent($entryId, BorhanResource $resource, $conversionProfileId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("baseentry", "updateContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Get an array of BorhanBaseEntry objects by a comma-separated list of ids.
	 * 
	 * @param string $entryIds Comma separated string of entry ids
	 * @return array
	 */
	function getByIds($entryIds)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryIds", $entryIds);
		$this->client->queueServiceActionCall("baseentry", "getByIds", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Delete an entry.
	 * 
	 * @param string $entryId Entry id to delete
	 * @return 
	 */
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("baseentry", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List base entries by filter with paging support.
	 * 
	 * @param BorhanBaseEntryFilter $filter Entry filter
	 * @param BorhanFilterPager $pager Pager
	 * @return BorhanBaseEntryListResponse
	 */
	function listAction(BorhanBaseEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("baseentry", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntryListResponse");
		return $resultObject;
	}

	/**
	 * List base entries by filter according to reference id
	 * 
	 * @param string $refId Entry Reference ID
	 * @param BorhanFilterPager $pager Pager
	 * @return BorhanBaseEntryListResponse
	 */
	function listByReferenceId($refId, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "refId", $refId);
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("baseentry", "listByReferenceId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntryListResponse");
		return $resultObject;
	}

	/**
	 * Count base entries by filter.
	 * 
	 * @param BorhanBaseEntryFilter $filter Entry filter
	 * @return int
	 */
	function count(BorhanBaseEntryFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("baseentry", "count", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * Upload a file to Borhan, that can be used to create an entry.
	 * 
	 * @param file $fileData The file data
	 * @return string
	 */
	function upload($fileData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("baseentry", "upload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Update entry thumbnail using a raw jpeg file.
	 * 
	 * @param string $entryId Media entry id
	 * @param file $fileData Jpeg file data
	 * @return BorhanBaseEntry
	 */
	function updateThumbnailJpeg($entryId, $fileData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("baseentry", "updateThumbnailJpeg", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Update entry thumbnail using url.
	 * 
	 * @param string $entryId Media entry id
	 * @param string $url File url
	 * @return BorhanBaseEntry
	 */
	function updateThumbnailFromUrl($entryId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("baseentry", "updateThumbnailFromUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Update entry thumbnail from a different entry by a specified time offset (in seconds).
	 * 
	 * @param string $entryId Media entry id
	 * @param string $sourceEntryId Media entry id
	 * @param int $timeOffset Time offset (in seconds)
	 * @return BorhanBaseEntry
	 */
	function updateThumbnailFromSourceEntry($entryId, $sourceEntryId, $timeOffset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "sourceEntryId", $sourceEntryId);
		$this->client->addParam($kparams, "timeOffset", $timeOffset);
		$this->client->queueServiceActionCall("baseentry", "updateThumbnailFromSourceEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Flag inappropriate entry for moderation.
	 * 
	 * @param BorhanModerationFlag $moderationFlag 
	 * @return 
	 */
	function flag(BorhanModerationFlag $moderationFlag)
	{
		$kparams = array();
		$this->client->addParam($kparams, "moderationFlag", $moderationFlag->toParams());
		$this->client->queueServiceActionCall("baseentry", "flag", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Reject the entry and mark the pending flags (if any) as moderated (this will make the entry non-playable).
	 * 
	 * @param string $entryId 
	 * @return 
	 */
	function reject($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("baseentry", "reject", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Approve the entry and mark the pending flags (if any) as moderated (this will make the entry playable).
	 * 
	 * @param string $entryId 
	 * @return 
	 */
	function approve($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("baseentry", "approve", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List all pending flags for the entry.
	 * 
	 * @param string $entryId 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanModerationFlagListResponse
	 */
	function listFlags($entryId, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("baseentry", "listFlags", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanModerationFlagListResponse");
		return $resultObject;
	}

	/**
	 * Anonymously rank an entry, no validation is done on duplicate rankings.
	 * 
	 * @param string $entryId 
	 * @param int $rank 
	 * @return 
	 */
	function anonymousRank($entryId, $rank)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "rank", $rank);
		$this->client->queueServiceActionCall("baseentry", "anonymousRank", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * This action delivers entry-related data, based on the user's context: access control, restriction, playback format and storage information.
	 * 
	 * @param string $entryId 
	 * @param BorhanEntryContextDataParams $contextDataParams 
	 * @return BorhanEntryContextDataResult
	 */
	function getContextData($entryId, BorhanEntryContextDataParams $contextDataParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "contextDataParams", $contextDataParams->toParams());
		$this->client->queueServiceActionCall("baseentry", "getContextData", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEntryContextDataResult");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $entryId 
	 * @param int $storageProfileId 
	 * @return BorhanBaseEntry
	 */
	function export($entryId, $storageProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "storageProfileId", $storageProfileId);
		$this->client->queueServiceActionCall("baseentry", "export", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Index an entry by id.
	 * 
	 * @param string $id 
	 * @param bool $shouldUpdate 
	 * @return int
	 */
	function index($id, $shouldUpdate = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "shouldUpdate", $shouldUpdate);
		$this->client->queueServiceActionCall("baseentry", "index", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * Clone an entry with optional attributes to apply to the clone
	 * 
	 * @param string $entryId Id of entry to clone
	 * @return BorhanBaseEntry
	 */
	function cloneAction($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("baseentry", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanBulkUploadService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new bulk upload batch job
	 Conversion profile id can be specified in the API or in the CSV file, the one in the CSV file will be stronger.
	 If no conversion profile was specified, partner's default will be used
	 * 
	 * @param int $conversionProfileId Convertion profile id to use for converting the current bulk (-1 to use partner's default)
	 * @param file $csvFileData Bulk upload file
	 * @param string $bulkUploadType 
	 * @param string $uploadedBy 
	 * @param string $fileName Friendly name of the file, used to be recognized later in the logs.
	 * @return BorhanBulkUpload
	 */
	function add($conversionProfileId, $csvFileData, $bulkUploadType = null, $uploadedBy = null, $fileName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$kfiles = array();
		$this->client->addParam($kfiles, "csvFileData", $csvFileData);
		$this->client->addParam($kparams, "bulkUploadType", $bulkUploadType);
		$this->client->addParam($kparams, "uploadedBy", $uploadedBy);
		$this->client->addParam($kparams, "fileName", $fileName);
		$this->client->queueServiceActionCall("bulkupload", "add", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUpload");
		return $resultObject;
	}

	/**
	 * Get bulk upload batch job by id
	 * 
	 * @param bigint $id 
	 * @return BorhanBulkUpload
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUpload");
		return $resultObject;
	}

	/**
	 * List bulk upload batch jobs
	 * 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanBulkUploadListResponse
	 */
	function listAction(BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("bulkupload", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUploadListResponse");
		return $resultObject;
	}

	/**
	 * Serve action returan the original file.
	 * 
	 * @param bigint $id Job id
	 * @return file
	 */
	function serve($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * ServeLog action returan the original file.
	 * 
	 * @param bigint $id Job id
	 * @return file
	 */
	function serveLog($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload", "serveLog", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Aborts the bulk upload and all its child jobs
	 * 
	 * @param bigint $id Job id
	 * @return BorhanBulkUpload
	 */
	function abort($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload", "abort", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUpload");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCategoryEntryService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new CategoryEntry
	 * 
	 * @param BorhanCategoryEntry $categoryEntry 
	 * @return BorhanCategoryEntry
	 */
	function add(BorhanCategoryEntry $categoryEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryEntry", $categoryEntry->toParams());
		$this->client->queueServiceActionCall("categoryentry", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategoryEntry");
		return $resultObject;
	}

	/**
	 * Delete CategoryEntry
	 * 
	 * @param string $entryId 
	 * @param int $categoryId 
	 * @return 
	 */
	function delete($entryId, $categoryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->queueServiceActionCall("categoryentry", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List all categoryEntry
	 * 
	 * @param BorhanCategoryEntryFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanCategoryEntryListResponse
	 */
	function listAction(BorhanCategoryEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("categoryentry", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategoryEntryListResponse");
		return $resultObject;
	}

	/**
	 * Index CategoryEntry by Id
	 * 
	 * @param string $entryId 
	 * @param int $categoryId 
	 * @param bool $shouldUpdate 
	 * @return int
	 */
	function index($entryId, $categoryId, $shouldUpdate = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "shouldUpdate", $shouldUpdate);
		$this->client->queueServiceActionCall("categoryentry", "index", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * Activate CategoryEntry when it is pending moderation
	 * 
	 * @param string $entryId 
	 * @param int $categoryId 
	 * @return 
	 */
	function activate($entryId, $categoryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->queueServiceActionCall("categoryentry", "activate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Activate CategoryEntry when it is pending moderation
	 * 
	 * @param string $entryId 
	 * @param int $categoryId 
	 * @return 
	 */
	function reject($entryId, $categoryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->queueServiceActionCall("categoryentry", "reject", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Update privacy context from the category
	 * 
	 * @param string $entryId 
	 * @param int $categoryId 
	 * @return 
	 */
	function syncPrivacyContext($entryId, $categoryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->queueServiceActionCall("categoryentry", "syncPrivacyContext", $kparams);
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
	 * @param BorhanBulkServiceData $bulkUploadData 
	 * @param BorhanBulkUploadCategoryEntryData $bulkUploadCategoryEntryData 
	 * @return BorhanBulkUpload
	 */
	function addFromBulkUpload(BorhanBulkServiceData $bulkUploadData, BorhanBulkUploadCategoryEntryData $bulkUploadCategoryEntryData = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadCategoryEntryData !== null)
			$this->client->addParam($kparams, "bulkUploadCategoryEntryData", $bulkUploadCategoryEntryData->toParams());
		$this->client->queueServiceActionCall("categoryentry", "addFromBulkUpload", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUpload");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCategoryService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Category
	 * 
	 * @param BorhanCategory $category 
	 * @return BorhanCategory
	 */
	function add(BorhanCategory $category)
	{
		$kparams = array();
		$this->client->addParam($kparams, "category", $category->toParams());
		$this->client->queueServiceActionCall("category", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategory");
		return $resultObject;
	}

	/**
	 * Get Category by id
	 * 
	 * @param int $id 
	 * @return BorhanCategory
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("category", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategory");
		return $resultObject;
	}

	/**
	 * Update Category
	 * 
	 * @param int $id 
	 * @param BorhanCategory $category 
	 * @return BorhanCategory
	 */
	function update($id, BorhanCategory $category)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "category", $category->toParams());
		$this->client->queueServiceActionCall("category", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategory");
		return $resultObject;
	}

	/**
	 * Delete a Category
	 * 
	 * @param int $id 
	 * @param int $moveEntriesToParentCategory 
	 * @return 
	 */
	function delete($id, $moveEntriesToParentCategory = 1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "moveEntriesToParentCategory", $moveEntriesToParentCategory);
		$this->client->queueServiceActionCall("category", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List all categories
	 * 
	 * @param BorhanCategoryFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanCategoryListResponse
	 */
	function listAction(BorhanCategoryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("category", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategoryListResponse");
		return $resultObject;
	}

	/**
	 * Index Category by id
	 * 
	 * @param int $id 
	 * @param bool $shouldUpdate 
	 * @return int
	 */
	function index($id, $shouldUpdate = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "shouldUpdate", $shouldUpdate);
		$this->client->queueServiceActionCall("category", "index", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * Move categories that belong to the same parent category to a target categroy - enabled only for ks with disable entitlement
	 * 
	 * @param string $categoryIds 
	 * @param int $targetCategoryParentId 
	 * @return BorhanCategoryListResponse
	 */
	function move($categoryIds, $targetCategoryParentId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryIds", $categoryIds);
		$this->client->addParam($kparams, "targetCategoryParentId", $targetCategoryParentId);
		$this->client->queueServiceActionCall("category", "move", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategoryListResponse");
		return $resultObject;
	}

	/**
	 * Unlock categories
	 * 
	 * @return 
	 */
	function unlockCategories()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("category", "unlockCategories", $kparams);
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
	 * @param file $fileData 
	 * @param BorhanBulkUploadJobData $bulkUploadData 
	 * @param BorhanBulkUploadCategoryData $bulkUploadCategoryData 
	 * @return BorhanBulkUpload
	 */
	function addFromBulkUpload($fileData, BorhanBulkUploadJobData $bulkUploadData = null, BorhanBulkUploadCategoryData $bulkUploadCategoryData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadCategoryData !== null)
			$this->client->addParam($kparams, "bulkUploadCategoryData", $bulkUploadCategoryData->toParams());
		$this->client->queueServiceActionCall("category", "addFromBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUpload");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCategoryUserService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new CategoryUser
	 * 
	 * @param BorhanCategoryUser $categoryUser 
	 * @return BorhanCategoryUser
	 */
	function add(BorhanCategoryUser $categoryUser)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryUser", $categoryUser->toParams());
		$this->client->queueServiceActionCall("categoryuser", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategoryUser");
		return $resultObject;
	}

	/**
	 * Get CategoryUser by id
	 * 
	 * @param int $categoryId 
	 * @param string $userId 
	 * @return BorhanCategoryUser
	 */
	function get($categoryId, $userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("categoryuser", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategoryUser");
		return $resultObject;
	}

	/**
	 * Update CategoryUser by id
	 * 
	 * @param int $categoryId 
	 * @param string $userId 
	 * @param BorhanCategoryUser $categoryUser 
	 * @param bool $override - to override manual changes
	 * @return BorhanCategoryUser
	 */
	function update($categoryId, $userId, BorhanCategoryUser $categoryUser, $override = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "categoryUser", $categoryUser->toParams());
		$this->client->addParam($kparams, "override", $override);
		$this->client->queueServiceActionCall("categoryuser", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategoryUser");
		return $resultObject;
	}

	/**
	 * Delete a CategoryUser
	 * 
	 * @param int $categoryId 
	 * @param string $userId 
	 * @return 
	 */
	function delete($categoryId, $userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("categoryuser", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Activate CategoryUser
	 * 
	 * @param int $categoryId 
	 * @param string $userId 
	 * @return BorhanCategoryUser
	 */
	function activate($categoryId, $userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("categoryuser", "activate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategoryUser");
		return $resultObject;
	}

	/**
	 * Reject CategoryUser
	 * 
	 * @param int $categoryId 
	 * @param string $userId 
	 * @return BorhanCategoryUser
	 */
	function deactivate($categoryId, $userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("categoryuser", "deactivate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategoryUser");
		return $resultObject;
	}

	/**
	 * List all categories
	 * 
	 * @param BorhanCategoryUserFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanCategoryUserListResponse
	 */
	function listAction(BorhanCategoryUserFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("categoryuser", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategoryUserListResponse");
		return $resultObject;
	}

	/**
	 * Copy all memeber from parent category
	 * 
	 * @param int $categoryId 
	 * @return 
	 */
	function copyFromCategory($categoryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->queueServiceActionCall("categoryuser", "copyFromCategory", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Index CategoryUser by userid and category id
	 * 
	 * @param string $userId 
	 * @param int $categoryId 
	 * @param bool $shouldUpdate 
	 * @return int
	 */
	function index($userId, $categoryId, $shouldUpdate = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "shouldUpdate", $shouldUpdate);
		$this->client->queueServiceActionCall("categoryuser", "index", $kparams);
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
	 * @param file $fileData 
	 * @param BorhanBulkUploadJobData $bulkUploadData 
	 * @param BorhanBulkUploadCategoryUserData $bulkUploadCategoryUserData 
	 * @return BorhanBulkUpload
	 */
	function addFromBulkUpload($fileData, BorhanBulkUploadJobData $bulkUploadData = null, BorhanBulkUploadCategoryUserData $bulkUploadCategoryUserData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadCategoryUserData !== null)
			$this->client->addParam($kparams, "bulkUploadCategoryUserData", $bulkUploadCategoryUserData->toParams());
		$this->client->queueServiceActionCall("categoryuser", "addFromBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUpload");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanConversionProfileAssetParamsService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Lists asset parmas of conversion profile by ID
	 * 
	 * @param BorhanConversionProfileAssetParamsFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanConversionProfileAssetParamsListResponse
	 */
	function listAction(BorhanConversionProfileAssetParamsFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("conversionprofileassetparams", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfileAssetParamsListResponse");
		return $resultObject;
	}

	/**
	 * Update asset parmas of conversion profile by ID
	 * 
	 * @param int $conversionProfileId 
	 * @param int $assetParamsId 
	 * @param BorhanConversionProfileAssetParams $conversionProfileAssetParams 
	 * @return BorhanConversionProfileAssetParams
	 */
	function update($conversionProfileId, $assetParamsId, BorhanConversionProfileAssetParams $conversionProfileAssetParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$this->client->addParam($kparams, "assetParamsId", $assetParamsId);
		$this->client->addParam($kparams, "conversionProfileAssetParams", $conversionProfileAssetParams->toParams());
		$this->client->queueServiceActionCall("conversionprofileassetparams", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfileAssetParams");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanConversionProfileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Set Conversion Profile to be the partner default
	 * 
	 * @param int $id 
	 * @return BorhanConversionProfile
	 */
	function setAsDefault($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("conversionprofile", "setAsDefault", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfile");
		return $resultObject;
	}

	/**
	 * Get the partner's default conversion profile
	 * 
	 * @param string $type 
	 * @return BorhanConversionProfile
	 */
	function getDefault($type = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("conversionprofile", "getDefault", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfile");
		return $resultObject;
	}

	/**
	 * Add new Conversion Profile
	 * 
	 * @param BorhanConversionProfile $conversionProfile 
	 * @return BorhanConversionProfile
	 */
	function add(BorhanConversionProfile $conversionProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "conversionProfile", $conversionProfile->toParams());
		$this->client->queueServiceActionCall("conversionprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfile");
		return $resultObject;
	}

	/**
	 * Get Conversion Profile by ID
	 * 
	 * @param int $id 
	 * @return BorhanConversionProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("conversionprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfile");
		return $resultObject;
	}

	/**
	 * Update Conversion Profile by ID
	 * 
	 * @param int $id 
	 * @param BorhanConversionProfile $conversionProfile 
	 * @return BorhanConversionProfile
	 */
	function update($id, BorhanConversionProfile $conversionProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "conversionProfile", $conversionProfile->toParams());
		$this->client->queueServiceActionCall("conversionprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfile");
		return $resultObject;
	}

	/**
	 * Delete Conversion Profile by ID
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("conversionprofile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List Conversion Profiles by filter with paging support
	 * 
	 * @param BorhanConversionProfileFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanConversionProfileListResponse
	 */
	function listAction(BorhanConversionProfileFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("conversionprofile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfileListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDataService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new data entry
	 * 
	 * @param BorhanDataEntry $dataEntry Data entry
	 * @return BorhanDataEntry
	 */
	function add(BorhanDataEntry $dataEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dataEntry", $dataEntry->toParams());
		$this->client->queueServiceActionCall("data", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDataEntry");
		return $resultObject;
	}

	/**
	 * Get data entry by ID.
	 * 
	 * @param string $entryId Data entry id
	 * @param int $version Desired version of the data
	 * @return BorhanDataEntry
	 */
	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("data", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDataEntry");
		return $resultObject;
	}

	/**
	 * Update data entry. Only the properties that were set will be updated.
	 * 
	 * @param string $entryId Data entry id to update
	 * @param BorhanDataEntry $documentEntry Data entry metadata to update
	 * @return BorhanDataEntry
	 */
	function update($entryId, BorhanDataEntry $documentEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
		$this->client->queueServiceActionCall("data", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDataEntry");
		return $resultObject;
	}

	/**
	 * Delete a data entry.
	 * 
	 * @param string $entryId Data entry id to delete
	 * @return 
	 */
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("data", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List data entries by filter with paging support.
	 * 
	 * @param BorhanDataEntryFilter $filter Document entry filter
	 * @param BorhanFilterPager $pager Pager
	 * @return BorhanDataListResponse
	 */
	function listAction(BorhanDataEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("data", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDataListResponse");
		return $resultObject;
	}

	/**
	 * Serve action returan the file from dataContent field.
	 * 
	 * @param string $entryId Data entry id
	 * @param int $version Desired version of the data
	 * @param bool $forceProxy Force to get the content without redirect
	 * @return file
	 */
	function serve($entryId, $version = -1, $forceProxy = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->addParam($kparams, "forceProxy", $forceProxy);
		$this->client->queueServiceActionCall("data", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanDocumentService extends BorhanServiceBase
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
		$this->client->queueServiceActionCall("document", "addFromUploadedFile", $kparams);
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
		$this->client->queueServiceActionCall("document", "addFromEntry", $kparams);
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
		$this->client->queueServiceActionCall("document", "addFromFlavorAsset", $kparams);
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
		$this->client->queueServiceActionCall("document", "convert", $kparams);
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
		$this->client->queueServiceActionCall("document", "get", $kparams);
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
		$this->client->queueServiceActionCall("document", "update", $kparams);
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
		$this->client->queueServiceActionCall("document", "delete", $kparams);
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
		$this->client->queueServiceActionCall("document", "list", $kparams);
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
		$this->client->queueServiceActionCall("document", "upload", $kparams, $kfiles);
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
		$this->client->queueServiceActionCall("document", "convertPptToSwf", $kparams);
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
		$this->client->queueServiceActionCall("document", "serve", $kparams);
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
		$this->client->queueServiceActionCall("document", "serveByFlavorParamsId", $kparams);
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
		$this->client->queueServiceActionCall("document", "updateContent", $kparams);
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
		$this->client->queueServiceActionCall("document", "approveReplace", $kparams);
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
		$this->client->queueServiceActionCall("document", "cancelReplace", $kparams);
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
class BorhanEmailIngestionProfileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * EmailIngestionProfile Add action allows you to add a EmailIngestionProfile to Borhan DB
	 * 
	 * @param BorhanEmailIngestionProfile $EmailIP Mandatory input parameter of type BorhanEmailIngestionProfile
	 * @return BorhanEmailIngestionProfile
	 */
	function add(BorhanEmailIngestionProfile $EmailIP)
	{
		$kparams = array();
		$this->client->addParam($kparams, "EmailIP", $EmailIP->toParams());
		$this->client->queueServiceActionCall("emailingestionprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEmailIngestionProfile");
		return $resultObject;
	}

	/**
	 * Retrieve a EmailIngestionProfile by email address
	 * 
	 * @param string $emailAddress 
	 * @return BorhanEmailIngestionProfile
	 */
	function getByEmailAddress($emailAddress)
	{
		$kparams = array();
		$this->client->addParam($kparams, "emailAddress", $emailAddress);
		$this->client->queueServiceActionCall("emailingestionprofile", "getByEmailAddress", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEmailIngestionProfile");
		return $resultObject;
	}

	/**
	 * Retrieve a EmailIngestionProfile by id
	 * 
	 * @param int $id 
	 * @return BorhanEmailIngestionProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("emailingestionprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEmailIngestionProfile");
		return $resultObject;
	}

	/**
	 * Update an existing EmailIngestionProfile
	 * 
	 * @param int $id 
	 * @param BorhanEmailIngestionProfile $EmailIP 
	 * @return BorhanEmailIngestionProfile
	 */
	function update($id, BorhanEmailIngestionProfile $EmailIP)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "EmailIP", $EmailIP->toParams());
		$this->client->queueServiceActionCall("emailingestionprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEmailIngestionProfile");
		return $resultObject;
	}

	/**
	 * Delete an existing EmailIngestionProfile
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("emailingestionprofile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Add BorhanMediaEntry from email ingestion
	 * 
	 * @param BorhanMediaEntry $mediaEntry Media entry metadata
	 * @param string $uploadTokenId Upload token id
	 * @param int $emailProfId 
	 * @param string $fromAddress 
	 * @param string $emailMsgId 
	 * @return BorhanMediaEntry
	 */
	function addMediaEntry(BorhanMediaEntry $mediaEntry, $uploadTokenId, $emailProfId, $fromAddress, $emailMsgId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->addParam($kparams, "emailProfId", $emailProfId);
		$this->client->addParam($kparams, "fromAddress", $fromAddress);
		$this->client->addParam($kparams, "emailMsgId", $emailMsgId);
		$this->client->queueServiceActionCall("emailingestionprofile", "addMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanFileAssetService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new file asset
	 * 
	 * @param BorhanFileAsset $fileAsset 
	 * @return BorhanFileAsset
	 */
	function add(BorhanFileAsset $fileAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "fileAsset", $fileAsset->toParams());
		$this->client->queueServiceActionCall("fileasset", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFileAsset");
		return $resultObject;
	}

	/**
	 * Get file asset by id
	 * 
	 * @param int $id 
	 * @return BorhanFileAsset
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("fileasset", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFileAsset");
		return $resultObject;
	}

	/**
	 * Update file asset by id
	 * 
	 * @param int $id 
	 * @param BorhanFileAsset $fileAsset 
	 * @return BorhanFileAsset
	 */
	function update($id, BorhanFileAsset $fileAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "fileAsset", $fileAsset->toParams());
		$this->client->queueServiceActionCall("fileasset", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFileAsset");
		return $resultObject;
	}

	/**
	 * Delete file asset by id
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("fileasset", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Serve file asset by id
	 * 
	 * @param int $id 
	 * @return file
	 */
	function serve($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("fileasset", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Set content of file asset
	 * 
	 * @param string $id 
	 * @param BorhanContentResource $contentResource 
	 * @return BorhanFileAsset
	 */
	function setContent($id, BorhanContentResource $contentResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("fileasset", "setContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFileAsset");
		return $resultObject;
	}

	/**
	 * List file assets by filter and pager
	 * 
	 * @param BorhanFileAssetFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanFileAssetListResponse
	 */
	function listAction(BorhanFileAssetFilter $filter, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("fileasset", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFileAssetListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanFlavorAssetService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add flavor asset
	 * 
	 * @param string $entryId 
	 * @param BorhanFlavorAsset $flavorAsset 
	 * @return BorhanFlavorAsset
	 */
	function add($entryId, BorhanFlavorAsset $flavorAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "flavorAsset", $flavorAsset->toParams());
		$this->client->queueServiceActionCall("flavorasset", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorAsset");
		return $resultObject;
	}

	/**
	 * Update flavor asset
	 * 
	 * @param string $id 
	 * @param BorhanFlavorAsset $flavorAsset 
	 * @return BorhanFlavorAsset
	 */
	function update($id, BorhanFlavorAsset $flavorAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "flavorAsset", $flavorAsset->toParams());
		$this->client->queueServiceActionCall("flavorasset", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorAsset");
		return $resultObject;
	}

	/**
	 * Update content of flavor asset
	 * 
	 * @param string $id 
	 * @param BorhanContentResource $contentResource 
	 * @return BorhanFlavorAsset
	 */
	function setContent($id, BorhanContentResource $contentResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("flavorasset", "setContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorAsset");
		return $resultObject;
	}

	/**
	 * Get Flavor Asset by ID
	 * 
	 * @param string $id 
	 * @return BorhanFlavorAsset
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("flavorasset", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorAsset");
		return $resultObject;
	}

	/**
	 * Get Flavor Assets for Entry
	 * 
	 * @param string $entryId 
	 * @return array
	 */
	function getByEntryId($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("flavorasset", "getByEntryId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * List Flavor Assets by filter and pager
	 * 
	 * @param BorhanAssetFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanFlavorAssetListResponse
	 */
	function listAction(BorhanAssetFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("flavorasset", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorAssetListResponse");
		return $resultObject;
	}

	/**
	 * Get web playable Flavor Assets for Entry
	 * 
	 * @param string $entryId 
	 * @return array
	 */
	function getWebPlayableByEntryId($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("flavorasset", "getWebPlayableByEntryId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Add and convert new Flavor Asset for Entry with specific Flavor Params
	 * 
	 * @param string $entryId 
	 * @param int $flavorParamsId 
	 * @param int $priority 
	 * @return 
	 */
	function convert($entryId, $flavorParamsId, $priority = 0)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->addParam($kparams, "priority", $priority);
		$this->client->queueServiceActionCall("flavorasset", "convert", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Reconvert Flavor Asset by ID
	 * 
	 * @param string $id Flavor Asset ID
	 * @return 
	 */
	function reconvert($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("flavorasset", "reconvert", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Delete Flavor Asset by ID
	 * 
	 * @param string $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("flavorasset", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Get download URL for the asset
	 * 
	 * @param string $id 
	 * @param int $storageId 
	 * @param bool $forceProxy 
	 * @return string
	 */
	function getUrl($id, $storageId = null, $forceProxy = false, BorhanFlavorAssetUrlOptions $options = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "storageId", $storageId);
		$this->client->addParam($kparams, "forceProxy", $forceProxy);
		if ($options !== null)
			$this->client->addParam($kparams, "options", $options->toParams());
		$this->client->queueServiceActionCall("flavorasset", "getUrl", $kparams);
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
		$this->client->queueServiceActionCall("flavorasset", "getRemotePaths", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanRemotePathListResponse");
		return $resultObject;
	}

	/**
	 * Get download URL for the Flavor Asset
	 * 
	 * @param string $id 
	 * @param bool $useCdn 
	 * @return string
	 */
	function getDownloadUrl($id, $useCdn = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "useCdn", $useCdn);
		$this->client->queueServiceActionCall("flavorasset", "getDownloadUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Get Flavor Asset with the relevant Flavor Params (Flavor Params can exist without Flavor Asset & vice versa)
	 * 
	 * @param string $entryId 
	 * @return array
	 */
	function getFlavorAssetsWithParams($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("flavorasset", "getFlavorAssetsWithParams", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Manually export an asset
	 * 
	 * @param string $assetId 
	 * @param int $storageProfileId 
	 * @return BorhanFlavorAsset
	 */
	function export($assetId, $storageProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "storageProfileId", $storageProfileId);
		$this->client->queueServiceActionCall("flavorasset", "export", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorAsset");
		return $resultObject;
	}

	/**
	 * Set a given flavor as the original flavor
	 * 
	 * @param string $assetId 
	 * @return 
	 */
	function setAsSource($assetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->queueServiceActionCall("flavorasset", "setAsSource", $kparams);
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
class BorhanFlavorParamsOutputService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Get flavor params output object by ID
	 * 
	 * @param int $id 
	 * @return BorhanFlavorParamsOutput
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("flavorparamsoutput", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorParamsOutput");
		return $resultObject;
	}

	/**
	 * List flavor params output objects by filter and pager
	 * 
	 * @param BorhanFlavorParamsOutputFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanFlavorParamsOutputListResponse
	 */
	function listAction(BorhanFlavorParamsOutputFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("flavorparamsoutput", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorParamsOutputListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanFlavorParamsService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Flavor Params
	 * 
	 * @param BorhanFlavorParams $flavorParams 
	 * @return BorhanFlavorParams
	 */
	function add(BorhanFlavorParams $flavorParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "flavorParams", $flavorParams->toParams());
		$this->client->queueServiceActionCall("flavorparams", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorParams");
		return $resultObject;
	}

	/**
	 * Get Flavor Params by ID
	 * 
	 * @param int $id 
	 * @return BorhanFlavorParams
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("flavorparams", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorParams");
		return $resultObject;
	}

	/**
	 * Update Flavor Params by ID
	 * 
	 * @param int $id 
	 * @param BorhanFlavorParams $flavorParams 
	 * @return BorhanFlavorParams
	 */
	function update($id, BorhanFlavorParams $flavorParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "flavorParams", $flavorParams->toParams());
		$this->client->queueServiceActionCall("flavorparams", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorParams");
		return $resultObject;
	}

	/**
	 * Delete Flavor Params by ID
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("flavorparams", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List Flavor Params by filter with paging support (By default - all system default params will be listed too)
	 * 
	 * @param BorhanFlavorParamsFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanFlavorParamsListResponse
	 */
	function listAction(BorhanFlavorParamsFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("flavorparams", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorParamsListResponse");
		return $resultObject;
	}

	/**
	 * Get Flavor Params by Conversion Profile ID
	 * 
	 * @param int $conversionProfileId 
	 * @return array
	 */
	function getByConversionProfileId($conversionProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("flavorparams", "getByConversionProfileId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanLiveChannelSegmentService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new live channel segment
	 * 
	 * @param BorhanLiveChannelSegment $liveChannelSegment 
	 * @return BorhanLiveChannelSegment
	 */
	function add(BorhanLiveChannelSegment $liveChannelSegment)
	{
		$kparams = array();
		$this->client->addParam($kparams, "liveChannelSegment", $liveChannelSegment->toParams());
		$this->client->queueServiceActionCall("livechannelsegment", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveChannelSegment");
		return $resultObject;
	}

	/**
	 * Get live channel segment by id
	 * 
	 * @param int $id 
	 * @return BorhanLiveChannelSegment
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannelsegment", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveChannelSegment");
		return $resultObject;
	}

	/**
	 * Update live channel segment by id
	 * 
	 * @param int $id 
	 * @param BorhanLiveChannelSegment $liveChannelSegment 
	 * @return BorhanLiveChannelSegment
	 */
	function update($id, BorhanLiveChannelSegment $liveChannelSegment)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "liveChannelSegment", $liveChannelSegment->toParams());
		$this->client->queueServiceActionCall("livechannelsegment", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveChannelSegment");
		return $resultObject;
	}

	/**
	 * Delete live channel segment by id
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannelsegment", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List live channel segments by filter and pager
	 * 
	 * @param BorhanLiveChannelSegmentFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanLiveChannelSegmentListResponse
	 */
	function listAction(BorhanLiveChannelSegmentFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("livechannelsegment", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveChannelSegmentListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanLiveChannelService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds new live channel.
	 * 
	 * @param BorhanLiveChannel $liveChannel Live channel metadata
	 * @return BorhanLiveChannel
	 */
	function add(BorhanLiveChannel $liveChannel)
	{
		$kparams = array();
		$this->client->addParam($kparams, "liveChannel", $liveChannel->toParams());
		$this->client->queueServiceActionCall("livechannel", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveChannel");
		return $resultObject;
	}

	/**
	 * Get live channel by ID.
	 * 
	 * @param string $id Live channel id
	 * @return BorhanLiveChannel
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannel", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveChannel");
		return $resultObject;
	}

	/**
	 * Update live channel. Only the properties that were set will be updated.
	 * 
	 * @param string $id Live channel id to update
	 * @param BorhanLiveChannel $liveChannel Live channel metadata to update
	 * @return BorhanLiveChannel
	 */
	function update($id, BorhanLiveChannel $liveChannel)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "liveChannel", $liveChannel->toParams());
		$this->client->queueServiceActionCall("livechannel", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveChannel");
		return $resultObject;
	}

	/**
	 * Delete a live channel.
	 * 
	 * @param string $id Live channel id to delete
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannel", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List live channels by filter with paging support.
	 * 
	 * @param BorhanLiveChannelFilter $filter Live channel filter
	 * @param BorhanFilterPager $pager Pager
	 * @return BorhanLiveChannelListResponse
	 */
	function listAction(BorhanLiveChannelFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("livechannel", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveChannelListResponse");
		return $resultObject;
	}

	/**
	 * Delivering the status of a live channel (on-air/offline)
	 * 
	 * @param string $id ID of the live channel
	 * @return bool
	 */
	function isLive($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannel", "isLive", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Append recorded video to live entry
	 * 
	 * @param string $entryId Live entry id
	 * @param int $mediaServerIndex 
	 * @param BorhanDataCenterContentResource $resource 
	 * @param float $duration 
	 * @return BorhanLiveEntry
	 */
	function appendRecording($entryId, $mediaServerIndex, BorhanDataCenterContentResource $resource, $duration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->addParam($kparams, "duration", $duration);
		$this->client->queueServiceActionCall("livechannel", "appendRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveEntry");
		return $resultObject;
	}

	/**
	 * Register media server to live entry
	 * 
	 * @param string $entryId Live entry id
	 * @param string $hostname Media server host name
	 * @param int $mediaServerIndex Media server index primary / secondary
	 * @return BorhanLiveEntry
	 */
	function registerMediaServer($entryId, $hostname, $mediaServerIndex)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->queueServiceActionCall("livechannel", "registerMediaServer", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveEntry");
		return $resultObject;
	}

	/**
	 * Unregister media server from live entry
	 * 
	 * @param string $entryId Live entry id
	 * @param string $hostname Media server host name
	 * @param int $mediaServerIndex Media server index primary / secondary
	 * @return BorhanLiveEntry
	 */
	function unregisterMediaServer($entryId, $hostname, $mediaServerIndex)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->queueServiceActionCall("livechannel", "unregisterMediaServer", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveEntry");
		return $resultObject;
	}

	/**
	 * Validates all registered media servers
	 * 
	 * @param string $entryId Live entry id
	 * @return 
	 */
	function validateRegisteredMediaServers($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("livechannel", "validateRegisteredMediaServers", $kparams);
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
class BorhanLiveStreamService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds new live stream entry.
	 The entry will be queued for provision.
	 * 
	 * @param BorhanLiveStreamEntry $liveStreamEntry Live stream entry metadata
	 * @param string $sourceType Live stream source type
	 * @return BorhanLiveStreamEntry
	 */
	function add(BorhanLiveStreamEntry $liveStreamEntry, $sourceType = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "liveStreamEntry", $liveStreamEntry->toParams());
		$this->client->addParam($kparams, "sourceType", $sourceType);
		$this->client->queueServiceActionCall("livestream", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamEntry");
		return $resultObject;
	}

	/**
	 * Get live stream entry by ID.
	 * 
	 * @param string $entryId Live stream entry id
	 * @param int $version Desired version of the data
	 * @return BorhanLiveStreamEntry
	 */
	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("livestream", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamEntry");
		return $resultObject;
	}

	/**
	 * Authenticate live-stream entry against stream token and partner limitations
	 * 
	 * @param string $entryId Live stream entry id
	 * @param string $token Live stream broadcasting token
	 * @return BorhanLiveStreamEntry
	 */
	function authenticate($entryId, $token)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->queueServiceActionCall("livestream", "authenticate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamEntry");
		return $resultObject;
	}

	/**
	 * Update live stream entry. Only the properties that were set will be updated.
	 * 
	 * @param string $entryId Live stream entry id to update
	 * @param BorhanLiveStreamEntry $liveStreamEntry Live stream entry metadata to update
	 * @return BorhanLiveStreamEntry
	 */
	function update($entryId, BorhanLiveStreamEntry $liveStreamEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "liveStreamEntry", $liveStreamEntry->toParams());
		$this->client->queueServiceActionCall("livestream", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamEntry");
		return $resultObject;
	}

	/**
	 * Delete a live stream entry.
	 * 
	 * @param string $entryId Live stream entry id to delete
	 * @return 
	 */
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("livestream", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List live stream entries by filter with paging support.
	 * 
	 * @param BorhanLiveStreamEntryFilter $filter Live stream entry filter
	 * @param BorhanFilterPager $pager Pager
	 * @return BorhanLiveStreamListResponse
	 */
	function listAction(BorhanLiveStreamEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("livestream", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamListResponse");
		return $resultObject;
	}

	/**
	 * Update live stream entry thumbnail using a raw jpeg file
	 * 
	 * @param string $entryId Live stream entry id
	 * @param file $fileData Jpeg file data
	 * @return BorhanLiveStreamEntry
	 */
	function updateOfflineThumbnailJpeg($entryId, $fileData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("livestream", "updateOfflineThumbnailJpeg", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamEntry");
		return $resultObject;
	}

	/**
	 * Update entry thumbnail using url
	 * 
	 * @param string $entryId Live stream entry id
	 * @param string $url File url
	 * @return BorhanLiveStreamEntry
	 */
	function updateOfflineThumbnailFromUrl($entryId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("livestream", "updateOfflineThumbnailFromUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamEntry");
		return $resultObject;
	}

	/**
	 * Delivering the status of a live stream (on-air/offline) if it is possible
	 * 
	 * @param string $id ID of the live stream
	 * @param string $protocol Protocol of the stream to test.
	 * @return bool
	 */
	function isLive($id, $protocol)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "protocol", $protocol);
		$this->client->queueServiceActionCall("livestream", "isLive", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Append recorded video to live entry
	 * 
	 * @param string $entryId Live entry id
	 * @param int $mediaServerIndex 
	 * @param BorhanDataCenterContentResource $resource 
	 * @param float $duration 
	 * @return BorhanLiveEntry
	 */
	function appendRecording($entryId, $mediaServerIndex, BorhanDataCenterContentResource $resource, $duration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->addParam($kparams, "duration", $duration);
		$this->client->queueServiceActionCall("livestream", "appendRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveEntry");
		return $resultObject;
	}

	/**
	 * Register media server to live entry
	 * 
	 * @param string $entryId Live entry id
	 * @param string $hostname Media server host name
	 * @param int $mediaServerIndex Media server index primary / secondary
	 * @return BorhanLiveEntry
	 */
	function registerMediaServer($entryId, $hostname, $mediaServerIndex)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->queueServiceActionCall("livestream", "registerMediaServer", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveEntry");
		return $resultObject;
	}

	/**
	 * Unregister media server from live entry
	 * 
	 * @param string $entryId Live entry id
	 * @param string $hostname Media server host name
	 * @param int $mediaServerIndex Media server index primary / secondary
	 * @return BorhanLiveEntry
	 */
	function unregisterMediaServer($entryId, $hostname, $mediaServerIndex)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->queueServiceActionCall("livestream", "unregisterMediaServer", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveEntry");
		return $resultObject;
	}

	/**
	 * Validates all registered media servers
	 * 
	 * @param string $entryId Live entry id
	 * @return 
	 */
	function validateRegisteredMediaServers($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("livestream", "validateRegisteredMediaServers", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Creates perioding metadata sync-point events on a live stream
	 * 
	 * @param string $entryId Borhan live-stream entry id
	 * @param int $interval Events interval in seconds
	 * @param int $duration Duration in seconds
	 * @return 
	 */
	function createPeriodicSyncPoints($entryId, $interval, $duration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "interval", $interval);
		$this->client->addParam($kparams, "duration", $duration);
		$this->client->queueServiceActionCall("livestream", "createPeriodicSyncPoints", $kparams);
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
class BorhanMediaInfoService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * List media info objects by filter and pager
	 * 
	 * @param BorhanMediaInfoFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanMediaInfoListResponse
	 */
	function listAction(BorhanMediaInfoFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("mediainfo", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaInfoListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMediaServerService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Get media server by hostname
	 * 
	 * @param string $hostname 
	 * @return BorhanMediaServer
	 */
	function get($hostname)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->queueServiceActionCall("mediaserver", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaServer");
		return $resultObject;
	}

	/**
	 * Update media server status
	 * 
	 * @param string $hostname 
	 * @param BorhanMediaServerStatus $mediaServerStatus 
	 * @return BorhanMediaServer
	 */
	function reportStatus($hostname, BorhanMediaServerStatus $mediaServerStatus)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerStatus", $mediaServerStatus->toParams());
		$this->client->queueServiceActionCall("mediaserver", "reportStatus", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaServer");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMediaService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add entry
	 * 
	 * @param BorhanMediaEntry $entry 
	 * @return BorhanMediaEntry
	 */
	function add(BorhanMediaEntry $entry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->queueServiceActionCall("media", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Add content to media entry which is not yet associated with content (therefore is in status NO_CONTENT).
     If the requirement is to replace the entry's associated content, use action updateContent.
	 * 
	 * @param string $entryId 
	 * @param BorhanResource $resource 
	 * @return BorhanMediaEntry
	 */
	function addContent($entryId, BorhanResource $resource = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		if ($resource !== null)
			$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->queueServiceActionCall("media", "addContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Adds new media entry by importing an HTTP or FTP URL.
	 The entry will be queued for import and then for conversion.
	 * 
	 * @param BorhanMediaEntry $mediaEntry Media entry metadata
	 * @param string $url An HTTP or FTP URL
	 * @return BorhanMediaEntry
	 */
	function addFromUrl(BorhanMediaEntry $mediaEntry, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("media", "addFromUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Adds new media entry by importing the media file from a search provider.
	 This action should be used with the search service result.
	 * 
	 * @param BorhanMediaEntry $mediaEntry Media entry metadata
	 * @param BorhanSearchResult $searchResult Result object from search service
	 * @return BorhanMediaEntry
	 */
	function addFromSearchResult(BorhanMediaEntry $mediaEntry = null, BorhanSearchResult $searchResult = null)
	{
		$kparams = array();
		if ($mediaEntry !== null)
			$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		if ($searchResult !== null)
			$this->client->addParam($kparams, "searchResult", $searchResult->toParams());
		$this->client->queueServiceActionCall("media", "addFromSearchResult", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Add new entry after the specific media file was uploaded and the upload token id exists
	 * 
	 * @param BorhanMediaEntry $mediaEntry Media entry metadata
	 * @param string $uploadTokenId Upload token id
	 * @return BorhanMediaEntry
	 */
	function addFromUploadedFile(BorhanMediaEntry $mediaEntry, $uploadTokenId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("media", "addFromUploadedFile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Add new entry after the file was recored on the server and the token id exists
	 * 
	 * @param BorhanMediaEntry $mediaEntry Media entry metadata
	 * @param string $webcamTokenId Token id for the recored webcam file
	 * @return BorhanMediaEntry
	 */
	function addFromRecordedWebcam(BorhanMediaEntry $mediaEntry, $webcamTokenId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "webcamTokenId", $webcamTokenId);
		$this->client->queueServiceActionCall("media", "addFromRecordedWebcam", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Copy entry into new entry
	 * 
	 * @param string $sourceEntryId Media entry id to copy from
	 * @param BorhanMediaEntry $mediaEntry Media entry metadata
	 * @param int $sourceFlavorParamsId The flavor to be used as the new entry source, source flavor will be used if not specified
	 * @return BorhanMediaEntry
	 */
	function addFromEntry($sourceEntryId, BorhanMediaEntry $mediaEntry = null, $sourceFlavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "sourceEntryId", $sourceEntryId);
		if ($mediaEntry !== null)
			$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "sourceFlavorParamsId", $sourceFlavorParamsId);
		$this->client->queueServiceActionCall("media", "addFromEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Copy flavor asset into new entry
	 * 
	 * @param string $sourceFlavorAssetId Flavor asset id to be used as the new entry source
	 * @param BorhanMediaEntry $mediaEntry Media entry metadata
	 * @return BorhanMediaEntry
	 */
	function addFromFlavorAsset($sourceFlavorAssetId, BorhanMediaEntry $mediaEntry = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "sourceFlavorAssetId", $sourceFlavorAssetId);
		if ($mediaEntry !== null)
			$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->queueServiceActionCall("media", "addFromFlavorAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Convert entry
	 * 
	 * @param string $entryId Media entry id
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
		$this->client->queueServiceActionCall("media", "convert", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * Get media entry by ID.
	 * 
	 * @param string $entryId Media entry id
	 * @param int $version Desired version of the data
	 * @return BorhanMediaEntry
	 */
	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("media", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Get MRSS by entry id
     XML will return as an escaped string
	 * 
	 * @param string $entryId Entry id
	 * @param array $extendingItemsArray 
	 * @return string
	 */
	function getMrss($entryId, array $extendingItemsArray = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		if ($extendingItemsArray !== null)
			foreach($extendingItemsArray as $index => $obj)
			{
				$this->client->addParam($kparams, "extendingItemsArray:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("media", "getMrss", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Update media entry. Only the properties that were set will be updated.
	 * 
	 * @param string $entryId Media entry id to update
	 * @param BorhanMediaEntry $mediaEntry Media entry metadata to update
	 * @return BorhanMediaEntry
	 */
	function update($entryId, BorhanMediaEntry $mediaEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->queueServiceActionCall("media", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Replace content associated with the media entry.
	 * 
	 * @param string $entryId Media entry id to update
	 * @param BorhanResource $resource Resource to be used to replace entry media content
	 * @param int $conversionProfileId The conversion profile id to be used on the entry
	 * @return BorhanMediaEntry
	 */
	function updateContent($entryId, BorhanResource $resource, $conversionProfileId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("media", "updateContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Delete a media entry.
	 * 
	 * @param string $entryId Media entry id to delete
	 * @return 
	 */
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Approves media replacement
	 * 
	 * @param string $entryId Media entry id to replace
	 * @return BorhanMediaEntry
	 */
	function approveReplace($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "approveReplace", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Cancels media replacement
	 * 
	 * @param string $entryId Media entry id to cancel
	 * @return BorhanMediaEntry
	 */
	function cancelReplace($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "cancelReplace", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * List media entries by filter with paging support.
	 * 
	 * @param BorhanMediaEntryFilter $filter Media entry filter
	 * @param BorhanFilterPager $pager Pager
	 * @return BorhanMediaListResponse
	 */
	function listAction(BorhanMediaEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("media", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaListResponse");
		return $resultObject;
	}

	/**
	 * Count media entries by filter.
	 * 
	 * @param BorhanMediaEntryFilter $filter Media entry filter
	 * @return int
	 */
	function count(BorhanMediaEntryFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("media", "count", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * Upload a media file to Borhan, then the file can be used to create a media entry.
	 * 
	 * @param file $fileData The file data
	 * @return string
	 */
	function upload($fileData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("media", "upload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Update media entry thumbnail by a specified time offset (In seconds)
	 If flavor params id not specified, source flavor will be used by default
	 * 
	 * @param string $entryId Media entry id
	 * @param int $timeOffset Time offset (in seconds)
	 * @param int $flavorParamsId The flavor params id to be used
	 * @return BorhanMediaEntry
	 */
	function updateThumbnail($entryId, $timeOffset, $flavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "timeOffset", $timeOffset);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("media", "updateThumbnail", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Update media entry thumbnail from a different entry by a specified time offset (In seconds)
	 If flavor params id not specified, source flavor will be used by default
	 * 
	 * @param string $entryId Media entry id
	 * @param string $sourceEntryId Media entry id
	 * @param int $timeOffset Time offset (in seconds)
	 * @param int $flavorParamsId The flavor params id to be used
	 * @return BorhanMediaEntry
	 */
	function updateThumbnailFromSourceEntry($entryId, $sourceEntryId, $timeOffset, $flavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "sourceEntryId", $sourceEntryId);
		$this->client->addParam($kparams, "timeOffset", $timeOffset);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("media", "updateThumbnailFromSourceEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Update media entry thumbnail using a raw jpeg file
	 * 
	 * @param string $entryId Media entry id
	 * @param file $fileData Jpeg file data
	 * @return BorhanMediaEntry
	 */
	function updateThumbnailJpeg($entryId, $fileData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("media", "updateThumbnailJpeg", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	/**
	 * Update entry thumbnail using url
	 * 
	 * @param string $entryId Media entry id
	 * @param string $url File url
	 * @return BorhanBaseEntry
	 */
	function updateThumbnailFromUrl($entryId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("media", "updateThumbnailFromUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	/**
	 * Request a new conversion job, this can be used to convert the media entry to a different format
	 * 
	 * @param string $entryId Media entry id
	 * @param string $fileFormat Format to convert
	 * @return int
	 */
	function requestConversion($entryId, $fileFormat)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "fileFormat", $fileFormat);
		$this->client->queueServiceActionCall("media", "requestConversion", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * Flag inappropriate media entry for moderation
	 * 
	 * @param BorhanModerationFlag $moderationFlag 
	 * @return 
	 */
	function flag(BorhanModerationFlag $moderationFlag)
	{
		$kparams = array();
		$this->client->addParam($kparams, "moderationFlag", $moderationFlag->toParams());
		$this->client->queueServiceActionCall("media", "flag", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Reject the media entry and mark the pending flags (if any) as moderated (this will make the entry non playable)
	 * 
	 * @param string $entryId 
	 * @return 
	 */
	function reject($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "reject", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Approve the media entry and mark the pending flags (if any) as moderated (this will make the entry playable)
	 * 
	 * @param string $entryId 
	 * @return 
	 */
	function approve($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "approve", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List all pending flags for the media entry
	 * 
	 * @param string $entryId 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanModerationFlagListResponse
	 */
	function listFlags($entryId, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("media", "listFlags", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanModerationFlagListResponse");
		return $resultObject;
	}

	/**
	 * Anonymously rank a media entry, no validation is done on duplicate rankings
	 * 
	 * @param string $entryId 
	 * @param int $rank 
	 * @return 
	 */
	function anonymousRank($entryId, $rank)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "rank", $rank);
		$this->client->queueServiceActionCall("media", "anonymousRank", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Add new bulk upload batch job
	 Conversion profile id can be specified in the API or in the CSV file, the one in the CSV file will be stronger.
	 If no conversion profile was specified, partner's default will be used
	 * 
	 * @param file $fileData 
	 * @param BorhanBulkUploadJobData $bulkUploadData 
	 * @param BorhanBulkUploadEntryData $bulkUploadEntryData 
	 * @return BorhanBulkUpload
	 */
	function bulkUploadAdd($fileData, BorhanBulkUploadJobData $bulkUploadData = null, BorhanBulkUploadEntryData $bulkUploadEntryData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadEntryData !== null)
			$this->client->addParam($kparams, "bulkUploadEntryData", $bulkUploadEntryData->toParams());
		$this->client->queueServiceActionCall("media", "bulkUploadAdd", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUpload");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanMixingService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new mix.
	 If the dataContent is null, a default timeline will be created.
	 * 
	 * @param BorhanMixEntry $mixEntry Mix entry metadata
	 * @return BorhanMixEntry
	 */
	function add(BorhanMixEntry $mixEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mixEntry", $mixEntry->toParams());
		$this->client->queueServiceActionCall("mixing", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMixEntry");
		return $resultObject;
	}

	/**
	 * Get mix entry by id.
	 * 
	 * @param string $entryId Mix entry id
	 * @param int $version Desired version of the data
	 * @return BorhanMixEntry
	 */
	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("mixing", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMixEntry");
		return $resultObject;
	}

	/**
	 * Update mix entry. Only the properties that were set will be updated.
	 * 
	 * @param string $entryId Mix entry id to update
	 * @param BorhanMixEntry $mixEntry Mix entry metadata to update
	 * @return BorhanMixEntry
	 */
	function update($entryId, BorhanMixEntry $mixEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "mixEntry", $mixEntry->toParams());
		$this->client->queueServiceActionCall("mixing", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMixEntry");
		return $resultObject;
	}

	/**
	 * Delete a mix entry.
	 * 
	 * @param string $entryId Mix entry id to delete
	 * @return 
	 */
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("mixing", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List entries by filter with paging support.
	 Return parameter is an array of mix entries.
	 * 
	 * @param BorhanMixEntryFilter $filter Mix entry filter
	 * @param BorhanFilterPager $pager Pager
	 * @return BorhanMixListResponse
	 */
	function listAction(BorhanMixEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("mixing", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMixListResponse");
		return $resultObject;
	}

	/**
	 * Count mix entries by filter.
	 * 
	 * @param BorhanMediaEntryFilter $filter Media entry filter
	 * @return int
	 */
	function count(BorhanMediaEntryFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("mixing", "count", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * Clones an existing mix.
	 * 
	 * @param string $entryId Mix entry id to clone
	 * @return BorhanMixEntry
	 */
	function cloneAction($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("mixing", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMixEntry");
		return $resultObject;
	}

	/**
	 * Appends a media entry to a the end of the mix timeline, this will save the mix timeline as a new version.
	 * 
	 * @param string $mixEntryId Mix entry to append to its timeline
	 * @param string $mediaEntryId Media entry to append to the timeline
	 * @return BorhanMixEntry
	 */
	function appendMediaEntry($mixEntryId, $mediaEntryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mixEntryId", $mixEntryId);
		$this->client->addParam($kparams, "mediaEntryId", $mediaEntryId);
		$this->client->queueServiceActionCall("mixing", "appendMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMixEntry");
		return $resultObject;
	}

	/**
	 * Get the mixes in which the media entry is included
	 * 
	 * @param string $mediaEntryId 
	 * @return array
	 */
	function getMixesByMediaId($mediaEntryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntryId", $mediaEntryId);
		$this->client->queueServiceActionCall("mixing", "getMixesByMediaId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Get all ready media entries that exist in the given mix id
	 * 
	 * @param string $mixId 
	 * @param int $version Desired version to get the data from
	 * @return array
	 */
	function getReadyMediaEntries($mixId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mixId", $mixId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("mixing", "getReadyMediaEntries", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Anonymously rank a mix entry, no validation is done on duplicate rankings
	 * 
	 * @param string $entryId 
	 * @param int $rank 
	 * @return 
	 */
	function anonymousRank($entryId, $rank)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "rank", $rank);
		$this->client->queueServiceActionCall("mixing", "anonymousRank", $kparams);
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
class BorhanNotificationService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Return the notifications for a specific entry id and type
	 * 
	 * @param string $entryId 
	 * @param int $type 
	 * @return BorhanClientNotification
	 */
	function getClientNotification($entryId, $type)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("notification", "getClientNotification", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanClientNotification");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanPartnerService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Create a new Partner object
	 * 
	 * @param BorhanPartner $partner 
	 * @param string $cmsPassword 
	 * @param int $templatePartnerId 
	 * @param bool $silent 
	 * @return BorhanPartner
	 */
	function register(BorhanPartner $partner, $cmsPassword = "", $templatePartnerId = null, $silent = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partner", $partner->toParams());
		$this->client->addParam($kparams, "cmsPassword", $cmsPassword);
		$this->client->addParam($kparams, "templatePartnerId", $templatePartnerId);
		$this->client->addParam($kparams, "silent", $silent);
		$this->client->queueServiceActionCall("partner", "register", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartner");
		return $resultObject;
	}

	/**
	 * Update details and settings of an existing partner
	 * 
	 * @param BorhanPartner $partner 
	 * @param bool $allowEmpty 
	 * @return BorhanPartner
	 */
	function update(BorhanPartner $partner, $allowEmpty = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partner", $partner->toParams());
		$this->client->addParam($kparams, "allowEmpty", $allowEmpty);
		$this->client->queueServiceActionCall("partner", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartner");
		return $resultObject;
	}

	/**
	 * Retrieve partner object by Id
	 * 
	 * @param int $id 
	 * @return BorhanPartner
	 */
	function get($id = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("partner", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartner");
		return $resultObject;
	}

	/**
	 * Retrieve partner secret and admin secret
	 * 
	 * @param int $partnerId 
	 * @param string $adminEmail 
	 * @param string $cmsPassword 
	 * @return BorhanPartner
	 */
	function getSecrets($partnerId, $adminEmail, $cmsPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "adminEmail", $adminEmail);
		$this->client->addParam($kparams, "cmsPassword", $cmsPassword);
		$this->client->queueServiceActionCall("partner", "getSecrets", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartner");
		return $resultObject;
	}

	/**
	 * Retrieve all info attributed to the partner
	 This action expects no parameters. It returns information for the current KS partnerId.
	 * 
	 * @return BorhanPartner
	 */
	function getInfo()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("partner", "getInfo", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartner");
		return $resultObject;
	}

	/**
	 * Get usage statistics for a partner
	 Calculation is done according to partner's package
	 Additional data returned is a graph points of streaming usage in a timeframe
	 The resolution can be "days" or "months"
	 * 
	 * @param int $year 
	 * @param int $month 
	 * @param string $resolution 
	 * @return BorhanPartnerUsage
	 */
	function getUsage($year = "", $month = 1, $resolution = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "year", $year);
		$this->client->addParam($kparams, "month", $month);
		$this->client->addParam($kparams, "resolution", $resolution);
		$this->client->queueServiceActionCall("partner", "getUsage", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartnerUsage");
		return $resultObject;
	}

	/**
	 * Get usage statistics for a partner
	 Calculation is done according to partner's package
	 * 
	 * @return BorhanPartnerStatistics
	 */
	function getStatistics()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("partner", "getStatistics", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartnerStatistics");
		return $resultObject;
	}

	/**
	 * Retrieve a list of partner objects which the current user is allowed to access.
	 * 
	 * @param BorhanPartnerFilter $partnerFilter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanPartnerListResponse
	 */
	function listPartnersForUser(BorhanPartnerFilter $partnerFilter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($partnerFilter !== null)
			$this->client->addParam($kparams, "partnerFilter", $partnerFilter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("partner", "listPartnersForUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartnerListResponse");
		return $resultObject;
	}

	/**
	 * List partners by filter with paging support
	 Current implementation will only list the sub partners of the partner initiating the api call (using the current KS).
	 This action is only partially implemented to support listing sub partners of a VAR partner.
	 * 
	 * @param BorhanPartnerFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanPartnerListResponse
	 */
	function listAction(BorhanPartnerFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("partner", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartnerListResponse");
		return $resultObject;
	}

	/**
	 * List partner's current processes' statuses
	 * 
	 * @return BorhanFeatureStatusListResponse
	 */
	function listFeatureStatus()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("partner", "listFeatureStatus", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFeatureStatusListResponse");
		return $resultObject;
	}

	/**
	 * Count partner's existing sub-publishers (count includes the partner itself).
	 * 
	 * @param BorhanPartnerFilter $filter 
	 * @return int
	 */
	function count(BorhanPartnerFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("partner", "count", $kparams);
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
class BorhanPermissionItemService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new permission item object to the account.
	 This action is available only to Borhan system administrators.
	 * 
	 * @param BorhanPermissionItem $permissionItem The new permission item
	 * @return BorhanPermissionItem
	 */
	function add(BorhanPermissionItem $permissionItem)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionItem", $permissionItem->toParams());
		$this->client->queueServiceActionCall("permissionitem", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermissionItem");
		return $resultObject;
	}

	/**
	 * Retrieves a permission item object using its ID.
	 * 
	 * @param int $permissionItemId The permission item's unique identifier
	 * @return BorhanPermissionItem
	 */
	function get($permissionItemId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionItemId", $permissionItemId);
		$this->client->queueServiceActionCall("permissionitem", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermissionItem");
		return $resultObject;
	}

	/**
	 * Updates an existing permission item object.
	 This action is available only to Borhan system administrators.
	 * 
	 * @param int $permissionItemId The permission item's unique identifier
	 * @param BorhanPermissionItem $permissionItem Id The permission item's unique identifier
	 * @return BorhanPermissionItem
	 */
	function update($permissionItemId, BorhanPermissionItem $permissionItem)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionItemId", $permissionItemId);
		$this->client->addParam($kparams, "permissionItem", $permissionItem->toParams());
		$this->client->queueServiceActionCall("permissionitem", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermissionItem");
		return $resultObject;
	}

	/**
	 * Deletes an existing permission item object.
	 This action is available only to Borhan system administrators.
	 * 
	 * @param int $permissionItemId The permission item's unique identifier
	 * @return BorhanPermissionItem
	 */
	function delete($permissionItemId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionItemId", $permissionItemId);
		$this->client->queueServiceActionCall("permissionitem", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermissionItem");
		return $resultObject;
	}

	/**
	 * Lists permission item objects that are associated with an account.
	 * 
	 * @param BorhanPermissionItemFilter $filter A filter used to exclude specific types of permission items
	 * @param BorhanFilterPager $pager A limit for the number of records to display on a page
	 * @return BorhanPermissionItemListResponse
	 */
	function listAction(BorhanPermissionItemFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("permissionitem", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermissionItemListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanPermissionService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new permission object to the account.
	 * 
	 * @param BorhanPermission $permission The new permission
	 * @return BorhanPermission
	 */
	function add(BorhanPermission $permission)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permission", $permission->toParams());
		$this->client->queueServiceActionCall("permission", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermission");
		return $resultObject;
	}

	/**
	 * Retrieves a permission object using its ID.
	 * 
	 * @param string $permissionName The name assigned to the permission
	 * @return BorhanPermission
	 */
	function get($permissionName)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionName", $permissionName);
		$this->client->queueServiceActionCall("permission", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermission");
		return $resultObject;
	}

	/**
	 * Updates an existing permission object.
	 * 
	 * @param string $permissionName The name assigned to the permission
	 * @param BorhanPermission $permission Name The name assigned to the permission
	 * @return BorhanPermission
	 */
	function update($permissionName, BorhanPermission $permission)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionName", $permissionName);
		$this->client->addParam($kparams, "permission", $permission->toParams());
		$this->client->queueServiceActionCall("permission", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermission");
		return $resultObject;
	}

	/**
	 * Deletes an existing permission object.
	 * 
	 * @param string $permissionName The name assigned to the permission
	 * @return BorhanPermission
	 */
	function delete($permissionName)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionName", $permissionName);
		$this->client->queueServiceActionCall("permission", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermission");
		return $resultObject;
	}

	/**
	 * Lists permission objects that are associated with an account.
	 Blocked permissions are listed unless you use a filter to exclude them.
	 Blocked permissions are listed unless you use a filter to exclude them.
	 * 
	 * @param BorhanPermissionFilter $filter A filter used to exclude specific types of permissions
	 * @param BorhanFilterPager $pager A limit for the number of records to display on a page
	 * @return BorhanPermissionListResponse
	 */
	function listAction(BorhanPermissionFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("permission", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermissionListResponse");
		return $resultObject;
	}

	/**
	 * Retrieves a list of permissions that apply to the current KS.
	 * 
	 * @return string
	 */
	function getCurrentPermissions()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("permission", "getCurrentPermissions", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanPlaylistService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new playlist
	 Note that all entries used in a playlist will become public and may appear in BorhanNetwork
	 * 
	 * @param BorhanPlaylist $playlist 
	 * @param bool $updateStats Indicates that the playlist statistics attributes should be updated synchronously now
	 * @return BorhanPlaylist
	 */
	function add(BorhanPlaylist $playlist, $updateStats = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "playlist", $playlist->toParams());
		$this->client->addParam($kparams, "updateStats", $updateStats);
		$this->client->queueServiceActionCall("playlist", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPlaylist");
		return $resultObject;
	}

	/**
	 * Retrieve a playlist
	 * 
	 * @param string $id 
	 * @param int $version Desired version of the data
	 * @return BorhanPlaylist
	 */
	function get($id, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("playlist", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPlaylist");
		return $resultObject;
	}

	/**
	 * Update existing playlist
	 Note - you cannot change playlist type. updated playlist must be of the same type.
	 * 
	 * @param string $id 
	 * @param BorhanPlaylist $playlist 
	 * @param bool $updateStats 
	 * @return BorhanPlaylist
	 */
	function update($id, BorhanPlaylist $playlist, $updateStats = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "playlist", $playlist->toParams());
		$this->client->addParam($kparams, "updateStats", $updateStats);
		$this->client->queueServiceActionCall("playlist", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPlaylist");
		return $resultObject;
	}

	/**
	 * Delete existing playlist
	 * 
	 * @param string $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("playlist", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Clone an existing playlist
	 * 
	 * @param string $id Id of the playlist to clone
	 * @param BorhanPlaylist $newPlaylist Parameters defined here will override the ones in the cloned playlist
	 * @return BorhanPlaylist
	 */
	function cloneAction($id, BorhanPlaylist $newPlaylist = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		if ($newPlaylist !== null)
			$this->client->addParam($kparams, "newPlaylist", $newPlaylist->toParams());
		$this->client->queueServiceActionCall("playlist", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPlaylist");
		return $resultObject;
	}

	/**
	 * List available playlists
	 * 
	 * @param BorhanPlaylistFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanPlaylistListResponse
	 */
	function listAction(BorhanPlaylistFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("playlist", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPlaylistListResponse");
		return $resultObject;
	}

	/**
	 * Retrieve playlist for playing purpose
	 * 
	 * @param string $id 
	 * @param string $detailed 
	 * @param BorhanContext $playlistContext 
	 * @param BorhanMediaEntryFilterForPlaylist $filter 
	 * @return array
	 */
	function execute($id, $detailed = "", BorhanContext $playlistContext = null, BorhanMediaEntryFilterForPlaylist $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "detailed", $detailed);
		if ($playlistContext !== null)
			$this->client->addParam($kparams, "playlistContext", $playlistContext->toParams());
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("playlist", "execute", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Retrieve playlist for playing purpose, based on content
	 * 
	 * @param int $playlistType 
	 * @param string $playlistContent 
	 * @param string $detailed 
	 * @return array
	 */
	function executeFromContent($playlistType, $playlistContent, $detailed = "")
	{
		$kparams = array();
		$this->client->addParam($kparams, "playlistType", $playlistType);
		$this->client->addParam($kparams, "playlistContent", $playlistContent);
		$this->client->addParam($kparams, "detailed", $detailed);
		$this->client->queueServiceActionCall("playlist", "executeFromContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Revrieve playlist for playing purpose, based on media entry filters
	 * 
	 * @param array $filters 
	 * @param int $totalResults 
	 * @param string $detailed 
	 * @return array
	 */
	function executeFromFilters(array $filters, $totalResults, $detailed = "")
	{
		$kparams = array();
		foreach($filters as $index => $obj)
		{
			$this->client->addParam($kparams, "filters:$index", $obj->toParams());
		}
		$this->client->addParam($kparams, "totalResults", $totalResults);
		$this->client->addParam($kparams, "detailed", $detailed);
		$this->client->queueServiceActionCall("playlist", "executeFromFilters", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Retrieve playlist statistics
	 * 
	 * @param int $playlistType 
	 * @param string $playlistContent 
	 * @return BorhanPlaylist
	 */
	function getStatsFromContent($playlistType, $playlistContent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "playlistType", $playlistType);
		$this->client->addParam($kparams, "playlistContent", $playlistContent);
		$this->client->queueServiceActionCall("playlist", "getStatsFromContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPlaylist");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanReportService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Report getGraphs action allows to get a graph data for a specific report.
	 * 
	 * @param int $reportType 
	 * @param BorhanReportInputFilter $reportInputFilter 
	 * @param string $dimension 
	 * @param string $objectIds - one ID or more (separated by ',') of specific objects to query
	 * @return array
	 */
	function getGraphs($reportType, BorhanReportInputFilter $reportInputFilter, $dimension = null, $objectIds = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "dimension", $dimension);
		$this->client->addParam($kparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getGraphs", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Report getTotal action allows to get a graph data for a specific report.
	 * 
	 * @param int $reportType 
	 * @param BorhanReportInputFilter $reportInputFilter 
	 * @param string $objectIds - one ID or more (separated by ',') of specific objects to query
	 * @return BorhanReportTotal
	 */
	function getTotal($reportType, BorhanReportInputFilter $reportInputFilter, $objectIds = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getTotal", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanReportTotal");
		return $resultObject;
	}

	/**
	 * Report getBaseTotal action allows to get a the total base for storage reports
	 * 
	 * @param int $reportType 
	 * @param BorhanReportInputFilter $reportInputFilter 
	 * @param string $objectIds - one ID or more (separated by ',') of specific objects to query
	 * @return array
	 */
	function getBaseTotal($reportType, BorhanReportInputFilter $reportInputFilter, $objectIds = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getBaseTotal", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Report getTable action allows to get a graph data for a specific report.
	 * 
	 * @param int $reportType 
	 * @param BorhanReportInputFilter $reportInputFilter 
	 * @param BorhanFilterPager $pager 
	 * @param string $order 
	 * @param string $objectIds - one ID or more (separated by ',') of specific objects to query
	 * @return BorhanReportTable
	 */
	function getTable($reportType, BorhanReportInputFilter $reportInputFilter, BorhanFilterPager $pager, $order = null, $objectIds = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->addParam($kparams, "order", $order);
		$this->client->addParam($kparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getTable", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanReportTable");
		return $resultObject;
	}

	/**
	 * Will create a Csv file for the given report and return the URL to access it
	 * 
	 * @param string $reportTitle The title of the report to display at top of CSV
	 * @param string $reportText The text of the filter of the report
	 * @param string $headers The headers of the columns - a map between the enumerations on the server side and the their display text
	 * @param int $reportType 
	 * @param BorhanReportInputFilter $reportInputFilter 
	 * @param string $dimension 
	 * @param BorhanFilterPager $pager 
	 * @param string $order 
	 * @param string $objectIds - one ID or more (separated by ',') of specific objects to query
	 * @return string
	 */
	function getUrlForReportAsCsv($reportTitle, $reportText, $headers, $reportType, BorhanReportInputFilter $reportInputFilter, $dimension = null, BorhanFilterPager $pager = null, $order = null, $objectIds = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportTitle", $reportTitle);
		$this->client->addParam($kparams, "reportText", $reportText);
		$this->client->addParam($kparams, "headers", $headers);
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "dimension", $dimension);
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->addParam($kparams, "order", $order);
		$this->client->addParam($kparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getUrlForReportAsCsv", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $id 
	 * @param array $params 
	 * @return BorhanReportResponse
	 */
	function execute($id, array $params = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		if ($params !== null)
			foreach($params as $index => $obj)
			{
				$this->client->addParam($kparams, "params:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("report", "execute", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanReportResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $id 
	 * @param array $params 
	 * @return file
	 */
	function getCsv($id, array $params = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		if ($params !== null)
			foreach($params as $index => $obj)
			{
				$this->client->addParam($kparams, "params:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("report", "getCsv", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Returns report CSV file executed by string params with the following convention: param1=value1;param2=value2
	 * 
	 * @param int $id 
	 * @param string $params 
	 * @return file
	 */
	function getCsvFromStringParams($id, $params = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "params", $params);
		$this->client->queueServiceActionCall("report", "getCsvFromStringParams", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSchemaService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Serves the requested XSD according to the type and name.
	 * 
	 * @param string $type 
	 * @return file
	 */
	function serve($type)
	{
		$kparams = array();
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("schema", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSearchService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Search for media in one of the supported media providers
	 * 
	 * @param BorhanSearch $search A BorhanSearch object contains the search keywords, media provider and media type
	 * @param BorhanFilterPager $pager 
	 * @return BorhanSearchResultResponse
	 */
	function search(BorhanSearch $search, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "search", $search->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("search", "search", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSearchResultResponse");
		return $resultObject;
	}

	/**
	 * Retrieve extra information about media found in search action
	 Some providers return only part of the fields needed to create entry from, use this action to get the rest of the fields.
	 * 
	 * @param BorhanSearchResult $searchResult BorhanSearchResult object extends BorhanSearch and has all fields required for media:add
	 * @return BorhanSearchResult
	 */
	function getMediaInfo(BorhanSearchResult $searchResult)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchResult", $searchResult->toParams());
		$this->client->queueServiceActionCall("search", "getMediaInfo", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSearchResult");
		return $resultObject;
	}

	/**
	 * Search for media given a specific URL
	 Borhan supports a searchURL action on some of the media providers.
	 This action will return a BorhanSearchResult object based on a given URL (assuming the media provider is supported)
	 * 
	 * @param int $mediaType 
	 * @param string $url 
	 * @return BorhanSearchResult
	 */
	function searchUrl($mediaType, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaType", $mediaType);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("search", "searchUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSearchResult");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $searchSource 
	 * @param string $userName 
	 * @param string $password 
	 * @return BorhanSearchAuthData
	 */
	function externalLogin($searchSource, $userName, $password)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchSource", $searchSource);
		$this->client->addParam($kparams, "userName", $userName);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("search", "externalLogin", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSearchAuthData");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSessionService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Start a session with Borhan's server.
	 The result KS is the session key that you should pass to all services that requires a ticket.
	 * 
	 * @param string $secret Remember to provide the correct secret according to the sessionType you want
	 * @param string $userId 
	 * @param int $type Regular session or Admin session
	 * @param int $partnerId 
	 * @param int $expiry KS expiry time in seconds
	 * @param string $privileges 
	 * @return string
	 */
	function start($secret, $userId = "", $type = 0, $partnerId = null, $expiry = 86400, $privileges = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "secret", $secret);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("session", "start", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * End a session with the Borhan server, making the current KS invalid.
	 * 
	 * @return 
	 */
	function end()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("session", "end", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Start an impersonated session with Borhan's server.
	 The result KS is the session key that you should pass to all services that requires a ticket.
	 * 
	 * @param string $secret - should be the secret (admin or user) of the original partnerId (not impersonatedPartnerId).
	 * @param int $impersonatedPartnerId 
	 * @param string $userId - impersonated userId
	 * @param int $type 
	 * @param int $partnerId 
	 * @param int $expiry KS expiry time in seconds
	 * @param string $privileges 
	 * @return string
	 */
	function impersonate($secret, $impersonatedPartnerId, $userId = "", $type = 0, $partnerId = null, $expiry = 86400, $privileges = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "secret", $secret);
		$this->client->addParam($kparams, "impersonatedPartnerId", $impersonatedPartnerId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("session", "impersonate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Start an impersonated session with Borhan's server.
	 The result KS info contains the session key that you should pass to all services that requires a ticket.
	 Type, expiry and privileges won't be changed if they're not set
	 * 
	 * @param string $session The old KS of the impersonated partner
	 * @param int $type Type of the new KS
	 * @param int $expiry Expiry time in seconds of the new KS
	 * @param string $privileges Privileges of the new KS
	 * @return BorhanSessionInfo
	 */
	function impersonateByKs($session, $type = null, $expiry = null, $privileges = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "session", $session);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("session", "impersonateByKs", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSessionInfo");
		return $resultObject;
	}

	/**
	 * Parse session key and return its info
	 * 
	 * @param string $session The KS to be parsed, keep it empty to use current session.
	 * @return BorhanSessionInfo
	 */
	function get($session = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "session", $session);
		$this->client->queueServiceActionCall("session", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSessionInfo");
		return $resultObject;
	}

	/**
	 * Start a session for Borhan's flash widgets
	 * 
	 * @param string $widgetId 
	 * @param int $expiry 
	 * @return BorhanStartWidgetSessionResponse
	 */
	function startWidgetSession($widgetId, $expiry = 86400)
	{
		$kparams = array();
		$this->client->addParam($kparams, "widgetId", $widgetId);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->queueServiceActionCall("session", "startWidgetSession", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanStartWidgetSessionResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanStatsService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Will write to the event log a single line representing the event
	 client version - will help interprete the line structure. different client versions might have slightly different data/data formats in the line
event_id - number is the row number in yuval's excel
datetime - same format as MySql's datetime - can change and should reflect the time zone
session id - can be some big random number or guid
partner id
entry id
unique viewer
widget id
ui_conf id
uid - the puser id as set by the ppartner
current point - in milliseconds
duration - milliseconds
user ip
process duration - in milliseconds
control id
seek
new point
referrer
	
	
	 BorhanStatsEvent $event
	 * 
	 * @param BorhanStatsEvent $event 
	 * @return bool
	 */
	function collect(BorhanStatsEvent $event)
	{
		$kparams = array();
		$this->client->addParam($kparams, "event", $event->toParams());
		$this->client->queueServiceActionCall("stats", "collect", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Will collect the bmcEvent sent form the BMC client
	 // this will actually be an empty function because all events will be sent using GET and will anyway be logged in the apache log
	 * 
	 * @param BorhanStatsBmcEvent $bmcEvent 
	 * @return 
	 */
	function bmcCollect(BorhanStatsBmcEvent $bmcEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "bmcEvent", $bmcEvent->toParams());
		$this->client->queueServiceActionCall("stats", "bmcCollect", $kparams);
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
	 * @param BorhanCEError $borhanCEError 
	 * @return BorhanCEError
	 */
	function reportKceError(BorhanCEError $borhanCEError)
	{
		$kparams = array();
		$this->client->addParam($kparams, "borhanCEError", $borhanCEError->toParams());
		$this->client->queueServiceActionCall("stats", "reportKceError", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCEError");
		return $resultObject;
	}

	/**
	 * Use this action to report errors to the borhan server.
	 * 
	 * @param string $errorCode 
	 * @param string $errorMessage 
	 * @return 
	 */
	function reportError($errorCode, $errorMessage)
	{
		$kparams = array();
		$this->client->addParam($kparams, "errorCode", $errorCode);
		$this->client->addParam($kparams, "errorMessage", $errorMessage);
		$this->client->queueServiceActionCall("stats", "reportError", $kparams);
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
class BorhanStorageProfileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a storage profile to the Borhan DB.
	 * 
	 * @param BorhanStorageProfile $storageProfile 
	 * @return BorhanStorageProfile
	 */
	function add(BorhanStorageProfile $storageProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "storageProfile", $storageProfile->toParams());
		$this->client->queueServiceActionCall("storageprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanStorageProfile");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $storageId 
	 * @param int $status 
	 * @return 
	 */
	function updateStatus($storageId, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "storageId", $storageId);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("storageprofile", "updateStatus", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Get storage profile by id
	 * 
	 * @param int $storageProfileId 
	 * @return BorhanStorageProfile
	 */
	function get($storageProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "storageProfileId", $storageProfileId);
		$this->client->queueServiceActionCall("storageprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanStorageProfile");
		return $resultObject;
	}

	/**
	 * Update storage profile by id
	 * 
	 * @param int $storageProfileId 
	 * @param BorhanStorageProfile $storageProfile Id
	 * @return BorhanStorageProfile
	 */
	function update($storageProfileId, BorhanStorageProfile $storageProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "storageProfileId", $storageProfileId);
		$this->client->addParam($kparams, "storageProfile", $storageProfile->toParams());
		$this->client->queueServiceActionCall("storageprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanStorageProfile");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param BorhanStorageProfileFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanStorageProfileListResponse
	 */
	function listAction(BorhanStorageProfileFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("storageprofile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanStorageProfileListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSyndicationFeedService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Syndication Feed
	 * 
	 * @param BorhanBaseSyndicationFeed $syndicationFeed 
	 * @return BorhanBaseSyndicationFeed
	 */
	function add(BorhanBaseSyndicationFeed $syndicationFeed)
	{
		$kparams = array();
		$this->client->addParam($kparams, "syndicationFeed", $syndicationFeed->toParams());
		$this->client->queueServiceActionCall("syndicationfeed", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseSyndicationFeed");
		return $resultObject;
	}

	/**
	 * Get Syndication Feed by ID
	 * 
	 * @param string $id 
	 * @return BorhanBaseSyndicationFeed
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("syndicationfeed", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseSyndicationFeed");
		return $resultObject;
	}

	/**
	 * Update Syndication Feed by ID
	 * 
	 * @param string $id 
	 * @param BorhanBaseSyndicationFeed $syndicationFeed 
	 * @return BorhanBaseSyndicationFeed
	 */
	function update($id, BorhanBaseSyndicationFeed $syndicationFeed)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "syndicationFeed", $syndicationFeed->toParams());
		$this->client->queueServiceActionCall("syndicationfeed", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseSyndicationFeed");
		return $resultObject;
	}

	/**
	 * Delete Syndication Feed by ID
	 * 
	 * @param string $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("syndicationfeed", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List Syndication Feeds by filter with paging support
	 * 
	 * @param BorhanBaseSyndicationFeedFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanBaseSyndicationFeedListResponse
	 */
	function listAction(BorhanBaseSyndicationFeedFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("syndicationfeed", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseSyndicationFeedListResponse");
		return $resultObject;
	}

	/**
	 * Get entry count for a syndication feed
	 * 
	 * @param string $feedId 
	 * @return BorhanSyndicationFeedEntryCount
	 */
	function getEntryCount($feedId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "feedId", $feedId);
		$this->client->queueServiceActionCall("syndicationfeed", "getEntryCount", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSyndicationFeedEntryCount");
		return $resultObject;
	}

	/**
	 * Request conversion for all entries that doesnt have the required flavor param
	 returns a comma-separated ids of conversion jobs
	 * 
	 * @param string $feedId 
	 * @return string
	 */
	function requestConversion($feedId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "feedId", $feedId);
		$this->client->queueServiceActionCall("syndicationfeed", "requestConversion", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanSystemService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @return bool
	 */
	function ping()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("system", "ping", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @return bool
	 */
	function pingDatabase()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("system", "pingDatabase", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @return int
	 */
	function getTime()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("system", "getTime", $kparams);
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
class BorhanThumbAssetService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add thumbnail asset
	 * 
	 * @param string $entryId 
	 * @param BorhanThumbAsset $thumbAsset 
	 * @return BorhanThumbAsset
	 */
	function add($entryId, BorhanThumbAsset $thumbAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "thumbAsset", $thumbAsset->toParams());
		$this->client->queueServiceActionCall("thumbasset", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	/**
	 * Update content of thumbnail asset
	 * 
	 * @param string $id 
	 * @param BorhanContentResource $contentResource 
	 * @return BorhanThumbAsset
	 */
	function setContent($id, BorhanContentResource $contentResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("thumbasset", "setContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	/**
	 * Update thumbnail asset
	 * 
	 * @param string $id 
	 * @param BorhanThumbAsset $thumbAsset 
	 * @return BorhanThumbAsset
	 */
	function update($id, BorhanThumbAsset $thumbAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "thumbAsset", $thumbAsset->toParams());
		$this->client->queueServiceActionCall("thumbasset", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	/**
	 * Serves thumbnail by entry id and thumnail params id
	 * 
	 * @param string $entryId 
	 * @param int $thumbParamId If not set, default thumbnail will be used.
	 * @return file
	 */
	function serveByEntryId($entryId, $thumbParamId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "thumbParamId", $thumbParamId);
		$this->client->queueServiceActionCall("thumbasset", "serveByEntryId", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Serves thumbnail by its id
	 * 
	 * @param string $thumbAssetId 
	 * @param int $version 
	 * @param BorhanThumbParams $thumbParams 
	 * @param BorhanThumbnailServeOptions $options 
	 * @return file
	 */
	function serve($thumbAssetId, $version = null, BorhanThumbParams $thumbParams = null, BorhanThumbnailServeOptions $options = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "thumbAssetId", $thumbAssetId);
		$this->client->addParam($kparams, "version", $version);
		if ($thumbParams !== null)
			$this->client->addParam($kparams, "thumbParams", $thumbParams->toParams());
		if ($options !== null)
			$this->client->addParam($kparams, "options", $options->toParams());
		$this->client->queueServiceActionCall("thumbasset", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Tags the thumbnail as DEFAULT_THUMB and removes that tag from all other thumbnail assets of the entry.
	 Create a new file sync link on the entry thumbnail that points to the thumbnail asset file sync.
	 * 
	 * @param string $thumbAssetId 
	 * @return 
	 */
	function setAsDefault($thumbAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall("thumbasset", "setAsDefault", $kparams);
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
	 * @param string $entryId 
	 * @param int $destThumbParamsId Indicate the id of the ThumbParams to be generate this thumbnail by
	 * @return BorhanThumbAsset
	 */
	function generateByEntryId($entryId, $destThumbParamsId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "destThumbParamsId", $destThumbParamsId);
		$this->client->queueServiceActionCall("thumbasset", "generateByEntryId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $entryId 
	 * @param BorhanThumbParams $thumbParams 
	 * @param string $sourceAssetId Id of the source asset (flavor or thumbnail) to be used as source for the thumbnail generation
	 * @return BorhanThumbAsset
	 */
	function generate($entryId, BorhanThumbParams $thumbParams, $sourceAssetId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "thumbParams", $thumbParams->toParams());
		$this->client->addParam($kparams, "sourceAssetId", $sourceAssetId);
		$this->client->queueServiceActionCall("thumbasset", "generate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $thumbAssetId 
	 * @return BorhanThumbAsset
	 */
	function regenerate($thumbAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall("thumbasset", "regenerate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $thumbAssetId 
	 * @return BorhanThumbAsset
	 */
	function get($thumbAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall("thumbasset", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $entryId 
	 * @return array
	 */
	function getByEntryId($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("thumbasset", "getByEntryId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * List Thumbnail Assets by filter and pager
	 * 
	 * @param BorhanAssetFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanThumbAssetListResponse
	 */
	function listAction(BorhanAssetFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("thumbasset", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAssetListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $entryId 
	 * @param string $url 
	 * @return BorhanThumbAsset
	 */
	function addFromUrl($entryId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("thumbasset", "addFromUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $entryId 
	 * @param file $fileData 
	 * @return BorhanThumbAsset
	 */
	function addFromImage($entryId, $fileData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("thumbasset", "addFromImage", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $thumbAssetId 
	 * @return 
	 */
	function delete($thumbAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall("thumbasset", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Get download URL for the asset
	 * 
	 * @param string $id 
	 * @param int $storageId 
	 * @param BorhanThumbParams $thumbParams 
	 * @return string
	 */
	function getUrl($id, $storageId = null, BorhanThumbParams $thumbParams = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "storageId", $storageId);
		if ($thumbParams !== null)
			$this->client->addParam($kparams, "thumbParams", $thumbParams->toParams());
		$this->client->queueServiceActionCall("thumbasset", "getUrl", $kparams);
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
		$this->client->queueServiceActionCall("thumbasset", "getRemotePaths", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanRemotePathListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanThumbParamsOutputService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Get thumb params output object by ID
	 * 
	 * @param int $id 
	 * @return BorhanThumbParamsOutput
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("thumbparamsoutput", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbParamsOutput");
		return $resultObject;
	}

	/**
	 * List thumb params output objects by filter and pager
	 * 
	 * @param BorhanThumbParamsOutputFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanThumbParamsOutputListResponse
	 */
	function listAction(BorhanThumbParamsOutputFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("thumbparamsoutput", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbParamsOutputListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanThumbParamsService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Thumb Params
	 * 
	 * @param BorhanThumbParams $thumbParams 
	 * @return BorhanThumbParams
	 */
	function add(BorhanThumbParams $thumbParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "thumbParams", $thumbParams->toParams());
		$this->client->queueServiceActionCall("thumbparams", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbParams");
		return $resultObject;
	}

	/**
	 * Get Thumb Params by ID
	 * 
	 * @param int $id 
	 * @return BorhanThumbParams
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("thumbparams", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbParams");
		return $resultObject;
	}

	/**
	 * Update Thumb Params by ID
	 * 
	 * @param int $id 
	 * @param BorhanThumbParams $thumbParams 
	 * @return BorhanThumbParams
	 */
	function update($id, BorhanThumbParams $thumbParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "thumbParams", $thumbParams->toParams());
		$this->client->queueServiceActionCall("thumbparams", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbParams");
		return $resultObject;
	}

	/**
	 * Delete Thumb Params by ID
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("thumbparams", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List Thumb Params by filter with paging support (By default - all system default params will be listed too)
	 * 
	 * @param BorhanThumbParamsFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanThumbParamsListResponse
	 */
	function listAction(BorhanThumbParamsFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("thumbparams", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbParamsListResponse");
		return $resultObject;
	}

	/**
	 * Get Thumb Params by Conversion Profile ID
	 * 
	 * @param int $conversionProfileId 
	 * @return array
	 */
	function getByConversionProfileId($conversionProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("thumbparams", "getByConversionProfileId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanUiConfService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * UIConf Add action allows you to add a UIConf to Borhan DB
	 * 
	 * @param BorhanUiConf $uiConf Mandatory input parameter of type BorhanUiConf
	 * @return BorhanUiConf
	 */
	function add(BorhanUiConf $uiConf)
	{
		$kparams = array();
		$this->client->addParam($kparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("uiconf", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConf");
		return $resultObject;
	}

	/**
	 * Update an existing UIConf
	 * 
	 * @param int $id 
	 * @param BorhanUiConf $uiConf 
	 * @return BorhanUiConf
	 */
	function update($id, BorhanUiConf $uiConf)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("uiconf", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConf");
		return $resultObject;
	}

	/**
	 * Retrieve a UIConf by id
	 * 
	 * @param int $id 
	 * @return BorhanUiConf
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("uiconf", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConf");
		return $resultObject;
	}

	/**
	 * Delete an existing UIConf
	 * 
	 * @param int $id 
	 * @return 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("uiconf", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Clone an existing UIConf
	 * 
	 * @param int $id 
	 * @return BorhanUiConf
	 */
	function cloneAction($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("uiconf", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConf");
		return $resultObject;
	}

	/**
	 * Retrieve a list of available template UIConfs
	 * 
	 * @param BorhanUiConfFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanUiConfListResponse
	 */
	function listTemplates(BorhanUiConfFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("uiconf", "listTemplates", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConfListResponse");
		return $resultObject;
	}

	/**
	 * Retrieve a list of available UIConfs
	 * 
	 * @param BorhanUiConfFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanUiConfListResponse
	 */
	function listAction(BorhanUiConfFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("uiconf", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConfListResponse");
		return $resultObject;
	}

	/**
	 * Retrieve a list of all available versions by object type
	 * 
	 * @return array
	 */
	function getAvailableTypes()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("uiconf", "getAvailableTypes", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanUploadService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @param file $fileData The file data
	 * @return string
	 */
	function upload($fileData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("upload", "upload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $fileName 
	 * @return BorhanUploadResponse
	 */
	function getUploadedFileTokenByFileName($fileName)
	{
		$kparams = array();
		$this->client->addParam($kparams, "fileName", $fileName);
		$this->client->queueServiceActionCall("upload", "getUploadedFileTokenByFileName", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUploadResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanUploadTokenService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds new upload token to upload a file
	 * 
	 * @param BorhanUploadToken $uploadToken 
	 * @return BorhanUploadToken
	 */
	function add(BorhanUploadToken $uploadToken = null)
	{
		$kparams = array();
		if ($uploadToken !== null)
			$this->client->addParam($kparams, "uploadToken", $uploadToken->toParams());
		$this->client->queueServiceActionCall("uploadtoken", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUploadToken");
		return $resultObject;
	}

	/**
	 * Get upload token by id
	 * 
	 * @param string $uploadTokenId 
	 * @return BorhanUploadToken
	 */
	function get($uploadTokenId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("uploadtoken", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUploadToken");
		return $resultObject;
	}

	/**
	 * Upload a file using the upload token id, returns an error on failure (an exception will be thrown when using one of the Borhan clients)
	 * 
	 * @param string $uploadTokenId 
	 * @param file $fileData 
	 * @param bool $resume 
	 * @param bool $finalChunk 
	 * @param float $resumeAt 
	 * @return BorhanUploadToken
	 */
	function upload($uploadTokenId, $fileData, $resume = false, $finalChunk = true, $resumeAt = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->addParam($kparams, "resume", $resume);
		$this->client->addParam($kparams, "finalChunk", $finalChunk);
		$this->client->addParam($kparams, "resumeAt", $resumeAt);
		$this->client->queueServiceActionCall("uploadtoken", "upload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUploadToken");
		return $resultObject;
	}

	/**
	 * Deletes the upload token by upload token id
	 * 
	 * @param string $uploadTokenId 
	 * @return 
	 */
	function delete($uploadTokenId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("uploadtoken", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * List upload token by filter with pager support. 
	 When using a user session the service will be restricted to users objects only.
	 * 
	 * @param BorhanUploadTokenFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanUploadTokenListResponse
	 */
	function listAction(BorhanUploadTokenFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("uploadtoken", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUploadTokenListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanUserRoleService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new user role object to the account.
	 * 
	 * @param BorhanUserRole $userRole A new role
	 * @return BorhanUserRole
	 */
	function add(BorhanUserRole $userRole)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRole", $userRole->toParams());
		$this->client->queueServiceActionCall("userrole", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserRole");
		return $resultObject;
	}

	/**
	 * Retrieves a user role object using its ID.
	 * 
	 * @param int $userRoleId The user role's unique identifier
	 * @return BorhanUserRole
	 */
	function get($userRoleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRoleId", $userRoleId);
		$this->client->queueServiceActionCall("userrole", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserRole");
		return $resultObject;
	}

	/**
	 * Updates an existing user role object.
	 * 
	 * @param int $userRoleId The user role's unique identifier
	 * @param BorhanUserRole $userRole Id The user role's unique identifier
	 * @return BorhanUserRole
	 */
	function update($userRoleId, BorhanUserRole $userRole)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRoleId", $userRoleId);
		$this->client->addParam($kparams, "userRole", $userRole->toParams());
		$this->client->queueServiceActionCall("userrole", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserRole");
		return $resultObject;
	}

	/**
	 * Deletes an existing user role object.
	 * 
	 * @param int $userRoleId The user role's unique identifier
	 * @return BorhanUserRole
	 */
	function delete($userRoleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRoleId", $userRoleId);
		$this->client->queueServiceActionCall("userrole", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserRole");
		return $resultObject;
	}

	/**
	 * Lists user role objects that are associated with an account.
	 Blocked user roles are listed unless you use a filter to exclude them.
	 Deleted user roles are not listed unless you use a filter to include them.
	 * 
	 * @param BorhanUserRoleFilter $filter A filter used to exclude specific types of user roles
	 * @param BorhanFilterPager $pager A limit for the number of records to display on a page
	 * @return BorhanUserRoleListResponse
	 */
	function listAction(BorhanUserRoleFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("userrole", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserRoleListResponse");
		return $resultObject;
	}

	/**
	 * Creates a new user role object that is a duplicate of an existing role.
	 * 
	 * @param int $userRoleId The user role's unique identifier
	 * @return BorhanUserRole
	 */
	function cloneAction($userRoleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRoleId", $userRoleId);
		$this->client->queueServiceActionCall("userrole", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserRole");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanUserService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new user to an existing account in the Borhan database.
	 Input param $id is the unique identifier in the partner's system.
	 * 
	 * @param BorhanUser $user The new user
	 * @return BorhanUser
	 */
	function add(BorhanUser $user)
	{
		$kparams = array();
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("user", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	/**
	 * Updates an existing user object.
	 You can also use this action to update the userId.
	 * 
	 * @param string $userId The user's unique identifier in the partner's system
	 * @param BorhanUser $user Id The user's unique identifier in the partner's system
	 * @return BorhanUser
	 */
	function update($userId, BorhanUser $user)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("user", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	/**
	 * Retrieves a user object for a specified user ID.
	 * 
	 * @param string $userId The user's unique identifier in the partner's system
	 * @return BorhanUser
	 */
	function get($userId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	/**
	 * Retrieves a user object for a user's login ID and partner ID.
	 A login ID is the email address used by a user to log into the system.
	 * 
	 * @param string $loginId The user's email address that identifies the user for login
	 * @return BorhanUser
	 */
	function getByLoginId($loginId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->queueServiceActionCall("user", "getByLoginId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	/**
	 * Deletes a user from a partner account.
	 * 
	 * @param string $userId The user's unique identifier in the partner's system
	 * @return BorhanUser
	 */
	function delete($userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	/**
	 * Lists user objects that are associated with an account.
	 Blocked users are listed unless you use a filter to exclude them.
	 Deleted users are not listed unless you use a filter to include them.
	 * 
	 * @param BorhanUserFilter $filter A filter used to exclude specific types of users
	 * @param BorhanFilterPager $pager A limit for the number of records to display on a page
	 * @return BorhanUserListResponse
	 */
	function listAction(BorhanUserFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("user", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserListResponse");
		return $resultObject;
	}

	/**
	 * Notifies that a user is banned from an account.
	 * 
	 * @param string $userId The user's unique identifier in the partner's system
	 * @return 
	 */
	function notifyBan($userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "notifyBan", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Logs a user into a partner account with a partner ID, a partner user ID (puser), and a user password.
	 * 
	 * @param int $partnerId The identifier of the partner account
	 * @param string $userId The user's unique identifier in the partner's system
	 * @param string $password The user's password
	 * @param int $expiry The requested time (in seconds) before the generated KS expires (By default, a KS expires after 24 hours).
	 * @param string $privileges Special privileges
	 * @return string
	 */
	function login($partnerId, $userId, $password, $expiry = 86400, $privileges = "*")
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("user", "login", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Logs a user into a partner account with a user login ID and a user password.
	 * 
	 * @param string $loginId The user's email address that identifies the user for login
	 * @param string $password The user's password
	 * @param int $partnerId The identifier of the partner account
	 * @param int $expiry The requested time (in seconds) before the generated KS expires (By default, a KS expires after 24 hours).
	 * @param string $privileges Special privileges
	 * @return string
	 */
	function loginByLoginId($loginId, $password, $partnerId = null, $expiry = 86400, $privileges = "*")
	{
		$kparams = array();
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("user", "loginByLoginId", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Updates a user's login data: email, password, name.
	 * 
	 * @param string $oldLoginId The user's current email address that identified the user for login
	 * @param string $password The user's current email address that identified the user for login
	 * @param string $newLoginId Optional, The user's email address that will identify the user for login
	 * @param string $newPassword Optional, The user's new password
	 * @param string $newFirstName Optional, The user's new first name
	 * @param string $newLastName Optional, The user's new last name
	 * @return 
	 */
	function updateLoginData($oldLoginId, $password, $newLoginId = "", $newPassword = "", $newFirstName = null, $newLastName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "oldLoginId", $oldLoginId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "newLoginId", $newLoginId);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->addParam($kparams, "newFirstName", $newFirstName);
		$this->client->addParam($kparams, "newLastName", $newLastName);
		$this->client->queueServiceActionCall("user", "updateLoginData", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Reset user's password and send the user an email to generate a new one.
	 * 
	 * @param string $email The user's email address (login email)
	 * @return 
	 */
	function resetPassword($email)
	{
		$kparams = array();
		$this->client->addParam($kparams, "email", $email);
		$this->client->queueServiceActionCall("user", "resetPassword", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Set initial users password
	 * 
	 * @param string $hashKey The hash key used to identify the user (retrieved by email)
	 * @param string $newPassword The new password to set for the user
	 * @return 
	 */
	function setInitialPassword($hashKey, $newPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hashKey", $hashKey);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("user", "setInitialPassword", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	/**
	 * Enables a user to log into a partner account using an email address and a password
	 * 
	 * @param string $userId The user's unique identifier in the partner's system
	 * @param string $loginId The user's email address that identifies the user for login
	 * @param string $password The user's password
	 * @return BorhanUser
	 */
	function enableLogin($userId, $loginId, $password = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("user", "enableLogin", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	/**
	 * Disables a user's ability to log into a partner account using an email address and a password.
	 You may use either a userId or a loginId parameter for this action.
	 * 
	 * @param string $userId The user's unique identifier in the partner's system
	 * @param string $loginId The user's email address that identifies the user for login
	 * @return BorhanUser
	 */
	function disableLogin($userId = null, $loginId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->queueServiceActionCall("user", "disableLogin", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	/**
	 * Index an entry by id.
	 * 
	 * @param string $id 
	 * @param bool $shouldUpdate 
	 * @return string
	 */
	function index($id, $shouldUpdate = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "shouldUpdate", $shouldUpdate);
		$this->client->queueServiceActionCall("user", "index", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param file $fileData 
	 * @param BorhanBulkUploadJobData $bulkUploadData 
	 * @param BorhanBulkUploadUserData $bulkUploadUserData 
	 * @return BorhanBulkUpload
	 */
	function addFromBulkUpload($fileData, BorhanBulkUploadJobData $bulkUploadData = null, BorhanBulkUploadUserData $bulkUploadUserData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadUserData !== null)
			$this->client->addParam($kparams, "bulkUploadUserData", $bulkUploadUserData->toParams());
		$this->client->queueServiceActionCall("user", "addFromBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUpload");
		return $resultObject;
	}

	/**
	 * Action which checks whther user login
	 * 
	 * @param BorhanUserLoginDataFilter $filter 
	 * @return bool
	 */
	function checkLoginDataExists(BorhanUserLoginDataFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("user", "checkLoginDataExists", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanWidgetService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new widget, can be attached to entry or kshow
	 SourceWidget is ignored.
	 * 
	 * @param BorhanWidget $widget 
	 * @return BorhanWidget
	 */
	function add(BorhanWidget $widget)
	{
		$kparams = array();
		$this->client->addParam($kparams, "widget", $widget->toParams());
		$this->client->queueServiceActionCall("widget", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanWidget");
		return $resultObject;
	}

	/**
	 * Update exisiting widget
	 * 
	 * @param string $id 
	 * @param BorhanWidget $widget 
	 * @return BorhanWidget
	 */
	function update($id, BorhanWidget $widget)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "widget", $widget->toParams());
		$this->client->queueServiceActionCall("widget", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanWidget");
		return $resultObject;
	}

	/**
	 * Get widget by id
	 * 
	 * @param string $id 
	 * @return BorhanWidget
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("widget", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanWidget");
		return $resultObject;
	}

	/**
	 * Add widget based on existing widget.
	 Must provide valid sourceWidgetId
	 * 
	 * @param BorhanWidget $widget 
	 * @return BorhanWidget
	 */
	function cloneAction(BorhanWidget $widget)
	{
		$kparams = array();
		$this->client->addParam($kparams, "widget", $widget->toParams());
		$this->client->queueServiceActionCall("widget", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanWidget");
		return $resultObject;
	}

	/**
	 * Retrieve a list of available widget depends on the filter given
	 * 
	 * @param BorhanWidgetFilter $filter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanWidgetListResponse
	 */
	function listAction(BorhanWidgetFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("widget", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanWidgetListResponse");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanXInternalService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Creates new download job for multiple entry ids (comma separated), an email will be sent when the job is done
	 This sevice support the following entries: 
	 - MediaEntry
	 - Video will be converted using the flavor params id
	 - Audio will be downloaded as MP3
	 - Image will be downloaded as Jpeg
	 - MixEntry will be flattened using the flavor params id
	 - Other entry types are not supported
	 Returns the admin email that the email message will be sent to
	 * 
	 * @param string $entryIds Comma separated list of entry ids
	 * @param string $flavorParamsId 
	 * @return string
	 */
	function xAddBulkDownload($entryIds, $flavorParamsId = "")
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryIds", $entryIds);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("xinternal", "xAddBulkDownload", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanClient extends BorhanClientBase
{
	/**
	 * @var string
	 */
	protected $apiVersion = '3.1.6';

	/**
	 * Manage access control profiles
	 * @var BorhanAccessControlProfileService
	 */
	public $accessControlProfile = null;

	/**
	 * Add & Manage Access Controls
	 * @var BorhanAccessControlService
	 */
	public $accessControl = null;

	/**
	 * Manage details for the administrative user
	 * @var BorhanAdminUserService
	 */
	public $adminUser = null;

	/**
	 * Base Entry Service
	 * @var BorhanBaseEntryService
	 */
	public $baseEntry = null;

	/**
	 * Bulk upload service is used to upload & manage bulk uploads using CSV files.
	 *  This service manages only entry bulk uploads.
	 * @var BorhanBulkUploadService
	 */
	public $bulkUpload = null;

	/**
	 * Add & Manage CategoryEntry - assign entry to category
	 * @var BorhanCategoryEntryService
	 */
	public $categoryEntry = null;

	/**
	 * Add & Manage Categories
	 * @var BorhanCategoryService
	 */
	public $category = null;

	/**
	 * Add & Manage CategoryUser - membership of a user in a category
	 * @var BorhanCategoryUserService
	 */
	public $categoryUser = null;

	/**
	 * Manage the connection between Conversion Profiles and Asset Params
	 * @var BorhanConversionProfileAssetParamsService
	 */
	public $conversionProfileAssetParams = null;

	/**
	 * Add & Manage Conversion Profiles
	 * @var BorhanConversionProfileService
	 */
	public $conversionProfile = null;

	/**
	 * Data service lets you manage data content (textual content)
	 * @var BorhanDataService
	 */
	public $data = null;

	/**
	 * Document service
	 * @var BorhanDocumentService
	 */
	public $document = null;

	/**
	 * EmailIngestionProfile service lets you manage email ingestion profile records
	 * @var BorhanEmailIngestionProfileService
	 */
	public $EmailIngestionProfile = null;

	/**
	 * Manage file assets
	 * @var BorhanFileAssetService
	 */
	public $fileAsset = null;

	/**
	 * Retrieve information and invoke actions on Flavor Asset
	 * @var BorhanFlavorAssetService
	 */
	public $flavorAsset = null;

	/**
	 * Flavor Params Output service
	 * @var BorhanFlavorParamsOutputService
	 */
	public $flavorParamsOutput = null;

	/**
	 * Add & Manage Flavor Params
	 * @var BorhanFlavorParamsService
	 */
	public $flavorParams = null;

	/**
	 * Manage live channel segments
	 * @var BorhanLiveChannelSegmentService
	 */
	public $liveChannelSegment = null;

	/**
	 * Live Channel service lets you manage live channels
	 * @var BorhanLiveChannelService
	 */
	public $liveChannel = null;

	/**
	 * Live Stream service lets you manage live stream entries
	 * @var BorhanLiveStreamService
	 */
	public $liveStream = null;

	/**
	 * Media Info service
	 * @var BorhanMediaInfoService
	 */
	public $mediaInfo = null;

	/**
	 * Manage media servers
	 * @var BorhanMediaServerService
	 */
	public $mediaServer = null;

	/**
	 * Media service lets you upload and manage media files (images / videos & audio)
	 * @var BorhanMediaService
	 */
	public $media = null;

	/**
	 * A Mix is an XML unique format invented by Borhan, it allows the user to create a mix of videos and images, in and out points, transitions, text overlays, soundtrack, effects and much more...
	 *  Mixing service lets you create a new mix, manage its metadata and make basic manipulations.
	 * @var BorhanMixingService
	 */
	public $mixing = null;

	/**
	 * Notification Service
	 * @var BorhanNotificationService
	 */
	public $notification = null;

	/**
	 * Partner service allows you to change/manage your partner personal details and settings as well
	 * @var BorhanPartnerService
	 */
	public $partner = null;

	/**
	 * PermissionItem service lets you create and manage permission items
	 * @var BorhanPermissionItemService
	 */
	public $permissionItem = null;

	/**
	 * Permission service lets you create and manage user permissions
	 * @var BorhanPermissionService
	 */
	public $permission = null;

	/**
	 * Playlist service lets you create,manage and play your playlists
	 *  Playlists could be static (containing a fixed list of entries) or dynamic (baseed on a filter)
	 * @var BorhanPlaylistService
	 */
	public $playlist = null;

	/**
	 * Api for getting reports data by the report type and some inputFilter
	 * @var BorhanReportService
	 */
	public $report = null;

	/**
	 * Expose the schema definitions for syndication MRSS, bulk upload XML and other schema types.
	 * @var BorhanSchemaService
	 */
	public $schema = null;

	/**
	 * Search service allows you to search for media in various media providers
	 *  This service is being used mostly by the CW component
	 * @var BorhanSearchService
	 */
	public $search = null;

	/**
	 * Session service
	 * @var BorhanSessionService
	 */
	public $session = null;

	/**
	 * Stats Service
	 * @var BorhanStatsService
	 */
	public $stats = null;

	/**
	 * Storage Profiles service
	 * @var BorhanStorageProfileService
	 */
	public $storageProfile = null;

	/**
	 * Add & Manage Syndication Feeds
	 * @var BorhanSyndicationFeedService
	 */
	public $syndicationFeed = null;

	/**
	 * System service is used for internal system helpers & to retrieve system level information
	 * @var BorhanSystemService
	 */
	public $system = null;

	/**
	 * Retrieve information and invoke actions on Thumb Asset
	 * @var BorhanThumbAssetService
	 */
	public $thumbAsset = null;

	/**
	 * Thumbnail Params Output service
	 * @var BorhanThumbParamsOutputService
	 */
	public $thumbParamsOutput = null;

	/**
	 * Add & Manage Thumb Params
	 * @var BorhanThumbParamsService
	 */
	public $thumbParams = null;

	/**
	 * UiConf service lets you create and manage your UIConfs for the various flash components
	 *  This service is used by the BMC-ApplicationStudio
	 * @var BorhanUiConfService
	 */
	public $uiConf = null;

	/**
	 * 
	 * @var BorhanUploadService
	 */
	public $upload = null;

	/**
	 * 
	 * @var BorhanUploadTokenService
	 */
	public $uploadToken = null;

	/**
	 * UserRole service lets you create and manage user roles
	 * @var BorhanUserRoleService
	 */
	public $userRole = null;

	/**
	 * Manage partner users on Borhan's side
	 *  The userId in borhan is the unique Id in the partner's system, and the [partnerId,Id] couple are unique key in borhan's DB
	 * @var BorhanUserService
	 */
	public $user = null;

	/**
	 * Widget service for full widget management
	 * @var BorhanWidgetService
	 */
	public $widget = null;

	/**
	 * Internal Service is used for actions that are used internally in Borhan applications and might be changed in the future without any notice.
	 * @var BorhanXInternalService
	 */
	public $xInternal = null;

	/**
	 * Borhan client constructor
	 *
	 * @param BorhanConfiguration $config
	 */
	public function __construct(BorhanConfiguration $config)
	{
		parent::__construct($config);
		
		$this->accessControlProfile = new BorhanAccessControlProfileService($this);
		$this->accessControl = new BorhanAccessControlService($this);
		$this->adminUser = new BorhanAdminUserService($this);
		$this->baseEntry = new BorhanBaseEntryService($this);
		$this->bulkUpload = new BorhanBulkUploadService($this);
		$this->categoryEntry = new BorhanCategoryEntryService($this);
		$this->category = new BorhanCategoryService($this);
		$this->categoryUser = new BorhanCategoryUserService($this);
		$this->conversionProfileAssetParams = new BorhanConversionProfileAssetParamsService($this);
		$this->conversionProfile = new BorhanConversionProfileService($this);
		$this->data = new BorhanDataService($this);
		$this->document = new BorhanDocumentService($this);
		$this->EmailIngestionProfile = new BorhanEmailIngestionProfileService($this);
		$this->fileAsset = new BorhanFileAssetService($this);
		$this->flavorAsset = new BorhanFlavorAssetService($this);
		$this->flavorParamsOutput = new BorhanFlavorParamsOutputService($this);
		$this->flavorParams = new BorhanFlavorParamsService($this);
		$this->liveChannelSegment = new BorhanLiveChannelSegmentService($this);
		$this->liveChannel = new BorhanLiveChannelService($this);
		$this->liveStream = new BorhanLiveStreamService($this);
		$this->mediaInfo = new BorhanMediaInfoService($this);
		$this->mediaServer = new BorhanMediaServerService($this);
		$this->media = new BorhanMediaService($this);
		$this->mixing = new BorhanMixingService($this);
		$this->notification = new BorhanNotificationService($this);
		$this->partner = new BorhanPartnerService($this);
		$this->permissionItem = new BorhanPermissionItemService($this);
		$this->permission = new BorhanPermissionService($this);
		$this->playlist = new BorhanPlaylistService($this);
		$this->report = new BorhanReportService($this);
		$this->schema = new BorhanSchemaService($this);
		$this->search = new BorhanSearchService($this);
		$this->session = new BorhanSessionService($this);
		$this->stats = new BorhanStatsService($this);
		$this->storageProfile = new BorhanStorageProfileService($this);
		$this->syndicationFeed = new BorhanSyndicationFeedService($this);
		$this->system = new BorhanSystemService($this);
		$this->thumbAsset = new BorhanThumbAssetService($this);
		$this->thumbParamsOutput = new BorhanThumbParamsOutputService($this);
		$this->thumbParams = new BorhanThumbParamsService($this);
		$this->uiConf = new BorhanUiConfService($this);
		$this->upload = new BorhanUploadService($this);
		$this->uploadToken = new BorhanUploadTokenService($this);
		$this->userRole = new BorhanUserRoleService($this);
		$this->user = new BorhanUserService($this);
		$this->widget = new BorhanWidgetService($this);
		$this->xInternal = new BorhanXInternalService($this);
	}
	
}

