# Passkey


## Fields

| Field                                                                                            | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `status`                                                                                         | [Components\PasskeyVerificationStatus](../../Models/Components/PasskeyVerificationStatus.md)     | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `strategy`                                                                                       | [Components\PasskeyVerificationStrategy](../../Models/Components/PasskeyVerificationStrategy.md) | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `nonce`                                                                                          | [?Components\VerificationNonce](../../Models/Components/VerificationNonce.md)                    | :heavy_minus_sign:                                                                               | N/A                                                                                              |
| `attempts`                                                                                       | *?int*                                                                                           | :heavy_minus_sign:                                                                               | N/A                                                                                              |
| `expireAt`                                                                                       | *?int*                                                                                           | :heavy_minus_sign:                                                                               | N/A                                                                                              |