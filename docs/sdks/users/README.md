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
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;
use Clerk\Backend\Models\Operations;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetUserListRequest(
        emailAddress: [
            '<value>',
        ],
        phoneNumber: [
            '<value>',
        ],
        externalId: [
            '<value>',
        ],
        username: [
            '<value>',
        ],
        web3Wallet: [
            '<value>',
        ],
        userId: [
            '<value>',
        ],
        organizationId: [
            '<value>',
        ],
        query: '<value>',
        lastActiveAtSince: 1700690400000,
        limit: 2951.7,
        offset: 6512.27,
        orderBy: '<value>',
    );
    $response = $sdk->users->getUserList($request);

    if ($response->userList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetUserListRequest](../../Models/Operations/GetUserListRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetUserListResponse](../../Models/Operations/GetUserListResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,422                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## createUser

Creates a new user. Your user management settings determine how you should setup your user model.

Any email address and phone number created using this method will be marked as verified.

Note: If you are performing a migration, check out our guide on [zero downtime migrations](https://clerk.com/docs/deployments/migrate-overview).

A rate limit rule of 20 requests per 10 seconds is applied to this endpoint.

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
    $request = new Operations\CreateUserRequestBody(
        externalId: '<value>',
        firstName: 'Grayce',
        lastName: 'Simonis',
        emailAddress: [
            '<value>',
        ],
        phoneNumber: [
            '<value>',
        ],
        web3Wallet: [
            '<value>',
        ],
        username: 'Jazmyn_Simonis',
        password: 'tcG6vjwZ0JJFZd3',
        passwordDigest: '<value>',
        passwordHasher: Operations\PasswordHasher::Pbkdf2Sha512,
        skipPasswordChecks: false,
        skipPasswordRequirement: false,
        totpSecret: '<value>',
        backupCodes: [
            '<value>',
        ],
        publicMetadata: new Operations\PublicMetadata(

        ),
        privateMetadata: new Operations\PrivateMetadata(

        ),
        unsafeMetadata: new Operations\UnsafeMetadata(

        ),
        createdAt: '<value>',
    );
    $response = $sdk->users->createUser($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateUserRequestBody](../../Models/Operations/CreateUserRequestBody.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateUserResponse](../../Models/Operations/CreateUserResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,403,422                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## getUsersCount

Returns a total count of all users that match the given filtering criteria.

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
    $request = new Operations\GetUsersCountRequest(
        emailAddress: [
            '<value>',
        ],
        phoneNumber: [
            '<value>',
        ],
        externalId: [
            '<value>',
        ],
        username: [
            '<value>',
        ],
        web3Wallet: [
            '<value>',
        ],
        userId: [
            '<value>',
        ],
        query: '<value>',
    );
    $response = $sdk->users->getUsersCount($request);

    if ($response->totalCount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetUsersCountRequest](../../Models/Operations/GetUsersCountRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetUsersCountResponse](../../Models/Operations/GetUsersCountResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 422                                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## getUser

Retrieve the details of a user

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

**[?Operations\GetUserResponse](../../Models/Operations/GetUserResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,404                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


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
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Components;
use Clerk\Backend\Models\Operations;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    $requestBody = new Operations\UpdateUserRequestBody(
        externalId: '<value>',
        firstName: 'Geovanny',
        lastName: 'O\'Kon',
        primaryEmailAddressId: '<value>',
        notifyPrimaryEmailAddressChanged: false,
        primaryPhoneNumberId: '<value>',
        primaryWeb3WalletId: '<value>',
        username: 'Grant.Schmeler',
        profileImageId: '<value>',
        password: 'gAw_7A9pbvu1hDx',
        passwordDigest: '<value>',
        passwordHasher: Operations\UpdateUserPasswordHasher::Pbkdf2Sha1,
        skipPasswordChecks: false,
        signOutOfOtherSessions: false,
        totpSecret: '<value>',
        backupCodes: [
            '<value>',
        ],
        publicMetadata: new Operations\UpdateUserPublicMetadata(

        ),
        privateMetadata: new Operations\UpdateUserPrivateMetadata(

        ),
        unsafeMetadata: new Operations\UpdateUserUnsafeMetadata(

        ),
        deleteSelfEnabled: false,
        createOrganizationEnabled: false,
        createdAt: '<value>',
    );
    $response = $sdk->users->updateUser('<value>', $requestBody);

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `userId`                                                                             | *string*                                                                             | :heavy_check_mark:                                                                   | The ID of the user to update                                                         |
| `requestBody`                                                                        | [Operations\UpdateUserRequestBody](../../Models/Operations/UpdateUserRequestBody.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |

### Response

**[?Operations\UpdateUserResponse](../../Models/Operations/UpdateUserResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,404,422                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## deleteUser

Delete the specified user

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

**[?Operations\DeleteUserResponse](../../Models/Operations/DeleteUserResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,404                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## banUser

Marks the given user as banned, which means that all their sessions are revoked and they are not allowed to sign in again.

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

**[?Operations\BanUserResponse](../../Models/Operations/BanUserResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 402                                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## unbanUser

Removes the ban mark from the given user.

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

**[?Operations\UnbanUserResponse](../../Models/Operations/UnbanUserResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 402                                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## lockUser

Marks the given user as locked, which means they are not allowed to sign in again until the lock expires.
Lock duration can be configured in the instance's restrictions settings.

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

**[?Operations\LockUserResponse](../../Models/Operations/LockUserResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 403                                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## unlockUser

Removes the lock from the given user.

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

**[?Operations\UnlockUserResponse](../../Models/Operations/UnlockUserResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 403                                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## setUserProfileImage

Update a user's profile image

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
    $requestBody = new Operations\SetUserProfileImageRequestBody(
        file: new Operations\File(
            fileName: 'your_file_here',
            content: '0xa2d4F0A27D',
        ),
    );
    $response = $sdk->users->setUserProfileImage('<value>', $requestBody);

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `userId`                                                                                               | *string*                                                                                               | :heavy_check_mark:                                                                                     | The ID of the user to update the profile image for                                                     |
| `requestBody`                                                                                          | [Operations\SetUserProfileImageRequestBody](../../Models/Operations/SetUserProfileImageRequestBody.md) | :heavy_check_mark:                                                                                     | N/A                                                                                                    |

### Response

**[?Operations\SetUserProfileImageResponse](../../Models/Operations/SetUserProfileImageResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,404                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## deleteUserProfileImage

Delete a user's profile image

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

**[?Operations\DeleteUserProfileImageResponse](../../Models/Operations/DeleteUserProfileImageResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 404                                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## updateUserMetadata

Update a user's metadata attributes by merging existing values with the provided parameters.

This endpoint behaves differently than the *Update a user* endpoint.
Metadata values will not be replaced entirely.
Instead, a deep merge will be performed.
Deep means that any nested JSON objects will be merged as well.

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
    $requestBody = new Operations\UpdateUserMetadataRequestBody(
        publicMetadata: [
            'interestingly' => '<value>',
        ],
        privateMetadata: [
            'Bristol' => '<value>',
        ],
        unsafeMetadata: [
            'withdrawal' => '<value>',
        ],
    );
    $response = $sdk->users->updateUserMetadata('<value>', $requestBody);

    if ($response->user !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `userId`                                                                                             | *string*                                                                                             | :heavy_check_mark:                                                                                   | The ID of the user whose metadata will be updated and merged                                         |
| `requestBody`                                                                                        | [Operations\UpdateUserMetadataRequestBody](../../Models/Operations/UpdateUserMetadataRequestBody.md) | :heavy_minus_sign:                                                                                   | N/A                                                                                                  |

### Response

**[?Operations\UpdateUserMetadataResponse](../../Models/Operations/UpdateUserMetadataResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,404,422                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## getOAuthAccessToken

Fetch the corresponding OAuth access token for a user that has previously authenticated with a particular OAuth provider.
For OAuth 2.0, if the access token has expired and we have a corresponding refresh token, the access token will be refreshed transparently the new one will be returned.

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

**[?Operations\GetOAuthAccessTokenResponse](../../Models/Operations/GetOAuthAccessTokenResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,422                                  | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## usersGetOrganizationMemberships

Retrieve a paginated list of the user's organization memberships

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

**[?Operations\UsersGetOrganizationMembershipsResponse](../../Models/Operations/UsersGetOrganizationMembershipsResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 403                                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## verifyPassword

Check that the user's password matches the supplied input.
Useful for custom auth flows and re-verification.

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
    $requestBody = new Operations\VerifyPasswordRequestBody(
        password: 'fjScBhNI5ihHdcl',
    );
    $response = $sdk->users->verifyPassword('<value>', $requestBody);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `userId`                                                                                     | *string*                                                                                     | :heavy_check_mark:                                                                           | The ID of the user for whom to verify the password                                           |
| `requestBody`                                                                                | [Operations\VerifyPasswordRequestBody](../../Models/Operations/VerifyPasswordRequestBody.md) | :heavy_minus_sign:                                                                           | N/A                                                                                          |

### Response

**[?Operations\VerifyPasswordResponse](../../Models/Operations/VerifyPasswordResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 500                                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## verifyTOTP

Verify that the provided TOTP or backup code is valid for the user.
Verifying a backup code will result it in being consumed (i.e. it will
become invalid).
Useful for custom auth flows and re-verification.

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
    $requestBody = new Operations\VerifyTOTPRequestBody(
        code: '<value>',
    );
    $response = $sdk->users->verifyTOTP('<value>', $requestBody);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `userId`                                                                             | *string*                                                                             | :heavy_check_mark:                                                                   | The ID of the user for whom to verify the TOTP                                       |
| `requestBody`                                                                        | [Operations\VerifyTOTPRequestBody](../../Models/Operations/VerifyTOTPRequestBody.md) | :heavy_minus_sign:                                                                   | N/A                                                                                  |

### Response

**[?Operations\VerifyTOTPResponse](../../Models/Operations/VerifyTOTPResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 500                                      | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## disableMFA

Disable all of a user's MFA methods (e.g. OTP sent via SMS, TOTP on their authenticator app) at once.

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

**[?Operations\DisableMFAResponse](../../Models/Operations/DisableMFAResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 404,500                                  | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |
