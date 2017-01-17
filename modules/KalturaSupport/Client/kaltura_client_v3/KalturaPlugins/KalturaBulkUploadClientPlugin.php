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
abstract class BorhanBulkServiceData extends BorhanObjectBase
{

}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanBulkService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Get bulk upload batch job by id
	 * 
	 * @param int $id 
	 * @return BorhanBulkUpload
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload_bulk", "get", $kparams);
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
	 * @param BorhanBulkUploadFilter $bulkUploadFilter 
	 * @param BorhanFilterPager $pager 
	 * @return BorhanBulkUploadListResponse
	 */
	function listAction(BorhanBulkUploadFilter $bulkUploadFilter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($bulkUploadFilter !== null)
			$this->client->addParam($kparams, "bulkUploadFilter", $bulkUploadFilter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("bulkupload_bulk", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUploadListResponse");
		return $resultObject;
	}

	/**
	 * Serve action returns the original file.
	 * 
	 * @param int $id Job id
	 * @return file
	 */
	function serve($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload_bulk", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * ServeLog action returns the log file for the bulk-upload job.
	 * 
	 * @param int $id Job id
	 * @return file
	 */
	function serveLog($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload_bulk", "serveLog", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Aborts the bulk upload and all its child jobs
	 * 
	 * @param int $id Job id
	 * @return BorhanBulkUpload
	 */
	function abort($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload_bulk", "abort", $kparams);
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
class BorhanBulkUploadClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanBulkService
	 */
	public $bulk = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->bulk = new BorhanBulkService($client);
	}

	/**
	 * @return BorhanBulkUploadClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanBulkUploadClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'bulk' => $this->bulk,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'bulkUpload';
	}
}

