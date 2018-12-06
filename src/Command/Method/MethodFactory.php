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
        SendVoiceFactory $sendVoiceFactory
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
}
