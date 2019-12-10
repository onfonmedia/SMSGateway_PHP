# Getting started

Send SMS with Onfon Media SMS Platform.

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the OnfonMediaSMSGateway library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=OnfonMedia%20SMS%20Gateway-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| accessKey | Network Layer Access Key |
| apiKey | Used for authentication purpose and pass this parameter in URL encoded format. |
| clientId | Used for authentication purpose and pass this parameter in URL encoded format. |



API client can be initialized as following.

```php
$accessKey = 'ACCESS_KEY'; // Network Layer Access Key
$apiKey = 'API_KEY'; // Used for authentication purpose and pass this parameter in URL encoded format.
$clientId = 'CLIENT_ID'; // Used for authentication purpose and pass this parameter in URL encoded format.

$client = new OnfonMediaSMSGatewayLib\OnfonMediaSMSGatewayClient($accessKey, $apiKey, $clientId);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [AccountController](#account_controller)
* [TemplateController](#template_controller)
* [SMSController](#sms_controller)
* [GROUPController](#group_controller)
* [CampaignController](#campaign_controller)

## <a name="account_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AccountController") AccountController

### Get singleton instance

The singleton instance of the ``` AccountController ``` class can be accessed from the API Client.

```php
$account = $client->getAccount();
```

### <a name="get_credit_balance"></a>![Method: ](https://apidocs.io/img/method.png ".AccountController.getCreditBalance") getCreditBalance

> Get Credit Balance


```php
function getCreditBalance()
```

#### Example Usage

```php

$result = $account->getCreditBalance();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="template_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TemplateController") TemplateController

### Get singleton instance

The singleton instance of the ``` TemplateController ``` class can be accessed from the API Client.

```php
$template = $client->getTemplate();
```

### <a name="get_template_list"></a>![Method: ](https://apidocs.io/img/method.png ".TemplateController.getTemplateList") getTemplateList

> Get Template List


```php
function getTemplateList()
```

#### Example Usage

```php

$result = $template->getTemplateList();

```


### <a name="create_new_template"></a>![Method: ](https://apidocs.io/img/method.png ".TemplateController.createNewTemplate") createNewTemplate

> Create New Template


```php
function createNewTemplate(
        $messageTemplate,
        $templateName)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageTemplate |  ``` Required ```  | Template text. |
| templateName |  ``` Required ```  | Name of template |



#### Example Usage

```php
$messageTemplate = 'MessageTemplate';
$templateName = 'TemplateName';

$result = $template->createNewTemplate($messageTemplate, $templateName);

```


### <a name="update_template"></a>![Method: ](https://apidocs.io/img/method.png ".TemplateController.updateTemplate") updateTemplate

> Update Template


```php
function updateTemplate(
        $messageTemplate,
        $templateName,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageTemplate |  ``` Required ```  | Template text. |
| templateName |  ``` Required ```  | Name of template |
| id |  ``` Required ```  | id of template |



#### Example Usage

```php
$messageTemplate = 'MessageTemplate';
$templateName = 'TemplateName';
$id = 241;

$result = $template->updateTemplate($messageTemplate, $templateName, $id);

```


### <a name="delete_template"></a>![Method: ](https://apidocs.io/img/method.png ".TemplateController.deleteTemplate") deleteTemplate

> Delete Template


```php
function deleteTemplate($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | id of template |



#### Example Usage

```php
$id = 241;

$result = $template->deleteTemplate($id);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="sms_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SMSController") SMSController

### Get singleton instance

The singleton instance of the ``` SMSController ``` class can be accessed from the API Client.

```php
$sMS = $client->getSMS();
```

### <a name="get_sent_message_list"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.getSentMessageList") getSentMessageList

> Get Sent Message List


```php
function getSentMessageList(
        $enddate,
        $fromdate,
        $length,
        $start)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| enddate |  ``` Required ```  | Date format must be in yyyy-mm-dd |
| fromdate |  ``` Required ```  | Date format must be in yyyy-mm-dd |
| length |  ``` Required ```  | Ending index value to fetch the campaign detail. |
| start |  ``` Required ```  | Starting index value to fetch the campaign detail. |



#### Example Usage

```php
$enddate = date("D M d, Y G:i");
$fromdate = date("D M d, Y G:i");
$length = 241;
$start = 241;

$result = $sMS->getSentMessageList($enddate, $fromdate, $length, $start);

```


### <a name="get_sent_message_status"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.getSentMessageStatus") getSentMessageStatus

> Get Sent Message Status


```php
function getSentMessageStatus($messageId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageId |  ``` Required ```  | MessageId of message |



#### Example Usage

```php
$messageId = 241;

$result = $sMS->getSentMessageStatus($messageId);

```


### <a name="get_create_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.getCreateSMS") getCreateSMS

> Create SMS


```php
function getCreateSMS(
        $message,
        $mobileNumber,
        $senderId,
        $coRelator = null,
        $isFlash = null,
        $isUnicode = null,
        $linkId = null,
        $groupId = null,
        $scheduleTime = null,
        $serviceId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| message |  ``` Required ```  | text message to send |
| mobileNumber |  ``` Required ```  | Use mobile number as comma sepreated to send message on multiple mobile number e.g. 78461230,78945612 |
| senderId |  ``` Required ```  | Approved Sender Id |
| coRelator |  ``` Optional ```  | Parameter required for using SDP OnDemand Service |
| isFlash |  ``` Optional ```  | Is_Flash is true or false for flash message |
| isUnicode |  ``` Optional ```  | Is_Unicode is true or false for unicode message |
| linkId |  ``` Optional ```  | Parameter required for using SDP OnDemand Service |
| groupId |  ``` Optional ```  | Valid group-id of current user (only for group message otherwise leave empty string) |
| scheduleTime |  ``` Optional ```  | scheduleTime Date in yyyy-MM-dd HH:MM (only for schedule message) |
| serviceId |  ``` Optional ```  | Parameter required for using SDP OnSubscription Service |



#### Example Usage

```php
$message = 'Message';
$mobileNumber = 'MobileNumber';
$senderId = 'SenderId';
$coRelator = 'CoRelator';
$isFlash = true;
$isUnicode = true;
$linkId = 'LinkId';
$groupId = 'groupId';
$scheduleTime = 'scheduleTime';
$serviceId = 'serviceId';

$result = $sMS->getCreateSMS($message, $mobileNumber, $senderId, $coRelator, $isFlash, $isUnicode, $linkId, $groupId, $scheduleTime, $serviceId);

```


### <a name="create_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.createSMS") createSMS

> Create SMS


```php
function createSMS(
        $message,
        $mobileNumber,
        $senderId,
        $coRelator = null,
        $isFlash = null,
        $isUnicode = null,
        $linkId = null,
        $groupId = null,
        $scheduleTime = null,
        $serviceId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| message |  ``` Required ```  | text message to send |
| mobileNumber |  ``` Required ```  | Use mobile number as comma sepreated to send message on multiple mobile number e.g. 78461230,78945612 |
| senderId |  ``` Required ```  | Approved Sender Id |
| coRelator |  ``` Optional ```  | Parameter required for using SDP OnDemand Service |
| isFlash |  ``` Optional ```  | Is_Flash is true or false for flash message |
| isUnicode |  ``` Optional ```  | Is_Unicode is true or false for unicode message |
| linkId |  ``` Optional ```  | Parameter required for using SDP OnDemand Service |
| groupId |  ``` Optional ```  | Valid group-id of current user (only for group message otherwise leave empty string) |
| scheduleTime |  ``` Optional ```  | scheduleTime Date in yyyy-MM-dd HH:MM (only for schedule message) |
| serviceId |  ``` Optional ```  | Parameter required for using SDP OnSubscription Service |



#### Example Usage

```php
$message = 'Message';
$mobileNumber = 'MobileNumber';
$senderId = 'SenderId';
$coRelator = 'CoRelator';
$isFlash = true;
$isUnicode = true;
$linkId = 'LinkId';
$groupId = 'groupId';
$scheduleTime = 'scheduleTime';
$serviceId = 'serviceId';

$result = $sMS->createSMS($message, $mobileNumber, $senderId, $coRelator, $isFlash, $isUnicode, $linkId, $groupId, $scheduleTime, $serviceId);

```


### <a name="get_create_bulk_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.getCreateBulkSMS") getCreateBulkSMS

> Create Bulk SMS


```php
function getCreateBulkSMS(
        $mobileNumberMessage,
        $senderId,
        $coRelator = null,
        $isFlash = null,
        $isUnicode = null,
        $linkId = null,
        $scheduleTime = null,
        $serviceId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mobileNumberMessage |  ``` Required ```  | Please ensure while submitting the request the message should be passed in encoded format. e.g. 78461230^test~78945612^hello |
| senderId |  ``` Required ```  | Approved Sender Id |
| coRelator |  ``` Optional ```  | Parameter required for using SDP OnDemand Service |
| isFlash |  ``` Optional ```  | Is_Flash is true or false for flash message |
| isUnicode |  ``` Optional ```  | Is_Unicode is true or false for unicode message |
| linkId |  ``` Optional ```  | Parameter required for using SDP OnDemand Service |
| scheduleTime |  ``` Optional ```  | scheduleTime Date in yyyy-MM-dd HH:MM (only for schedule message) |
| serviceId |  ``` Optional ```  | Parameter required for using SDP OnSubscription Service |



#### Example Usage

```php
$mobileNumberMessage = 'MobileNumber_Message';
$senderId = 'SenderId';
$coRelator = 'CoRelator';
$isFlash = true;
$isUnicode = true;
$linkId = 'LinkId';
$scheduleTime = date("D M d, Y G:i");
$serviceId = 'serviceId';

$result = $sMS->getCreateBulkSMS($mobileNumberMessage, $senderId, $coRelator, $isFlash, $isUnicode, $linkId, $scheduleTime, $serviceId);

```


### <a name="create_bulk_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.createBulkSMS") createBulkSMS

> Create Bulk SMS


```php
function createBulkSMS(
        $messageParameters,
        $senderId,
        $isFlash = null,
        $isUnicode = null,
        $scheduleDateTime = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageParameters |  ``` Required ```  ``` Collection ```  | TODO: Add a parameter description |
| senderId |  ``` Required ```  | Approved Sender Id |
| isFlash |  ``` Optional ```  | Is_Flash is true or false for flash message |
| isUnicode |  ``` Optional ```  | Is_Unicode is true or false for unicode message |
| scheduleDateTime |  ``` Optional ```  | scheduleTime Date in yyyy-MM-dd HH:MM (only for schedule message) |



#### Example Usage

```php
$messageParameters = array('MessageParameters');
$senderId = 'SenderId';
$isFlash = true;
$isUnicode = true;
$scheduleDateTime = date("D M d, Y G:i");

$result = $sMS->createBulkSMS($messageParameters, $senderId, $isFlash, $isUnicode, $scheduleDateTime);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="group_controller"></a>![Class: ](https://apidocs.io/img/class.png ".GROUPController") GROUPController

### Get singleton instance

The singleton instance of the ``` GROUPController ``` class can be accessed from the API Client.

```php
$gROUP = $client->getGROUP();
```

### <a name="get_group_list"></a>![Method: ](https://apidocs.io/img/method.png ".GROUPController.getGroupList") getGroupList

> Get Group List


```php
function getGroupList()
```

#### Example Usage

```php

$result = $gROUP->getGroupList();

```


### <a name="create_new_group"></a>![Method: ](https://apidocs.io/img/method.png ".GROUPController.createNewGroup") createNewGroup

> Create New Group


```php
function createNewGroup($groupName)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| groupName |  ``` Required ```  | Name for new group |



#### Example Usage

```php
$groupName = 'GroupName';

$result = $gROUP->createNewGroup($groupName);

```


### <a name="update_group"></a>![Method: ](https://apidocs.io/img/method.png ".GROUPController.updateGroup") updateGroup

> Update Group


```php
function updateGroup(
        $groupName,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| groupName |  ``` Required ```  | Name for new group |
| id |  ``` Required ```  | GroupID |



#### Example Usage

```php
$groupName = 'GroupName';
$id = 'id';

$result = $gROUP->updateGroup($groupName, $id);

```


### <a name="create_sub_group_group"></a>![Method: ](https://apidocs.io/img/method.png ".GROUPController.createSubGroupGroup") createSubGroupGroup

> Create Sub-Group Group


```php
function createSubGroupGroup(
        $groupName,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| groupName |  ``` Required ```  | Name for new group |
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$groupName = 'GroupName';
$id = 'Id';

$result = $gROUP->createSubGroupGroup($groupName, $id);

```


### <a name="delete_group"></a>![Method: ](https://apidocs.io/img/method.png ".GROUPController.deleteGroup") deleteGroup

> Delete Group


```php
function deleteGroup($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 241;

$result = $gROUP->deleteGroup($id);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="campaign_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CampaignController") CampaignController

### Get singleton instance

The singleton instance of the ``` CampaignController ``` class can be accessed from the API Client.

```php
$campaign = $client->getCampaign();
```

### <a name="get_campaign_message_status"></a>![Method: ](https://apidocs.io/img/method.png ".CampaignController.getCampaignMessageStatus") getCampaignMessageStatus

> Get Campaign Message Status


```php
function getCampaignMessageStatus($campaignId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| campaignId |  ``` Required ```  | First user have to call Get Campaigns api for CampaignId |



#### Example Usage

```php
$campaignId = 241;

$result = $campaign->getCampaignMessageStatus($campaignId);

```


### <a name="get_campaigns"></a>![Method: ](https://apidocs.io/img/method.png ".CampaignController.getCampaigns") getCampaigns

> Get Campaigns


```php
function getCampaigns(
        $enddate,
        $fromdate,
        $length,
        $start)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| enddate |  ``` Required ```  | Date format must be in yyyy-mm-dd |
| fromdate |  ``` Required ```  | Date format must be in yyyy-mm-dd |
| length |  ``` Required ```  | Ending index value to fetch the campaign detail. |
| start |  ``` Required ```  | Starting index value to fetch the campaign detail. |



#### Example Usage

```php
$enddate = date("D M d, Y G:i");
$fromdate = date("D M d, Y G:i");
$length = 241;
$start = 241;

$result = $campaign->getCampaigns($enddate, $fromdate, $length, $start);

```


[Back to List of Controllers](#list_of_controllers)



