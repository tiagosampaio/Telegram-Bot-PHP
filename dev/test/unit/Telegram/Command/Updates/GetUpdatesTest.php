<?php

declare(strict_types = 1);

namespace TelegramTest\Command\Updates;

use Telegram\Command\Updates\GetUpdates;
use TelegramTest\TestCase;

/**
 * Class GetUpdatesTest
 * @package TelegramTest\Command\Updates
 */
class GetUpdatesTest extends TestCase
{
    /**
     * @var GetUpdates
     */
    private $object;

    protected function setUp()
    {
        $this->object = $this->createObject(GetUpdates::class);
    }

    /**
     * @test
     */
    public function setOffset()
    {
        $this->assertInstanceOf(GetUpdates::class, $this->object->setOffset(123));
    }

    /**
     * @test
     */
    public function setLimit()
    {
        $this->assertInstanceOf(GetUpdates::class, $this->object->setLimit(123));
    }

    /**
     * @test
     */
    public function setTimeout()
    {
        $this->assertInstanceOf(GetUpdates::class, $this->object->setTimeout(10));
    }

    /**
     * @test
     */
    public function setAllowedUpdates()
    {
        $this->assertInstanceOf(GetUpdates::class, $this->object->setAllowedUpdates([1, 2]));
    }

    /**
     * @test
     */
    public function toArray()
    {
        $offset  = 123;
        $limit   = 321;
        $timeout = 10;
        $updates = [1, 2];

        $expected = [
            'offset'          => $offset,
            'limit'           => $limit,
            'timeout'         => $timeout,
            'allowed_updates' => $updates,
        ];

        $this->object
            ->setOffset($offset)
            ->setLimit($limit)
            ->setTimeout($timeout)
            ->setAllowedUpdates($updates);

        $this->assertEquals($expected, $this->object->toArray());
    }
}
