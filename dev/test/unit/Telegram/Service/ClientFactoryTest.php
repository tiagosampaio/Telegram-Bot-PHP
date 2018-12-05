<?php

declare(strict_types = 1);

namespace TelegramTest\Service;

use Telegram\Service\ClientFactory;
use TelegramTest\TestCase;

/**
 * Class ClientFactoryTest
 *
 * @package TelegramTest\Service
 */
class ClientFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function create()
    {
        /** @var ClientFactory $factory */
        $factory = $this->createObject(ClientFactory::class);
        $this->assertInstanceOf(\GuzzleHttp\ClientInterface::class, $factory->create());
    }
}
