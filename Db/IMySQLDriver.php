<?php

namespace app\Db;

interface IMySQLDriver
{
    /**
     * @param string $id
     * @return array
     */
    public function findProduct($id);
}