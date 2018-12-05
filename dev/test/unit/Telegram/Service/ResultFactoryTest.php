<?php

declare(strict_types = 1);

namespace TelegramTest\Service;

use Telegram\Service;
use TelegramTest\TestCase;

/**
 * Class ResultFactoryTest
 * @package TelegramTest\Service
 */
class ResultFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function create()
    {
        /** @var Service\ResultFactory $factory */
        $factory  = $this->createObject(Service\ResultFactory::class);
        $response = $this->createMock(\Telegram\Framework\Http\Response\ResponseInterface::class);
        $this->assertInstanceOf(Service\ResultInterface::class, $factory->create(['response' => $response]));
    }
}
