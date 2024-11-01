# JWTTemplates
(*jwtTemplates*)

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

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->jwtTemplates->listJWTTemplates(

);

if ($response->jwtTemplateList !== null) {
    // handle response
}
```

### Response

**[?Operations\ListJWTTemplatesResponse](../../Models/Operations/ListJWTTemplatesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createJWTTemplate

Create a new JWT template

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\CreateJWTTemplateRequestBody();

$response = $sdk->jwtTemplates->createJWTTemplate(
    request: $request
);

if ($response->jwtTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateJWTTemplateRequestBody](../../Models/Operations/CreateJWTTemplateRequestBody.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateJWTTemplateResponse](../../Models/Operations/CreateJWTTemplateResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors53 | 400, 402, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## getJWTTemplate

Retrieve the details of a given JWT template

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->jwtTemplates->getJWTTemplate(
    templateId: '<id>'
);

if ($response->jwtTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `templateId`       | *string*           | :heavy_check_mark: | JWT Template ID    |

### Response

**[?Operations\GetJWTTemplateResponse](../../Models/Operations/GetJWTTemplateResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors54 | 404                  | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## updateJWTTemplate

Updates an existing JWT template

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$requestBody = new Operations\UpdateJWTTemplateRequestBody();

$response = $sdk->jwtTemplates->updateJWTTemplate(
    templateId: '<id>',
    requestBody: $requestBody

);

if ($response->jwtTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `templateId`                                                                                        | *string*                                                                                            | :heavy_check_mark:                                                                                  | The ID of the JWT template to update                                                                |
| `requestBody`                                                                                       | [?Operations\UpdateJWTTemplateRequestBody](../../Models/Operations/UpdateJWTTemplateRequestBody.md) | :heavy_minus_sign:                                                                                  | N/A                                                                                                 |

### Response

**[?Operations\UpdateJWTTemplateResponse](../../Models/Operations/UpdateJWTTemplateResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors55 | 400, 402, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## deleteJWTTemplate

Delete a Template

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->jwtTemplates->deleteJWTTemplate(
    templateId: '<id>'
);

if ($response->deletedObject !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `templateId`       | *string*           | :heavy_check_mark: | JWT Template ID    |

### Response

**[?Operations\DeleteJWTTemplateResponse](../../Models/Operations/DeleteJWTTemplateResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors56 | 403, 404             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |