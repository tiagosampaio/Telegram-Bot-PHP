<?php

declare(strict_types = 1);

namespace TelegramTest\ObjectType\Entity;

use Telegram\ObjectType\Entity;

use TelegramTest\TestCase;

/**
 * Class EntityFactoryTest
 *
 * @package TelegramTest\ObjectType\Entity
 */
class EntityFactoryTest extends TestCase
{
    
    /**
     * @var Entity\EntityFactory
     */
    private $object;
    
    protected function setUp()
    {
        $this->object = $this->createObject(Entity\EntityFactory::class);
    }
    
    /**
     * @test
     */
    public function createChat()
    {
        $this->assertInstanceOf(Entity\ChatInterface::class, $this->object->createChat());
    }
    
    /**
     * @test
     */
    public function createChatPhoto()
    {
        $this->assertInstanceOf(Entity\ChatPhotoInterface::class, $this->object->createChatPhoto());
    }
    
    /**
     * @test
     */
    public function createGetMe()
    {
        $this->assertInstanceOf(Entity\GetMeInterface::class, $this->object->createGetMe());
    }
    
    /**
     * @test
     */
    public function createMessage()
    {
        $this->assertInstanceOf(Entity\MessageInterface::class, $this->object->createMessage());
    }
    
    /**
     * @test
     */
    public function createMessageEntity()
    {
        $this->assertInstanceOf(Entity\MessageEntityInterface::class, $this->object->createMessageEntity());
    }
    
    /**
     * @test
     */
    public function createUpdate()
    {
        $this->assertInstanceOf(Entity\UpdateInterface::class, $this->object->createUpdate());
    }
    
    /**
     * @test
     */
    public function createUpdates()
    {
        $this->assertInstanceOf(Entity\UpdatesInterface::class, $this->object->createUpdates());
    }
    
    /**
     * @test
     */
    public function createUser()
    {
        $this->assertInstanceOf(Entity\UserInterface::class, $this->object->createUser());
    }
    
    /**
     * @test
     */
    public function createWebhookInfo()
    {
        $this->assertInstanceOf(Entity\WebhookInfoInterface::class, $this->object->createWebhookInfo());
    }
}
