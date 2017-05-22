<?php

namespace SdV\Ibp;

class PaginatedResult
{
    /**
     * @var SdV\Ibp\Resource
     */
    public $items;

    /**
     * @var array
     */
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
        return $this->meta['pagination']['current_page'];
    }

    /**
     * Renvoie le nombre de pages existantes.
     *
     * @return int
     */
    public function totalPages()
    {
        return $this->meta['pagination']['total_pages'];
    }

    /**
     * Renvoie le nombre d'items qu'il existe au total.
     *
     * @return int
     */
    public function total()
    {
        return $this->meta['pagination']['total'];
    }

    /**
     * Renvoie le nombre d'items par page.
     *
     * @return int
     */
    public function perPage()
    {
        return $this->meta['pagination']['per_page'];
    }

    /**
     * Vérifie s'il existe une page suivante.
     *
     * @return boolean
     */
    public function hasNextPage()
    {
        return !empty($this->meta['pagination']['links']['next']);
    }

    /**
     * Vérifie s'il existe une page précédente.
     *
     * @return boolean
     */
    public function hasPreviousPage()
    {
        return !empty($this->meta['pagination']['links']['previous']);
    }
}
