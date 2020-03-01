<?php


namespace app\controller;

use app\BaseController;
use app\model\Manual;

class Api extends BaseController
{
    public static function php()
    {
        $list = Manual::order('id', 'asc')->select();
        echo $list->toJson();
    }
}