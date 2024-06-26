# RedirectURLs


## Overview

Redirect URLs are whitelisted URLs that facilitate secure authentication flows in native applications (e.g. React Native, Expo).
In these contexts, Clerk ensures that security-critical nonces are passed only to the whitelisted URLs.

### Available Operations

* [listRedirectURLs](#listredirecturls) - List all redirect URLs
* [createRedirectURL](#createredirecturl) - Create a redirect URL
* [getRedirectURL](#getredirecturl) - Retrieve a redirect URL
* [deleteRedirectURL](#deleteredirecturl) - Delete a redirect URL

## listRedirectURLs

Lists all whitelisted redirect_urls for the instance

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Clerk\Backend;
use \Clerk\Backend\Models\Components;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    $response = $sdk->redirectURLs->listRedirectURLs();

    if ($response->redirectURLList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Clerk\Backend\Models\Operations\ListRedirectURLsResponse](../../Models/Operations/ListRedirectURLsResponse.md)**


## createRedirectURL

Create a redirect URL

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
        $request = new Operations\CreateRedirectURLRequestBody();
    $request->url = 'https://physical-airbus.name';;

    $response = $sdk->redirectURLs->createRedirectURL($request);

    if ($response->redirectURL !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\Clerk\Backend\Models\Operations\CreateRedirectURLRequestBody](../../Models/Operations/CreateRedirectURLRequestBody.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\Clerk\Backend\Models\Operations\CreateRedirectURLResponse](../../Models/Operations/CreateRedirectURLResponse.md)**


## getRedirectURL

Retrieve the details of the redirect URL with the given ID

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
    

    $response = $sdk->redirectURLs->getRedirectURL('<value>');

    if ($response->redirectURL !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                  | Type                       | Required                   | Description                |
| -------------------------- | -------------------------- | -------------------------- | -------------------------- |
| `id`                       | *string*                   | :heavy_check_mark:         | The ID of the redirect URL |


### Response

**[?\Clerk\Backend\Models\Operations\GetRedirectURLResponse](../../Models/Operations/GetRedirectURLResponse.md)**


## deleteRedirectURL

Remove the selected redirect URL from the whitelist of the instance

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
    

    $response = $sdk->redirectURLs->deleteRedirectURL('<value>');

    if ($response->deletedObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                  | Type                       | Required                   | Description                |
| -------------------------- | -------------------------- | -------------------------- | -------------------------- |
| `id`                       | *string*                   | :heavy_check_mark:         | The ID of the redirect URL |


### Response

**[?\Clerk\Backend\Models\Operations\DeleteRedirectURLResponse](../../Models/Operations/DeleteRedirectURLResponse.md)**

