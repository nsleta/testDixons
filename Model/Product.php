<?php

namespace app\Model;

class Product implements Serializable
{
    /** @var int $id */
    private $id;
    /** @var string $name */
    private $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Product
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function toJson()
    {
        $json = array(
            'id' => $this->getId(),
            'name' => $this->getName(),
        );

        return json_encode($json);
    }
}