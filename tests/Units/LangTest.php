<?php
// +----------------------------------------------------------------------
// | 基础测试类 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests\Units;

use Tests\HttpTestCase;

/**
 * Class UnitTest
 */
class LangTest extends HttpTestCase
{
    public function testLangCase()
    {
        $data = $this->post('/', [
            'headers' => [
                'Accept-Language' => 'en'
            ],
        ]);

        $this->assertEquals(
            "You're now flying with Phalcon. Great things are about to happen!",
            $data['data']['message']
        );

        $data = $this->post('/', [
            'headers' => [
                'Accept-Language' => 'zh-CN'
            ],
        ]);

        $this->assertEquals(
            "欢迎使用Phalcon，你将感受到它带给你的极大乐趣！",
            $data['data']['message']
        );
    }
}
