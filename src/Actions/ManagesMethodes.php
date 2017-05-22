<?php

namespace SdV\Ibp\Actions;

use SdV\Ibp\Resources\Methode;

trait ManagesMethodes
{
    /**
     * Renvoie la liste des methodes.
     *
     * @return Methode[]
     */
    public function methodes()
    {
        return $this->mapToCollectionOf(Methode::class, $this->get('methodes')['data']);
    }
}
