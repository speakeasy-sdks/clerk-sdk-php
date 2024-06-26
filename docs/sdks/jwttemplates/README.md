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
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Clerk\Backend;
use \Clerk\Backend\Models\Components;

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

**[?\Clerk\Backend\Models\Operations\ListJWTTemplatesResponse](../../Models/Operations/ListJWTTemplatesResponse.md)**


## createJWTTemplate

Create a new JWT template

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
        $request = new Operations\CreateJWTTemplateRequestBody();
    $request->name = '<value>';
    $request->claims = new Operations\Claims();
    $request->lifetime = 6361.96;
    $request->allowedClockSkew = 8500.88;
    $request->customSigningKey = false;
    $request->signingAlgorithm = '<value>';
    $request->signingKey = '<value>';;

    $response = $sdk->jwtTemplates->createJWTTemplate($request);

    if ($response->jwtTemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\Clerk\Backend\Models\Operations\CreateJWTTemplateRequestBody](../../Models/Operations/CreateJWTTemplateRequestBody.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\Clerk\Backend\Models\Operations\CreateJWTTemplateResponse](../../Models/Operations/CreateJWTTemplateResponse.md)**


## getJWTTemplate

Retrieve the details of a given JWT template

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

**[?\Clerk\Backend\Models\Operations\GetJWTTemplateResponse](../../Models/Operations/GetJWTTemplateResponse.md)**


## updateJWTTemplate

Updates an existing JWT template

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
        $requestBody = new Operations\UpdateJWTTemplateRequestBody();
    $requestBody->name = '<value>';
    $requestBody->claims = new Operations\UpdateJWTTemplateClaims();
    $requestBody->lifetime = 5704.19;
    $requestBody->allowedClockSkew = 1506.03;
    $requestBody->customSigningKey = false;
    $requestBody->signingAlgorithm = '<value>';
    $requestBody->signingKey = '<value>';

    $response = $sdk->jwtTemplates->updateJWTTemplate('<value>', $requestBody);

    if ($response->jwtTemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `templateId`                                                                                                             | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | The ID of the JWT template to update                                                                                     |
| `requestBody`                                                                                                            | [\Clerk\Backend\Models\Operations\UpdateJWTTemplateRequestBody](../../Models/Operations/UpdateJWTTemplateRequestBody.md) | :heavy_minus_sign:                                                                                                       | N/A                                                                                                                      |


### Response

**[?\Clerk\Backend\Models\Operations\UpdateJWTTemplateResponse](../../Models/Operations/UpdateJWTTemplateResponse.md)**


## deleteJWTTemplate

Delete a Template

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

**[?\Clerk\Backend\Models\Operations\DeleteJWTTemplateResponse](../../Models/Operations/DeleteJWTTemplateResponse.md)**

