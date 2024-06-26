# Users


## Overview

The user object represents a user that has successfully signed up to your application.

<https://clerk.com/docs/reference/clerkjs/user>
### Available Operations

* [getUserList](#getuserlist) - List all users
* [createUser](#createuser) - Create a new user
* [getUsersCount](#getuserscount) - Count users
* [getUser](#getuser) - Retrieve a user
* [updateUser](#updateuser) - Update a user
* [deleteUser](#deleteuser) - Delete a user
* [banUser](#banuser) - Ban a user
* [unbanUser](#unbanuser) - Unban a user
* [lockUser](#lockuser) - Lock a user
* [unlockUser](#unlockuser) - Unlock a user
* [setUserProfileImage](#setuserprofileimage) - Set user profile image
* [deleteUserProfileImage](#deleteuserprofileimage) - Delete user profile image
* [updateUserMetadata](#updateusermetadata) - Merge and update a user's metadata
* [getOAuthAccessToken](#getoauthaccesstoken) - Retrieve the OAuth access token of a user
* [usersGetOrganizationMemberships](#usersgetorganizationmemberships) - Retrieve all memberships for a user
* [verifyPassword](#verifypassword) - Verify the password of a user
* [verifyTOTP](#verifytotp) - Verify a TOTP or backup code for a user
* [disableMFA](#disablemfa) - Disable a user's MFA methods

## getUserList

Returns a list of all users.
The users are returned sorted by creation date, with the newest users appearing first.

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
        $request = new Operations\GetUserListRequest();
    $request->emailAddress = [
        '<value>',
    ];
    $request->phoneNumber = [
        '<value>',
    ];
    $request->externalId = [
        '<value>',
    ];
    $request->username = [
        '<value>',
    ];
    $request->web3Wallet = [
        '<value>',
    ];
    $request->userId = [
        '<value>',
    ];
    $request->organizationId = [
        '<value>',
    ];
    $request->query = '<value>';
    $request->lastActiveAtSince = 1700690400000;
    $request->limit = 2951.7;
    $request->offset = 6512.27;
    $request->orderBy = '<value>';;

    $response = $sdk->users->getUserList($request);

    if ($response->userList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\Clerk\Backend\Models\Operations\GetUserListRequest](../../Models/Operations/GetUserListRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\Clerk\Backend\Models\Operations\GetUserListResponse](../../Models/Operations/GetUserListResponse.md)**


## createUser

Creates a new user. Your user management settings determine how you should setup your user model.

Any email address and phone number created using this method will be marked as verified.

Note: If you are performing a migration, check out our guide on [zero downtime migrations](https://clerk.com/docs/deployments/migrate-overview).

A rate limit rule of 20 requests per 10 seconds is applied to this endpoint.

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
        $request = new Operations\CreateUserRequestBody();
    $request->externalId = '<value>';
    $request->firstName = 'Grayce';
    $request->lastName = 'Simonis';
    $request->emailAddress = [
        '<value>',
    ];
    $request->phoneNumber = [
        '<value>',
    ];
    $request->web3Wallet = [
        '<value>',
    ];
    $request->username = 'Jazmyn_Simonis';
    $request->password = 'tcG6vjwZ0JJFZd3';
    $request->passwordDigest = '<value>';
    $request->passwordHasher = Operations\PasswordHasher::Pbkdf2Sha512;
    $request->skipPasswordChecks = false;
    $request->skipPasswordRequirement = false;
    $request->totpSecret = '<value>';
    $request->backupCodes = [
        '<value>',
    ];
    $request->publicMetadata = new Operations\PublicMetadata();
    $request->privateMetadata = new Operations\PrivateMetadata();
    $request->unsafeMetadata = new Operations\UnsafeMetadata();
    $request->createdAt = '<value>';;

    $response = $sdk->users->createUser($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\Clerk\Backend\Models\Operations\CreateUserRequestBody](../../Models/Operations/CreateUserRequestBody.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\Clerk\Backend\Models\Operations\CreateUserResponse](../../Models/Operations/CreateUserResponse.md)**


## getUsersCount

Returns a total count of all users that match the given filtering criteria.

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
        $request = new Operations\GetUsersCountRequest();
    $request->emailAddress = [
        '<value>',
    ];
    $request->phoneNumber = [
        '<value>',
    ];
    $request->externalId = [
        '<value>',
    ];
    $request->username = [
        '<value>',
    ];
    $request->web3Wallet = [
        '<value>',
    ];
    $request->userId = [
        '<value>',
    ];
    $request->query = '<value>';;

    $response = $sdk->users->getUsersCount($request);

    if ($response->totalCount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\Clerk\Backend\Models\Operations\GetUsersCountRequest](../../Models/Operations/GetUsersCountRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\Clerk\Backend\Models\Operations\GetUsersCountResponse](../../Models/Operations/GetUsersCountResponse.md)**


## getUser

Retrieve the details of a user

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
    

    $response = $sdk->users->getUser('<value>');

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `userId`                       | *string*                       | :heavy_check_mark:             | The ID of the user to retrieve |


### Response

**[?\Clerk\Backend\Models\Operations\GetUserResponse](../../Models/Operations/GetUserResponse.md)**


## updateUser

Update a user's attributes.

You can set the user's primary contact identifiers (email address and phone numbers) by updating the `primary_email_address_id` and `primary_phone_number_id` attributes respectively.
Both IDs should correspond to verified identifications that belong to the user.

You can remove a user's username by setting the username attribute to null or the blank string "".
This is a destructive action; the identification will be deleted forever.
Usernames can be removed only if they are optional in your instance settings and there's at least one other identifier which can be used for authentication.

This endpoint allows changing a user's password. When passing the `password` parameter directly you have two further options.
You can ignore the password policy checks for your instance by setting the `skip_password_checks` parameter to `true`.
You can also choose to sign the user out of all their active sessions on any device once the password is updated. Just set `sign_out_of_other_sessions` to `true`.

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
        $requestBody = new Operations\UpdateUserRequestBody();
    $requestBody->externalId = '<value>';
    $requestBody->firstName = 'Geovanny';
    $requestBody->lastName = 'O\'Kon';
    $requestBody->primaryEmailAddressId = '<value>';
    $requestBody->notifyPrimaryEmailAddressChanged = false;
    $requestBody->primaryPhoneNumberId = '<value>';
    $requestBody->primaryWeb3WalletId = '<value>';
    $requestBody->username = 'Grant.Schmeler';
    $requestBody->profileImageId = '<value>';
    $requestBody->password = 'gAw_7A9pbvu1hDx';
    $requestBody->passwordDigest = '<value>';
    $requestBody->passwordHasher = Operations\UpdateUserPasswordHasher::Pbkdf2Sha1;
    $requestBody->skipPasswordChecks = false;
    $requestBody->signOutOfOtherSessions = false;
    $requestBody->totpSecret = '<value>';
    $requestBody->backupCodes = [
        '<value>',
    ];
    $requestBody->publicMetadata = new Operations\UpdateUserPublicMetadata();
    $requestBody->privateMetadata = new Operations\UpdateUserPrivateMetadata();
    $requestBody->unsafeMetadata = new Operations\UpdateUserUnsafeMetadata();
    $requestBody->deleteSelfEnabled = false;
    $requestBody->createOrganizationEnabled = false;
    $requestBody->createdAt = '<value>';

    $response = $sdk->users->updateUser('<value>', $requestBody);

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `userId`                                                                                                   | *string*                                                                                                   | :heavy_check_mark:                                                                                         | The ID of the user to update                                                                               |
| `requestBody`                                                                                              | [\Clerk\Backend\Models\Operations\UpdateUserRequestBody](../../Models/Operations/UpdateUserRequestBody.md) | :heavy_check_mark:                                                                                         | N/A                                                                                                        |


### Response

**[?\Clerk\Backend\Models\Operations\UpdateUserResponse](../../Models/Operations/UpdateUserResponse.md)**


## deleteUser

Delete the specified user

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
    

    $response = $sdk->users->deleteUser('<value>');

    if ($response->deletedObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                    | Type                         | Required                     | Description                  |
| ---------------------------- | ---------------------------- | ---------------------------- | ---------------------------- |
| `userId`                     | *string*                     | :heavy_check_mark:           | The ID of the user to delete |


### Response

**[?\Clerk\Backend\Models\Operations\DeleteUserResponse](../../Models/Operations/DeleteUserResponse.md)**


## banUser

Marks the given user as banned, which means that all their sessions are revoked and they are not allowed to sign in again.

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
    

    $response = $sdk->users->banUser('<value>');

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                 | Type                      | Required                  | Description               |
| ------------------------- | ------------------------- | ------------------------- | ------------------------- |
| `userId`                  | *string*                  | :heavy_check_mark:        | The ID of the user to ban |


### Response

**[?\Clerk\Backend\Models\Operations\BanUserResponse](../../Models/Operations/BanUserResponse.md)**


## unbanUser

Removes the ban mark from the given user.

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
    

    $response = $sdk->users->unbanUser('<value>');

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                   | Type                        | Required                    | Description                 |
| --------------------------- | --------------------------- | --------------------------- | --------------------------- |
| `userId`                    | *string*                    | :heavy_check_mark:          | The ID of the user to unban |


### Response

**[?\Clerk\Backend\Models\Operations\UnbanUserResponse](../../Models/Operations/UnbanUserResponse.md)**


## lockUser

Marks the given user as locked, which means they are not allowed to sign in again until the lock expires.
Lock duration can be configured in the instance's restrictions settings.

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
    

    $response = $sdk->users->lockUser('<value>');

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                  | Type                       | Required                   | Description                |
| -------------------------- | -------------------------- | -------------------------- | -------------------------- |
| `userId`                   | *string*                   | :heavy_check_mark:         | The ID of the user to lock |


### Response

**[?\Clerk\Backend\Models\Operations\LockUserResponse](../../Models/Operations/LockUserResponse.md)**


## unlockUser

Removes the lock from the given user.

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
    

    $response = $sdk->users->unlockUser('<value>');

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                    | Type                         | Required                     | Description                  |
| ---------------------------- | ---------------------------- | ---------------------------- | ---------------------------- |
| `userId`                     | *string*                     | :heavy_check_mark:           | The ID of the user to unlock |


### Response

**[?\Clerk\Backend\Models\Operations\UnlockUserResponse](../../Models/Operations/UnlockUserResponse.md)**


## setUserProfileImage

Update a user's profile image

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
        $requestBody = new Operations\SetUserProfileImageRequestBody();
    $requestBody->file = new Operations\File();
    $requestBody->file->fileName = 'your_file_here';
    $requestBody->file->content = '0xa2d4F0A27D';

    $response = $sdk->users->setUserProfileImage('<value>', $requestBody);

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `userId`                                                                                                                     | *string*                                                                                                                     | :heavy_check_mark:                                                                                                           | The ID of the user to update the profile image for                                                                           |
| `requestBody`                                                                                                                | [\Clerk\Backend\Models\Operations\SetUserProfileImageRequestBody](../../Models/Operations/SetUserProfileImageRequestBody.md) | :heavy_check_mark:                                                                                                           | N/A                                                                                                                          |


### Response

**[?\Clerk\Backend\Models\Operations\SetUserProfileImageResponse](../../Models/Operations/SetUserProfileImageResponse.md)**


## deleteUserProfileImage

Delete a user's profile image

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
    

    $response = $sdk->users->deleteUserProfileImage('<value>');

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                          | Type                                               | Required                                           | Description                                        |
| -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- |
| `userId`                                           | *string*                                           | :heavy_check_mark:                                 | The ID of the user to delete the profile image for |


### Response

**[?\Clerk\Backend\Models\Operations\DeleteUserProfileImageResponse](../../Models/Operations/DeleteUserProfileImageResponse.md)**


## updateUserMetadata

Update a user's metadata attributes by merging existing values with the provided parameters.

This endpoint behaves differently than the *Update a user* endpoint.
Metadata values will not be replaced entirely.
Instead, a deep merge will be performed.
Deep means that any nested JSON objects will be merged as well.

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
        $requestBody = new Operations\UpdateUserMetadataRequestBody();
    $requestBody->publicMetadata = [
        'interestingly' => '<value>',
    ];
    $requestBody->privateMetadata = [
        'Bristol' => '<value>',
    ];
    $requestBody->unsafeMetadata = [
        'withdrawal' => '<value>',
    ];

    $response = $sdk->users->updateUserMetadata('<value>', $requestBody);

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `userId`                                                                                                                   | *string*                                                                                                                   | :heavy_check_mark:                                                                                                         | The ID of the user whose metadata will be updated and merged                                                               |
| `requestBody`                                                                                                              | [\Clerk\Backend\Models\Operations\UpdateUserMetadataRequestBody](../../Models/Operations/UpdateUserMetadataRequestBody.md) | :heavy_minus_sign:                                                                                                         | N/A                                                                                                                        |


### Response

**[?\Clerk\Backend\Models\Operations\UpdateUserMetadataResponse](../../Models/Operations/UpdateUserMetadataResponse.md)**


## getOAuthAccessToken

Fetch the corresponding OAuth access token for a user that has previously authenticated with a particular OAuth provider.
For OAuth 2.0, if the access token has expired and we have a corresponding refresh token, the access token will be refreshed transparently the new one will be returned.

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
    

    $response = $sdk->users->getOAuthAccessToken('<value>', '<value>');

    if ($response->responseBodies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                       | Type                                                            | Required                                                        | Description                                                     |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `userId`                                                        | *string*                                                        | :heavy_check_mark:                                              | The ID of the user for which to retrieve the OAuth access token |
| `provider`                                                      | *string*                                                        | :heavy_check_mark:                                              | The ID of the OAuth provider (e.g. `oauth_google`)              |


### Response

**[?\Clerk\Backend\Models\Operations\GetOAuthAccessTokenResponse](../../Models/Operations/GetOAuthAccessTokenResponse.md)**


## usersGetOrganizationMemberships

Retrieve a paginated list of the user's organization memberships

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
    

    $response = $sdk->users->usersGetOrganizationMemberships('<value>', 2742.08, 1971.95);

    if ($response->organizationMemberships !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `userId`                                                                                                                                  | *string*                                                                                                                                  | :heavy_check_mark:                                                                                                                        | The ID of the user whose organization memberships we want to retrieve                                                                     |
| `limit`                                                                                                                                   | *float*                                                                                                                                   | :heavy_minus_sign:                                                                                                                        | Applies a limit to the number of results returned.<br/>Can be used for paginating the results together with `offset`.                     |
| `offset`                                                                                                                                  | *float*                                                                                                                                   | :heavy_minus_sign:                                                                                                                        | Skip the first `offset` results when paginating.<br/>Needs to be an integer greater or equal to zero.<br/>To be used in conjunction with `limit`. |


### Response

**[?\Clerk\Backend\Models\Operations\UsersGetOrganizationMembershipsResponse](../../Models/Operations/UsersGetOrganizationMembershipsResponse.md)**


## verifyPassword

Check that the user's password matches the supplied input.
Useful for custom auth flows and re-verification.

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
        $requestBody = new Operations\VerifyPasswordRequestBody();
    $requestBody->password = 'fjScBhNI5ihHdcl';

    $response = $sdk->users->verifyPassword('<value>', $requestBody);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `userId`                                                                                                           | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | The ID of the user for whom to verify the password                                                                 |
| `requestBody`                                                                                                      | [\Clerk\Backend\Models\Operations\VerifyPasswordRequestBody](../../Models/Operations/VerifyPasswordRequestBody.md) | :heavy_minus_sign:                                                                                                 | N/A                                                                                                                |


### Response

**[?\Clerk\Backend\Models\Operations\VerifyPasswordResponse](../../Models/Operations/VerifyPasswordResponse.md)**


## verifyTOTP

Verify that the provided TOTP or backup code is valid for the user.
Verifying a backup code will result it in being consumed (i.e. it will
become invalid).
Useful for custom auth flows and re-verification.

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
        $requestBody = new Operations\VerifyTOTPRequestBody();
    $requestBody->code = '<value>';

    $response = $sdk->users->verifyTOTP('<value>', $requestBody);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `userId`                                                                                                   | *string*                                                                                                   | :heavy_check_mark:                                                                                         | The ID of the user for whom to verify the TOTP                                                             |
| `requestBody`                                                                                              | [\Clerk\Backend\Models\Operations\VerifyTOTPRequestBody](../../Models/Operations/VerifyTOTPRequestBody.md) | :heavy_minus_sign:                                                                                         | N/A                                                                                                        |


### Response

**[?\Clerk\Backend\Models\Operations\VerifyTOTPResponse](../../Models/Operations/VerifyTOTPResponse.md)**


## disableMFA

Disable all of a user's MFA methods (e.g. OTP sent via SMS, TOTP on their authenticator app) at once.

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
    

    $response = $sdk->users->disableMFA('<value>');

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `userId`                                                | *string*                                                | :heavy_check_mark:                                      | The ID of the user whose MFA methods are to be disabled |


### Response

**[?\Clerk\Backend\Models\Operations\DisableMFAResponse](../../Models/Operations/DisableMFAResponse.md)**

