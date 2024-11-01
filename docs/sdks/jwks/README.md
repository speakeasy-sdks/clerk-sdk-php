# Jwks
(*jwks*)

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

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->jwks->getJWKS(

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Response

**[?Operations\GetJWKSResponse](../../Models/Operations/GetJWKSResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |