# SignUps


### Available Operations

* [updateSignUp](#updatesignup) - Update a sign-up

## updateSignUp

Update the sign-up with the given ID

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
        $requestBody = new Operations\UpdateSignUpRequestBody();
    $requestBody->customAction = false;
    $requestBody->externalId = '<value>';

    $response = $sdk->signUps->updateSignUp('<value>', $requestBody);

    if ($response->signUp !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                           | *string*                                                                                                       | :heavy_check_mark:                                                                                             | The ID of the sign-up to update                                                                                |
| `requestBody`                                                                                                  | [\Clerk\Backend\Models\Operations\UpdateSignUpRequestBody](../../Models/Operations/UpdateSignUpRequestBody.md) | :heavy_minus_sign:                                                                                             | N/A                                                                                                            |


### Response

**[?\Clerk\Backend\Models\Operations\UpdateSignUpResponse](../../Models/Operations/UpdateSignUpResponse.md)**

