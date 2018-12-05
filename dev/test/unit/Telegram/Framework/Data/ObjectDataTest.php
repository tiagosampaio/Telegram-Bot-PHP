<?php

namespace TelegramTest\Framework\Data;

use Telegram\Framework\Data\ObjectData;

/**
 * Class ObjectDataTest
 * @package TelegramTest\Telegram\Framework\Data
 */
class ObjectDataTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @test
     */
    public function dataSetterAndGetter()
    {
        $key    = 'first_name';
        $value  = 'John Doe';
    
        $object = new ObjectData();
        $this->assertInstanceOf(ObjectData::class, $object->setData($key, $value));
        $this->assertEquals($value, $object->getData($key));
    }

    /**
     * @test
     */
    public function setData()
    {
        $key    = 'first_name';
        $value  = 'John Doe';
        
        $data = [
            $key => $value
        ];
    
        $object = new ObjectData();
        $this->assertInstanceOf(ObjectData::class, $object->setData($data));
        $this->assertEquals($value, $object->getData($key));
    }

    /**
     * @test
     */
    public function addData()
    {
        $object = new ObjectData();
        
        $this->assertInstanceOf(ObjectData::class, $object->setData(['first_name' => 'John']));
        $this->assertEquals('John', $object->getData('first_name'));
    
        $this->assertInstanceOf(ObjectData::class, $object->addData(['last_name' => 'Doe']));
        $this->assertEquals('Doe', $object->getData('last_name'));
    }

    /**
     * @test
     */
    public function export()
    {
        $data = [
            'first_name' => 'John',
            'last_name' => 'Doe',
        ];
        
        $object = new ObjectData();
        $object->setData($data);
        
        $this->assertEquals($data, $object->export());
        $this->assertEquals(['first_name' => 'John'], $object->export(['first_name']));
    }

    /**
     * @test
     */
    public function debug()
    {
        $data = [
            'first_name' => 'John',
            'last_name' => 'Doe',
        ];

        $object = new ObjectData();
        $object->setData($data);

        $this->assertEquals($data, $object->debug());
    }
}
