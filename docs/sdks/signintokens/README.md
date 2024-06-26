# SignInTokens


## Overview

Sign-in tokens are JWTs that can be used to sign in to an application without specifying any credentials.
A sign-in token can be used at most once and they can be consumed from the Frontend API using the `ticket` strategy.

### Available Operations

* [createSignInToken](#createsignintoken) - Create sign-in token
* [revokeSignInToken](#revokesignintoken) - Revoke the given sign-in token

## createSignInToken

Creates a new sign-in token and associates it with the given user.
By default, sign-in tokens expire in 30 days.
You can optionally supply a different duration in seconds using the `expires_in_seconds` property.

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
        $request = new Operations\CreateSignInTokenRequestBody();
    $request->userId = '<value>';
    $request->expiresInSeconds = 333727;;

    $response = $sdk->signInTokens->createSignInToken($request);

    if ($response->signInToken !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\Clerk\Backend\Models\Operations\CreateSignInTokenRequestBody](../../Models/Operations/CreateSignInTokenRequestBody.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\Clerk\Backend\Models\Operations\CreateSignInTokenResponse](../../Models/Operations/CreateSignInTokenResponse.md)**


## revokeSignInToken

Revokes a pending sign-in token

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
    

    $response = $sdk->signInTokens->revokeSignInToken('<value>');

    if ($response->signInToken !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                 | Type                                      | Required                                  | Description                               |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| `signInTokenId`                           | *string*                                  | :heavy_check_mark:                        | The ID of the sign-in token to be revoked |


### Response

**[?\Clerk\Backend\Models\Operations\RevokeSignInTokenResponse](../../Models/Operations/RevokeSignInTokenResponse.md)**

