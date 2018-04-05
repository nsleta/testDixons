<?php

namespace app\Controller;

use app\Service\ProductService;

class ProductController
{
    private $productService;

    //TODO: Dependency injection
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * @param string $id
     * @return string
     */
    public function detail($id)
    {
        return $this->productService->getSerializedProduct($id);
    }

}