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
        $request = new Operations\CreateEmailAddressRequestBody();
    $request->userId = '<value>';
    $request->emailAddress = 'Hailee_Leuschke90@hotmail.com';
    $request->verified = false;
    $request->primary = false;;

    $response = $sdk->emailAddresses->createEmailAddress($request);

    if ($response->emailAddress !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\Clerk\Backend\Models\Operations\CreateEmailAddressRequestBody](../../Models/Operations/CreateEmailAddressRequestBody.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\Clerk\Backend\Models\Operations\CreateEmailAddressResponse](../../Models/Operations/CreateEmailAddressResponse.md)**


## getEmailAddress

Returns the details of an email address.

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

**[?\Clerk\Backend\Models\Operations\GetEmailAddressResponse](../../Models/Operations/GetEmailAddressResponse.md)**


## deleteEmailAddress

Delete the email address with the given ID

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

**[?\Clerk\Backend\Models\Operations\DeleteEmailAddressResponse](../../Models/Operations/DeleteEmailAddressResponse.md)**


## updateEmailAddress

Updates an email address.

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
        $requestBody = new Operations\UpdateEmailAddressRequestBody();
    $requestBody->verified = false;
    $requestBody->primary = false;

    $response = $sdk->emailAddresses->updateEmailAddress('<value>', $requestBody);

    if ($response->emailAddress !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `emailAddressId`                                                                                                           | *string*                                                                                                                   | :heavy_check_mark:                                                                                                         | The ID of the email address to update                                                                                      |
| `requestBody`                                                                                                              | [\Clerk\Backend\Models\Operations\UpdateEmailAddressRequestBody](../../Models/Operations/UpdateEmailAddressRequestBody.md) | :heavy_minus_sign:                                                                                                         | N/A                                                                                                                        |


### Response

**[?\Clerk\Backend\Models\Operations\UpdateEmailAddressResponse](../../Models/Operations/UpdateEmailAddressResponse.md)**

