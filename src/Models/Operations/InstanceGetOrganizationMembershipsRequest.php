<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class InstanceGetOrganizationMembershipsRequest
{
    /**
     * Applies a limit to the number of results returned.
     *
     * Can be used for paginating the results together with `offset`.
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;

    /**
     * Skip the first `offset` results when paginating.
     *
     * Needs to be an integer greater or equal to zero.
     * To be used in conjunction with `limit`.
     *
     * @var ?int $offset
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;

    /**
     * Sorts organizations memberships by phone_number, email_address, created_at, first_name, last_name or username.
     *
     * By prepending one of those values with + or -,
     * we can choose to sort in ascending (ASC) or descending (DESC) order.
     *
     * @var ?string $orderBy
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=order_by')]
    public ?string $orderBy = null;

    /**
     * @param  ?int  $limit
     * @param  ?int  $offset
     * @param  ?string  $orderBy
     */
    public function __construct(?string $orderBy = null, ?int $limit = 10, ?int $offset = 0)
    {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->orderBy = $orderBy;
    }
}