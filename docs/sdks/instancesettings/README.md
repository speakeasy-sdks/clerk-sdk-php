# InstanceSettings
(*instanceSettings*)

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
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\UpdateInstanceRequestBody();

$response = $sdk->instanceSettings->updateInstance(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateInstanceRequestBody](../../Models/Operations/UpdateInstanceRequestBody.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateInstanceResponse](../../Models/Operations/UpdateInstanceResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors49 | 422                  | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## updateInstanceRestrictions

Updates the restriction settings of an instance

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\UpdateInstanceRestrictionsRequestBody();

$response = $sdk->instanceSettings->updateInstanceRestrictions(
    request: $request
);

if ($response->instanceRestrictions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\UpdateInstanceRestrictionsRequestBody](../../Models/Operations/UpdateInstanceRestrictionsRequestBody.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\UpdateInstanceRestrictionsResponse](../../Models/Operations/UpdateInstanceRestrictionsResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors49 | 402, 422             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## updateInstanceOrganizationSettings

Updates the organization settings of the instance

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\UpdateInstanceOrganizationSettingsRequestBody();

$response = $sdk->instanceSettings->updateInstanceOrganizationSettings(
    request: $request
);

if ($response->organizationSettings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\UpdateInstanceOrganizationSettingsRequestBody](../../Models/Operations/UpdateInstanceOrganizationSettingsRequestBody.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\UpdateInstanceOrganizationSettingsResponse](../../Models/Operations/UpdateInstanceOrganizationSettingsResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors51 | 402, 404, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |