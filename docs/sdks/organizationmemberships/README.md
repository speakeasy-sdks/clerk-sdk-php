# OrganizationMemberships

## Overview

Manage member roles in an organization.
<https://clerk.com/docs/organizations/manage-member-roles>

### Available Operations

* [createOrganizationMembership](#createorganizationmembership) - Create a new organization membership
* [listOrganizationMemberships](#listorganizationmemberships) - Get a list of all members of an organization
* [updateOrganizationMembership](#updateorganizationmembership) - Update an organization membership
* [deleteOrganizationMembership](#deleteorganizationmembership) - Remove a member from an organization
* [updateOrganizationMembershipMetadata](#updateorganizationmembershipmetadata) - Merge and update organization membership metadata

## createOrganizationMembership

Adds a user as a member to the given organization.
Only users in the same instance as the organization can be added as members.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;
use Clerk\Backend\Models\Operations;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    $requestBody = new Operations\CreateOrganizationMembershipRequestBody(
        userId: '<value>',
        role: '<value>',
    );
    $response = $sdk->organizationMemberships->createOrganizationMembership('<value>', $requestBody);

    if ($response->organizationMembership !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `organizationId`                                                                                                         | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | The ID of the organization where the new membership will be created                                                      |
| `requestBody`                                                                                                            | [Operations\CreateOrganizationMembershipRequestBody](../../Models/Operations/CreateOrganizationMembershipRequestBody.md) | :heavy_check_mark:                                                                                                       | N/A                                                                                                                      |

### Response

**[?Operations\CreateOrganizationMembershipResponse](../../Models/Operations/CreateOrganizationMembershipResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,403,404,422                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## listOrganizationMemberships

Retrieves all user memberships for the given organization

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

    $response = $sdk->organizationMemberships->listOrganizationMemberships('<value>', 4957.25, 5573.93, '<value>');

    if ($response->organizationMemberships !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                                           | Type                                                                                                                                                                                                                                | Required                                                                                                                                                                                                                            | Description                                                                                                                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `organizationId`                                                                                                                                                                                                                    | *string*                                                                                                                                                                                                                            | :heavy_check_mark:                                                                                                                                                                                                                  | The organization ID.                                                                                                                                                                                                                |
| `limit`                                                                                                                                                                                                                             | *float*                                                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                                                  | Applies a limit to the number of results returned.<br/>Can be used for paginating the results together with `offset`.                                                                                                               |
| `offset`                                                                                                                                                                                                                            | *float*                                                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                                                  | Skip the first `offset` results when paginating.<br/>Needs to be an integer greater or equal to zero.<br/>To be used in conjunction with `limit`.                                                                                   |
| `orderBy`                                                                                                                                                                                                                           | *string*                                                                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                                                                  | Sorts organizations memberships by phone_number, email_address, created_at, first_name, last_name or username.<br/>By prepending one of those values with + or -,<br/>we can choose to sort in ascending (ASC) or descending (DESC) order." |

### Response

**[?Operations\ListOrganizationMembershipsResponse](../../Models/Operations/ListOrganizationMembershipsResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 401,422                                  | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## updateOrganizationMembership

Updates the properties of an existing organization membership

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;
use Clerk\Backend\Models\Operations;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    $requestBody = new Operations\UpdateOrganizationMembershipRequestBody(
        role: '<value>',
    );
    $response = $sdk->organizationMemberships->updateOrganizationMembership('<value>', '<value>', $requestBody);

    if ($response->organizationMembership !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `organizationId`                                                                                                         | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | The ID of the organization the membership belongs to                                                                     |
| `userId`                                                                                                                 | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | The ID of the user that this membership belongs to                                                                       |
| `requestBody`                                                                                                            | [Operations\UpdateOrganizationMembershipRequestBody](../../Models/Operations/UpdateOrganizationMembershipRequestBody.md) | :heavy_check_mark:                                                                                                       | N/A                                                                                                                      |

### Response

**[?Operations\UpdateOrganizationMembershipResponse](../../Models/Operations/UpdateOrganizationMembershipResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,404,422                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## deleteOrganizationMembership

Removes the given membership from the organization

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

    $response = $sdk->organizationMemberships->deleteOrganizationMembership('<value>', '<value>');

    if ($response->organizationMembership !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `organizationId`                                     | *string*                                             | :heavy_check_mark:                                   | The ID of the organization the membership belongs to |
| `userId`                                             | *string*                                             | :heavy_check_mark:                                   | The ID of the user that this membership belongs to   |

### Response

**[?Operations\DeleteOrganizationMembershipResponse](../../Models/Operations/DeleteOrganizationMembershipResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,404                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## updateOrganizationMembershipMetadata

Update an organization membership's metadata attributes by merging existing values with the provided parameters.
Metadata values will be updated via a deep merge. Deep means that any nested JSON objects will be merged as well.
You can remove metadata keys at any level by setting their value to `null`.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;
use Clerk\Backend\Models\Operations;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    $requestBody = new Operations\UpdateOrganizationMembershipMetadataRequestBody(
        publicMetadata: new Operations\UpdateOrganizationMembershipMetadataPublicMetadata(

        ),
        privateMetadata: new Operations\UpdateOrganizationMembershipMetadataPrivateMetadata(

        ),
    );
    $response = $sdk->organizationMemberships->updateOrganizationMembershipMetadata('<value>', '<value>', $requestBody);

    if ($response->organizationMembership !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `organizationId`                                                                                                                         | *string*                                                                                                                                 | :heavy_check_mark:                                                                                                                       | The ID of the organization the membership belongs to                                                                                     |
| `userId`                                                                                                                                 | *string*                                                                                                                                 | :heavy_check_mark:                                                                                                                       | The ID of the user that this membership belongs to                                                                                       |
| `requestBody`                                                                                                                            | [Operations\UpdateOrganizationMembershipMetadataRequestBody](../../Models/Operations/UpdateOrganizationMembershipMetadataRequestBody.md) | :heavy_check_mark:                                                                                                                       | N/A                                                                                                                                      |

### Response

**[?Operations\UpdateOrganizationMembershipMetadataResponse](../../Models/Operations/UpdateOrganizationMembershipMetadataResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,404,422                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |
