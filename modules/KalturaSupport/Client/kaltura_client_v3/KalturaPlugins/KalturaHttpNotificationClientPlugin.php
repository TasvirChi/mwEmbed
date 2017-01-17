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
require_once(dirname(__FILE__) . "/BorhanEventNotificationClientPlugin.php");

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationAuthenticationMethod
{
	const ANYSAFE = -18;
	const ANY = -17;
	const BASIC = 1;
	const DIGEST = 2;
	const GSSNEGOTIATE = 4;
	const NTLM = 8;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationMethod
{
	const GET = 1;
	const POST = 2;
	const PUT = 3;
	const DELETE = 4;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationSslVersion
{
	const V2 = 2;
	const V3 = 3;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationCertificateType
{
	const DER = "DER";
	const ENG = "ENG";
	const PEM = "PEM";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationSslKeyType
{
	const DER = "DER";
	const ENG = "ENG";
	const PEM = "PEM";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationTemplateOrderBy
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
class BorhanHttpNotification extends BorhanObjectBase
{
	/**
	 * Object that triggered the notification
	 * 	 
	 *
	 * @var BorhanObjectBase
	 */
	public $object;

	/**
	 * Object type that triggered the notification
	 * 	 
	 *
	 * @var BorhanEventNotificationEventObjectType
	 */
	public $eventObjectType = null;

	/**
	 * ID of the batch job that execute the notification
	 * 	 
	 *
	 * @var int
	 */
	public $eventNotificationJobId = null;

	/**
	 * ID of the template that triggered the notification
	 * 	 
	 *
	 * @var int
	 */
	public $templateId = null;

	/**
	 * Name of the template that triggered the notification
	 * 	 
	 *
	 * @var string
	 */
	public $templateName = null;

	/**
	 * System name of the template that triggered the notification
	 * 	 
	 *
	 * @var string
	 */
	public $templateSystemName = null;

	/**
	 * Ecent type that triggered the notification
	 * 	 
	 *
	 * @var BorhanEventNotificationEventType
	 */
	public $eventType = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanHttpNotificationData extends BorhanObjectBase
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationDataFields extends BorhanHttpNotificationData
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationDataText extends BorhanHttpNotificationData
{
	/**
	 * 
	 *
	 * @var BorhanStringValue
	 */
	public $content;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationObjectData extends BorhanHttpNotificationData
{
	/**
	 * Borhan API object type
	 * 	 
	 *
	 * @var string
	 */
	public $apiObjectType = null;

	/**
	 * Data format
	 * 	 
	 *
	 * @var BorhanResponseType
	 */
	public $format = null;

	/**
	 * Ignore null attributes during serialization
	 * 	 
	 *
	 * @var bool
	 */
	public $ignoreNull = null;

	/**
	 * PHP code
	 * 	 
	 *
	 * @var string
	 */
	public $code = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationTemplate extends BorhanEventNotificationTemplate
{
	/**
	 * Remote server URL
	 * 	 
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * Request method.
	 * 	 
	 *
	 * @var BorhanHttpNotificationMethod
	 */
	public $method = null;

	/**
	 * Data to send.
	 * 	 
	 *
	 * @var BorhanHttpNotificationData
	 */
	public $data;

	/**
	 * The maximum number of seconds to allow cURL functions to execute.
	 * 	 
	 *
	 * @var int
	 */
	public $timeout = null;

	/**
	 * The number of seconds to wait while trying to connect.
	 * 	 Must be larger than zero.
	 * 	 
	 *
	 * @var int
	 */
	public $connectTimeout = null;

	/**
	 * A username to use for the connection.
	 * 	 
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * A password to use for the connection.
	 * 	 
	 *
	 * @var string
	 */
	public $password = null;

	/**
	 * The HTTP authentication method to use.
	 * 	 
	 *
	 * @var BorhanHttpNotificationAuthenticationMethod
	 */
	public $authenticationMethod = null;

	/**
	 * The SSL version (2 or 3) to use.
	 * 	 By default PHP will try to determine this itself, although in some cases this must be set manually.
	 * 	 
	 *
	 * @var BorhanHttpNotificationSslVersion
	 */
	public $sslVersion = null;

	/**
	 * SSL certificate to verify the peer with.
	 * 	 
	 *
	 * @var string
	 */
	public $sslCertificate = null;

	/**
	 * The format of the certificate.
	 * 	 
	 *
	 * @var BorhanHttpNotificationCertificateType
	 */
	public $sslCertificateType = null;

	/**
	 * The password required to use the certificate.
	 * 	 
	 *
	 * @var string
	 */
	public $sslCertificatePassword = null;

	/**
	 * The identifier for the crypto engine of the private SSL key specified in ssl key.
	 * 	 
	 *
	 * @var string
	 */
	public $sslEngine = null;

	/**
	 * The identifier for the crypto engine used for asymmetric crypto operations.
	 * 	 
	 *
	 * @var string
	 */
	public $sslEngineDefault = null;

	/**
	 * The key type of the private SSL key specified in ssl key - PEM / DER / ENG.
	 * 	 
	 *
	 * @var BorhanHttpNotificationSslKeyType
	 */
	public $sslKeyType = null;

	/**
	 * Private SSL key.
	 * 	 
	 *
	 * @var string
	 */
	public $sslKey = null;

	/**
	 * The secret password needed to use the private SSL key specified in ssl key.
	 * 	 
	 *
	 * @var string
	 */
	public $sslKeyPassword = null;

	/**
	 * Adds a e-mail custom header
	 * 	 
	 *
	 * @var array of BorhanKeyValue
	 */
	public $customHeaders;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationDispatchJobData extends BorhanEventNotificationDispatchJobData
{
	/**
	 * Remote server URL
	 * 	 
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * Request method.
	 * 	 
	 *
	 * @var BorhanHttpNotificationMethod
	 */
	public $method = null;

	/**
	 * Data to send.
	 * 	 
	 *
	 * @var string
	 */
	public $data = null;

	/**
	 * The maximum number of seconds to allow cURL functions to execute.
	 * 	 
	 *
	 * @var int
	 */
	public $timeout = null;

	/**
	 * The number of seconds to wait while trying to connect.
	 * 	 Must be larger than zero.
	 * 	 
	 *
	 * @var int
	 */
	public $connectTimeout = null;

	/**
	 * A username to use for the connection.
	 * 	 
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * A password to use for the connection.
	 * 	 
	 *
	 * @var string
	 */
	public $password = null;

	/**
	 * The HTTP authentication method to use.
	 * 	 
	 *
	 * @var BorhanHttpNotificationAuthenticationMethod
	 */
	public $authenticationMethod = null;

	/**
	 * The SSL version (2 or 3) to use.
	 * 	 By default PHP will try to determine this itself, although in some cases this must be set manually.
	 * 	 
	 *
	 * @var BorhanHttpNotificationSslVersion
	 */
	public $sslVersion = null;

	/**
	 * SSL certificate to verify the peer with.
	 * 	 
	 *
	 * @var string
	 */
	public $sslCertificate = null;

	/**
	 * The format of the certificate.
	 * 	 
	 *
	 * @var BorhanHttpNotificationCertificateType
	 */
	public $sslCertificateType = null;

	/**
	 * The password required to use the certificate.
	 * 	 
	 *
	 * @var string
	 */
	public $sslCertificatePassword = null;

	/**
	 * The identifier for the crypto engine of the private SSL key specified in ssl key.
	 * 	 
	 *
	 * @var string
	 */
	public $sslEngine = null;

	/**
	 * The identifier for the crypto engine used for asymmetric crypto operations.
	 * 	 
	 *
	 * @var string
	 */
	public $sslEngineDefault = null;

	/**
	 * The key type of the private SSL key specified in ssl key - PEM / DER / ENG.
	 * 	 
	 *
	 * @var BorhanHttpNotificationSslKeyType
	 */
	public $sslKeyType = null;

	/**
	 * Private SSL key.
	 * 	 
	 *
	 * @var string
	 */
	public $sslKey = null;

	/**
	 * The secret password needed to use the private SSL key specified in ssl key.
	 * 	 
	 *
	 * @var string
	 */
	public $sslKeyPassword = null;

	/**
	 * Adds a e-mail custom header
	 * 	 
	 *
	 * @var array of BorhanKeyValue
	 */
	public $customHeaders;

	/**
	 * The secret to sign the notification with
	 * 	 
	 *
	 * @var string
	 */
	public $signSecret = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanHttpNotificationTemplateBaseFilter extends BorhanEventNotificationTemplateFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationTemplateFilter extends BorhanHttpNotificationTemplateBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanHttpNotificationClientPlugin extends BorhanClientPlugin
{
	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return BorhanHttpNotificationClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanHttpNotificationClientPlugin($client);
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'httpNotification';
	}
}

