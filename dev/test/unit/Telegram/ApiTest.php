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
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $api;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $connection;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $getMeFactory;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $getMe;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $sendMessageFactory;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $sendMessage;

    protected function setUp()
    {
        $this->getMe = $this->createMock(\Telegram\Command\Method\GetMe::class);
        $this->getMeFactory = $this->createMock(\Telegram\Command\Method\GetMeFactory::class);
        $this->getMeFactory->method('create')
            ->willReturn($this->getMe);

        $this->sendMessage = $this->createMock(\Telegram\Command\Method\SendMessage::class);
        $this->sendMessageFactory = $this->createMock(\Telegram\Command\Method\SendMessageFactory::class);
        $this->sendMessageFactory->method('create')
            ->willReturn($this->sendMessage);

        $this->connection = $this->createMock(\Telegram\Service\Connection::class);

        $this->api = $this->createObject(\Telegram\ApiInterface::class, [
            'connection'         => $this->connection,
            'sendMessageFactory' => $this->sendMessageFactory,
            'getMeFactory'       => $this->getMeFactory,
            'token'              => $this->token
        ]);
    }

    /**
     * @test
     */
    public function getToken()
    {
        $api = \Telegram\ApiFactory::create($this->token);
        $this->assertInstanceOf(\Telegram\Api::class, $api);
        $this->assertEquals($this->token, $api->getToken());
    }

    /**
     * @test
     */
    public function getMeFactory()
    {
        $this->assertInstanceOf(\Telegram\Command\Method\GetMe::class, $this->getMeFactory->create());
    }

    /**
     * @ test
     */
    public function getMe()
    {
        $data = [
            'index_one'   => '123',
            'index_two'   => '234',
            'index_three' => '345',
        ];

        $this->getMe->expects($this->once())->method('toArray')->willReturn($data);
        $this->connection->expects($this->once())->method('post')->willReturn(json_encode($data));
        $this->assertEquals(json_encode($data), $this->api->getMe());
    }
}
