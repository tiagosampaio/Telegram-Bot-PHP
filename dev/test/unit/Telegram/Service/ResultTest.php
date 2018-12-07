<?php

declare(strict_types = 1);

namespace TelegramTest\Service;

use Telegram\Framework\Http\Response\ResponseSuccessInterface;
use Telegram\Framework\Object\GodFactory;
use Telegram\Framework\ObjectManager;
use Telegram\Service\ResultInterface;
use TelegramTest\TestCase;

/**
 * Class ResultTest
 *
 * @package TelegramTest\Service
 */
class ResultTest extends TestCase
{
    /**
     * @var ResultInterface
     */
    private $object;
    
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $response;
    
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $godFactory;
    
    protected function setUp()
    {
        $this->response   = $this->createMock(ResponseSuccessInterface::class);
        $this->godFactory = $this->createMock(GodFactory::class);
        
        $this->object = ObjectManager::create(ResultInterface::class, [
            'response' => $this->response,
            'godFactory' => $this->godFactory,
            'objectTypeClass' => 'SomeClass',
        ]);
    }
    
    /**
     * @test
     */
    public function getResponseInstance()
    {
        $this->assertInstanceOf(ResponseSuccessInterface::class, $this->object->getResponse());
    }
    
    /**
     * @test
     */
    public function parse()
    {
        $result = [
            [
                'key' => 'value'
            ], [
                'key' => 'value'
            ]
        ];
        
        $body = [
            'ok' => true,
            'result' => $result
        ];
        
        $this->response->expects($this->once())->method('canParse')->willReturn(true);
        $this->response->expects($this->once())->method('getBody')->willReturn($body);
        $this->godFactory->expects($this->once())->method('createObject')->willReturn($result);
        
        $this->assertEquals($result, $this->object->parse());
    }
    
    /**
     * @test
     */
    public function failParse()
    {
        $this->response->expects($this->once())->method('canParse')->willReturn(false);
        $this->assertEquals(false, $this->object->parse());
    }
}
