<?php

namespace SdV\Ibp\Resources;

class Folder extends Resource
{
    use HasDates;

    public $id;

    public $name;

    public $color;

    public $filesCount;

    // Relations
    public $applicationId;

    public $organizationId;
}
