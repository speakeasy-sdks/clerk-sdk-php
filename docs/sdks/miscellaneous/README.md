# Miscellaneous


## Overview

Various endpoints that do not belong in any particular category.

### Available Operations

* [getPublicInterstitial](#getpublicinterstitial) - Returns the markup for the interstitial page

## getPublicInterstitial

The Clerk interstitial endpoint serves an html page that loads clerk.js in order to check the user's authentication state.
It is used by Clerk SDKs when the user's authentication state cannot be immediately determined.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Clerk\Backend;
use \Clerk\Backend\Models\Components;
use \Clerk\Backend\Models\Operations;

$sdk = Backend\ClerkBackend::builder()->build();

try {
    

    $response = $sdk->miscellaneous->getPublicInterstitial('<value>', '<value>');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                             | Type                                  | Required                              | Description                           |
| ------------------------------------- | ------------------------------------- | ------------------------------------- | ------------------------------------- |
| `frontendApi`                         | *string*                              | :heavy_minus_sign:                    | The Frontend API key of your instance |
| `publishableKey`                      | *string*                              | :heavy_minus_sign:                    | The publishable key of your instance  |


### Response

**[?\Clerk\Backend\Models\Operations\GetPublicInterstitialResponse](../../Models/Operations/GetPublicInterstitialResponse.md)**

