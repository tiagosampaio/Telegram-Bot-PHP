<?php

declare(strict_types = 1);

namespace TelegramTest\Service;

use Telegram\Framework\Http\Response\ResponseExceptionInterface;
use Telegram\Framework\Http\Response\ResponseSuccessInterface;
use Telegram\Service\ClientFactory;
use Telegram\Service\ConnectionInterface;
use Telegram\Framework\ObjectManager;
use TelegramTest\TestCase;

/**
 * Class ConnectionTest
 *
 * @package TelegramTest\Service
 */
class ConnectionTest extends TestCase
{
    
    /**
     * @var ConnectionInterface
     */
    private $connection;
    
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $clientFactory;
    
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $client;
    
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $response;
    
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $responseException;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $exception;
    
    /**
     * @var string
     */
    private $token = '12345ABCDE';
    
    protected function setUp()
    {
        $this->response = $this->createMock(\Psr\Http\Message\ResponseInterface::class);
        $this->responseException = $this->createMock(\GuzzleHttp\Exception\RequestException::class);
        $this->exception = $this->createMock(\Exception::class);
        $this->client = $this->createMock(\GuzzleHttp\ClientInterface::class);
        $this->clientFactory = $this->createMock(ClientFactory::class);
        
        $this->connection = ObjectManager::create(ConnectionInterface::class, [
            'token' => $this->token,
            'clientFactory' => $this->clientFactory
        ]);
    }
    
    /**
     * @test
     */
    public function getToken()
    {
        $this->assertEquals($this->token, $this->connection->getToken());
    }
    
    /**
     * @test
     */
    public function setToken()
    {
        $newToken = '5432109876';
        $this->assertInstanceOf(ConnectionInterface::class, $this->connection->setToken($newToken));
        $this->assertEquals($newToken, $this->connection->getToken());
    }
    
    /**
     * @test
     */
    public function makeRequest()
    {
        $this->request();
    }

    /**
     * @test
     */
    public function request()
    {
        $config = ['type' => 'json'];

        $this->mockClientFactory();
        $result = $this->connection->request('POST', 'GetMe', [], $config);
        $this->assertInstanceOf(ResponseSuccessInterface::class, $result);
    }
    
    /**
     * @test
     */
    public function post()
    {
        $this->mockClientFactory();
        $this->assertInstanceOf(ResponseSuccessInterface::class, $this->connection->post('GetMe'));
    }

    /**
     * @test
     */
    public function get()
    {
        $this->mockClientFactory();
        $this->assertInstanceOf(ResponseSuccessInterface::class, $this->connection->get('GetMe'));
    }
    
    /**
     * @test
     */
    public function failedRequest()
    {
        $config = ['type' => 'value'];

        $this->mockFailingClientFactory();
        $result = $this->connection->request('POST', 'GetMe', [], $config);
        $this->assertInstanceOf(ResponseExceptionInterface::class, $result);
    }

    /**
     * @test
     */
    public function exceptionRequest()
    {
        $config = ['type' => 'value'];

        $this->mockExceptionClientFactory();
        $result = $this->connection->request('POST', 'GetMe', [], $config);
        $this->assertInstanceOf(ResponseExceptionInterface::class, $result);
    }
    
    /**
     * @test
     */
    public function failedPost()
    {
        $this->mockFailingClientFactory();
        $this->assertInstanceOf(ResponseExceptionInterface::class, $this->connection->post('GetMe'));
    }
    
    private function mockClientFactory()
    {
        $this->client->expects($this->once())->method('request')->willReturn($this->response);
        $this->clientFactory->expects($this->once())->method('create')->willReturn($this->client);
    }
    
    private function mockFailingClientFactory()
    {
        $this->client->expects($this->once())->method('request')->willThrowException($this->responseException);
        $this->clientFactory->expects($this->once())->method('create')->willReturn($this->client);
    }

    private function mockExceptionClientFactory()
    {
        $this->client->expects($this->once())->method('request')->willThrowException($this->exception);
        $this->clientFactory->expects($this->once())->method('create')->willReturn($this->client);
    }
}
