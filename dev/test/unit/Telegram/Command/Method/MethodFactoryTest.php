<?php

declare(strict_types = 1);

namespace TelegramTest\Command\Method;

use Telegram\Command\Method\DeleteMessageInterface;
use Telegram\Command\Method\EditMessageCaptionInterface;
use Telegram\Command\Method\EditMessageMediaInterface;
use Telegram\Command\Method\EditMessageReplyMarkupInterface;
use Telegram\Command\Method\EditMessageTextInterface;
use Telegram\Command\Method\ForwardMessageInterface;
use Telegram\Command\Method\GetChatInterface;
use Telegram\Command\Method\GetMeInterface;
use Telegram\Command\Method\MethodFactory;
use Telegram\Command\Method\SendAnimationInterface;
use Telegram\Command\Method\SendAudioInterface;
use Telegram\Command\Method\SendContactInterface;
use Telegram\Command\Method\SendDocumentInterface;
use Telegram\Command\Method\SendMessageInterface;
use Telegram\Command\Method\SendPhotoInterface;
use Telegram\Command\Method\SendVideoInterface;
use Telegram\Command\Method\SendVideoNoteInterface;
use Telegram\Command\Method\SendVoiceInterface;
use TelegramTest\TestCase;

/**
 * Class MethodFactoryTest
 * @package TelegramTest\Command\Method
 */
class MethodFactoryTest extends TestCase
{
    /**
     * @var MethodFactory
     */
    private $factory;

    protected function setUp()
    {
        $this->factory = $this->createObject(MethodFactory::class);
    }

    /**
     * @test
     */
    public function createForwardMessage()
    {
        $this->assertInstanceOf(ForwardMessageInterface::class, $this->factory->createForwardMessage());
    }

    /**
     * @test
     */
    public function createGetChat()
    {
        $this->assertInstanceOf(GetChatInterface::class, $this->factory->createGetChat());
    }

    /**
     * @test
     */
    public function createGetMe()
    {
        $this->assertInstanceOf(GetMeInterface::class, $this->factory->createGetMe());
    }

    /**
     * @test
     */
    public function createSendAnimation()
    {
        $this->assertInstanceOf(SendAnimationInterface::class, $this->factory->createSendAnimation());
    }

    /**
     * @test
     */
    public function createSendAudio()
    {
        $this->assertInstanceOf(SendAudioInterface::class, $this->factory->createSendAudio());
    }

    /**
     * @test
     */
    public function createSendContact()
    {
        $this->assertInstanceOf(SendContactInterface::class, $this->factory->createSendContact());
    }

    /**
     * @test
     */
    public function createSendDocument()
    {
        $this->assertInstanceOf(SendDocumentInterface::class, $this->factory->createSendDocument());
    }

    /**
     * @test
     */
    public function createSendMessage()
    {
        $this->assertInstanceOf(SendMessageInterface::class, $this->factory->createSendMessage());
    }

    /**
     * @test
     */
    public function createSendPhoto()
    {
        $this->assertInstanceOf(SendPhotoInterface::class, $this->factory->createSendPhoto());
    }

    /**
     * @test
     */
    public function createSendVideo()
    {
        $this->assertInstanceOf(SendVideoInterface::class, $this->factory->createSendVideo());
    }

    /**
     * @test
     */
    public function createSendVideoNote()
    {
        $this->assertInstanceOf(SendVideoNoteInterface::class, $this->factory->createSendVideoNote());
    }

    /**
     * @test
     */
    public function createSendVoice()
    {
        $this->assertInstanceOf(SendVoiceInterface::class, $this->factory->createSendVoice());
    }

    /**
     * @test
     */
    public function createDeleteMessage()
    {
        $this->assertInstanceOf(DeleteMessageInterface::class, $this->factory->createDeleteMessage());
    }

    /**
     * @test
     */
    public function createEditMessageText()
    {
        $this->assertInstanceOf(EditMessageTextInterface::class, $this->factory->createEditMessageText());
    }

    /**
     * @test
     */
    public function createEditMessageCaption()
    {
        $this->assertInstanceOf(EditMessageCaptionInterface::class, $this->factory->createEditMessageCaption());
    }

    /**
     * @test
     */
    public function createEditMessageMedia()
    {
        $this->assertInstanceOf(EditMessageMediaInterface::class, $this->factory->createEditMessageMedia());
    }

    /**
     * @test
     */
    public function createEditMessageReplyMarkup()
    {
        $this->assertInstanceOf(EditMessageReplyMarkupInterface::class, $this->factory->createEditMessageReplyMarkup());
    }
}
