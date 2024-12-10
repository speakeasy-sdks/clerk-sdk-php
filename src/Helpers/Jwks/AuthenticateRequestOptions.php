<?php

namespace Clerk\Backend\Helpers\Jwks;

class AuthenticateRequestOptions
{
    private const DEFAULT_CLOCK_SKEW_MS = 5000;

    private ?string $secretKey;
    private ?string $jwtKey;
    private ?array $audiences;
    private array $authorizedParties;
    private int $clockSkewInMs;

    /**
     * Options to configure AuthenticateRequest::authenticateRequest.
     *
     * @param  string|null  $secretKey  The Clerk secret key from the API Keys page in the Clerk Dashboard.
     * @param  string|null  $jwtKey  PEM Public String used to verify the session token in a networkless manner.
     * @param  array|null  $audiences  A list of audiences to verify against.
     * @param  array|null  $authorizedParties  An allowlist of origins to verify against.
     * @param  int|null  $clockSkewInMs  Allowed time difference (in milliseconds) between the Clerk server (which generates the token) and the clock of the user's application server when validating a token. Defaults to 5000 ms.
     * @throws AuthenticateRequestException
     */
    public function __construct(
        ?string $secretKey = null,
        ?string $jwtKey = null,
        ?array $audiences = null,
        ?array $authorizedParties = null,
        ?int $clockSkewInMs = null
    ) {
        if (empty($secretKey) && empty($jwtKey)) {
            throw new AuthenticateRequestException(AuthErrorReason::$SECRET_KEY_MISSING);
        }

        $this->secretKey = $secretKey;
        $this->jwtKey = $jwtKey;
        $this->audiences = $audiences;
        $this->authorizedParties = $authorizedParties ?? [];
        $this->clockSkewInMs = $clockSkewInMs ?? self::DEFAULT_CLOCK_SKEW_MS;
    }

    public function getSecretKey(): ?string
    {
        return $this->secretKey;
    }

    public function getJwtKey(): ?string
    {
        return $this->jwtKey;
    }

    public function getAudiences(): ?array
    {
        return $this->audiences;
    }

    public function getAuthorizedParties(): array
    {
        return $this->authorizedParties;
    }

    public function getClockSkewInMs(): int
    {
        return $this->clockSkewInMs;
    }
}
