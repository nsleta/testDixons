<?php

namespace app\Service;


use app\Mapper\ProductCacheMapper;
use app\Mapper\ProductViewsMapper;

class ProductService
{
    private $productMapper;
    private $productViewsMapper;

    public function __construct(ProductCacheMapper $productMapper, ProductViewsMapper $productViewsMapper)
    {
        $this->productMapper = $productMapper;
        $this->productViewsMapper = $productViewsMapper;
    }

    public function getSerializedProduct($id)
    {
        $product = $this->productMapper->findById($id);
        $this->incrementView($id);
        //TODO: No time for Exceptions and type check
        return $product->toJson();
    }

    public function incrementView($id)
    {
        $views = $this->productViewsMapper->findById($id);
        $views->setViews($views->getViews() + 1);
        $this->productViewsMapper->update($views);
    }
}