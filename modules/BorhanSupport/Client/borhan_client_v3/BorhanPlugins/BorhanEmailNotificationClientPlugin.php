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
class BorhanEmailNotificationTemplatePriority
{
	const HIGH = 1;
	const NORMAL = 3;
	const LOW = 5;
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationFormat
{
	const HTML = "1";
	const TEXT = "2";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationRecipientProviderType
{
	const STATIC_LIST = "1";
	const CATEGORY = "2";
	const USER = "3";
}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationTemplateOrderBy
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
class BorhanEmailNotificationRecipient extends BorhanObjectBase
{
	/**
	 * Recipient e-mail address
	 * 	 
	 *
	 * @var BorhanStringValue
	 */
	public $email;

	/**
	 * Recipient name
	 * 	 
	 *
	 * @var BorhanStringValue
	 */
	public $name;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanEmailNotificationRecipientJobData extends BorhanObjectBase
{
	/**
	 * Provider type of the job data.
	 * 	  
	 *
	 * @var BorhanEmailNotificationRecipientProviderType
	 * @readonly
	 */
	public $providerType = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
abstract class BorhanEmailNotificationRecipientProvider extends BorhanObjectBase
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanCategoryUserProviderFilter extends BorhanFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdIn = null;

	/**
	 * 
	 *
	 * @var BorhanCategoryUserStatus
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

	/**
	 * 
	 *
	 * @var BorhanUpdateMethodType
	 */
	public $updateMethodEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateMethodIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $permissionNamesMatchAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $permissionNamesMatchOr = null;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationCategoryRecipientJobData extends BorhanEmailNotificationRecipientJobData
{
	/**
	 * 
	 *
	 * @var BorhanCategoryUserFilter
	 */
	public $categoryUserFilter;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationCategoryRecipientProvider extends BorhanEmailNotificationRecipientProvider
{
	/**
	 * The ID of the category whose subscribers should receive the email notification.
	 * 	 
	 *
	 * @var BorhanStringValue
	 */
	public $categoryId;

	/**
	 * 
	 *
	 * @var BorhanCategoryUserProviderFilter
	 */
	public $categoryUserFilter;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationParameter extends BorhanEventNotificationParameter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationStaticRecipientJobData extends BorhanEmailNotificationRecipientJobData
{
	/**
	 * Email to emails and names
	 * 	 
	 *
	 * @var array of BorhanKeyValue
	 */
	public $emailRecipients;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationStaticRecipientProvider extends BorhanEmailNotificationRecipientProvider
{
	/**
	 * Email to emails and names
	 * 	 
	 *
	 * @var array of BorhanEmailNotificationRecipient
	 */
	public $emailRecipients;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationTemplate extends BorhanEventNotificationTemplate
{
	/**
	 * Define the email body format
	 * 	 
	 *
	 * @var BorhanEmailNotificationFormat
	 */
	public $format = null;

	/**
	 * Define the email subject 
	 * 	 
	 *
	 * @var string
	 */
	public $subject = null;

	/**
	 * Define the email body content
	 * 	 
	 *
	 * @var string
	 */
	public $body = null;

	/**
	 * Define the email sender email
	 * 	 
	 *
	 * @var string
	 */
	public $fromEmail = null;

	/**
	 * Define the email sender name
	 * 	 
	 *
	 * @var string
	 */
	public $fromName = null;

	/**
	 * Email recipient emails and names
	 * 	 
	 *
	 * @var BorhanEmailNotificationRecipientProvider
	 */
	public $to;

	/**
	 * Email recipient emails and names
	 * 	 
	 *
	 * @var BorhanEmailNotificationRecipientProvider
	 */
	public $cc;

	/**
	 * Email recipient emails and names
	 * 	 
	 *
	 * @var BorhanEmailNotificationRecipientProvider
	 */
	public $bcc;

	/**
	 * Default email addresses to whom the reply should be sent. 
	 * 	 
	 *
	 * @var BorhanEmailNotificationRecipientProvider
	 */
	public $replyTo;

	/**
	 * Define the email priority
	 * 	 
	 *
	 * @var BorhanEmailNotificationTemplatePriority
	 */
	public $priority = null;

	/**
	 * Email address that a reading confirmation will be sent
	 * 	 
	 *
	 * @var string
	 */
	public $confirmReadingTo = null;

	/**
	 * Hostname to use in Message-Id and Received headers and as default HELLO string. 
	 * 	 If empty, the value returned by SERVER_NAME is used or 'localhost.localdomain'.
	 * 	 
	 *
	 * @var string
	 */
	public $hostname = null;

	/**
	 * Sets the message ID to be used in the Message-Id header.
	 * 	 If empty, a unique id will be generated.
	 * 	 
	 *
	 * @var string
	 */
	public $messageID = null;

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
class BorhanEmailNotificationUserRecipientJobData extends BorhanEmailNotificationRecipientJobData
{
	/**
	 * 
	 *
	 * @var BorhanUserFilter
	 */
	public $filter;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationUserRecipientProvider extends BorhanEmailNotificationRecipientProvider
{
	/**
	 * 
	 *
	 * @var BorhanUserFilter
	 */
	public $filter;


}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationDispatchJobData extends BorhanEventNotificationDispatchJobData
{
	/**
	 * Define the email sender email
	 * 	 
	 *
	 * @var string
	 */
	public $fromEmail = null;

	/**
	 * Define the email sender name
	 * 	 
	 *
	 * @var string
	 */
	public $fromName = null;

	/**
	 * Email recipient emails and names, key is mail address and value is the name
	 * 	 
	 *
	 * @var BorhanEmailNotificationRecipientJobData
	 */
	public $to;

	/**
	 * Email cc emails and names, key is mail address and value is the name
	 * 	 
	 *
	 * @var BorhanEmailNotificationRecipientJobData
	 */
	public $cc;

	/**
	 * Email bcc emails and names, key is mail address and value is the name
	 * 	 
	 *
	 * @var BorhanEmailNotificationRecipientJobData
	 */
	public $bcc;

	/**
	 * Email addresses that a replies should be sent to, key is mail address and value is the name
	 * 	 
	 *
	 * @var BorhanEmailNotificationRecipientJobData
	 */
	public $replyTo;

	/**
	 * Define the email priority
	 * 	 
	 *
	 * @var BorhanEmailNotificationTemplatePriority
	 */
	public $priority = null;

	/**
	 * Email address that a reading confirmation will be sent to
	 * 	 
	 *
	 * @var string
	 */
	public $confirmReadingTo = null;

	/**
	 * Hostname to use in Message-Id and Received headers and as default HELO string. 
	 * 	 If empty, the value returned by SERVER_NAME is used or 'localhost.localdomain'.
	 * 	 
	 *
	 * @var string
	 */
	public $hostname = null;

	/**
	 * Sets the message ID to be used in the Message-Id header.
	 * 	 If empty, a unique id will be generated.
	 * 	 
	 *
	 * @var string
	 */
	public $messageID = null;

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
abstract class BorhanEmailNotificationTemplateBaseFilter extends BorhanEventNotificationTemplateFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationTemplateFilter extends BorhanEmailNotificationTemplateBaseFilter
{

}

/**
 * @package Borhan
 * @subpackage Client
 */
class BorhanEmailNotificationClientPlugin extends BorhanClientPlugin
{
	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return BorhanEmailNotificationClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		return new BorhanEmailNotificationClientPlugin($client);
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
		return 'emailNotification';
	}
}

