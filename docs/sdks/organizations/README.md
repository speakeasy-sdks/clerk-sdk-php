# Organizations
(*organizations*)

## Overview

Organizations are used to group members under a common entity and provide shared access to resources.
<https://clerk.com/docs/organizations/overview>

### Available Operations

* [listOrganizations](#listorganizations) - Get a list of organizations for an instance
* [createOrganization](#createorganization) - Create an organization
* [getOrganization](#getorganization) - Retrieve an organization by ID or slug
* [updateOrganization](#updateorganization) - Update an organization
* [deleteOrganization](#deleteorganization) - Delete an organization
* [mergeOrganizationMetadata](#mergeorganizationmetadata) - Merge and update metadata for an organization
* [uploadOrganizationLogo](#uploadorganizationlogo) - Upload a logo for the organization
* [deleteOrganizationLogo](#deleteorganizationlogo) - Delete the organization's logo.

## listOrganizations

This request returns the list of organizations for an instance.
Results can be paginated using the optional `limit` and `offset` query parameters.
The organizations are ordered by descending creation date.
Most recent organizations will be returned first.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\ListOrganizationsRequest();

$response = $sdk->organizations->listOrganizations(
    request: $request
);

if ($response->organizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListOrganizationsRequest](../../Models/Operations/ListOrganizationsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListOrganizationsResponse](../../Models/Operations/ListOrganizationsResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors57 | 400, 403, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## createOrganization

Creates a new organization with the given name for an instance.
In order to successfully create an organization you need to provide the ID of the User who will become the organization administrator.
You can specify an optional slug for the new organization.
If provided, the organization slug can contain only lowercase alphanumeric characters (letters and digits) and the dash "-".
Organization slugs must be unique for the instance.
You can provide additional metadata for the organization and set any custom attribute you want.
Organizations support private and public metadata.
Private metadata can only be accessed from the Backend API.
Public metadata can be accessed from the Backend API, and are read-only from the Frontend API.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\CreateOrganizationRequestBody(
    name: '<value>',
    createdBy: '<value>',
);

$response = $sdk->organizations->createOrganization(
    request: $request
);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateOrganizationRequestBody](../../Models/Operations/CreateOrganizationRequestBody.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateOrganizationResponse](../../Models/Operations/CreateOrganizationResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors58 | 400, 403, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## getOrganization

Fetches the organization whose ID or slug matches the provided `id_or_slug` URL query parameter.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->organizations->getOrganization(
    organizationId: '<id>'
);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter                          | Type                               | Required                           | Description                        |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `organizationId`                   | *string*                           | :heavy_check_mark:                 | The ID or slug of the organization |

### Response

**[?Operations\GetOrganizationResponse](../../Models/Operations/GetOrganizationResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors59 | 403, 404             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## updateOrganization

Updates an existing organization

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$requestBody = new Operations\UpdateOrganizationRequestBody();

$response = $sdk->organizations->updateOrganization(
    organizationId: '<id>',
    requestBody: $requestBody

);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `organizationId`                                                                                     | *string*                                                                                             | :heavy_check_mark:                                                                                   | The ID of the organization to update                                                                 |
| `requestBody`                                                                                        | [Operations\UpdateOrganizationRequestBody](../../Models/Operations/UpdateOrganizationRequestBody.md) | :heavy_check_mark:                                                                                   | N/A                                                                                                  |

### Response

**[?Operations\UpdateOrganizationResponse](../../Models/Operations/UpdateOrganizationResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors60 | 402, 404, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## deleteOrganization

Deletes the given organization.
Please note that deleting an organization will also delete all memberships and invitations.
This is not reversible.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->organizations->deleteOrganization(
    organizationId: '<id>'
);

if ($response->deletedObject !== null) {
    // handle response
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `organizationId`                     | *string*                             | :heavy_check_mark:                   | The ID of the organization to delete |

### Response

**[?Operations\DeleteOrganizationResponse](../../Models/Operations/DeleteOrganizationResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors61 | 404                  | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## mergeOrganizationMetadata

Update organization metadata attributes by merging existing values with the provided parameters.
Metadata values will be updated via a deep merge.
Deep meaning that any nested JSON objects will be merged as well.
You can remove metadata keys at any level by setting their value to `null`.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$requestBody = new Operations\MergeOrganizationMetadataRequestBody();

$response = $sdk->organizations->mergeOrganizationMetadata(
    organizationId: '<id>',
    requestBody: $requestBody

);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `organizationId`                                                                                                   | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | The ID of the organization for which metadata will be merged or updated                                            |
| `requestBody`                                                                                                      | [Operations\MergeOrganizationMetadataRequestBody](../../Models/Operations/MergeOrganizationMetadataRequestBody.md) | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |

### Response

**[?Operations\MergeOrganizationMetadataResponse](../../Models/Operations/MergeOrganizationMetadataResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors61 | 400, 401, 404, 422   | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## uploadOrganizationLogo

Set or replace an organization's logo, by uploading an image file.
This endpoint uses the `multipart/form-data` request content type and accepts a file of image type.
The file size cannot exceed 10MB.
Only the following file content types are supported: `image/jpeg`, `image/png`, `image/gif`, `image/webp`, `image/x-icon`, `image/vnd.microsoft.icon`.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$requestBody = new Operations\UploadOrganizationLogoRequestBody(
    uploaderUserId: '<id>',
    file: new Operations\UploadOrganizationLogoFile(
        fileName: 'example.file',
        content: '0xd99deAb77d',
    ),
);

$response = $sdk->organizations->uploadOrganizationLogo(
    organizationId: '<id>',
    requestBody: $requestBody

);

if ($response->organizationWithLogo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `organizationId`                                                                                              | *string*                                                                                                      | :heavy_check_mark:                                                                                            | The ID of the organization for which to upload a logo                                                         |
| `requestBody`                                                                                                 | [?Operations\UploadOrganizationLogoRequestBody](../../Models/Operations/UploadOrganizationLogoRequestBody.md) | :heavy_minus_sign:                                                                                            | N/A                                                                                                           |

### Response

**[?Operations\UploadOrganizationLogoResponse](../../Models/Operations/UploadOrganizationLogoResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors62 | 400, 403, 404, 413   | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## deleteOrganizationLogo

Delete the organization's logo.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->organizations->deleteOrganizationLogo(
    organizationId: '<id>'
);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                      | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `organizationId`                                               | *string*                                                       | :heavy_check_mark:                                             | The ID of the organization for which the logo will be deleted. |

### Response

**[?Operations\DeleteOrganizationLogoResponse](../../Models/Operations/DeleteOrganizationLogoResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors63 | 404                  | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |