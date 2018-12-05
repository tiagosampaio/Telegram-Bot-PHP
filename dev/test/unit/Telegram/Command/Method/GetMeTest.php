<?php

namespace TelegramTest\Command\Method;

/**
 * Class GetMeTest
 * @package TelegramTest\Telegram\Method
 */
class GetMeTest extends MethodTestCase
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $object;

    protected function setUp()
    {
        $this->object = $this->createObject(\Telegram\Command\Method\GetMeInterface::class, [
            'serializer' => $this->createMock(\Telegram\Framework\Data\SerializerInterface::class)
        ]);
    }

    /**
     * @test
     */
    public function getUrlPath()
    {
        $this->assertEquals('getMe', $this->object->getUrlPath());
    }

    /**
     * @test
     */
    public function toArray()
    {
        $this->assertEquals([], $this->object->toArray());
    }

    /**
     * @test
     */
    public function toJson()
    {
        $this->assertEquals(null, $this->object->toJson());
    }
}
