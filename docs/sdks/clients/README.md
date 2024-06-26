# Clients


## Overview

The Client object tracks sessions, as well as the state of any sign in and sign up attempts, for a given device.

<https://clerk.com/docs/reference/clerkjs/client>
### Available Operations

* [~~getClientList~~](#getclientlist) - List all clients :warning: **Deprecated**
* [verifyClient](#verifyclient) - Verify a client
* [getClient](#getclient) - Get a client

## ~~getClientList~~

Returns a list of all clients. The clients are returned sorted by creation date,
with the newest clients appearing first.
Warning: the endpoint is being deprecated and will be removed in future versions.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
    

    $response = $sdk->clients->getClientList(2830.33, 2613.46);

    if ($response->clientList !== null) {
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

**[?\Clerk\Backend\Models\Operations\GetClientListResponse](../../Models/Operations/GetClientListResponse.md)**


## verifyClient

Verifies the client in the provided token

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
        $request = new Operations\VerifyClientRequestBody();
    $request->token = '<value>';;

    $response = $sdk->clients->verifyClient($request);

    if ($response->client !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\Clerk\Backend\Models\Operations\VerifyClientRequestBody](../../Models/Operations/VerifyClientRequestBody.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\Clerk\Backend\Models\Operations\VerifyClientResponse](../../Models/Operations/VerifyClientResponse.md)**


## getClient

Returns the details of a client.

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
    

    $response = $sdk->clients->getClient('<value>');

    if ($response->client !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `clientId`         | *string*           | :heavy_check_mark: | Client ID.         |


### Response

**[?\Clerk\Backend\Models\Operations\GetClientResponse](../../Models/Operations/GetClientResponse.md)**

