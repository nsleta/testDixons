<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolai
 * Date: 4/6/18
 * Time: 1:23 AM
 */

namespace app\Model;


interface Serializable
{
    public function toJson();
}