<?php
// +----------------------------------------------------------------------
// | TestCase.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests;

use PHPUnit\Framework\TestCase as UnitTestCase;
use Tests\Rpc\App\TestClient;

abstract class TestCase extends UnitTestCase
{
    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    protected function tearDown()
    {
        // TestClient::getInstance()->getSwooleClient()->flush();
        // TestClient::getInstance()->flush();
        parent::tearDown(); // TODO: Change the autogenerated stub
    }
}
