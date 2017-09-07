<?php

namespace Spree;


/**
 * Get a product from spree
 * Class Products
 * @package Spree
 */
class Product extends Api
{

    public function find($productId = null, $parameters = [])
    {

        return $this->get("catalog/product/{$productId}", [
            'query' => $parameters
        ]);

    }

}
