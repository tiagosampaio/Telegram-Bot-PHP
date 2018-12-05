<?php

namespace TelegramTest\Command\Method;

/**
 * Class GetMeTest
 * @package TelegramTest\Telegram\Method
 */
class SendMessageTest extends MethodTestCase
{
    /**
     * @var \Telegram\Command\Method\SendMessageInterface
     */
    private $object;

    /**
     * @var string
     */
    private $text = 'Some text goes here...';

    /**
     * @var integer
     */
    private $chatId = 12345;

    protected function setUp()
    {
        $serializer = $this->createObject(\Telegram\Framework\Data\SerializerInterface::class);
        $this->object = $this->createObject(\Telegram\Command\Method\SendMessageInterface::class, [
            'serializer' => $serializer
        ]);

        $this->object->setText($this->text);
        $this->object->setChatId($this->chatId);
    }

    /**
     * @test
     */
    public function getUrlPath()
    {
        $this->assertEquals('sendMessage', $this->object->getUrlPath());
    }

    /**
     * @test
     */
    public function setText()
    {
        $this->assertInstanceOf(get_class($this->object), $this->object->setText('Some text.'));
    }

    /**
     * @test
     */
    public function getText()
    {
        $this->assertEquals($this->text, $this->object->getData('text'));
    }

    /**
     * @test
     */
    public function setChatId()
    {
        $this->assertInstanceOf(get_class($this->object), $this->object->setChatId($this->chatId));
    }

    /**
     * @test
     */
    public function getChatId()
    {
        $this->assertEquals($this->chatId, $this->object->getData('chat_id'));
    }

    /**
     * @test
     */
    public function setParseMode()
    {
        $this->assertInstanceOf(get_class($this->object), $this->object->setParseMode(''));
    }

    /**
     * @test
     */
    public function setDisableWebPagePreview()
    {
        $this->assertInstanceOf(get_class($this->object), $this->object->setDisableWebPagePreview(true));
    }

    /**
     * @test
     */
    public function setDisableNotification()
    {
        $this->assertInstanceOf(get_class($this->object), $this->object->setDisableNotification(true));
    }

    /**
     * @test
     */
    public function setReplyToMessageId()
    {
        $this->assertInstanceOf(get_class($this->object), $this->object->setReplyToMessageId(12345));
    }

    /**
     * @test
     */
    public function setReplyMarkup()
    {
        $this->assertInstanceOf(get_class($this->object), $this->object->setReplyMarkup(12345));
    }

    /**
     * @test
     */
    public function toArray()
    {
        $data = [
            'text' => $this->text,
            'chat_id' => $this->chatId,
        ];

        $this->assertEquals($data, $this->object->toArray());
    }

    /**
     * @test
     */
    public function toJson()
    {
        $data = [
            'text' => $this->text,
            'chat_id' => $this->chatId,
        ];

        $this->assertEquals(json_encode($data), $this->object->toJson());
    }
}
