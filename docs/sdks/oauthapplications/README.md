# OAuthApplications


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
    

    $response = $sdk->oAuthApplications->listOAuthApplications(8554.92, 4821.55);

    if ($response->oAuthApplications !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `limit`                                                                                                                                   | *float*                                                                                                                                   | :heavy_minus_sign:                                                                                                                        | Applies a limit to the number of results returned.<br/>Can be used for paginating the results together with `offset`.                     |
| `offset`                                                                                                                                  | *float*                                                                                                                                   | :heavy_minus_sign:                                                                                                                        | Skip the first `offset` results when paginating.<br/>Needs to be an integer greater or equal to zero.<br/>To be used in conjunction with `limit`. |


### Response

**[?\Clerk\Backend\Models\Operations\ListOAuthApplicationsResponse](../../Models/Operations/ListOAuthApplicationsResponse.md)**


## createOAuthApplication

Creates a new OAuth application with the given name and callback URL for an instance.
The callback URL must be a valid url.
All URL schemes are allowed such as `http://`, `https://`, `myapp://`, etc...

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
        $request = new Operations\CreateOAuthApplicationRequestBody();
    $request->name = '<value>';
    $request->callbackUrl = '<value>';
    $request->scopes = 'profile email public_metadata';
    $request->public = false;;

    $response = $sdk->oAuthApplications->createOAuthApplication($request);

    if ($response->oAuthApplicationWithSecret !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                          | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                         | [\Clerk\Backend\Models\Operations\CreateOAuthApplicationRequestBody](../../Models/Operations/CreateOAuthApplicationRequestBody.md) | :heavy_check_mark:                                                                                                                 | The request object to use for the request.                                                                                         |


### Response

**[?\Clerk\Backend\Models\Operations\CreateOAuthApplicationResponse](../../Models/Operations/CreateOAuthApplicationResponse.md)**


## getOAuthApplication

Fetches the OAuth application whose ID matches the provided `id` in the path.

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
    

    $response = $sdk->oAuthApplications->getOAuthApplication('<value>');

    if ($response->oAuthApplication !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                       | Type                            | Required                        | Description                     |
| ------------------------------- | ------------------------------- | ------------------------------- | ------------------------------- |
| `oauthApplicationId`            | *string*                        | :heavy_check_mark:              | The ID of the OAuth application |


### Response

**[?\Clerk\Backend\Models\Operations\GetOAuthApplicationResponse](../../Models/Operations/GetOAuthApplicationResponse.md)**


## updateOAuthApplication

Updates an existing OAuth application

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
        $requestBody = new Operations\UpdateOAuthApplicationRequestBody();
    $requestBody->name = '<value>';
    $requestBody->callbackUrl = '<value>';
    $requestBody->scopes = 'profile email public_metadata private_metadata';

    $response = $sdk->oAuthApplications->updateOAuthApplication('<value>', $requestBody);

    if ($response->oAuthApplication !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                          | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `oauthApplicationId`                                                                                                               | *string*                                                                                                                           | :heavy_check_mark:                                                                                                                 | The ID of the OAuth application to update                                                                                          |
| `requestBody`                                                                                                                      | [\Clerk\Backend\Models\Operations\UpdateOAuthApplicationRequestBody](../../Models/Operations/UpdateOAuthApplicationRequestBody.md) | :heavy_check_mark:                                                                                                                 | N/A                                                                                                                                |


### Response

**[?\Clerk\Backend\Models\Operations\UpdateOAuthApplicationResponse](../../Models/Operations/UpdateOAuthApplicationResponse.md)**


## deleteOAuthApplication

Deletes the given OAuth application.
This is not reversible.

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
    

    $response = $sdk->oAuthApplications->deleteOAuthApplication('<value>');

    if ($response->deletedObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                 | Type                                      | Required                                  | Description                               |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| `oauthApplicationId`                      | *string*                                  | :heavy_check_mark:                        | The ID of the OAuth application to delete |


### Response

**[?\Clerk\Backend\Models\Operations\DeleteOAuthApplicationResponse](../../Models/Operations/DeleteOAuthApplicationResponse.md)**


## rotateOAuthApplicationSecret

Rotates the OAuth application's client secret.
When the client secret is rotated, make sure to update it in authorized OAuth clients.

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
    

    $response = $sdk->oAuthApplications->rotateOAuthApplicationSecret('<value>');

    if ($response->oAuthApplicationWithSecret !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                             | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `oauthApplicationId`                                                  | *string*                                                              | :heavy_check_mark:                                                    | The ID of the OAuth application for which to rotate the client secret |


### Response

**[?\Clerk\Backend\Models\Operations\RotateOAuthApplicationSecretResponse](../../Models/Operations/RotateOAuthApplicationSecretResponse.md)**

