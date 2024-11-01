<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$sdk = Backend\ClerkBackend::builder()->build();



$response = $sdk->miscellaneous->getPublicInterstitial(
    frontendApi: '<value>',
    publishableKey: '<value>'

);

if ($response->statusCode === 200) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->