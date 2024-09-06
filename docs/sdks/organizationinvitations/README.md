# OrganizationInvitations

## Overview

Invite users to an organization.
<https://clerk.com/docs/organizations/invite-users>

### Available Operations

* [createOrganizationInvitation](#createorganizationinvitation) - Create and send an organization invitation
* [listOrganizationInvitations](#listorganizationinvitations) - Get a list of organization invitations
* [createOrganizationInvitationBulk](#createorganizationinvitationbulk) - Bulk create and send organization invitations
* [~~listPendingOrganizationInvitations~~](#listpendingorganizationinvitations) - Get a list of pending organization invitations :warning: **Deprecated**
* [getOrganizationInvitation](#getorganizationinvitation) - Retrieve an organization invitation by ID
* [revokeOrganizationInvitation](#revokeorganizationinvitation) - Revoke a pending organization invitation

## createOrganizationInvitation

Creates a new organization invitation and sends an email to the provided `email_address` with a link to accept the invitation and join the organization.
You can specify the `role` for the invited organization member.

New organization invitations get a "pending" status until they are revoked by an organization administrator or accepted by the invitee.

The request body supports passing an optional `redirect_url` parameter.
When the invited user clicks the link to accept the invitation, they will be redirected to the URL provided.
Use this parameter to implement a custom invitation acceptance flow.

You must specify the ID of the user that will send the invitation with the `inviter_user_id` parameter.
That user must be a member with administrator privileges in the organization.
Only "admin" members can create organization invitations.

You can optionally provide public and private metadata for the organization invitation.
The public metadata are visible by both the Frontend and the Backend whereas the private ones only by the Backend.
When the organization invitation is accepted, the metadata will be transferred to the newly created organization membership.

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
    $requestBody = new Operations\CreateOrganizationInvitationRequestBody(
        emailAddress: 'Palma.Kulas@hotmail.com',
        inviterUserId: '<value>',
        role: '<value>',
        publicMetadata: new Operations\CreateOrganizationInvitationPublicMetadata(

        ),
        privateMetadata: new Operations\CreateOrganizationInvitationPrivateMetadata(

        ),
        redirectUrl: '<value>',
    );
    $response = $sdk->organizationInvitations->createOrganizationInvitation('<value>', $requestBody);

    if ($response->organizationInvitation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `organizationId`                                                                                                         | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | The ID of the organization for which to send the invitation                                                              |
| `requestBody`                                                                                                            | [Operations\CreateOrganizationInvitationRequestBody](../../Models/Operations/CreateOrganizationInvitationRequestBody.md) | :heavy_check_mark:                                                                                                       | N/A                                                                                                                      |

### Response

**[?Operations\CreateOrganizationInvitationResponse](../../Models/Operations/CreateOrganizationInvitationResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,403,404,422                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## listOrganizationInvitations

This request returns the list of organization invitations.
Results can be paginated using the optional `limit` and `offset` query parameters.
You can filter them by providing the 'status' query parameter, that accepts multiple values.
The organization invitations are ordered by descending creation date.
Most recent invitations will be returned first.
Any invitations created as a result of an Organization Domain are not included in the results.

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

    $response = $sdk->organizationInvitations->listOrganizationInvitations('<value>', 6429.18, 2744.7, Operations\ListOrganizationInvitationsQueryParamStatus::Pending);

    if ($response->organizationInvitations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `organizationId`                                                                                                                          | *string*                                                                                                                                  | :heavy_check_mark:                                                                                                                        | The organization ID.                                                                                                                      |
| `limit`                                                                                                                                   | *float*                                                                                                                                   | :heavy_minus_sign:                                                                                                                        | Applies a limit to the number of results returned.<br/>Can be used for paginating the results together with `offset`.                     |
| `offset`                                                                                                                                  | *float*                                                                                                                                   | :heavy_minus_sign:                                                                                                                        | Skip the first `offset` results when paginating.<br/>Needs to be an integer greater or equal to zero.<br/>To be used in conjunction with `limit`. |
| `status`                                                                                                                                  | [Operations\ListOrganizationInvitationsQueryParamStatus](../../Models/Operations/ListOrganizationInvitationsQueryParamStatus.md)          | :heavy_minus_sign:                                                                                                                        | Filter organization invitations based on their status                                                                                     |

### Response

**[?Operations\ListOrganizationInvitationsResponse](../../Models/Operations/ListOrganizationInvitationsResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,404                                  | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## createOrganizationInvitationBulk

Creates new organization invitations in bulk and sends out emails to the provided email addresses with a link to accept the invitation and join the organization.
You can specify a different `role` for each invited organization member.
New organization invitations get a "pending" status until they are revoked by an organization administrator or accepted by the invitee.
The request body supports passing an optional `redirect_url` parameter for each invitation.
When the invited user clicks the link to accept the invitation, they will be redirected to the provided URL.
Use this parameter to implement a custom invitation acceptance flow.
You must specify the ID of the user that will send the invitation with the `inviter_user_id` parameter. Each invitation
can have a different inviter user.
Inviter users must be members with administrator privileges in the organization.
Only "admin" members can create organization invitations.
You can optionally provide public and private metadata for each organization invitation. The public metadata are visible
by both the Frontend and the Backend, whereas the private metadata are only visible by the Backend.
When the organization invitation is accepted, the metadata will be transferred to the newly created organization membership.

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

    $response = $sdk->organizationInvitations->createOrganizationInvitationBulk('<value>', [
        new Operations\RequestBody,
    ]);

    if ($response->organizationInvitations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                               | Type                                                                    | Required                                                                | Description                                                             |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| `organizationId`                                                        | *string*                                                                | :heavy_check_mark:                                                      | The organization ID.                                                    |
| `requestBody`                                                           | array<[Operations\RequestBody](../../Models/Operations/RequestBody.md)> | :heavy_check_mark:                                                      | N/A                                                                     |

### Response

**[?Operations\CreateOrganizationInvitationBulkResponse](../../Models/Operations/CreateOrganizationInvitationBulkResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,403,404,422                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## ~~listPendingOrganizationInvitations~~

This request returns the list of organization invitations with "pending" status.
These are the organization invitations that can still be used to join the organization, but have not been accepted by the invited user yet.
Results can be paginated using the optional `limit` and `offset` query parameters.
The organization invitations are ordered by descending creation date.
Most recent invitations will be returned first.
Any invitations created as a result of an Organization Domain are not included in the results.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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

    $response = $sdk->organizationInvitations->listPendingOrganizationInvitations('<value>', 9194.42, 4938.23);

    if ($response->organizationInvitations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `organizationId`                                                                                                                          | *string*                                                                                                                                  | :heavy_check_mark:                                                                                                                        | The organization ID.                                                                                                                      |
| `limit`                                                                                                                                   | *float*                                                                                                                                   | :heavy_minus_sign:                                                                                                                        | Applies a limit to the number of results returned.<br/>Can be used for paginating the results together with `offset`.                     |
| `offset`                                                                                                                                  | *float*                                                                                                                                   | :heavy_minus_sign:                                                                                                                        | Skip the first `offset` results when paginating.<br/>Needs to be an integer greater or equal to zero.<br/>To be used in conjunction with `limit`. |

### Response

**[?Operations\ListPendingOrganizationInvitationsResponse](../../Models/Operations/ListPendingOrganizationInvitationsResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,404                                  | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## getOrganizationInvitation

Use this request to get an existing organization invitation by ID.

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

    $response = $sdk->organizationInvitations->getOrganizationInvitation('<value>', '<value>');

    if ($response->organizationInvitation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                       | Type                            | Required                        | Description                     |
| ------------------------------- | ------------------------------- | ------------------------------- | ------------------------------- |
| `organizationId`                | *string*                        | :heavy_check_mark:              | The organization ID.            |
| `invitationId`                  | *string*                        | :heavy_check_mark:              | The organization invitation ID. |

### Response

**[?Operations\GetOrganizationInvitationResponse](../../Models/Operations/GetOrganizationInvitationResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,403,404                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## revokeOrganizationInvitation

Use this request to revoke a previously issued organization invitation.
Revoking an organization invitation makes it invalid; the invited user will no longer be able to join the organization with the revoked invitation.
Only organization invitations with "pending" status can be revoked.
The request needs the `requesting_user_id` parameter to specify the user which revokes the invitation.
Only users with "admin" role can revoke invitations.

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
    $requestBody = new Operations\RevokeOrganizationInvitationRequestBody(
        requestingUserId: '<value>',
    );
    $response = $sdk->organizationInvitations->revokeOrganizationInvitation('<value>', '<value>', $requestBody);

    if ($response->organizationInvitation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `organizationId`                                                                                                         | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | The organization ID.                                                                                                     |
| `invitationId`                                                                                                           | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | The organization invitation ID.                                                                                          |
| `requestBody`                                                                                                            | [Operations\RevokeOrganizationInvitationRequestBody](../../Models/Operations/RevokeOrganizationInvitationRequestBody.md) | :heavy_check_mark:                                                                                                       | N/A                                                                                                                      |

### Response

**[?Operations\RevokeOrganizationInvitationResponse](../../Models/Operations/RevokeOrganizationInvitationResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,403,404                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |
