<?php

namespace SdV\Ibp\Exceptions;

use Exception;
use SdV\Ibp\Resources\Error;

class ApiException extends Exception
{
    /**
     * The error.
     *
     * @var Error
     */
    public $error;

    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct($message, Error $error)
    {
        parent::__construct($message);

        $this->error = $error;
    }
}
