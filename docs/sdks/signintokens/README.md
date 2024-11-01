# SignInTokens
(*signInTokens*)

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
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\CreateSignInTokenRequestBody();

$response = $sdk->signInTokens->createSignInToken(
    request: $request
);

if ($response->signInToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateSignInTokenRequestBody](../../Models/Operations/CreateSignInTokenRequestBody.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateSignInTokenResponse](../../Models/Operations/CreateSignInTokenResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors77 | 404, 422             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## revokeSignInToken

Revokes a pending sign-in token

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->signInTokens->revokeSignInToken(
    signInTokenId: '<id>'
);

if ($response->signInToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                 | Type                                      | Required                                  | Description                               |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| `signInTokenId`                           | *string*                                  | :heavy_check_mark:                        | The ID of the sign-in token to be revoked |

### Response

**[?Operations\RevokeSignInTokenResponse](../../Models/Operations/RevokeSignInTokenResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors78 | 400, 404             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |