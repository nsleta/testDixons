<?php

namespace app\Db;


interface IElasticSearchDriver
{
    /**
     * @param string $id
     * @return array
     */
    public function findById($id);
}