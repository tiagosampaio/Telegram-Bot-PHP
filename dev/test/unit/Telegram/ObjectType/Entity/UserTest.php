<?php

declare(strict_types = 1);

namespace TelegramTest\ObjectType\Entity;

use Telegram\ObjectType\Entity;
use TelegramTest\TestCase;

/**
 * Class UserTest
 *
 * @package TelegramTest\ObjectType\Entity
 */
class UserTest extends TestCase
{
    /**
     * @var Entity\User
     */
    private $object;
    
    protected function setUp()
    {
        $parameters = [
            'data' => [
                Entity\UserInterface::FIELD_ID => 12345,
                Entity\UserInterface::FIELD_IS_BOT => true,
                Entity\UserInterface::FIELD_FIRST_NAME => 'Telegram',
                Entity\UserInterface::FIELD_LAST_NAME => 'Bot',
                Entity\UserInterface::FIELD_USERNAME => 'telegrambot',
                Entity\UserInterface::FIELD_LANGUAGE_CODE => 'en_US',
            ]
        ];
        
        $this->object = $this->createObject(Entity\UserInterface::class, $parameters);
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
            'last_name' => 'Bot',
            'username' => 'telegrambot',
            'language_code' => 'en_US',
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
    public function getLastName()
    {
        $this->assertEquals('Bot', $this->object->getLastName());
    }
    
    /**
     * @test
     */
    public function getUsername()
    {
        $this->assertEquals('telegrambot', $this->object->getUsername());
    }
    
    /**
     * @test
     */
    public function getLanguageCode()
    {
        $this->assertEquals('en_US', $this->object->getLanguageCode());
    }
}
