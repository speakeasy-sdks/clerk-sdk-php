# Jwks

## Overview

Retrieve the JSON Web Key Set which can be used to verify the token signatures of the instance.

### Available Operations

* [getJWKS](#getjwks) - Retrieve the JSON Web Key Set of the instance

## getJWKS

Retrieve the JSON Web Key Set of the instance

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
    $response = $sdk->jwks->getJWKS();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\GetJWKSResponse](../../Models/Operations/GetJWKSResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |
