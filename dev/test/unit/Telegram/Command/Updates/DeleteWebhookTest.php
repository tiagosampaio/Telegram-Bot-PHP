<?php

declare(strict_types = 1);

namespace TelegramTest\Command\Updates;

use Telegram\Command\Updates\DeleteWebhook;
use TelegramTest\TestCase;

/**
 * Class DeleteWebhookTest
 * @package TelegramTest\Command\Updates
 */
class DeleteWebhookTest extends TestCase
{
    /**
     * @var DeleteWebhook
     */
    private $object;

    protected function setUp()
    {
        $this->object = $this->createObject(DeleteWebhook::class);
    }

    /**
     * @test
     */
    public function getUrlPath()
    {
        $this->assertEquals('deleteWebhook', $this->object->getUrlPath());
    }

    /**
     * @test
     */
    public function getRequestMethod()
    {
        $this->assertEquals(DeleteWebhook::REQUEST_METHOD_POST, $this->object->getRequestMethod());
    }

    /**
     * @test
     */
    public function setOptionalConfig()
    {
        $config = [];
        $expected = [];

        $this->object->setOptionalConfig($config);

        $this->assertEquals($expected, $this->object->toArray());
    }
}
