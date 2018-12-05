<?php

declare(strict_types = 1);

namespace Telegram\Command;

use Telegram\Service\ResultInterface;

/**
 * Interface MethodInterface
 *
 * @package Telegram\Command
 */
interface MethodInterface
{
    /**
     * @return ResultInterface
     */
    public function getMe();
    
    /**
     * @param string|int $chatId
     * @param string     $text
     * @param array      $optionalConfig
     * @return ResultInterface
     */
    public function sendMessage($chatId, string $text, array $optionalConfig = []);
    
    /**
     * @param string|int $chatId
     * @param string|int $fromChatId
     * @param string|int $messageId
     * @param bool       $disableNotification
     * @return ResultInterface
     */
    public function forwardMessage($chatId, $fromChatId, $messageId, bool $disableNotification = false);
    
    /**
     * @param string|int $chatId
     * @param            $photo
     * @param array      $optionalConfig
     * @return ResultInterface
     */
    public function sendPhoto($chatId, $photo, array $optionalConfig = []);
    
    /**
     * @param string|int $chatId
     * @param            $audio
     * @param array      $optionalConfig
     * @return ResultInterface
     */
    public function sendAudio($chatId, $audio, array $optionalConfig = []);
    
    /**
     * @param string|int $chatId
     * @param            $document
     * @param array      $optionalConfig
     * @return ResultInterface
     */
    public function sendDocument($chatId, $document, array $optionalConfig = []);
    
    /**
     * @param string|int $chatId
     * @param            $video
     * @param array      $optionalConfig
     * @return ResultInterface
     */
    public function sendVideo($chatId, $video, array $optionalConfig = []);
    
    /**
     * @param string|int $chatId
     * @param            $animation
     * @param array      $optionalConfig
     * @return ResultInterface
     */
    public function sendAnimation($chatId, $animation, array $optionalConfig = []);
    
    /**
     * @param string|int $chatId
     * @param            $voice
     * @param array      $optionalConfig
     * @return ResultInterface
     */
    public function sendVoice($chatId, $voice, array $optionalConfig = []);
    
    /**
     * @param string|int $chatId
     * @param            $videoNote
     * @param array      $optionalConfig
     * @return ResultInterface
     */
    public function sendVideoNote($chatId, $videoNote, array $optionalConfig = []);
    
    /**
     * @param string|int $chatId
     * @param            $media
     * @param array      $optionalConfig
     * @return ResultInterface
     */
    public function sendMediaGroup($chatId, $media, array $optionalConfig = []);
    
    /**
     * @param string|int $chatId
     * @param            $latitude
     * @param            $longitude
     * @param array      $optionalConfig
     * @return ResultInterface
     */
    public function sendLocation($chatId, $latitude, $longitude, array $optionalConfig = []);
    
    /**
     * @param       $chatId
     * @param       $latitude
     * @param       $longitude
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function editMessageLiveLocation($chatId, $latitude, $longitude, array $optionalConfig = []);
    
    /**
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function stopMessageLiveLocation(array $optionalConfig = []);
    
    /**
     * @param       $chatId
     * @param       $latitude
     * @param       $longitude
     * @param       $title
     * @param       $address
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function sendVenue($chatId, $latitude, $longitude, $title, $address, array $optionalConfig = []);
    
    /**
     * @param       $chatId
     * @param       $phone
     * @param       $firstname
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function sendContact($chatId, $phone, $firstname, array $optionalConfig = []);
    
    /**
     * @param $chatId
     * @param $action
     * @return ResultInterface
     */
    public function sendChatAction($chatId, $action);
    
    /**
     * @param       $userId
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function getUserProfilePhotos($userId, array $optionalConfig = []);
    
    /**
     * @param $fileId
     * @return ResultInterface
     */
    public function getFile($fileId);
    
    /**
     * @param       $chatId
     * @param       $userId
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function kickChatMember($chatId, $userId, array $optionalConfig = []);
    
    /**
     * @param $chatId
     * @param $userId
     * @return ResultInterface
     */
    public function unbanChatMember($chatId, $userId);
    
    /**
     * @param       $chatId
     * @param       $userId
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function restrictChatMember($chatId, $userId, array $optionalConfig = []);
    
    /**
     * @param       $chatId
     * @param       $userId
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function promoteChatMember($chatId, $userId, array $optionalConfig = []);
    
    /**
     * @param $chatId
     * @return ResultInterface
     */
    public function exportChatInviteLink($chatId);
    
    /**
     * @param $chatId
     * @param $photo
     * @return ResultInterface
     */
    public function setChatPhoto($chatId, $photo);
    
    /**
     * @param $chatId
     * @return ResultInterface
     */
    public function deleteChatPhoto($chatId);
    
    /**
     * @param $chatId
     * @param $title
     * @return ResultInterface
     */
    public function setChatTitle($chatId, $title);
    
    /**
     * @param $chatId
     * @param $description
     * @return ResultInterface
     */
    public function setChatDescription($chatId, $description);
    
    /**
     * @param       $chatId
     * @param       $messageId
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function pinChatMessage($chatId, $messageId, array $optionalConfig = []);
    
    /**
     * @param $chatId
     * @return ResultInterface
     */
    public function unpinChatMessage($chatId);
    
    /**
     * @param $chatId
     * @return ResultInterface
     */
    public function leaveChat($chatId);
    
    /**
     * @param $chatId
     * @return ResultInterface
     */
    public function getChat($chatId);
    
    /**
     * @param $chatId
     * @return ResultInterface
     */
    public function getChatAdministrators($chatId);
    
    /**
     * @param $chatId
     * @return ResultInterface
     */
    public function getChatMembersCount($chatId);
    
    /**
     * @param $chatId
     * @param $userId
     * @return ResultInterface
     */
    public function getChatMember($chatId, $userId);
    
    /**
     * @param $chatId
     * @param $stickerSetName
     * @return ResultInterface
     */
    public function setChatStickerSet($chatId, $stickerSetName);
    
    /**
     * @param $chatId
     * @return ResultInterface
     */
    public function deleteChatStickerSet($chatId);
    
    /**
     * @param       $callBackQueryId
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function answerCallbackQuery($callBackQueryId, array $optionalConfig = []);
    
    /**
     * @param       $chatId
     * @param       $messageId
     * @param       $text
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function editMessageText($chatId, $messageId, $text, array $optionalConfig = []);
    
    /**
     * @param       $chatId
     * @param       $messageId
     * @param       $caption
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function editMessageCaption($chatId, $messageId, $caption, array $optionalConfig = []);
    
    /**
     * @param       $chatId
     * @param       $messageId
     * @param       $media
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function editMessageMedia($chatId, $messageId, $media, array $optionalConfig = []);
    
    /**
     * @param       $chatId
     * @param       $messageId
     * @param       $replyMarkup
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function editMessageReplyMarkup($chatId, $messageId, $replyMarkup, array $optionalConfig = []);
    
    /**
     * @param $chatId
     * @param $messageId
     * @return ResultInterface
     */
    public function deleteMessage($chatId, $messageId);
}
