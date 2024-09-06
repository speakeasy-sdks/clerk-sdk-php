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
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;
use Clerk\Backend\Models\Operations;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateInstanceRequestBody(
        testMode: false,
        hibp: false,
        enhancedEmailDeliverability: false,
        supportEmail: '<value>',
        clerkJsVersion: '<value>',
        developmentOrigin: '<value>',
        allowedOrigins: [
            '<value>',
        ],
        cookielessDev: false,
        urlBasedSessionSyncing: false,
    );
    $response = $sdk->instanceSettings->updateInstance($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateInstanceRequestBody](../../Models/Operations/UpdateInstanceRequestBody.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateInstanceResponse](../../Models/Operations/UpdateInstanceResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 422                                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## updateInstanceRestrictions

Updates the restriction settings of an instance

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
    $request = new Operations\UpdateInstanceRestrictionsRequestBody(
        allowlist: false,
        blocklist: false,
        blockEmailSubaddresses: false,
        blockDisposableEmailDomains: false,
        ignoreDotsForGmailAddresses: false,
    );
    $response = $sdk->instanceSettings->updateInstanceRestrictions($request);

    if ($response->instanceRestrictions !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\UpdateInstanceRestrictionsRequestBody](../../Models/Operations/UpdateInstanceRestrictionsRequestBody.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\UpdateInstanceRestrictionsResponse](../../Models/Operations/UpdateInstanceRestrictionsResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 402,422                                  | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## updateInstanceOrganizationSettings

Updates the organization settings of the instance

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
    $request = new Operations\UpdateInstanceOrganizationSettingsRequestBody(
        enabled: false,
        maxAllowedMemberships: 238063,
        adminDeleteEnabled: false,
        domainsEnabled: false,
        domainsEnrollmentModes: [
            '<value>',
        ],
        creatorRoleId: '<value>',
        domainsDefaultRoleId: '<value>',
    );
    $response = $sdk->instanceSettings->updateInstanceOrganizationSettings($request);

    if ($response->organizationSettings !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\UpdateInstanceOrganizationSettingsRequestBody](../../Models/Operations/UpdateInstanceOrganizationSettingsRequestBody.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\UpdateInstanceOrganizationSettingsResponse](../../Models/Operations/UpdateInstanceOrganizationSettingsResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 402,404,422                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |
