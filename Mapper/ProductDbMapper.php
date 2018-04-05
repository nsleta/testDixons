<?php

namespace app\Mapper;

use app\Db\DbAdapter;
use app\Model\Product;

class ProductDbMapper implements IMapper, IDbMapper
{
    private $driver;
    //TODO: Dependency injection
    public function __construct(DbAdapter $driver)
    {
        $this->driver = $driver;
    }

    /**
     * @param $id
     * @return Product
     */
    public function findById($id)
    {
        $product = new Product();
        $productData = $this->driver->findProduct($id);

        if (array_key_exists('id', $productData)) {
            $product->setName($productData['id']);
        }

        if (array_key_exists('name', $productData)) {
            $product->setName($productData['name']);
        }

        return $product;
    }
}