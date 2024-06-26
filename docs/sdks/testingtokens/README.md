# TestingTokens


## Overview

Tokens meant for use by end-to-end test suites in requests to the Frontend API, so as to bypass bot detection measures.

<https://clerk.com/docs/testing/overview#testing-tokens>
### Available Operations

* [createTestingToken](#createtestingtoken) - Retrieve a new testing token

## createTestingToken

Retrieve a new testing token. Only available for development instances.

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
    $response = $sdk->testingTokens->createTestingToken();

    if ($response->testingToken !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Clerk\Backend\Models\Operations\CreateTestingTokenResponse](../../Models/Operations/CreateTestingTokenResponse.md)**

