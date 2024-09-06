# BetaFeatures

## Overview

Modify instance settings that are currently in beta.

### Available Operations

* [updateInstanceAuthConfig](#updateinstanceauthconfig) - Update instance settings
* [~~updateProductionInstanceDomain~~](#updateproductioninstancedomain) - Update production instance domain :warning: **Deprecated**
* [changeProductionInstanceDomain](#changeproductioninstancedomain) - Update production instance domain

## updateInstanceAuthConfig

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
    $request = new Operations\UpdateInstanceAuthConfigRequestBody(
        restrictedToAllowlist: false,
        fromEmailAddress: '<value>',
        progressiveSignUp: false,
        sessionTokenTemplate: '<value>',
        enhancedEmailDeliverability: false,
        testMode: false,
    );
    $response = $sdk->betaFeatures->updateInstanceAuthConfig($request);

    if ($response->instanceSettings !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\UpdateInstanceAuthConfigRequestBody](../../Models/Operations/UpdateInstanceAuthConfigRequestBody.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\UpdateInstanceAuthConfigResponse](../../Models/Operations/UpdateInstanceAuthConfigResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 402,422                                  | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## ~~updateProductionInstanceDomain~~

Change the domain of a production instance.

Changing the domain requires updating the [DNS records](https://clerk.com/docs/deployments/overview#dns-records) accordingly, deploying new [SSL certificates](https://clerk.com/docs/deployments/overview#deploy), updating your Social Connection's redirect URLs and setting the new keys in your code.

WARNING: Changing your domain will invalidate all current user sessions (i.e. users will be logged out). Also, while your application is being deployed, a small downtime is expected to occur.

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
    $request = new Operations\UpdateProductionInstanceDomainRequestBody(
        homeUrl: '<value>',
    );
    $response = $sdk->betaFeatures->updateProductionInstanceDomain($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [Operations\UpdateProductionInstanceDomainRequestBody](../../Models/Operations/UpdateProductionInstanceDomainRequestBody.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |

### Response

**[?Operations\UpdateProductionInstanceDomainResponse](../../Models/Operations/UpdateProductionInstanceDomainResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,422                                  | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## changeProductionInstanceDomain

Change the domain of a production instance.

Changing the domain requires updating the [DNS records](https://clerk.com/docs/deployments/overview#dns-records) accordingly, deploying new [SSL certificates](https://clerk.com/docs/deployments/overview#deploy), updating your Social Connection's redirect URLs and setting the new keys in your code.

WARNING: Changing your domain will invalidate all current user sessions (i.e. users will be logged out). Also, while your application is being deployed, a small downtime is expected to occur.

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
    $request = new Operations\ChangeProductionInstanceDomainRequestBody(
        homeUrl: '<value>',
    );
    $response = $sdk->betaFeatures->changeProductionInstanceDomain($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [Operations\ChangeProductionInstanceDomainRequestBody](../../Models/Operations/ChangeProductionInstanceDomainRequestBody.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |

### Response

**[?Operations\ChangeProductionInstanceDomainResponse](../../Models/Operations/ChangeProductionInstanceDomainResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,422                                  | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |
