<?php

namespace SdV\Ibp\Actions;

use SdV\Ibp\Resources\Folder;

trait ManagesAuthentication
{
    /**
     * The application Id
     * @var string
     */
    private $applicationId;

    /**
     * The application Token
     * @var string
     */
    private $applicationToken;

    /**
     * The upload Token
     * @var string
     */
    private $uploadToken;

    /**
     * Initialiase un application Token.
     *
     * @param string $token
     * @return Ibp
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;

        return $this;
    }

    /**
     * Initialiase un application Token.
     *
     * @param string $token
     * @return Ibp
     */
    public function setApplicationToken($token)
    {
        $this->applicationToken = $token;

        return $this;
    }

    /**
     * Initialiase un upload Token.
     *
     * @param string $token
     * @return Ibp
     */
    public function setUploadToken($token)
    {
        $this->uploadToken = $token;

        return $this;
    }
}
