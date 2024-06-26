# PhoneNumbers


## Overview

A user can be associated with one or more phone numbers, which allows them to be contacted via SMS.

<https://clerk.com/docs/reference/clerkjs/phonenumber>
### Available Operations

* [createPhoneNumber](#createphonenumber) - Create a phone number
* [getPhoneNumber](#getphonenumber) - Retrieve a phone number
* [deletePhoneNumber](#deletephonenumber) - Delete a phone number
* [updatePhoneNumber](#updatephonenumber) - Update a phone number

## createPhoneNumber

Create a new phone number

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Clerk\Backend;
use \Clerk\Backend\Models\Components;
use \Clerk\Backend\Models\Operations;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreatePhoneNumberRequestBody();
    $request->userId = '<value>';
    $request->phoneNumber = '<value>';
    $request->verified = false;
    $request->primary = false;
    $request->reservedForSecondFactor = false;;

    $response = $sdk->phoneNumbers->createPhoneNumber($request);

    if ($response->phoneNumber !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\Clerk\Backend\Models\Operations\CreatePhoneNumberRequestBody](../../Models/Operations/CreatePhoneNumberRequestBody.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\Clerk\Backend\Models\Operations\CreatePhoneNumberResponse](../../Models/Operations/CreatePhoneNumberResponse.md)**


## getPhoneNumber

Returns the details of a phone number

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Clerk\Backend;
use \Clerk\Backend\Models\Components;
use \Clerk\Backend\Models\Operations;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->phoneNumbers->getPhoneNumber('<value>');

    if ($response->phoneNumber !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                              | Type                                   | Required                               | Description                            |
| -------------------------------------- | -------------------------------------- | -------------------------------------- | -------------------------------------- |
| `phoneNumberId`                        | *string*                               | :heavy_check_mark:                     | The ID of the phone number to retrieve |


### Response

**[?\Clerk\Backend\Models\Operations\GetPhoneNumberResponse](../../Models/Operations/GetPhoneNumberResponse.md)**


## deletePhoneNumber

Delete the phone number with the given ID

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Clerk\Backend;
use \Clerk\Backend\Models\Components;
use \Clerk\Backend\Models\Operations;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->phoneNumbers->deletePhoneNumber('<value>');

    if ($response->deletedObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `phoneNumberId`                      | *string*                             | :heavy_check_mark:                   | The ID of the phone number to delete |


### Response

**[?\Clerk\Backend\Models\Operations\DeletePhoneNumberResponse](../../Models/Operations/DeletePhoneNumberResponse.md)**


## updatePhoneNumber

Updates a phone number

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Clerk\Backend;
use \Clerk\Backend\Models\Components;
use \Clerk\Backend\Models\Operations;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
        $requestBody = new Operations\UpdatePhoneNumberRequestBody();
    $requestBody->verified = false;
    $requestBody->primary = false;
    $requestBody->reservedForSecondFactor = false;

    $response = $sdk->phoneNumbers->updatePhoneNumber('<value>', $requestBody);

    if ($response->phoneNumber !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `phoneNumberId`                                                                                                          | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | The ID of the phone number to update                                                                                     |
| `requestBody`                                                                                                            | [\Clerk\Backend\Models\Operations\UpdatePhoneNumberRequestBody](../../Models/Operations/UpdatePhoneNumberRequestBody.md) | :heavy_minus_sign:                                                                                                       | N/A                                                                                                                      |


### Response

**[?\Clerk\Backend\Models\Operations\UpdatePhoneNumberResponse](../../Models/Operations/UpdatePhoneNumberResponse.md)**

