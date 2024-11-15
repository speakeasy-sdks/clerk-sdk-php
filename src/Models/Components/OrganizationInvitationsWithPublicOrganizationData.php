<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


/** OrganizationInvitationsWithPublicOrganizationData - A list of organization invitations with public organization data */
class OrganizationInvitationsWithPublicOrganizationData
{
    /**
     * $data
     *
     * @var array<OrganizationInvitationWithPublicOrganizationData> $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Clerk\Backend\Models\Components\OrganizationInvitationWithPublicOrganizationData>')]
    public array $data;

    /**
     * Total number of organization invitations
     *
     *
     *
     * @var int $totalCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_count')]
    public int $totalCount;

    /**
     * @param  array<OrganizationInvitationWithPublicOrganizationData>  $data
     * @param  int  $totalCount
     */
    public function __construct(array $data, int $totalCount)
    {
        $this->data = $data;
        $this->totalCount = $totalCount;
    }
}