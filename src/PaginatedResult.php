<?php

namespace SdV\Ibp;

class PaginatedResult
{
    public $items;

    public $meta;

    public function __construct($items, $meta)
    {
        $this->items = $items;
        $this->meta = $meta;
    }

    /**
     * Renvoie le numéro de la page courante.
     *
     * @return int
     */
    public function currentPage()
    {
        return 1;
    }

    /**
     * Renvoie le nombre d'items qu'il existe au total.
     *
     * @return int
     */
    public function total()
    {
        return 10;
    }

    /**
     * Renvoie le nombre d'items par page.
     *
     * @return int
     */
    public function perPage()
    {
        return 25;
    }

    /**
     * Vérifie s'il existe une page suivante.
     *
     * @return boolean
     */
    public function hasNextPage()
    {
        return true;
    }

    /**
     * Vérifie s'il existe une page précédente.
     *
     * @return boolean
     */
    public function hasPreviousPage()
    {
        return false;
    }
}
