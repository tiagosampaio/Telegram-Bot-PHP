<?php

declare(strict_types = 1);

namespace TelegramTest;

/**
 * Class ApiTest
 * @package TelegramTest\Telegram
 */
class ApiTest extends TestCase
{
    /**
     * @var string
     */
    private $token = 'LASDFYA897SHFLAKDJFAIOSDGFHO9';

    /**
     * @var \Telegram\ApiInterface
     */
    private $api;

    protected function setUp()
    {
        $this->api = \Telegram\ApiFactory::create($this->token);
    }

    /**
     * @test
     */
    public function assertInstance()
    {
        $this->assertInstanceOf(\Telegram\ApiInterface::class, $this->api);
    }

    /**
     * @test
     */
    public function getToken()
    {
        $this->assertEquals($this->token, $this->api->getToken());
    }

    /**
     * @test
     */
    public function methods()
    {
        $this->assertInstanceOf(\Telegram\Command\MethodInterface::class, $this->api->methods());
    }

    /**
     * @test
     */
    public function updates()
    {
        $this->assertInstanceOf(\Telegram\Command\UpdatesInterface::class, $this->api->updates());
    }
}
