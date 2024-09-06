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
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;
use Clerk\Backend\Models\Operations;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreatePhoneNumberRequestBody(
        userId: '<value>',
        phoneNumber: '<value>',
        verified: false,
        primary: false,
        reservedForSecondFactor: false,
    );
    $response = $sdk->phoneNumbers->createPhoneNumber($request);

    if ($response->phoneNumber !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreatePhoneNumberRequestBody](../../Models/Operations/CreatePhoneNumberRequestBody.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreatePhoneNumberResponse](../../Models/Operations/CreatePhoneNumberResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,403,404,422                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## getPhoneNumber

Returns the details of a phone number

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;

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

**[?Operations\GetPhoneNumberResponse](../../Models/Operations/GetPhoneNumberResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,403,404                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## deletePhoneNumber

Delete the phone number with the given ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;

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

**[?Operations\DeletePhoneNumberResponse](../../Models/Operations/DeletePhoneNumberResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,403,404                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## updatePhoneNumber

Updates a phone number

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;
use Clerk\Backend\Models\Operations;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    $requestBody = new Operations\UpdatePhoneNumberRequestBody(
        verified: false,
        primary: false,
        reservedForSecondFactor: false,
    );
    $response = $sdk->phoneNumbers->updatePhoneNumber('<value>', $requestBody);

    if ($response->phoneNumber !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `phoneNumberId`                                                                                    | *string*                                                                                           | :heavy_check_mark:                                                                                 | The ID of the phone number to update                                                               |
| `requestBody`                                                                                      | [Operations\UpdatePhoneNumberRequestBody](../../Models/Operations/UpdatePhoneNumberRequestBody.md) | :heavy_minus_sign:                                                                                 | N/A                                                                                                |

### Response

**[?Operations\UpdatePhoneNumberResponse](../../Models/Operations/UpdatePhoneNumberResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,403,404                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |
