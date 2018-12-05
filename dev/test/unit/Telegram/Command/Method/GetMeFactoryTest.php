<?php

namespace TelegramTest\Command\Method;

/**
 * Class GetMeFactoryTest
 * @package TelegramTest\Method
 */
class GetMeFactoryTest extends MethodTestCase
{
    /**
     * @var \Telegram\Framework\Object\FactoryInterface
     */
    private $factory;

    protected function setUp()
    {
        $this->factory = $this->createObject(\Telegram\Command\Method\GetMeFactory::class);
    }

    /**
     * @test
     */
    public function create()
    {
        $this->assertInstanceOf(\Telegram\Command\Method\GetMeInterface::class, $this->factory->create());
        $this->assertInstanceOf(\Telegram\Command\CommandInterface::class, $this->factory->create());
    }
}
