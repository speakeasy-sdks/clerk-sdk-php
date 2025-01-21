<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class UpdateOrganizationRequestBody
{
    /**
     * Metadata saved on the organization, that is visible to both your frontend and backend.
     *
     * @var ?array<string, mixed> $publicMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('public_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $publicMetadata = null;

    /**
     * Metadata saved on the organization that is only visible to your backend.
     *
     * @var ?array<string, mixed> $privateMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('private_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $privateMetadata = null;

    /**
     * A custom date/time denoting _when_ the organization was created, specified in RFC3339 format (e.g. `2012-10-20T07:15:20.902Z`).
     *
     * @var ?string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdAt = null;

    /**
     * The new name of the organization.
     *
     * May not contain URLs or HTML.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The new slug of the organization, which needs to be unique in the instance
     *
     * @var ?string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $slug = null;

    /**
     * The maximum number of memberships allowed for this organization
     *
     * @var ?int $maxAllowedMemberships
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max_allowed_memberships')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $maxAllowedMemberships = null;

    /**
     * If true, an admin can delete this organization with the Frontend API.
     *
     * @var ?bool $adminDeleteEnabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('admin_delete_enabled')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $adminDeleteEnabled = null;

    /**
     * @param  ?array<string, mixed>  $publicMetadata
     * @param  ?array<string, mixed>  $privateMetadata
     * @param  ?string  $createdAt
     * @param  ?string  $name
     * @param  ?string  $slug
     * @param  ?int  $maxAllowedMemberships
     * @param  ?bool  $adminDeleteEnabled
     */
    public function __construct(?array $publicMetadata = null, ?array $privateMetadata = null, ?string $createdAt = null, ?string $name = null, ?string $slug = null, ?int $maxAllowedMemberships = null, ?bool $adminDeleteEnabled = null)
    {
        $this->publicMetadata = $publicMetadata;
        $this->privateMetadata = $privateMetadata;
        $this->createdAt = $createdAt;
        $this->name = $name;
        $this->slug = $slug;
        $this->maxAllowedMemberships = $maxAllowedMemberships;
        $this->adminDeleteEnabled = $adminDeleteEnabled;
    }
}