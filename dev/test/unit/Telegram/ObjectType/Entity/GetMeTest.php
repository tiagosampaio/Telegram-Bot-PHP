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
     * @var Entity\GetMeInterface
     */
    private $object;
    
    /**
     * @var array
     */
    private $data = [
        Entity\GetMeInterface::FIELD_ID => 12345,
        Entity\GetMeInterface::FIELD_IS_BOT => true,
        Entity\GetMeInterface::FIELD_FIRST_NAME => 'Telegram',
        Entity\GetMeInterface::FIELD_USERNAME => 'telegrambot',
    ];
    
    protected function setUp()
    {
        $parameters = [
            'data' => $this->data
        ];
        
        $this->object = $this->createObject(Entity\GetMeInterface::class, $parameters);
    }
    
    /**
     * @test
     */
    public function export()
    {
        $this->assertEquals($this->data, $this->object->export());
    }
    
    /**
     * @test
     */
    public function serialize()
    {
        $this->assertEquals(json_encode($this->data), (string) $this->object);
    }
    
    /**
     * @test
     */
    public function getId()
    {
        $this->assertEquals($this->data[Entity\GetMeInterface::FIELD_ID], $this->object->getId());
    }
    
    /**
     * @test
     */
    public function getIsBot()
    {
        $this->assertEquals($this->data[Entity\GetMeInterface::FIELD_IS_BOT], $this->object->getIsBot());
    }
    
    /**
     * @test
     */
    public function getFirstName()
    {
        $this->assertEquals($this->data[Entity\GetMeInterface::FIELD_FIRST_NAME], $this->object->getFirstName());
    }
    
    /**
     * @test
     */
    public function getUsername()
    {
        $this->assertEquals($this->data[Entity\GetMeInterface::FIELD_USERNAME], $this->object->getUsername());
    }
}
