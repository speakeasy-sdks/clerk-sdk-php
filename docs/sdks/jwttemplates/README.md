# JWTTemplates

## Overview

JWT Templates allow you to generate custom authentication tokens
tied to authenticated sessions, enabling you to integrate with third-party
services.
<https://clerk.com/docs/request-authentication/jwt-templates>

### Available Operations

* [listJWTTemplates](#listjwttemplates) - List all templates
* [createJWTTemplate](#createjwttemplate) - Create a JWT template
* [getJWTTemplate](#getjwttemplate) - Retrieve a template
* [updateJWTTemplate](#updatejwttemplate) - Update a JWT template
* [deleteJWTTemplate](#deletejwttemplate) - Delete a Template

## listJWTTemplates

List all templates

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    $response = $sdk->jwtTemplates->listJWTTemplates();

    if ($response->jwtTemplateList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\ListJWTTemplatesResponse](../../Models/Operations/ListJWTTemplatesResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## createJWTTemplate

Create a new JWT template

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
    $request = new Operations\CreateJWTTemplateRequestBody(
        name: '<value>',
        claims: new Operations\Claims(

        ),
        lifetime: 6361.96,
        allowedClockSkew: 8500.88,
        customSigningKey: false,
        signingAlgorithm: '<value>',
        signingKey: '<value>',
    );
    $response = $sdk->jwtTemplates->createJWTTemplate($request);

    if ($response->jwtTemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateJWTTemplateRequestBody](../../Models/Operations/CreateJWTTemplateRequestBody.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateJWTTemplateResponse](../../Models/Operations/CreateJWTTemplateResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,402,422                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## getJWTTemplate

Retrieve the details of a given JWT template

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {

    $response = $sdk->jwtTemplates->getJWTTemplate('<value>');

    if ($response->jwtTemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `templateId`       | *string*           | :heavy_check_mark: | JWT Template ID    |

### Response

**[?Operations\GetJWTTemplateResponse](../../Models/Operations/GetJWTTemplateResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 404                                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## updateJWTTemplate

Updates an existing JWT template

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
    $requestBody = new Operations\UpdateJWTTemplateRequestBody(
        name: '<value>',
        claims: new Operations\UpdateJWTTemplateClaims(

        ),
        lifetime: 5704.19,
        allowedClockSkew: 1506.03,
        customSigningKey: false,
        signingAlgorithm: '<value>',
        signingKey: '<value>',
    );
    $response = $sdk->jwtTemplates->updateJWTTemplate('<value>', $requestBody);

    if ($response->jwtTemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `templateId`                                                                                       | *string*                                                                                           | :heavy_check_mark:                                                                                 | The ID of the JWT template to update                                                               |
| `requestBody`                                                                                      | [Operations\UpdateJWTTemplateRequestBody](../../Models/Operations/UpdateJWTTemplateRequestBody.md) | :heavy_minus_sign:                                                                                 | N/A                                                                                                |

### Response

**[?Operations\UpdateJWTTemplateResponse](../../Models/Operations/UpdateJWTTemplateResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,402,422                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## deleteJWTTemplate

Delete a Template

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {

    $response = $sdk->jwtTemplates->deleteJWTTemplate('<value>');

    if ($response->deletedObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `templateId`       | *string*           | :heavy_check_mark: | JWT Template ID    |

### Response

**[?Operations\DeleteJWTTemplateResponse](../../Models/Operations/DeleteJWTTemplateResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 403,404                                  | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |
