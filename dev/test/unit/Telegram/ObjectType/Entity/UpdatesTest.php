<?php

declare(strict_types = 1);

namespace TelegramTest\ObjectType\Entity;

use Telegram\ObjectType\Entity;
use TelegramTest\TestCase;

/**
 * Class UpdatesTest
 *
 * @package TelegramTest\ObjectType\Entity
 */
class UpdatesTest extends TestCase
{
    /**
     * @var Entity\UpdatesInterface
     */
    private $object;
    
    protected function setUp()
    {
        $parameters = [
            'data' => [
                [
                    'message' => []
                ], [
                    'message' => []
                ], [
                    'message' => []
                ]
            ]
        ];
        
        $this->object = $this->createObject(Entity\UpdatesInterface::class, $parameters);
    }
    
    /**
     * @test
     */
    public function getUpdates()
    {
        foreach ($this->object->getUpdates() as $update) {
            $this->assertInstanceOf(Entity\UpdateInterface::class, $update);
        }
    }
}
