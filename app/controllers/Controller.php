<?php
// +----------------------------------------------------------------------
// | 控制器基类 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Controllers;

use Locale;
use App\Common\Locale as AppLocale;

abstract class Controller extends \Phalcon\Mvc\Controller
{
    public $locale = 'zh';

    public function initialize()
    {
        if ($this->request->hasHeader('ACCEPT-LANGUAGE')) {
            $lang = $this->request->getHeader('ACCEPT_LANGUAGE');
            $this->locale = Locale::acceptFromHttp($lang);
        }

        $locale = new AppLocale($this->locale);

        $di = $this->getDI();
        $di->setShared('locale', $locale);
    }

    public function beforeExecuteRoute()
    {
        // 在每一个找到的动作前执行
    }

    public function afterExecuteRoute()
    {
        // 在每一个找到的动作后执行
    }
}
