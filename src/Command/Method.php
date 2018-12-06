<?php

declare(strict_types = 1);

namespace Telegram\Command;

use Telegram\Service;
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
     * @var Entity\EntityFactory
     */
    private $objectEntityFactory;

    /**
     * @var Method\MethodFactory
     */
    private $methodFactory;

    /**
     * Method constructor.
     * @param Service\ConnectionInterface $connection
     * @param Service\ResultFactory       $resultFactory
     * @param Entity\EntityFactory        $objectEntityFactory
     * @param Method\MethodFactory        $methodFactory
     */
    public function __construct(
        Service\ConnectionInterface $connection,
        Service\ResultFactory $resultFactory,
        Entity\EntityFactory $objectEntityFactory,
        Method\MethodFactory $methodFactory
    ) {
        $this->connection = $connection;
        $this->resultFactory = $resultFactory;
        $this->objectEntityFactory = $objectEntityFactory;
        $this->methodFactory = $methodFactory;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getMe()
    {
        return $this->post($this->methodFactory->createGetMe(), Entity\GetMeInterface::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendMessage($chatId, string $text, array $optionalConfig = [])
    {
        /** @var Method\SendMessageInterface $method */
        $method = $this->methodFactory->createSendMessage()
            ->setChatId($chatId)
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
        $method = $this->methodFactory->createForwardMessage()
            ->setChatId($chatId)
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
        $method = $this->methodFactory->createSendPhoto()
            ->setChatId($chatId)
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
        $method = $this->methodFactory->createSendAudio()
            ->setChatId($chatId)
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
        $method = $this->methodFactory->createSendDocument()
            ->setChatId($chatId)
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
        $method = $this->methodFactory->createSendVideo()
            ->setChatId($chatId)
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
        $method = $this->methodFactory->createSendAnimation()
            ->setChatId($chatId)
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
        $method = $this->methodFactory->createSendVoice()
            ->setChatId($chatId)
            ->setVoice($voice)
            ->setOptionalConfig($optionalConfig);
    
        return $this->post($method, Entity\MessageInterface::class, ['type' => 'multipart']);
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendVideoNote($chatId, $videoNote, array $optionalConfig = [])
    {
        /** @var Method\SendVideoNoteInterface $method */
        $method = $this->methodFactory->createSendVideoNote()
            ->setChatId($chatId)
            ->setVideoNote($videoNote)
            ->setOptionalConfig($optionalConfig);
    
        return $this->post($method, Entity\MessageInterface::class, ['type' => 'multipart']);
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
        /** @var Method\SendContactInterface $method */
        $method = $this->methodFactory->createSendContact()
            ->setChatId($chatId)
            ->setPhoneNumber($phone)
            ->setFirstName($firstname)
            ->setOptionalConfig($optionalConfig);
    
        return $this->post($method, Entity\MessageInterface::class);
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
        /** @todo: Implement this method in the correct way. */
        
        $data = [
            'chat_id' => $chatId,
            'title'   => $title
        ];
        
        $response = $this->connection->post('setChatTitle', $data);
        return $this->prepareResult($response);
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
        /** @var Method\GetChatInterface $method */
        $method = $this->methodFactory->createGetChat()
            ->setChatId($chatId);
    
        return $this->post($method, Entity\ChatInterface::class);
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
        /** @var Method\EditMessageTextInterface $method */
        $method = $this->methodFactory->createEditMessageText()
            ->setChatId($chatId)
            ->setMessageId($messageId)
            ->setText($text)
            ->setOptionalConfig($optionalConfig);

        return $this->post($method, Entity\MessageInterface::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageCaption($chatId, $messageId, $caption, array $optionalConfig = [])
    {
        /** @var Method\EditMessageCaptionInterface $method */
        $method = $this->methodFactory->createEditMessageCaption()
            ->setChatId($chatId)
            ->setMessageId($messageId)
            ->setCaption($caption)
            ->setOptionalConfig($optionalConfig);

        return $this->post($method, Entity\MessageInterface::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageMedia($chatId, $messageId, $media, array $optionalConfig = [])
    {
        /** @var Method\EditMessageMediaInterface $method */
        $method = $this->methodFactory->createEditMessageMedia()
            ->setChatId($chatId)
            ->setMessageId($messageId)
            ->setMedia($media)
            ->setOptionalConfig($optionalConfig);

        return $this->post($method, Entity\MessageInterface::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function editMessageReplyMarkup($chatId, $messageId, $replyMarkup, array $optionalConfig = [])
    {
        /** @var Method\EditMessageReplyMarkupInterface $method */
        $method = $this->methodFactory->createEditMessageReplyMarkup()
            ->setChatId($chatId)
            ->setMessageId($messageId)
            ->setReplyMarkup($replyMarkup)
            ->setOptionalConfig($optionalConfig);

        return $this->post($method, Entity\MessageInterface::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function deleteMessage($chatId, $messageId)
    {
        /** @var Method\DeleteMessageInterface $method */
        $method = $this->methodFactory->createDeleteMessage()
            ->setChatId($chatId)
            ->setMessageId($messageId);

        return $this->post($method);
    }
}
