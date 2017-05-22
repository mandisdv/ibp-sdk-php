<?php

namespace SdV\Ibp\Actions;

use SdV\Ibp\Resources\Pipeline;

trait ManagesPipelines
{
    /**
     * Renvoie la liste des pipelines.
     *
     * @return Pipeline[]
     */
    public function pipelines()
    {
        return $this->mapToCollectionOf(Pipeline::class, $this->get('pipelines')['data']);
    }
}
