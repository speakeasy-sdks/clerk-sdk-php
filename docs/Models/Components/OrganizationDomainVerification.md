# OrganizationDomainVerification

Verification details for the domain


## Fields

| Field                                                                                       | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `status`                                                                                    | [?Components\OrganizationDomainStatus](../../Models/Components/OrganizationDomainStatus.md) | :heavy_minus_sign:                                                                          | Status of the verification. It can be `unverified` or `verified`                            |
| `strategy`                                                                                  | *?string*                                                                                   | :heavy_minus_sign:                                                                          | Name of the strategy used to verify the domain                                              |
| `attempts`                                                                                  | *?int*                                                                                      | :heavy_minus_sign:                                                                          | How many attempts have been made to verify the domain                                       |
| `expireAt`                                                                                  | *?int*                                                                                      | :heavy_minus_sign:                                                                          | Unix timestamp of when the verification will expire                                         |