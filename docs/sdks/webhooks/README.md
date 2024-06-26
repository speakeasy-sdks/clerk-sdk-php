# Webhooks


## Overview

You can configure webhooks to be notified about various events that happen on your instance.

<https://clerk.com/docs/integration/webhooks>
### Available Operations

* [createSvixApp](#createsvixapp) - Create a Svix app
* [deleteSvixApp](#deletesvixapp) - Delete a Svix app
* [generateSvixAuthURL](#generatesvixauthurl) - Create a Svix Dashboard URL

## createSvixApp

Create a Svix app and associate it with the current instance

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
    $response = $sdk->webhooks->createSvixApp();

    if ($response->svixURL !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Clerk\Backend\Models\Operations\CreateSvixAppResponse](../../Models/Operations/CreateSvixAppResponse.md)**


## deleteSvixApp

Delete a Svix app and disassociate it from the current instance

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
    $response = $sdk->webhooks->deleteSvixApp();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Clerk\Backend\Models\Operations\DeleteSvixAppResponse](../../Models/Operations/DeleteSvixAppResponse.md)**


## generateSvixAuthURL

Generate a new url for accessing the Svix's management dashboard for that particular instance

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
    $response = $sdk->webhooks->generateSvixAuthURL();

    if ($response->svixURL !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Clerk\Backend\Models\Operations\GenerateSvixAuthURLResponse](../../Models/Operations/GenerateSvixAuthURLResponse.md)**

