<?php

namespace app\Mapper;

use app\Model\ProductViews;

class ProductViewsMapper implements IDbMapper
{
    // TODO: WILL BE IN MYSQL


    /**
     * @param $id
     * @return ProductViews
     */
    public function findById($id)
    {
        //TODO: MAP LOGIC;
        return $productViews;
    }

    public function update(ProductViews $productViews)
    {
        //TODO: Update logic
    }
}