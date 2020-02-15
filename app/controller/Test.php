<?php


namespace app\controller;


use function Composer\Autoload\includeFile;

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
            return self::$r;
        } else {
            self::$r = new self();
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
