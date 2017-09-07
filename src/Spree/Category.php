<?php
/**
 * Created by IntelliJ IDEA.
 * User: calvinmuller
 * Date: 2017/09/07
 * Time: 2:18 PM
 */

namespace Spree;


class Category extends Api
{


    /**
     * @param array $parameters
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function all($parameters = [])
    {
        return $this->get("navigation/menu", [
            'query' => $parameters
        ]);
    }

}