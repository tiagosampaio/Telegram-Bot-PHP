<?php

declare(strict_types = 1);

namespace Telegram\Command;

use Telegram\ObjectType\Entity;

/**
 * Class Method
 *
 * @package Telegram\Command
 */
class Method implements MethodInterface
{
    use SendersTrait;
    
    /**
     * @var \Telegram\Service\ConnectionInterface
     */
    private $connection;
    
    /**
     * @var Method\SendMessageFactory
     */
    private $sendMessageFactory;
    
    /**
     * @var Method\GetMeFactory
     */
    private $getMeFactory;
    
    /**
     * @var Method\SendPhotoFactory
     */
    private $sendPhotoFactory;
    
    /**
     * @var Method\SendVideoFactory
     */
    private $sendVideoFactory;
    
    /**
     * @var Method\SendAudioFactory
     */
    private $sendAudioFactory;
    
    /**
     * @var Method\SendDocumentFactory
     */
    private $sendDocumentFactory;
    
    /**
     * @var Method\SendAnimationFactory
     */
    private $sendAnimationFactory;
    
    /**
     * @var Method\SendVoiceFactory
     */
    private $sendVoiceFactory;
    
    /**
     * @var Method\SendVideoFactory
     */
    private $forwardMessageFactory;
    
    public function __construct(
        \Telegram\Service\ConnectionInterface $connection,
        \Telegram\Service\ResultFactory $resultFactory,
        Method\SendMessageFactory $sendMessageFactory,
        Method\GetMeFactory $getMeFactory,
        Method\SendPhotoFactory $sendPhotoFactory,
        Method\SendVideoFactory $sendVideoFactory,
        Method\SendAudioFactory $sendAudioFactory,
        Method\SendDocumentFactory $sendDocumentFactory,
        Method\SendAnimationFactory $sendAnimationFactory,
        Method\SendVoiceFactory $sendVoiceFactory,
        Method\ForwardMessageFactory $forwardMessageFactory
    ) {
        $this->connection = $connection;
        $this->resultFactory = $resultFactory;
        $this->sendMessageFactory = $sendMessageFactory;
        $this->getMeFactory = $getMeFactory;
        $this->sendPhotoFactory = $sendPhotoFactory;
        $this->sendVideoFactory = $sendVideoFactory;
        $this->sendAudioFactory = $sendAudioFactory;
        $this->sendDocumentFactory = $sendDocumentFactory;
        $this->sendAnimationFactory = $sendAnimationFactory;
        $this->sendVoiceFactory = $sendVoiceFactory;
        $this->forwardMessageFactory = $forwardMessageFactory;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getMe()
    {
        /** @var Method\GetMeInterface $method */
        $method = $this->getMeFactory->create();
        return $this->post($method, Entity\GetMeInterface::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendMessage($chatId, string $text, array $optionalConfig = [])
    {
        /** @var Method\SendMessageInterface $method */
        $method = $this->sendMessageFactory->create();
        $method->setChatId($chatId)
            ->setText($text)
            ->setOptionalConfig($optionalConfig);
        
        return $this->post($method, Entity\MessageInterface::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function forwardMessage($chatId, $fromChatId, $messageId, bool $disableNotification = false)
    {
        /** @var Method\ForwardMessageInterface $method */
        $method = $this->forwardMessageFactory->create();
        $method->setChatId($chatId)
            ->setFromChatId($fromChatId)
            ->setMessageId($messageId)
            ->setDisableNotification((bool) $disableNotification);
        
        return $this->post($method, Entity\MessageInterface::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendPhoto($chatId, $photo, array $optionalConfig = [])
    {
        /** @var Method\SendPhotoInterface $method */
        $method = $this->sendPhotoFactory->create();
        $method->setChatId($chatId)
            ->setPhoto($photo)
            ->setOptionalConfig($optionalConfig);
        
        return $this->post($method, Entity\MessageInterface::class, ['type' => 'multipart']);
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendAudio($chatId, $audio, array $optionalConfig = [])
    {
        /** @var Method\SendAudioInterface $method */
        $method = $this->sendAudioFactory->create();
        $method->setChatId($chatId)
            ->setAudio($audio)
            ->setOptionalConfig($optionalConfig);
    
        return $this->post($method, Entity\MessageInterface::class, ['type' => 'multipart']);
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendDocument($chatId, $document, array $optionalConfig = [])
    {
        /** @var Method\SendDocumentInterface $method */
        $method = $this->sendDocumentFactory->create();
        $method->setChatId($chatId)
            ->setDocument($document)
            ->setOptionalConfig($optionalConfig);
    
        return $this->post($method, Entity\MessageInterface::class, ['type' => 'multipart']);
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendVideo($chatId, $video, array $optionalConfig = [])
    {
        /** @var Method\SendVideoInterface $method */
        $method = $this->sendVideoFactory->create();
        $method->setChatId($chatId)
            ->setVideo($video)
            ->setOptionalConfig($optionalConfig);
        
        return $this->post($method, Entity\MessageInterface::class, ['type' => 'multipart']);
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendAnimation($chatId, $animation, array $optionalConfig = [])
    {
        /** @var Method\SendAnimationInterface $method */
        $method = $this->sendAnimationFactory->create();
        $method->setChatId($chatId)
            ->setAnimation($animation)
            ->setOptionalConfig($optionalConfig);
    
        return $this->post($method, Entity\MessageInterface::class, ['type' => 'multipart']);
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendVoice($chatId, $voice, array $optionalConfig = [])
    {
        /** @var Method\SendVoiceInterface $method */
        $method = $this->sendVoiceFactory->create();
        $method->setChatId($chatId)
            ->setVoice($voice)
            ->setOptionalConfig($optionalConfig);
    
        return $this->post($method, Entity\MessageInterface::class, ['type' => 'multipart']);
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendVideoNote($chatId, $videoNote, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendMediaGroup($chatId, $media, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendLocation($chatId, $latitude, $longitude, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageLiveLocation($chatId, $latitude, $longitude, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function stopMessageLiveLocation(array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendVenue($chatId, $latitude, $longitude, $title, $address, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendContact($chatId, $phone, $firstname, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendChatAction($chatId, $action)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function getUserProfilePhotos($userId, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function getFile($fileId)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function kickChatMember($chatId, $userId, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function unbanChatMember($chatId, $userId)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function restrictChatMember($chatId, $userId, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function promoteChatMember($chatId, $userId, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function exportChatInviteLink($chatId)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function setChatPhoto($chatId, $photo)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function deleteChatPhoto($chatId)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function setChatTitle($chatId, $title)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function setChatDescription($chatId, $description)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function pinChatMessage($chatId, $messageId, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function unpinChatMessage($chatId)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function leaveChat($chatId)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function getChat($chatId)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function getChatAdministrators($chatId)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function getChatMembersCount($chatId)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function getChatMember($chatId, $userId)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function setChatStickerSet($chatId, $stickerSetName)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function deleteChatStickerSet($chatId)
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function answerCallbackQuery($callBackQueryId, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageText($chatId, $messageId, $text, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageCaption($chatId, $messageId, $caption, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageMedia($chatId, $messageId, $media, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageReplyMarkup($chatId, $messageId, $replyMarkup, array $optionalConfig = [])
    {
        /** @todo: Implement this method. */
    }
    
    /**
     * {@inheritdoc}
     */
    public function deleteMessage($chatId, $messageId)
    {
        /** @todo: Implement this method. */
    }
}
