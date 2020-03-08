<?php


namespace app\controller;


class Test
{
    private static $r;

    private function __construct()
    {
    }

    // 工厂模式+单例模式
    static function run()
    {
        if (self::$r) {
            echo "不再次实例化";
            return self::$r;
        } else {
            echo "第一次，创建实例化";
            self::$r = new Test();
            return self::$r;
        }
    }

    public function walk($num = 0)
    {
        ++$num;
        echo $num;
        // return $this;
    }

}
