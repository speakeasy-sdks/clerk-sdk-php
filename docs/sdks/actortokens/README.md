# ActorTokens


## Overview

Allow your users to sign in on behalf of other users.

<https://clerk.com/docs/authentication/user-impersonation#actor-tokens>
### Available Operations

* [createActorToken](#createactortoken) - Create actor token
* [revokeActorToken](#revokeactortoken) - Revoke actor token

## createActorToken

Create an actor token that can be used to impersonate the given user.
The `actor` parameter needs to include at least a "sub" key whose value is the ID of the actor (impersonating) user.

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
        $request = new Operations\CreateActorTokenRequestBody();
    $request->userId = '<value>';
    $request->actor = new Operations\Actor();
    $request->expiresInSeconds = 77540;
    $request->sessionMaxDurationInSeconds = 26185;;

    $response = $sdk->actorTokens->createActorToken($request);

    if ($response->actorToken !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\Clerk\Backend\Models\Operations\CreateActorTokenRequestBody](../../Models/Operations/CreateActorTokenRequestBody.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\Clerk\Backend\Models\Operations\CreateActorTokenResponse](../../Models/Operations/CreateActorTokenResponse.md)**


## revokeActorToken

Revokes a pending actor token.

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
    

    $response = $sdk->actorTokens->revokeActorToken('<value>');

    if ($response->actorToken !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                | Type                                     | Required                                 | Description                              |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| `actorTokenId`                           | *string*                                 | :heavy_check_mark:                       | The ID of the actor token to be revoked. |


### Response

**[?\Clerk\Backend\Models\Operations\RevokeActorTokenResponse](../../Models/Operations/RevokeActorTokenResponse.md)**

