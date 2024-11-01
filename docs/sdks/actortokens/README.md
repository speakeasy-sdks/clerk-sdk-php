# ActorTokens
(*actorTokens*)

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
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\CreateActorTokenRequestBody(
    userId: '<id>',
    actor: new Operations\Actor(),
);

$response = $sdk->actorTokens->createActorToken(
    request: $request
);

if ($response->actorToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateActorTokenRequestBody](../../Models/Operations/CreateActorTokenRequestBody.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateActorTokenResponse](../../Models/Operations/CreateActorTokenResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors44 | 400, 402, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## revokeActorToken

Revokes a pending actor token.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->actorTokens->revokeActorToken(
    actorTokenId: '<id>'
);

if ($response->actorToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                | Type                                     | Required                                 | Description                              |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| `actorTokenId`                           | *string*                                 | :heavy_check_mark:                       | The ID of the actor token to be revoked. |

### Response

**[?Operations\RevokeActorTokenResponse](../../Models/Operations/RevokeActorTokenResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors45 | 400, 404             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |