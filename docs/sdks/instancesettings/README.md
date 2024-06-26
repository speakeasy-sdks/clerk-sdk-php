# InstanceSettings


## Overview

Modify the settings of your instance.

### Available Operations

* [updateInstance](#updateinstance) - Update instance settings
* [updateInstanceRestrictions](#updateinstancerestrictions) - Update instance restrictions
* [updateInstanceOrganizationSettings](#updateinstanceorganizationsettings) - Update instance organization settings

## updateInstance

Updates the settings of an instance

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
        $request = new Operations\UpdateInstanceRequestBody();
    $request->testMode = false;
    $request->hibp = false;
    $request->enhancedEmailDeliverability = false;
    $request->supportEmail = '<value>';
    $request->clerkJsVersion = '<value>';
    $request->developmentOrigin = '<value>';
    $request->allowedOrigins = [
        '<value>',
    ];
    $request->cookielessDev = false;
    $request->urlBasedSessionSyncing = false;;

    $response = $sdk->instanceSettings->updateInstance($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\Clerk\Backend\Models\Operations\UpdateInstanceRequestBody](../../Models/Operations/UpdateInstanceRequestBody.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\Clerk\Backend\Models\Operations\UpdateInstanceResponse](../../Models/Operations/UpdateInstanceResponse.md)**


## updateInstanceRestrictions

Updates the restriction settings of an instance

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
        $request = new Operations\UpdateInstanceRestrictionsRequestBody();
    $request->allowlist = false;
    $request->blocklist = false;
    $request->blockEmailSubaddresses = false;
    $request->blockDisposableEmailDomains = false;
    $request->ignoreDotsForGmailAddresses = false;;

    $response = $sdk->instanceSettings->updateInstanceRestrictions($request);

    if ($response->instanceRestrictions !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                  | Type                                                                                                                                       | Required                                                                                                                                   | Description                                                                                                                                |
| ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                                 | [\Clerk\Backend\Models\Operations\UpdateInstanceRestrictionsRequestBody](../../Models/Operations/UpdateInstanceRestrictionsRequestBody.md) | :heavy_check_mark:                                                                                                                         | The request object to use for the request.                                                                                                 |


### Response

**[?\Clerk\Backend\Models\Operations\UpdateInstanceRestrictionsResponse](../../Models/Operations/UpdateInstanceRestrictionsResponse.md)**


## updateInstanceOrganizationSettings

Updates the organization settings of the instance

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
        $request = new Operations\UpdateInstanceOrganizationSettingsRequestBody();
    $request->enabled = false;
    $request->maxAllowedMemberships = 238063;
    $request->adminDeleteEnabled = false;
    $request->domainsEnabled = false;
    $request->domainsEnrollmentModes = [
        '<value>',
    ];
    $request->creatorRoleId = '<value>';
    $request->domainsDefaultRoleId = '<value>';;

    $response = $sdk->instanceSettings->updateInstanceOrganizationSettings($request);

    if ($response->organizationSettings !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                  | Type                                                                                                                                                       | Required                                                                                                                                                   | Description                                                                                                                                                |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                 | [\Clerk\Backend\Models\Operations\UpdateInstanceOrganizationSettingsRequestBody](../../Models/Operations/UpdateInstanceOrganizationSettingsRequestBody.md) | :heavy_check_mark:                                                                                                                                         | The request object to use for the request.                                                                                                                 |


### Response

**[?\Clerk\Backend\Models\Operations\UpdateInstanceOrganizationSettingsResponse](../../Models/Operations/UpdateInstanceOrganizationSettingsResponse.md)**

