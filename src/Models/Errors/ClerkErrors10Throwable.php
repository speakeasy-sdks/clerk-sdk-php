<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Errors;

class ClerkErrors10Throwable extends \RuntimeException
{
    public ClerkErrors10 $container;

    public function __construct(string $message, int $statusCode, ClerkErrors10 $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}