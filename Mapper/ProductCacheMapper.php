<?php

namespace app\Mapper;

use app\Model\Product;

class ProductCacheMapper implements IMapper
{
    private $mapper;
    //TODO: Dependency injection
    public function __construct(ProductDbMapper $mapper){
        $this->mapper = $mapper;
    }

    public function findById($id)
    {
        if (IS_IN_CACHE) { // TODO: Make Cache Reader
            /** Product */
            return CACHED_PRODUCT;
        }

        return $this->addToCache($this->mapper->findById($id));

    }

    /**
     * @param Product $product
     * @return Product
     */
    public function addToCache(Product $product)
    {
        //TODO: Add to cache
        return $product;
    }


}