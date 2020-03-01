<?php

namespace app\controller;

use app\BaseController;
use app\model\Manual;
use think\App;

class Api extends BaseController
{
    public static function php()
    {
        $list = Manual::order('id', 'asc')->select();
        echo $list->toJson();
    }

    public function tom()
    {

    }

    public function __construct(App $app)
    {
        parent::__construct($app);
    }

    public function tomy()
    {

    }

    public static function game()
    {

    }
}
