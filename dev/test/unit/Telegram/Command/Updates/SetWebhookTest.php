<?php

declare(strict_types = 1);

namespace TelegramTest\Command\Updates;

use Telegram\Command\Updates\SetWebhook;
use TelegramTest\TestCase;

/**
 * Class SetWebhookTest
 * @package TelegramTest\Command\Updates
 */
class SetWebhookTest extends TestCase
{
    /**
     * @var SetWebhook
     */
    private $object;

    protected function setUp()
    {
        $this->object = $this->createObject(SetWebhook::class);
    }

    /**
     * @test
     */
    public function setUrl()
    {
        $this->assertInstanceOf(SetWebhook::class, $this->object->setUrl('http://test.com'));
    }

    /**
     * @test
     */
    public function setCertificate()
    {
        $this->assertInstanceOf(SetWebhook::class, $this->object->setCertificate('Any Value'));
    }

    /**
     * @test
     */
    public function setMaxConnections()
    {
        $this->assertInstanceOf(SetWebhook::class, $this->object->setMaxConnections(10));
    }

    /**
     * @test
     */
    public function setAllowedUpdates()
    {
        $this->assertInstanceOf(SetWebhook::class, $this->object->setAllowedUpdates([1, 2, 3]));
    }

    /**
     * @test
     */
    public function toArray()
    {
        $url = 'http://test.com';
        $certificate = 'anything';
        $maxConnections = 10;
        $updates = [1, 2, 3];

        $expected = [
            'url' => $url,
            'certificate' => $certificate,
            'max_connections' => $maxConnections,
            'allowed_updates' => $updates,
        ];

        $this->object
            ->setUrl($url)
            ->setCertificate($certificate)
            ->setMaxConnections($maxConnections)
            ->setAllowedUpdates($updates)
        ;

        $this->assertEquals($expected, $this->object->toArray());
    }

    /**
     * @test
     */
    public function setOptionalConfig()
    {
        $url = 'http://test.com';
        $certificate = 'anything';
        $maxConnections = 10;
        $updates = [1, 2, 3];

        $config = [
            'url' => $url,
            'certificate' => $certificate,
            'max_connections' => $maxConnections,
            'allowed_updates' => $updates,
        ];

        $expected = [
            'url' => $url,
            'certificate' => $certificate,
            'max_connections' => $maxConnections,
            'allowed_updates' => $updates,
        ];

        $this->object->setOptionalConfig($config);

        $this->assertEquals($expected, $this->object->toArray());
    }

    /**
     * @test
     */
    public function prepareBody()
    {
        $this->toArray();
    }
}
