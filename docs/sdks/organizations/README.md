# Organizations


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
        $request = new Operations\ListOrganizationsRequest();
    $request->limit = 7112.49;
    $request->offset = 5895.54;
    $request->includeMembersCount = false;
    $request->query = '<value>';
    $request->orderBy = '<value>';;

    $response = $sdk->organizations->listOrganizations($request);

    if ($response->organizations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\Clerk\Backend\Models\Operations\ListOrganizationsRequest](../../Models/Operations/ListOrganizationsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\Clerk\Backend\Models\Operations\ListOrganizationsResponse](../../Models/Operations/ListOrganizationsResponse.md)**


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
        $request = new Operations\CreateOrganizationRequestBody();
    $request->name = '<value>';
    $request->createdBy = '<value>';
    $request->privateMetadata = new Operations\CreateOrganizationPrivateMetadata();
    $request->publicMetadata = new Operations\CreateOrganizationPublicMetadata();
    $request->slug = '<value>';
    $request->maxAllowedMemberships = 57077;;

    $response = $sdk->organizations->createOrganization($request);

    if ($response->organization !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\Clerk\Backend\Models\Operations\CreateOrganizationRequestBody](../../Models/Operations/CreateOrganizationRequestBody.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\Clerk\Backend\Models\Operations\CreateOrganizationResponse](../../Models/Operations/CreateOrganizationResponse.md)**


## getOrganization

Fetches the organization whose ID or slug matches the provided `id_or_slug` URL query parameter.

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
    

    $response = $sdk->organizations->getOrganization('<value>');

    if ($response->organization !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                          | Type                               | Required                           | Description                        |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `organizationId`                   | *string*                           | :heavy_check_mark:                 | The ID or slug of the organization |


### Response

**[?\Clerk\Backend\Models\Operations\GetOrganizationResponse](../../Models/Operations/GetOrganizationResponse.md)**


## updateOrganization

Updates an existing organization

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
        $requestBody = new Operations\UpdateOrganizationRequestBody();
    $requestBody->publicMetadata = new Operations\UpdateOrganizationPublicMetadata();
    $requestBody->privateMetadata = new Operations\UpdateOrganizationPrivateMetadata();
    $requestBody->name = '<value>';
    $requestBody->slug = '<value>';
    $requestBody->maxAllowedMemberships = 524231;
    $requestBody->adminDeleteEnabled = false;

    $response = $sdk->organizations->updateOrganization('<value>', $requestBody);

    if ($response->organization !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `organizationId`                                                                                                           | *string*                                                                                                                   | :heavy_check_mark:                                                                                                         | The ID of the organization to update                                                                                       |
| `requestBody`                                                                                                              | [\Clerk\Backend\Models\Operations\UpdateOrganizationRequestBody](../../Models/Operations/UpdateOrganizationRequestBody.md) | :heavy_check_mark:                                                                                                         | N/A                                                                                                                        |


### Response

**[?\Clerk\Backend\Models\Operations\UpdateOrganizationResponse](../../Models/Operations/UpdateOrganizationResponse.md)**


## deleteOrganization

Deletes the given organization.
Please note that deleting an organization will also delete all memberships and invitations.
This is not reversible.

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
    

    $response = $sdk->organizations->deleteOrganization('<value>');

    if ($response->deletedObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `organizationId`                     | *string*                             | :heavy_check_mark:                   | The ID of the organization to delete |


### Response

**[?\Clerk\Backend\Models\Operations\DeleteOrganizationResponse](../../Models/Operations/DeleteOrganizationResponse.md)**


## mergeOrganizationMetadata

Update organization metadata attributes by merging existing values with the provided parameters.
Metadata values will be updated via a deep merge.
Deep meaning that any nested JSON objects will be merged as well.
You can remove metadata keys at any level by setting their value to `null`.

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
        $requestBody = new Operations\MergeOrganizationMetadataRequestBody();
    $requestBody->publicMetadata = new Operations\MergeOrganizationMetadataPublicMetadata();
    $requestBody->privateMetadata = new Operations\MergeOrganizationMetadataPrivateMetadata();

    $response = $sdk->organizations->mergeOrganizationMetadata('<value>', $requestBody);

    if ($response->organization !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `organizationId`                                                                                                                         | *string*                                                                                                                                 | :heavy_check_mark:                                                                                                                       | The ID of the organization for which metadata will be merged or updated                                                                  |
| `requestBody`                                                                                                                            | [\Clerk\Backend\Models\Operations\MergeOrganizationMetadataRequestBody](../../Models/Operations/MergeOrganizationMetadataRequestBody.md) | :heavy_check_mark:                                                                                                                       | N/A                                                                                                                                      |


### Response

**[?\Clerk\Backend\Models\Operations\MergeOrganizationMetadataResponse](../../Models/Operations/MergeOrganizationMetadataResponse.md)**


## uploadOrganizationLogo

Set or replace an organization's logo, by uploading an image file.
This endpoint uses the `multipart/form-data` request content type and accepts a file of image type.
The file size cannot exceed 10MB.
Only the following file content types are supported: `image/jpeg`, `image/png`, `image/gif`, `image/webp`, `image/x-icon`, `image/vnd.microsoft.icon`.

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
        $requestBody = new Operations\UploadOrganizationLogoRequestBody();
    $requestBody->uploaderUserId = '<value>';
    $requestBody->file = new Operations\UploadOrganizationLogoFile();
    $requestBody->file->fileName = 'your_file_here';
    $requestBody->file->content = '0xda979adced';

    $response = $sdk->organizations->uploadOrganizationLogo('<value>', $requestBody);

    if ($response->organizationWithLogo !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                          | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `organizationId`                                                                                                                   | *string*                                                                                                                           | :heavy_check_mark:                                                                                                                 | The ID of the organization for which to upload a logo                                                                              |
| `requestBody`                                                                                                                      | [\Clerk\Backend\Models\Operations\UploadOrganizationLogoRequestBody](../../Models/Operations/UploadOrganizationLogoRequestBody.md) | :heavy_minus_sign:                                                                                                                 | N/A                                                                                                                                |


### Response

**[?\Clerk\Backend\Models\Operations\UploadOrganizationLogoResponse](../../Models/Operations/UploadOrganizationLogoResponse.md)**


## deleteOrganizationLogo

Delete the organization's logo.

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
    

    $response = $sdk->organizations->deleteOrganizationLogo('<value>');

    if ($response->organization !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                      | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `organizationId`                                               | *string*                                                       | :heavy_check_mark:                                             | The ID of the organization for which the logo will be deleted. |


### Response

**[?\Clerk\Backend\Models\Operations\DeleteOrganizationLogoResponse](../../Models/Operations/DeleteOrganizationLogoResponse.md)**

