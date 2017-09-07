<?php

namespace Spree;

class Brand extends Api
{


    /**
     * Get all brands
     * @param null $parameters
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function all($parameters = null)
    {
        return $this->get('catalog/brands');
    }


    /**
     * Get brand
     * @param $id
     * @param null $parameter
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function find($id, $parameter = null)
    {
        return $this->get("catalog/brand/{$id}");

    }

}
