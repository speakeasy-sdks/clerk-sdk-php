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

**[?\Clerk\Backend\Models\Operations\ListSAMLConnectionsResponse](../../Models/Operations/ListSAMLConnectionsResponse.md)**


## createSAMLConnection

Create a new SAML Connection.

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
        $request = new Operations\CreateSAMLConnectionRequestBody();
    $request->name = '<value>';
    $request->domain = 'sticky-consulting.name';
    $request->provider = Operations\Provider::SamlGoogle;
    $request->idpEntityId = '<value>';
    $request->idpSsoUrl = '<value>';
    $request->idpCertificate = '<value>';
    $request->idpMetadataUrl = '<value>';
    $request->idpMetadata = '<value>';
    $request->attributeMapping = new Operations\AttributeMapping();
    $request->attributeMapping->userId = '<value>';
    $request->attributeMapping->emailAddress = 'Ally18@yahoo.com';
    $request->attributeMapping->firstName = 'Kailyn';
    $request->attributeMapping->lastName = 'Schuppe';;

    $response = $sdk->samlConnections->createSAMLConnection($request);

    if ($response->samlConnection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\Clerk\Backend\Models\Operations\CreateSAMLConnectionRequestBody](../../Models/Operations/CreateSAMLConnectionRequestBody.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\Clerk\Backend\Models\Operations\CreateSAMLConnectionResponse](../../Models/Operations/CreateSAMLConnectionResponse.md)**


## getSAMLConnection

Fetches the SAML Connection whose ID matches the provided `saml_connection_id` in the path.

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

**[?\Clerk\Backend\Models\Operations\GetSAMLConnectionResponse](../../Models/Operations/GetSAMLConnectionResponse.md)**


## updateSAMLConnection

Updates the SAML Connection whose ID matches the provided `id` in the path.

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
        $requestBody = new Operations\UpdateSAMLConnectionRequestBody();
    $requestBody->name = '<value>';
    $requestBody->domain = 'best-latter.com';
    $requestBody->idpEntityId = '<value>';
    $requestBody->idpSsoUrl = '<value>';
    $requestBody->idpCertificate = '<value>';
    $requestBody->idpMetadataUrl = '<value>';
    $requestBody->idpMetadata = '<value>';
    $requestBody->attributeMapping = new Operations\UpdateSAMLConnectionAttributeMapping();
    $requestBody->attributeMapping->userId = '<value>';
    $requestBody->attributeMapping->emailAddress = 'Demarcus_Ward@hotmail.com';
    $requestBody->attributeMapping->firstName = 'Cordell';
    $requestBody->attributeMapping->lastName = 'Fay';
    $requestBody->active = false;
    $requestBody->syncUserAttributes = false;
    $requestBody->allowSubdomains = false;
    $requestBody->allowIdpInitiated = false;

    $response = $sdk->samlConnections->updateSAMLConnection('<value>', $requestBody);

    if ($response->samlConnection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `samlConnectionId`                                                                                                             | *string*                                                                                                                       | :heavy_check_mark:                                                                                                             | The ID of the SAML Connection to update                                                                                        |
| `requestBody`                                                                                                                  | [\Clerk\Backend\Models\Operations\UpdateSAMLConnectionRequestBody](../../Models/Operations/UpdateSAMLConnectionRequestBody.md) | :heavy_check_mark:                                                                                                             | N/A                                                                                                                            |


### Response

**[?\Clerk\Backend\Models\Operations\UpdateSAMLConnectionResponse](../../Models/Operations/UpdateSAMLConnectionResponse.md)**


## deleteSAMLConnection

Deletes the SAML Connection whose ID matches the provided `id` in the path.

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

**[?\Clerk\Backend\Models\Operations\DeleteSAMLConnectionResponse](../../Models/Operations/DeleteSAMLConnectionResponse.md)**

