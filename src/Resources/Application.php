<?php

namespace SdV\Ibp\Resources;

class Application extends Resource
{
    use HasDates;

    public $id;

    public $name;

    public $description;
}
