# ProxyChecks


### Available Operations

* [verifyDomainProxy](#verifydomainproxy) - Verify the proxy configuration for your domain

## verifyDomainProxy

This endpoint can be used to validate that a proxy-enabled domain is operational.
It tries to verify that the proxy URL provided in the parameters maps to a functional proxy that can reach the Clerk Frontend API.

You can use this endpoint before you set a proxy URL for a domain. This way you can ensure that switching to proxy-based
configuration will not lead to downtime for your instance.

The `proxy_url` parameter allows for testing proxy configurations for domains that don't have a proxy URL yet, or operate on
a different proxy URL than the one provided. It can also be used to re-validate a domain that is already configured to work with a proxy.

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
        $request = new Operations\VerifyDomainProxyRequestBody();
    $request->domainId = '<value>';
    $request->proxyUrl = '<value>';;

    $response = $sdk->proxyChecks->verifyDomainProxy($request);

    if ($response->proxyCheck !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\Clerk\Backend\Models\Operations\VerifyDomainProxyRequestBody](../../Models/Operations/VerifyDomainProxyRequestBody.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\Clerk\Backend\Models\Operations\VerifyDomainProxyResponse](../../Models/Operations/VerifyDomainProxyResponse.md)**

