<?php

namespace SdV\Ibp\Resources;

class File extends Resource
{
    use HasDates;

    public $id;

    public $extension;

    public $extensionOriginale;

    public $fichierOriginal;

    public $path;

    public $ibpPath;

    public $size;

    public $md5sum;

    public $mimeType;

    public $extra;

    public $methodes;

    public $meta;

    public $exif;

    // Relations
    public $userId;

    public $applicationId;

    public $organizationId;
}
