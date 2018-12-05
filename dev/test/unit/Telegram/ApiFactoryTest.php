<?php

declare(strict_types = 1);

namespace TelegramTest;

/**
 * Class ApiFactoryTest
 * @package TelegramTest
 */
class ApiFactoryTest extends TestCase
{
    
    public function testBuildApi()
    {
        /**
         * @var \Telegram\Api $api
         */
        $api = \Telegram\ApiFactory::create('some-token');
        $this->assertInstanceOf(\Telegram\ApiInterface::class, $api);
    }
}
