# RedirectURLs
(*redirectURLs*)

## Overview

Redirect URLs are whitelisted URLs that facilitate secure authentication flows in native applications (e.g. React Native, Expo).
In these contexts, Clerk ensures that security-critical nonces are passed only to the whitelisted URLs.

### Available Operations

* [listRedirectURLs](#listredirecturls) - List all redirect URLs
* [createRedirectURL](#createredirecturl) - Create a redirect URL
* [getRedirectURL](#getredirecturl) - Retrieve a redirect URL
* [deleteRedirectURL](#deleteredirecturl) - Delete a redirect URL

## listRedirectURLs

Lists all whitelisted redirect_urls for the instance

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->redirectURLs->listRedirectURLs(

);

if ($response->redirectURLList !== null) {
    // handle response
}
```

### Response

**[?Operations\ListRedirectURLsResponse](../../Models/Operations/ListRedirectURLsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createRedirectURL

Create a redirect URL

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\CreateRedirectURLRequestBody();

$response = $sdk->redirectURLs->createRedirectURL(
    request: $request
);

if ($response->redirectURL !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateRedirectURLRequestBody](../../Models/Operations/CreateRedirectURLRequestBody.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateRedirectURLResponse](../../Models/Operations/CreateRedirectURLResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors75 | 400, 422             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## getRedirectURL

Retrieve the details of the redirect URL with the given ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->redirectURLs->getRedirectURL(
    id: '<id>'
);

if ($response->redirectURL !== null) {
    // handle response
}
```

### Parameters

| Parameter                  | Type                       | Required                   | Description                |
| -------------------------- | -------------------------- | -------------------------- | -------------------------- |
| `id`                       | *string*                   | :heavy_check_mark:         | The ID of the redirect URL |

### Response

**[?Operations\GetRedirectURLResponse](../../Models/Operations/GetRedirectURLResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors76 | 404                  | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## deleteRedirectURL

Remove the selected redirect URL from the whitelist of the instance

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->redirectURLs->deleteRedirectURL(
    id: '<id>'
);

if ($response->deletedObject !== null) {
    // handle response
}
```

### Parameters

| Parameter                  | Type                       | Required                   | Description                |
| -------------------------- | -------------------------- | -------------------------- | -------------------------- |
| `id`                       | *string*                   | :heavy_check_mark:         | The ID of the redirect URL |

### Response

**[?Operations\DeleteRedirectURLResponse](../../Models/Operations/DeleteRedirectURLResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors77 | 404                  | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |