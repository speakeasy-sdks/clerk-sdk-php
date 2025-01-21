<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class File
{
    /**
     *
     * @var string $fileName
     */
    #[SpeakeasyMetadata('multipartForm:name=fileName')]
    public string $fileName;

    /**
     *
     * @var string $content
     */
    #[SpeakeasyMetadata('multipartForm:content=true')]
    public string $content;

    /**
     * @param  string  $fileName
     * @param  string  $content
     */
    public function __construct(string $fileName, string $content)
    {
        $this->fileName = $fileName;
        $this->content = $content;
    }
}