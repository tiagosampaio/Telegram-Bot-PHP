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
        // TODO: Implement sendAnimation() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendVoice($chatId, $voice, array $optionalConfig = [])
    {
        // TODO: Implement sendVoice() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendVideoNote($chatId, $videoNote, array $optionalConfig = [])
    {
        // TODO: Implement sendVideoNote() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendMediaGroup($chatId, $media, array $optionalConfig = [])
    {
        // TODO: Implement sendMediaGroup() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendLocation($chatId, $latitude, $longitude, array $optionalConfig = [])
    {
        // TODO: Implement sendLocation() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageLiveLocation($chatId, $latitude, $longitude, array $optionalConfig = [])
    {
        // TODO: Implement editMessageLiveLocation() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function stopMessageLiveLocation(array $optionalConfig = [])
    {
        // TODO: Implement stopMessageLiveLocation() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendVenue($chatId, $latitude, $longitude, $title, $address, array $optionalConfig = [])
    {
        // TODO: Implement sendVenue() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendContact($chatId, $phone, $firstname, array $optionalConfig = [])
    {
        // TODO: Implement sendContact() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendChatAction($chatId, $action)
    {
        // TODO: Implement sendChatAction() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function getUserProfilePhotos($userId, array $optionalConfig = [])
    {
        // TODO: Implement getUserProfilePhotos() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function getFile($fileId)
    {
        // TODO: Implement getFile() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function kickChatMember($chatId, $userId, array $optionalConfig = [])
    {
        // TODO: Implement kickChatMember() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function unbanChatMember($chatId, $userId)
    {
        // TODO: Implement unbanChatMember() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function restrictChatMember($chatId, $userId, array $optionalConfig = [])
    {
        // TODO: Implement restrictChatMember() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function promoteChatMember($chatId, $userId, array $optionalConfig = [])
    {
        // TODO: Implement promoteChatMember() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function exportChatInviteLink($chatId)
    {
        // TODO: Implement exportChatInviteLink() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function setChatPhoto($chatId, $photo)
    {
        // TODO: Implement setChatPhoto() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function deleteChatPhoto($chatId)
    {
        // TODO: Implement deleteChatPhoto() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function setChatTitle($chatId, $title)
    {
        // TODO: Implement setChatTitle() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function setChatDescription($chatId, $description)
    {
        // TODO: Implement setChatDescription() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function pinChatMessage($chatId, $messageId, array $optionalConfig = [])
    {
        // TODO: Implement pinChatMessage() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function unpinChatMessage($chatId)
    {
        // TODO: Implement unpinChatMessage() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function leaveChat($chatId)
    {
        // TODO: Implement leaveChat() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function getChat($chatId)
    {
        // TODO: Implement getChat() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function getChatAdministrators($chatId)
    {
        // TODO: Implement getChatAdministrators() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function getChatMembersCount($chatId)
    {
        // TODO: Implement getChatMembersCount() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function getChatMember($chatId, $userId)
    {
        // TODO: Implement getChatMember() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function setChatStickerSet($chatId, $stickerSetName)
    {
        // TODO: Implement setChatStickerSet() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function deleteChatStickerSet($chatId)
    {
        // TODO: Implement deleteChatStickerSet() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function answerCallbackQuery($callBackQueryId, array $optionalConfig = [])
    {
        // TODO: Implement answerCallbackQuery() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageText($chatId, $messageId, $text, array $optionalConfig = [])
    {
        // TODO: Implement editMessageText() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageCaption($chatId, $messageId, $caption, array $optionalConfig = [])
    {
        // TODO: Implement editMessageCaption() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageMedia($chatId, $messageId, $media, array $optionalConfig = [])
    {
        // TODO: Implement editMessageMedia() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageReplyMarkup($chatId, $messageId, $replyMarkup, array $optionalConfig = [])
    {
        // TODO: Implement editMessageReplyMarkup() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function deleteMessage($chatId, $messageId)
    {
        // TODO: Implement deleteMessage() method.
    }
}
