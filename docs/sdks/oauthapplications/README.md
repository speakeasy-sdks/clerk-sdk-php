# OAuthApplications
(*oAuthApplications*)

## Overview

OAuth applications contain data for clients using Clerk as an OAuth2 identity provider.

### Available Operations

* [listOAuthApplications](#listoauthapplications) - Get a list of OAuth applications for an instance
* [createOAuthApplication](#createoauthapplication) - Create an OAuth application
* [getOAuthApplication](#getoauthapplication) - Retrieve an OAuth application by ID
* [updateOAuthApplication](#updateoauthapplication) - Update an OAuth application
* [deleteOAuthApplication](#deleteoauthapplication) - Delete an OAuth application
* [rotateOAuthApplicationSecret](#rotateoauthapplicationsecret) - Rotate the client secret of the given OAuth application

## listOAuthApplications

This request returns the list of OAuth applications for an instance.
Results can be paginated using the optional `limit` and `offset` query parameters.
The OAuth applications are ordered by descending creation date.
Most recent OAuth applications will be returned first.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->oAuthApplications->listOAuthApplications(
    limit: 10,
    offset: 0

);

if ($response->oAuthApplications !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `limit`                                                                                                                                   | *?float*                                                                                                                                  | :heavy_minus_sign:                                                                                                                        | Applies a limit to the number of results returned.<br/>Can be used for paginating the results together with `offset`.                     |
| `offset`                                                                                                                                  | *?float*                                                                                                                                  | :heavy_minus_sign:                                                                                                                        | Skip the first `offset` results when paginating.<br/>Needs to be an integer greater or equal to zero.<br/>To be used in conjunction with `limit`. |

### Response

**[?Operations\ListOAuthApplicationsResponse](../../Models/Operations/ListOAuthApplicationsResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors79 | 400, 403, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## createOAuthApplication

Creates a new OAuth application with the given name and callback URL for an instance.
The callback URL must be a valid url.
All URL schemes are allowed such as `http://`, `https://`, `myapp://`, etc...

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\CreateOAuthApplicationRequestBody(
    name: '<value>',
    callbackUrl: 'https://silent-hyena.name',
    scopes: 'profile email public_metadata',
);

$response = $sdk->oAuthApplications->createOAuthApplication(
    request: $request
);

if ($response->oAuthApplicationWithSecret !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreateOAuthApplicationRequestBody](../../Models/Operations/CreateOAuthApplicationRequestBody.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreateOAuthApplicationResponse](../../Models/Operations/CreateOAuthApplicationResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors80 | 400, 403, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## getOAuthApplication

Fetches the OAuth application whose ID matches the provided `id` in the path.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->oAuthApplications->getOAuthApplication(
    oauthApplicationId: '<id>'
);

if ($response->oAuthApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                       | Type                            | Required                        | Description                     |
| ------------------------------- | ------------------------------- | ------------------------------- | ------------------------------- |
| `oauthApplicationId`            | *string*                        | :heavy_check_mark:              | The ID of the OAuth application |

### Response

**[?Operations\GetOAuthApplicationResponse](../../Models/Operations/GetOAuthApplicationResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors81 | 403, 404             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## updateOAuthApplication

Updates an existing OAuth application

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$requestBody = new Operations\UpdateOAuthApplicationRequestBody(
    scopes: 'profile email public_metadata private_metadata',
);

$response = $sdk->oAuthApplications->updateOAuthApplication(
    oauthApplicationId: '<id>',
    requestBody: $requestBody

);

if ($response->oAuthApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `oauthApplicationId`                                                                                         | *string*                                                                                                     | :heavy_check_mark:                                                                                           | The ID of the OAuth application to update                                                                    |
| `requestBody`                                                                                                | [Operations\UpdateOAuthApplicationRequestBody](../../Models/Operations/UpdateOAuthApplicationRequestBody.md) | :heavy_check_mark:                                                                                           | N/A                                                                                                          |

### Response

**[?Operations\UpdateOAuthApplicationResponse](../../Models/Operations/UpdateOAuthApplicationResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors82 | 403, 404, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## deleteOAuthApplication

Deletes the given OAuth application.
This is not reversible.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->oAuthApplications->deleteOAuthApplication(
    oauthApplicationId: '<id>'
);

if ($response->deletedObject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                 | Type                                      | Required                                  | Description                               |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| `oauthApplicationId`                      | *string*                                  | :heavy_check_mark:                        | The ID of the OAuth application to delete |

### Response

**[?Operations\DeleteOAuthApplicationResponse](../../Models/Operations/DeleteOAuthApplicationResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors83 | 403, 404             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## rotateOAuthApplicationSecret

Rotates the OAuth application's client secret.
When the client secret is rotated, make sure to update it in authorized OAuth clients.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->oAuthApplications->rotateOAuthApplicationSecret(
    oauthApplicationId: '<id>'
);

if ($response->oAuthApplicationWithSecret !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                             | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `oauthApplicationId`                                                  | *string*                                                              | :heavy_check_mark:                                                    | The ID of the OAuth application for which to rotate the client secret |

### Response

**[?Operations\RotateOAuthApplicationSecretResponse](../../Models/Operations/RotateOAuthApplicationSecretResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors84 | 403, 404             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |