# SAMLConnections

## Overview

A SAML Connection holds configuration data required for facilitating a SAML SSO flow between your
Clerk Instance (SP) and a particular SAML IdP.

### Available Operations

* [listSAMLConnections](#listsamlconnections) - Get a list of SAML Connections for an instance
* [createSAMLConnection](#createsamlconnection) - Create a SAML Connection
* [getSAMLConnection](#getsamlconnection) - Retrieve a SAML Connection by ID
* [updateSAMLConnection](#updatesamlconnection) - Update a SAML Connection
* [deleteSAMLConnection](#deletesamlconnection) - Delete a SAML Connection

## listSAMLConnections

Returns the list of SAML Connections for an instance.
Results can be paginated using the optional `limit` and `offset` query parameters.
The SAML Connections are ordered by descending creation date and the most recent will be returned first.

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

    $response = $sdk->samlConnections->listSAMLConnections(7432.91, 2980.65);

    if ($response->samlConnections !== null) {
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

### Response

**[?Operations\ListSAMLConnectionsResponse](../../Models/Operations/ListSAMLConnectionsResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 402,403,422                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## createSAMLConnection

Create a new SAML Connection.

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
    $request = new Operations\CreateSAMLConnectionRequestBody(
        name: '<value>',
        domain: 'sticky-consulting.name',
        provider: Operations\Provider::SamlGoogle,
        idpEntityId: '<value>',
        idpSsoUrl: '<value>',
        idpCertificate: '<value>',
        idpMetadataUrl: '<value>',
        idpMetadata: '<value>',
        attributeMapping: new Operations\AttributeMapping(
            userId: '<value>',
            emailAddress: 'Ally18@yahoo.com',
            firstName: 'Kailyn',
            lastName: 'Schuppe',
        ),
    );
    $response = $sdk->samlConnections->createSAMLConnection($request);

    if ($response->samlConnection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateSAMLConnectionRequestBody](../../Models/Operations/CreateSAMLConnectionRequestBody.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateSAMLConnectionResponse](../../Models/Operations/CreateSAMLConnectionResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 402,403,422                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## getSAMLConnection

Fetches the SAML Connection whose ID matches the provided `saml_connection_id` in the path.

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

    $response = $sdk->samlConnections->getSAMLConnection('<value>');

    if ($response->samlConnection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                     | Type                          | Required                      | Description                   |
| ----------------------------- | ----------------------------- | ----------------------------- | ----------------------------- |
| `samlConnectionId`            | *string*                      | :heavy_check_mark:            | The ID of the SAML Connection |

### Response

**[?Operations\GetSAMLConnectionResponse](../../Models/Operations/GetSAMLConnectionResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 402,403,404                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## updateSAMLConnection

Updates the SAML Connection whose ID matches the provided `id` in the path.

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
    $requestBody = new Operations\UpdateSAMLConnectionRequestBody(
        name: '<value>',
        domain: 'best-latter.com',
        idpEntityId: '<value>',
        idpSsoUrl: '<value>',
        idpCertificate: '<value>',
        idpMetadataUrl: '<value>',
        idpMetadata: '<value>',
        attributeMapping: new Operations\UpdateSAMLConnectionAttributeMapping(
            userId: '<value>',
            emailAddress: 'Demarcus_Ward@hotmail.com',
            firstName: 'Cordell',
            lastName: 'Fay',
        ),
        active: false,
        syncUserAttributes: false,
        allowSubdomains: false,
        allowIdpInitiated: false,
    );
    $response = $sdk->samlConnections->updateSAMLConnection('<value>', $requestBody);

    if ($response->samlConnection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `samlConnectionId`                                                                                       | *string*                                                                                                 | :heavy_check_mark:                                                                                       | The ID of the SAML Connection to update                                                                  |
| `requestBody`                                                                                            | [Operations\UpdateSAMLConnectionRequestBody](../../Models/Operations/UpdateSAMLConnectionRequestBody.md) | :heavy_check_mark:                                                                                       | N/A                                                                                                      |

### Response

**[?Operations\UpdateSAMLConnectionResponse](../../Models/Operations/UpdateSAMLConnectionResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 402,403,404,422                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## deleteSAMLConnection

Deletes the SAML Connection whose ID matches the provided `id` in the path.

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

    $response = $sdk->samlConnections->deleteSAMLConnection('<value>');

    if ($response->deletedObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                               | Type                                    | Required                                | Description                             |
| --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- |
| `samlConnectionId`                      | *string*                                | :heavy_check_mark:                      | The ID of the SAML Connection to delete |

### Response

**[?Operations\DeleteSAMLConnectionResponse](../../Models/Operations/DeleteSAMLConnectionResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 402,403,404                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |
