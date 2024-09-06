# EmailAndSMSTemplates

## Overview

Email & SMS templates allow you to customize the theming and wording of emails & SMS messages that are sent by your instance.
<https://clerk.com/docs/authentication/email-sms-templates>

### Available Operations

* [~~getTemplateList~~](#gettemplatelist) - List all templates :warning: **Deprecated**
* [~~getTemplate~~](#gettemplate) - Retrieve a template :warning: **Deprecated**
* [~~upsertTemplate~~](#upserttemplate) - Update a template for a given type and slug :warning: **Deprecated**
* [~~revertTemplate~~](#reverttemplate) - Revert a template :warning: **Deprecated**
* [~~previewTemplate~~](#previewtemplate) - Preview changes to a template :warning: **Deprecated**
* [~~toggleTemplateDelivery~~](#toggletemplatedelivery) - Toggle the delivery by Clerk for a template of a given type and slug :warning: **Deprecated**

## ~~getTemplateList~~

Returns a list of all templates.
The templates are returned sorted by position.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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

    $response = $sdk->emailAndSMSTemplates->getTemplateList(Operations\TemplateType::Sms);

    if ($response->templateList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                          | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `templateType`                                                     | [Operations\TemplateType](../../Models/Operations/TemplateType.md) | :heavy_check_mark:                                                 | The type of templates to list (email or SMS)                       |

### Response

**[?Operations\GetTemplateListResponse](../../Models/Operations/GetTemplateListResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,422                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## ~~getTemplate~~

Returns the details of a template

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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

    $response = $sdk->emailAndSMSTemplates->getTemplate(Operations\PathParamTemplateType::Email, '<value>');

    if ($response->template !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `templateType`                                                                       | [Operations\PathParamTemplateType](../../Models/Operations/PathParamTemplateType.md) | :heavy_check_mark:                                                                   | The type of templates to retrieve (email or SMS)                                     |
| `slug`                                                                               | *string*                                                                             | :heavy_check_mark:                                                                   | The slug (i.e. machine-friendly name) of the template to retrieve                    |

### Response

**[?Operations\GetTemplateResponse](../../Models/Operations/GetTemplateResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,404                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## ~~upsertTemplate~~

Updates the existing template of the given type and slug

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
    $requestBody = new Operations\UpsertTemplateRequestBody(
        name: '<value>',
        subject: '<value>',
        markup: '<value>',
        body: '<value>',
        deliveredByClerk: false,
        fromEmailName: '<value>',
        replyToEmailName: '<value>',
    );
    $response = $sdk->emailAndSMSTemplates->upsertTemplate(Operations\UpsertTemplatePathParamTemplateType::Email, '<value>', $requestBody);

    if ($response->template !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `templateType`                                                                                                   | [Operations\UpsertTemplatePathParamTemplateType](../../Models/Operations/UpsertTemplatePathParamTemplateType.md) | :heavy_check_mark:                                                                                               | The type of template to update                                                                                   |
| `slug`                                                                                                           | *string*                                                                                                         | :heavy_check_mark:                                                                                               | The slug of the template to update                                                                               |
| `requestBody`                                                                                                    | [Operations\UpsertTemplateRequestBody](../../Models/Operations/UpsertTemplateRequestBody.md)                     | :heavy_minus_sign:                                                                                               | N/A                                                                                                              |

### Response

**[?Operations\UpsertTemplateResponse](../../Models/Operations/UpsertTemplateResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,402,403,404,422                  | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## ~~revertTemplate~~

Reverts an updated template to its default state

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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

    $response = $sdk->emailAndSMSTemplates->revertTemplate(Operations\RevertTemplatePathParamTemplateType::Sms, '<value>');

    if ($response->template !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `templateType`                                                                                                   | [Operations\RevertTemplatePathParamTemplateType](../../Models/Operations/RevertTemplatePathParamTemplateType.md) | :heavy_check_mark:                                                                                               | The type of template to revert                                                                                   |
| `slug`                                                                                                           | *string*                                                                                                         | :heavy_check_mark:                                                                                               | The slug of the template to revert                                                                               |

### Response

**[?Operations\RevertTemplateResponse](../../Models/Operations/RevertTemplateResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,402,404                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## ~~previewTemplate~~

Returns a preview of a template for a given template_type, slug and body

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
    $requestBody = new Operations\PreviewTemplateRequestBody(
        subject: '<value>',
        body: '<value>',
        fromEmailName: '<value>',
        replyToEmailName: '<value>',
    );
    $response = $sdk->emailAndSMSTemplates->previewTemplate('<value>', '<value>', $requestBody);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `templateType`                                                                                 | *string*                                                                                       | :heavy_check_mark:                                                                             | The type of template to preview                                                                |
| `slug`                                                                                         | *string*                                                                                       | :heavy_check_mark:                                                                             | The slug of the template to preview                                                            |
| `requestBody`                                                                                  | [Operations\PreviewTemplateRequestBody](../../Models/Operations/PreviewTemplateRequestBody.md) | :heavy_minus_sign:                                                                             | Required parameters                                                                            |

### Response

**[?Operations\PreviewTemplateResponse](../../Models/Operations/PreviewTemplateResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,404,422                          | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |


## ~~toggleTemplateDelivery~~

Toggles the delivery by Clerk for a template of a given type and slug.
If disabled, Clerk will not deliver the resulting email or SMS.
The app developer will need to listen to the `email.created` or `sms.created` webhooks in order to handle delivery themselves.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
    $requestBody = new Operations\ToggleTemplateDeliveryRequestBody(
        deliveredByClerk: false,
    );
    $response = $sdk->emailAndSMSTemplates->toggleTemplateDelivery(Operations\ToggleTemplateDeliveryPathParamTemplateType::Sms, '<value>', $requestBody);

    if ($response->template !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `templateType`                                                                                                                   | [Operations\ToggleTemplateDeliveryPathParamTemplateType](../../Models/Operations/ToggleTemplateDeliveryPathParamTemplateType.md) | :heavy_check_mark:                                                                                                               | The type of template to toggle delivery for                                                                                      |
| `slug`                                                                                                                           | *string*                                                                                                                         | :heavy_check_mark:                                                                                                               | The slug of the template for which to toggle delivery                                                                            |
| `requestBody`                                                                                                                    | [Operations\ToggleTemplateDeliveryRequestBody](../../Models/Operations/ToggleTemplateDeliveryRequestBody.md)                     | :heavy_minus_sign:                                                                                                               | N/A                                                                                                                              |

### Response

**[?Operations\ToggleTemplateDeliveryResponse](../../Models/Operations/ToggleTemplateDeliveryResponse.md)**

### Errors

| Error Object                             | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\ClerkErrors                       | 400,401,404                              | application/json                         |
| Clerk\Backend\Models\Errors.SDKException | 4xx-5xx                                  | */*                                      |
