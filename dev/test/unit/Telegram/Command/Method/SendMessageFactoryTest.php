<?php

declare(strict_types = 1);

namespace TelegramTest\Command\Method;

/**
 * Class SendMessageFactoryTest
 * @package TelegramTest\Method
 */
class SendMessageFactoryTest extends MethodTestCase
{
    /**
     * @var \Telegram\Framework\Object\FactoryInterface
     */
    private $factory;

    protected function setUp()
    {
        $this->factory = $this->createObject(\Telegram\Command\Method\SendMessageFactory::class);
    }

    /**
     * @test
     */
    public function create()
    {
        $this->assertInstanceOf(\Telegram\Command\Method\SendMessageInterface::class, $this->factory->create());
        $this->assertInstanceOf(\Telegram\Command\CommandInterface::class, $this->factory->create());
    }
}
