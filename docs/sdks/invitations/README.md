# Invitations


## Overview

Invitations allow you to invite someone to sign up to your application, via email.

<https://clerk.com/docs/authentication/invitations>
### Available Operations

* [createInvitation](#createinvitation) - Create an invitation
* [listInvitations](#listinvitations) - List all invitations
* [revokeInvitation](#revokeinvitation) - Revokes an invitation

## createInvitation

Creates a new invitation for the given email address and sends the invitation email.
Keep in mind that you cannot create an invitation if there is already one for the given email address.
Also, trying to create an invitation for an email address that already exists in your application will result to an error.

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
        $request = new Operations\CreateInvitationRequestBody();
    $request->emailAddress = 'Green.Aufderhar@hotmail.com';
    $request->publicMetadata = new Operations\CreateInvitationPublicMetadata();
    $request->redirectUrl = '<value>';
    $request->notify = false;
    $request->ignoreExisting = false;;

    $response = $sdk->invitations->createInvitation($request);

    if ($response->invitation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\Clerk\Backend\Models\Operations\CreateInvitationRequestBody](../../Models/Operations/CreateInvitationRequestBody.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\Clerk\Backend\Models\Operations\CreateInvitationResponse](../../Models/Operations/CreateInvitationResponse.md)**


## listInvitations

Returns all non-revoked invitations for your application, sorted by creation date

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
    

    $response = $sdk->invitations->listInvitations(5414.73, 4011.8, Operations\QueryParamStatus::Accepted);

    if ($response->invitationList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `limit`                                                                                                                                   | *float*                                                                                                                                   | :heavy_minus_sign:                                                                                                                        | Applies a limit to the number of results returned.<br/>Can be used for paginating the results together with `offset`.                     |
| `offset`                                                                                                                                  | *float*                                                                                                                                   | :heavy_minus_sign:                                                                                                                        | Skip the first `offset` results when paginating.<br/>Needs to be an integer greater or equal to zero.<br/>To be used in conjunction with `limit`. |
| `status`                                                                                                                                  | [\Clerk\Backend\Models\Operations\QueryParamStatus](../../Models/Operations/QueryParamStatus.md)                                          | :heavy_minus_sign:                                                                                                                        | Filter invitations based on their status                                                                                                  |


### Response

**[?\Clerk\Backend\Models\Operations\ListInvitationsResponse](../../Models/Operations/ListInvitationsResponse.md)**


## revokeInvitation

Revokes the given invitation.
Revoking an invitation will prevent the user from using the invitation link that was sent to them.
However, it doesn't prevent the user from signing up if they follow the sign up flow.
Only active (i.e. non-revoked) invitations can be revoked.

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
    

    $response = $sdk->invitations->revokeInvitation('<value>');

    if ($response->invitationRevoked !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                              | Type                                   | Required                               | Description                            |
| -------------------------------------- | -------------------------------------- | -------------------------------------- | -------------------------------------- |
| `invitationId`                         | *string*                               | :heavy_check_mark:                     | The ID of the invitation to be revoked |


### Response

**[?\Clerk\Backend\Models\Operations\RevokeInvitationResponse](../../Models/Operations/RevokeInvitationResponse.md)**

