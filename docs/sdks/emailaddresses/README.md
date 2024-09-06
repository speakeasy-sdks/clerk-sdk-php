# EmailAddresses

## Overview

A user can be associated with one or more email addresses, which allows them to be contacted via email.
<https://clerk.com/docs/reference/clerkjs/emailaddress>

### Available Operations

* [createEmailAddress](#createemailaddress) - Create an email address
* [getEmailAddress](#getemailaddress) - Retrieve an email address
* [deleteEmailAddress](#deleteemailaddress) - Delete an email address
* [updateEmailAddress](#updateemailaddress) - Update an email address

## createEmailAddress

Create a new email address

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
    $request = new Operations\CreateEmailAddressRequestBody(
        userId: '<value>',
        emailAddress: 'Hailee_Leuschke90@hotmail.com',
        verified: false,
        primary: false,
    );
    $response = $sdk->emailAddresses->createEmailAddress($request);

    if ($response->emailAddress !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateEmailAddressRequestBody](../../Models/Operations/CreateEmailAddressRequestBody.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateEmailAddressResponse](../../Models/Operations/CreateEmailAddressResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,403,404,422                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## getEmailAddress

Returns the details of an email address.

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

    $response = $sdk->emailAddresses->getEmailAddress('<value>');

    if ($response->emailAddress !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                               | Type                                    | Required                                | Description                             |
| --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- |
| `emailAddressId`                        | *string*                                | :heavy_check_mark:                      | The ID of the email address to retrieve |

### Response

**[?Operations\GetEmailAddressResponse](../../Models/Operations/GetEmailAddressResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,403,404                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## deleteEmailAddress

Delete the email address with the given ID

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

    $response = $sdk->emailAddresses->deleteEmailAddress('<value>');

    if ($response->deletedObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                             | Type                                  | Required                              | Description                           |
| ------------------------------------- | ------------------------------------- | ------------------------------------- | ------------------------------------- |
| `emailAddressId`                      | *string*                              | :heavy_check_mark:                    | The ID of the email address to delete |

### Response

**[?Operations\DeleteEmailAddressResponse](../../Models/Operations/DeleteEmailAddressResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,403,404                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## updateEmailAddress

Updates an email address.

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
    $requestBody = new Operations\UpdateEmailAddressRequestBody(
        verified: false,
        primary: false,
    );
    $response = $sdk->emailAddresses->updateEmailAddress('<value>', $requestBody);

    if ($response->emailAddress !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `emailAddressId`                                                                                     | *string*                                                                                             | :heavy_check_mark:                                                                                   | The ID of the email address to update                                                                |
| `requestBody`                                                                                        | [Operations\UpdateEmailAddressRequestBody](../../Models/Operations/UpdateEmailAddressRequestBody.md) | :heavy_minus_sign:                                                                                   | N/A                                                                                                  |

### Response

**[?Operations\UpdateEmailAddressResponse](../../Models/Operations/UpdateEmailAddressResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,403,404                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |
