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
class BorhanInternalToolsSession extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $partner_id = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $valid_until = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partner_pattern = null;

	/**
	 * 
	 *
	 * @var BorhanSessionType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $error = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $rand = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $user = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privileges = null;


}


/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanBorhanInternalToolsSystemHelperService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * KS from Secure String
	 * 
	 * @param string $str 
	 * @return BorhanInternalToolsSession
	 */
	function fromSecureString($str)
	{
		$kparams = array();
		$this->client->addParam($kparams, "str", $str);
		$this->client->queueServiceActionCall("borhaninternaltools_borhaninternaltoolssystemhelper", "fromSecureString", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanInternalToolsSession");
		return $resultObject;
	}

	/**
	 * From ip to country
	 * 
	 * @param string $remote_addr 
	 * @return string
	 */
	function iptocountry($remote_addr)
	{
		$kparams = array();
		$this->client->addParam($kparams, "remote_addr", $remote_addr);
		$this->client->queueServiceActionCall("borhaninternaltools_borhaninternaltoolssystemhelper", "iptocountry", $kparams);
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
	 * @return string
	 */
	function getRemoteAddress()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("borhaninternaltools_borhaninternaltoolssystemhelper", "getRemoteAddress", $kparams);
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
class BorhanBorhanInternalToolsClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanBorhanInternalToolsSystemHelperService
	 */
	public $BorhanInternalToolsSystemHelper = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->BorhanInternalToolsSystemHelper = new BorhanBorhanInternalToolsSystemHelperService($client);
	}

	/**
	 * @return BorhanBorhanInternalToolsClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanBorhanInternalToolsClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'BorhanInternalToolsSystemHelper' => $this->BorhanInternalToolsSystemHelper,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'BorhanInternalTools';
	}
}

