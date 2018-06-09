<?php
// +----------------------------------------------------------------------
// | Locale.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Common;

use Phalcon\Config;

class Locale
{
    public $locale = 'zh';

    public $lang;

    public function __construct($locale)
    {
        $this->locale = $locale;
        $file = APP_PATH . "/config/lang/{$locale}.php";
        if (!file_exists($file)) {
            $file = APP_PATH . "/config/lang/zh.php";
        }

        $config = include $file;
        $this->lang = new Config($config);
    }
}
