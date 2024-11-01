# TestingTokens
(*testingTokens*)

## Overview

Tokens meant for use by end-to-end test suites in requests to the Frontend API, so as to bypass bot detection measures.
<https://clerk.com/docs/testing/overview#testing-tokens>

### Available Operations

* [createTestingToken](#createtestingtoken) - Retrieve a new testing token

## createTestingToken

Retrieve a new testing token. Only available for development instances.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->testingTokens->createTestingToken(

);

if ($response->testingToken !== null) {
    // handle response
}
```

### Response

**[?Operations\CreateTestingTokenResponse](../../Models/Operations/CreateTestingTokenResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |