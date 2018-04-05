<?php
namespace app\Model;


class ProductViews
{
    /** @var int $id */
    private $id;
    /** @var int $productId */
    private $productId;
    /** @var int $views */
    private $views;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ProductViews
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return ProductViews
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @param int $views
     * @return ProductViews
     */
    public function setViews($views)
    {
        $this->views = $views;
        return $this;
    }
}