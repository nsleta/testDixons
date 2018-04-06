<?php

namespace app\Db;


class DbAdapter
{
    public $driver;
    public function __construct($driver)
    {
        $this->driver = $driver;
    }

    /**
     * @param string $id
     * @return array
     */
    public function findProduct($id)
    {

        if ($this->driver instanceof IElasticSearchDriver) {
            /** IElasticSearchDriver $driver */
            //TODO: I THINK THE DATA ARE IN THE SAME STRUCTURE :)
            return $this->driver->findById($id);
        }

        if ($this->driver instanceof IMySQLDriver) {
            /** IMySQLDriver $driver */
            return $this->driver->findProduct($id);
        }

        return null;
    }

}
