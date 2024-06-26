# AllowListBlockList


## Overview

Allow-lists and Block-lists allow you to control who can sign up or sign in
to your application, by restricting access based on the user's email
address or phone number.

<https://clerk.com/docs/authentication/allowlist>
### Available Operations

* [listAllowlistIdentifiers](#listallowlistidentifiers) - List all identifiers on the allow-list
* [createAllowlistIdentifier](#createallowlistidentifier) - Add identifier to the allow-list
* [deleteAllowlistIdentifier](#deleteallowlistidentifier) - Delete identifier from allow-list
* [listBlocklistIdentifiers](#listblocklistidentifiers) - List all identifiers on the block-list
* [createBlocklistIdentifier](#createblocklistidentifier) - Add identifier to the block-list
* [deleteBlocklistIdentifier](#deleteblocklistidentifier) - Delete identifier from block-list

## listAllowlistIdentifiers

Get a list of all identifiers allowed to sign up to an instance

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Clerk\Backend;
use \Clerk\Backend\Models\Components;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    $response = $sdk->allowListBlockList->listAllowlistIdentifiers();

    if ($response->allowlistIdentifierList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Clerk\Backend\Models\Operations\ListAllowlistIdentifiersResponse](../../Models/Operations/ListAllowlistIdentifiersResponse.md)**


## createAllowlistIdentifier

Create an identifier allowed to sign up to an instance

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
        $request = new Operations\CreateAllowlistIdentifierRequestBody();
    $request->identifier = '<value>';
    $request->notify = false;;

    $response = $sdk->allowListBlockList->createAllowlistIdentifier($request);

    if ($response->allowlistIdentifier !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [\Clerk\Backend\Models\Operations\CreateAllowlistIdentifierRequestBody](../../Models/Operations/CreateAllowlistIdentifierRequestBody.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |


### Response

**[?\Clerk\Backend\Models\Operations\CreateAllowlistIdentifierResponse](../../Models/Operations/CreateAllowlistIdentifierResponse.md)**


## deleteAllowlistIdentifier

Delete an identifier from the instance allow-list

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
    

    $response = $sdk->allowListBlockList->deleteAllowlistIdentifier('<value>');

    if ($response->deletedObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                              | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `identifierId`                                         | *string*                                               | :heavy_check_mark:                                     | The ID of the identifier to delete from the allow-list |


### Response

**[?\Clerk\Backend\Models\Operations\DeleteAllowlistIdentifierResponse](../../Models/Operations/DeleteAllowlistIdentifierResponse.md)**


## listBlocklistIdentifiers

Get a list of all identifiers which are not allowed to access an instance

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Clerk\Backend;
use \Clerk\Backend\Models\Components;

$security = new Components\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

try {
    $response = $sdk->allowListBlockList->listBlocklistIdentifiers();

    if ($response->blocklistIdentifiers !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Clerk\Backend\Models\Operations\ListBlocklistIdentifiersResponse](../../Models/Operations/ListBlocklistIdentifiersResponse.md)**


## createBlocklistIdentifier

Create an identifier that is blocked from accessing an instance

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
        $request = new Operations\CreateBlocklistIdentifierRequestBody();
    $request->identifier = '<value>';;

    $response = $sdk->allowListBlockList->createBlocklistIdentifier($request);

    if ($response->blocklistIdentifier !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [\Clerk\Backend\Models\Operations\CreateBlocklistIdentifierRequestBody](../../Models/Operations/CreateBlocklistIdentifierRequestBody.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |


### Response

**[?\Clerk\Backend\Models\Operations\CreateBlocklistIdentifierResponse](../../Models/Operations/CreateBlocklistIdentifierResponse.md)**


## deleteBlocklistIdentifier

Delete an identifier from the instance block-list

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
    

    $response = $sdk->allowListBlockList->deleteBlocklistIdentifier('<value>');

    if ($response->deletedObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                              | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `identifierId`                                         | *string*                                               | :heavy_check_mark:                                     | The ID of the identifier to delete from the block-list |


### Response

**[?\Clerk\Backend\Models\Operations\DeleteBlocklistIdentifierResponse](../../Models/Operations/DeleteBlocklistIdentifierResponse.md)**

