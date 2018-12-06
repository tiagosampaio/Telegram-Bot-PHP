<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryInterface;

/**
 * Class MethodFactory
 * @package Telegram\ObjectType\Entity
 */
final class MethodFactory
{
    /**
     * @var ForwardMessageFactory
     */
    private $forwardMessageFactory;

    /**
     * @var DeleteMessageFactory
     */
    private $deleteMessageFactory;

    /**
     * @var EditMessageTextFactory
     */
    private $editMessageTextFactory;

    /**
     * @var EditMessageCaptionFactory
     */
    private $editMessageCaptionFactory;

    /**
     * @var EditMessageMediaFactory
     */
    private $editMessageMediaFactory;

    /**
     * @var EditMessageReplyMarkupFactory
     */
    private $editMessageReplyMarkupFactory;

    /**
     * @var GetChatFactory
     */
    private $getChatFactory;

    /**
     * @var GetMeFactory
     */
    private $getMeFactory;

    /**
     * @var SendAnimationFactory
     */
    private $sendAnimationFactory;

    /**
     * @var SendAudioFactory
     */
    private $sendAudioFactory;

    /**
     * @var SendContactFactory
     */
    private $sendContactFactory;

    /**
     * @var SendDocumentFactory
     */
    private $sendDocumentFactory;

    /**
     * @var SendMessageFactory
     */
    private $sendMessageFactory;

    /**
     * @var SendPhotoFactory
     */
    private $sendPhotoFactory;

    /**
     * @var SendVideoFactory
     */
    private $sendVideoFactory;

    /**
     * @var SendVideoNoteFactory
     */
    private $sendVideoNoteFactory;

    /**
     * @var SendVoiceFactory
     */
    private $sendVoiceFactory;

    public function __construct(
        ForwardMessageFactory $forwardMessageFactory,
        GetChatFactory $getChatFactory,
        GetMeFactory $getMeFactory,
        SendAnimationFactory $sendAnimationFactory,
        SendAudioFactory $sendAudioFactory,
        SendContactFactory $sendContactFactory,
        SendDocumentFactory $sendDocumentFactory,
        SendMessageFactory $sendMessageFactory,
        SendPhotoFactory $sendPhotoFactory,
        SendVideoFactory $sendVideoFactory,
        SendVideoNoteFactory $sendVideoNoteFactory,
        SendVoiceFactory $sendVoiceFactory,
        DeleteMessageFactory $deleteMessageFactory,
        EditMessageTextFactory $editMessageTextFactory,
        EditMessageCaptionFactory $editMessageCaptionFactory,
        EditMessageMediaFactory $editMessageMediaFactory,
        EditMessageReplyMarkupFactory $editMessageReplyMarkupFactory
    ) {
        $this->forwardMessageFactory = $forwardMessageFactory;
        $this->getChatFactory = $getChatFactory;
        $this->getMeFactory = $getMeFactory;
        $this->sendAnimationFactory = $sendAnimationFactory;
        $this->sendAudioFactory = $sendAudioFactory;
        $this->sendContactFactory = $sendContactFactory;
        $this->sendDocumentFactory = $sendDocumentFactory;
        $this->sendMessageFactory = $sendMessageFactory;
        $this->sendPhotoFactory = $sendPhotoFactory;
        $this->sendVideoFactory = $sendVideoFactory;
        $this->sendVideoNoteFactory = $sendVideoNoteFactory;
        $this->sendVoiceFactory = $sendVoiceFactory;

        $this->deleteMessageFactory = $deleteMessageFactory;
        $this->editMessageTextFactory = $editMessageTextFactory;
        $this->editMessageCaptionFactory = $editMessageCaptionFactory;
        $this->editMessageMediaFactory = $editMessageMediaFactory;
        $this->editMessageReplyMarkupFactory= $editMessageReplyMarkupFactory;
    }

    /**
     * @param FactoryInterface $factory
     * @param array            $parameters
     * @return mixed
     */
    private function create(FactoryInterface $factory, array $parameters = [])
    {
        return $factory->create($parameters);
    }

    /**
     * @param array $parameters
     * @return ForwardMessageInterface
     */
    public function createForwardMessage(array $parameters = [])
    {
        return $this->create($this->forwardMessageFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return GetChatInterface
     */
    public function createGetChat(array $parameters = [])
    {
        return $this->create($this->getChatFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return GetMeInterface
     */
    public function createGetMe(array $parameters = [])
    {
        return $this->create($this->getMeFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return SendAnimationInterface
     */
    public function createSendAnimation(array $parameters = [])
    {
        return $this->create($this->sendAnimationFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return SendAudioInterface
     */
    public function createSendAudio(array $parameters = [])
    {
        return $this->create($this->sendAudioFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return SendContactInterface
     */
    public function createSendContact(array $parameters = [])
    {
        return $this->create($this->sendContactFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return SendDocumentInterface
     */
    public function createSendDocument(array $parameters = [])
    {
        return $this->create($this->sendDocumentFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return SendMessageInterface
     */
    public function createSendMessage(array $parameters = [])
    {
        return $this->create($this->sendMessageFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return SendPhotoInterface
     */
    public function createSendPhoto(array $parameters = [])
    {
        return $this->create($this->sendPhotoFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return SendVideoInterface
     */
    public function createSendVideo(array $parameters = [])
    {
        return $this->create($this->sendVideoFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return SendVideoNoteInterface
     */
    public function createSendVideoNote(array $parameters = [])
    {
        return $this->create($this->sendVideoNoteFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return SendVoiceInterface
     */
    public function createSendVoice(array $parameters = [])
    {
        return $this->create($this->sendVoiceFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return DeleteMessageInterface
     */
    public function createDeleteMessage(array $parameters = [])
    {
        return $this->create($this->deleteMessageFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return EditMessageTextInterface
     */
    public function createEditMessageText(array $parameters = [])
    {
        return $this->create($this->editMessageTextFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return EditMessageCaptionInterface
     */
    public function createEditMessageCaption(array $parameters = [])
    {
        return $this->create($this->editMessageCaptionFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return EditMessageMediaInterface
     */
    public function createEditMessageMedia(array $parameters = [])
    {
        return $this->create($this->editMessageMediaFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return EditMessageReplyMarkupInterface
     */
    public function createEditMessageReplyMarkup(array $parameters = [])
    {
        return $this->create($this->editMessageReplyMarkupFactory, $parameters);
    }
}
