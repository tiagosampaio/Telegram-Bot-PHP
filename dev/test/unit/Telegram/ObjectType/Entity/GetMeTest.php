<?php

declare(strict_types = 1);

namespace TelegramTest\ObjectType\Entity;

use Telegram\ObjectType\Entity;
use TelegramTest\TestCase;

/**
 * Class GetMeTest
 *
 * @package TelegramTest\ObjectType\Entity
 */
class GetMeTest extends TestCase
{
    /**
     * @var Entity\GetMe
     */
    private $object;
    
    protected function setUp()
    {
        $parameters = [
            'data' => [
                Entity\GetMeInterface::FIELD_ID => 12345,
                Entity\GetMeInterface::FIELD_IS_BOT => true,
                Entity\GetMeInterface::FIELD_FIRST_NAME => 'Telegram',
                Entity\GetMeInterface::FIELD_USERNAME => 'telegrambot',
            ]
        ];
        
        $this->object = $this->createObject(Entity\GetMeInterface::class, $parameters);
    }
    
    /**
     * @test
     */
    public function export()
    {
        $data = [
            'id' => 12345,
            'is_bot' => true,
            'first_name' => 'Telegram',
            'username' => 'telegrambot',
        ];
        
        $this->assertEquals($data, $this->object->export());
    }
    
    /**
     * @test
     */
    public function getId()
    {
        $this->assertEquals(12345, $this->object->getId());
    }
    
    /**
     * @test
     */
    public function getIsBot()
    {
        $this->assertEquals(true, $this->object->getIsBot());
    }
    
    /**
     * @test
     */
    public function getFirstName()
    {
        $this->assertEquals('Telegram', $this->object->getFirstName());
    }
    
    /**
     * @test
     */
    public function getUsername()
    {
        $this->assertEquals('telegrambot', $this->object->getUsername());
    }
}
