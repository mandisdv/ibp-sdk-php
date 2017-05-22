<?php

namespace SdV\Ibp\Actions;

use SdV\Ibp\PaginatedResult;
use SdV\Ibp\Resources\Methode;

trait ManagesMethodes
{
    /**
     * Renvoie la liste des methodes.
     *
     * @return Methode[]
     */
    public function methodes(array $query = [])
    {
        $response = $this->get('methodes', $query);

        return new PaginatedResult(
            $this->mapToCollectionOf(Methode::class, $response['data']),
            $response['meta']
        );
    }
}
