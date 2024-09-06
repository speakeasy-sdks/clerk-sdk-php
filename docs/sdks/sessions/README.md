# Sessions

## Overview

The Session object is an abstraction over an HTTP session.
It models the period of information exchange between a user and the server.
Sessions are created when a user successfully goes through the sign in or sign up flows.
<https://clerk.com/docs/reference/clerkjs/session>

### Available Operations

* [getSessionList](#getsessionlist) - List all sessions
* [getSession](#getsession) - Retrieve a session
* [revokeSession](#revokesession) - Revoke a session
* [~~verifySession~~](#verifysession) - Verify a session :warning: **Deprecated**
* [createSessionTokenFromTemplate](#createsessiontokenfromtemplate) - Create a session token from a jwt template

## getSessionList

Returns a list of all sessions.
The sessions are returned sorted by creation date, with the newest sessions appearing first.
**Deprecation Notice (2024-01-01):** All parameters were initially considered optional, however
moving forward at least one of `client_id` or `user_id` parameters should be provided.

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
    $request = new Operations\GetSessionListRequest(
        clientId: '<value>',
        userId: '<value>',
        status: Operations\Status::Removed,
        limit: 1172.96,
        offset: 1903.38,
    );
    $response = $sdk->sessions->getSessionList($request);

    if ($response->sessionList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetSessionListRequest](../../Models/Operations/GetSessionListRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetSessionListResponse](../../Models/Operations/GetSessionListResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,422                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## getSession

Retrieve the details of a session

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

    $response = $sdk->sessions->getSession('<value>');

    if ($response->session !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter             | Type                  | Required              | Description           |
| --------------------- | --------------------- | --------------------- | --------------------- |
| `sessionId`           | *string*              | :heavy_check_mark:    | The ID of the session |

### Response

**[?Operations\GetSessionResponse](../../Models/Operations/GetSessionResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,404                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## revokeSession

Sets the status of a session as "revoked", which is an unauthenticated state.
In multi-session mode, a revoked session will still be returned along with its client object, however the user will need to sign in again.

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

    $response = $sdk->sessions->revokeSession('<value>');

    if ($response->session !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter             | Type                  | Required              | Description           |
| --------------------- | --------------------- | --------------------- | --------------------- |
| `sessionId`           | *string*              | :heavy_check_mark:    | The ID of the session |

### Response

**[?Operations\RevokeSessionResponse](../../Models/Operations/RevokeSessionResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,404                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## ~~verifySession~~

Returns the session if it is authenticated, otherwise returns an error.
WARNING: This endpoint is deprecated and will be removed in future versions. We strongly recommend switching to networkless verification using short-lived session tokens,
         which is implemented transparently in all recent SDK versions (e.g. [NodeJS SDK](https://clerk.com/docs/backend-requests/handling/nodejs#clerk-express-require-auth)).
         For more details on how networkless verification works, refer to our [Session Tokens documentation](https://clerk.com/docs/backend-requests/resources/session-tokens).

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
    $requestBody = new Operations\VerifySessionRequestBody(
        token: '<value>',
    );
    $response = $sdk->sessions->verifySession('<value>', $requestBody);

    if ($response->session !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `sessionId`                                                                                | *string*                                                                                   | :heavy_check_mark:                                                                         | The ID of the session                                                                      |
| `requestBody`                                                                              | [Operations\VerifySessionRequestBody](../../Models/Operations/VerifySessionRequestBody.md) | :heavy_minus_sign:                                                                         | Parameters.                                                                                |

### Response

**[?Operations\VerifySessionResponse](../../Models/Operations/VerifySessionResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,404,410                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## createSessionTokenFromTemplate

Creates a JSON Web Token(JWT) based on a session and a JWT Template name defined for your instance

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

    $response = $sdk->sessions->createSessionTokenFromTemplate('<value>', '<value>');

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                     | Type                                                                          | Required                                                                      | Description                                                                   |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `sessionId`                                                                   | *string*                                                                      | :heavy_check_mark:                                                            | The ID of the session                                                         |
| `templateName`                                                                | *string*                                                                      | :heavy_check_mark:                                                            | The name of the JWT Template defined in your instance (e.g. `custom_hasura`). |

### Response

**[?Operations\CreateSessionTokenFromTemplateResponse](../../Models/Operations/CreateSessionTokenFromTemplateResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 401,404                                  | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |
