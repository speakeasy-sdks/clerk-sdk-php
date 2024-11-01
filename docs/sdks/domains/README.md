# Domains
(*domains*)

## Overview

Domains represent each instance's URLs and DNS setup.

### Available Operations

* [listDomains](#listdomains) - List all instance domains
* [addDomain](#adddomain) - Add a domain
* [deleteDomain](#deletedomain) - Delete a satellite domain
* [updateDomain](#updatedomain) - Update a domain

## listDomains

Use this endpoint to get a list of all domains for an instance.
The response will contain the primary domain for the instance and any satellite domains. Each domain in the response contains information about the URLs where Clerk operates and the required CNAME targets.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->domains->listDomains(

);

if ($response->domains !== null) {
    // handle response
}
```

### Response

**[?Operations\ListDomainsResponse](../../Models/Operations/ListDomainsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## addDomain

Add a new domain for your instance.
Useful in the case of multi-domain instances, allows adding satellite domains to an instance.
The new domain must have a `name`. The domain name can contain the port for development instances, like `localhost:3000`.
At the moment, instances can have only one primary domain, so the `is_satellite` parameter must be set to `true`.
If you're planning to configure the new satellite domain to run behind a proxy, pass the `proxy_url` parameter accordingly.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\AddDomainRequestBody(
    name: '<value>',
    isSatellite: false,
);

$response = $sdk->domains->addDomain(
    request: $request
);

if ($response->domain !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\AddDomainRequestBody](../../Models/Operations/AddDomainRequestBody.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\AddDomainResponse](../../Models/Operations/AddDomainResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors46 | 400, 402, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## deleteDomain

Deletes a satellite domain for the instance.
It is currently not possible to delete the instance's primary domain.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->domains->deleteDomain(
    domainId: '<id>'
);

if ($response->deletedObject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `domainId`                                                             | *string*                                                               | :heavy_check_mark:                                                     | The ID of the domain that will be deleted. Must be a satellite domain. |

### Response

**[?Operations\DeleteDomainResponse](../../Models/Operations/DeleteDomainResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors47 | 403, 404             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## updateDomain

The `proxy_url` can be updated only for production instances.
Update one of the instance's domains. Both primary and satellite domains can be updated.
If you choose to use Clerk via proxy, use this endpoint to specify the `proxy_url`.
Whenever you decide you'd rather switch to DNS setup for Clerk, simply set `proxy_url`
to `null` for the domain. When you update a production instance's primary domain name,
you have to make sure that you've completed all the necessary setup steps for DNS and
emails to work. Expect downtime otherwise. Updating a primary domain's name will also
update the instance's home origin, affecting the default application paths.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$requestBody = new Operations\UpdateDomainRequestBody();

$response = $sdk->domains->updateDomain(
    domainId: '<id>',
    requestBody: $requestBody

);

if ($response->domain !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `domainId`                                                                               | *string*                                                                                 | :heavy_check_mark:                                                                       | The ID of the domain that will be updated.                                               |
| `requestBody`                                                                            | [Operations\UpdateDomainRequestBody](../../Models/Operations/UpdateDomainRequestBody.md) | :heavy_check_mark:                                                                       | N/A                                                                                      |

### Response

**[?Operations\UpdateDomainResponse](../../Models/Operations/UpdateDomainResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors48 | 400, 404, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |