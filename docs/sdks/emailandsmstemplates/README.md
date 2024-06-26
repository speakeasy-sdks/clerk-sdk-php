# EmailAndSMSTemplates


## Overview

Email & SMS templates allow you to customize the theming and wording of emails & SMS messages that are sent by your instance.

<https://clerk.com/docs/authentication/email-sms-templates>
### Available Operations

* [getTemplateList](#gettemplatelist) - List all templates
* [getTemplate](#gettemplate) - Retrieve a template
* [upsertTemplate](#upserttemplate) - Update a template for a given type and slug
* [revertTemplate](#reverttemplate) - Revert a template
* [previewTemplate](#previewtemplate) - Preview changes to a template
* [toggleTemplateDelivery](#toggletemplatedelivery) - Toggle the delivery by Clerk for a template of a given type and slug

## getTemplateList

Returns a list of all templates.
The templates are returned sorted by position.

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
    

    $response = $sdk->emailAndSMSTemplates->getTemplateList(Operations\TemplateType::Sms);

    if ($response->templateList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `templateType`                                                                           | [\Clerk\Backend\Models\Operations\TemplateType](../../Models/Operations/TemplateType.md) | :heavy_check_mark:                                                                       | The type of templates to list (email or SMS)                                             |


### Response

**[?\Clerk\Backend\Models\Operations\GetTemplateListResponse](../../Models/Operations/GetTemplateListResponse.md)**


## getTemplate

Returns the details of a template

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
    

    $response = $sdk->emailAndSMSTemplates->getTemplate(Operations\PathParamTemplateType::Email, '<value>');

    if ($response->template !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `templateType`                                                                                             | [\Clerk\Backend\Models\Operations\PathParamTemplateType](../../Models/Operations/PathParamTemplateType.md) | :heavy_check_mark:                                                                                         | The type of templates to retrieve (email or SMS)                                                           |
| `slug`                                                                                                     | *string*                                                                                                   | :heavy_check_mark:                                                                                         | The slug (i.e. machine-friendly name) of the template to retrieve                                          |


### Response

**[?\Clerk\Backend\Models\Operations\GetTemplateResponse](../../Models/Operations/GetTemplateResponse.md)**


## upsertTemplate

Updates the existing template of the given type and slug

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
        $requestBody = new Operations\UpsertTemplateRequestBody();
    $requestBody->name = '<value>';
    $requestBody->subject = '<value>';
    $requestBody->markup = '<value>';
    $requestBody->body = '<value>';
    $requestBody->deliveredByClerk = false;
    $requestBody->fromEmailName = '<value>';
    $requestBody->replyToEmailName = '<value>';

    $response = $sdk->emailAndSMSTemplates->upsertTemplate(Operations\UpsertTemplatePathParamTemplateType::Email, '<value>', $requestBody);

    if ($response->template !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                              | Type                                                                                                                                   | Required                                                                                                                               | Description                                                                                                                            |
| -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| `templateType`                                                                                                                         | [\Clerk\Backend\Models\Operations\UpsertTemplatePathParamTemplateType](../../Models/Operations/UpsertTemplatePathParamTemplateType.md) | :heavy_check_mark:                                                                                                                     | The type of template to update                                                                                                         |
| `slug`                                                                                                                                 | *string*                                                                                                                               | :heavy_check_mark:                                                                                                                     | The slug of the template to update                                                                                                     |
| `requestBody`                                                                                                                          | [\Clerk\Backend\Models\Operations\UpsertTemplateRequestBody](../../Models/Operations/UpsertTemplateRequestBody.md)                     | :heavy_minus_sign:                                                                                                                     | N/A                                                                                                                                    |


### Response

**[?\Clerk\Backend\Models\Operations\UpsertTemplateResponse](../../Models/Operations/UpsertTemplateResponse.md)**


## revertTemplate

Reverts an updated template to its default state

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
    

    $response = $sdk->emailAndSMSTemplates->revertTemplate(Operations\RevertTemplatePathParamTemplateType::Sms, '<value>');

    if ($response->template !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                              | Type                                                                                                                                   | Required                                                                                                                               | Description                                                                                                                            |
| -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| `templateType`                                                                                                                         | [\Clerk\Backend\Models\Operations\RevertTemplatePathParamTemplateType](../../Models/Operations/RevertTemplatePathParamTemplateType.md) | :heavy_check_mark:                                                                                                                     | The type of template to revert                                                                                                         |
| `slug`                                                                                                                                 | *string*                                                                                                                               | :heavy_check_mark:                                                                                                                     | The slug of the template to revert                                                                                                     |


### Response

**[?\Clerk\Backend\Models\Operations\RevertTemplateResponse](../../Models/Operations/RevertTemplateResponse.md)**


## previewTemplate

Returns a preview of a template for a given template_type, slug and body

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
        $requestBody = new Operations\PreviewTemplateRequestBody();
    $requestBody->subject = '<value>';
    $requestBody->body = '<value>';
    $requestBody->fromEmailName = '<value>';
    $requestBody->replyToEmailName = '<value>';

    $response = $sdk->emailAndSMSTemplates->previewTemplate('<value>', '<value>', $requestBody);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `templateType`                                                                                                       | *string*                                                                                                             | :heavy_check_mark:                                                                                                   | The type of template to preview                                                                                      |
| `slug`                                                                                                               | *string*                                                                                                             | :heavy_check_mark:                                                                                                   | The slug of the template to preview                                                                                  |
| `requestBody`                                                                                                        | [\Clerk\Backend\Models\Operations\PreviewTemplateRequestBody](../../Models/Operations/PreviewTemplateRequestBody.md) | :heavy_minus_sign:                                                                                                   | Required parameters                                                                                                  |


### Response

**[?\Clerk\Backend\Models\Operations\PreviewTemplateResponse](../../Models/Operations/PreviewTemplateResponse.md)**


## toggleTemplateDelivery

Toggles the delivery by Clerk for a template of a given type and slug.
If disabled, Clerk will not deliver the resulting email or SMS.
The app developer will need to listen to the `email.created` or `sms.created` webhooks in order to handle delivery themselves.

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
        $requestBody = new Operations\ToggleTemplateDeliveryRequestBody();
    $requestBody->deliveredByClerk = false;

    $response = $sdk->emailAndSMSTemplates->toggleTemplateDelivery(Operations\ToggleTemplateDeliveryPathParamTemplateType::Sms, '<value>', $requestBody);

    if ($response->template !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                              | Type                                                                                                                                                   | Required                                                                                                                                               | Description                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `templateType`                                                                                                                                         | [\Clerk\Backend\Models\Operations\ToggleTemplateDeliveryPathParamTemplateType](../../Models/Operations/ToggleTemplateDeliveryPathParamTemplateType.md) | :heavy_check_mark:                                                                                                                                     | The type of template to toggle delivery for                                                                                                            |
| `slug`                                                                                                                                                 | *string*                                                                                                                                               | :heavy_check_mark:                                                                                                                                     | The slug of the template for which to toggle delivery                                                                                                  |
| `requestBody`                                                                                                                                          | [\Clerk\Backend\Models\Operations\ToggleTemplateDeliveryRequestBody](../../Models/Operations/ToggleTemplateDeliveryRequestBody.md)                     | :heavy_minus_sign:                                                                                                                                     | N/A                                                                                                                                                    |


### Response

**[?\Clerk\Backend\Models\Operations\ToggleTemplateDeliveryResponse](../../Models/Operations/ToggleTemplateDeliveryResponse.md)**

