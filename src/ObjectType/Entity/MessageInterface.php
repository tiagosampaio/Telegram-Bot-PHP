<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

/**
 * Interface MessageInterface
 * @package Telegram\ObjectType\Entity
 */
interface MessageInterface
{

    /**
     * @var string
     */
    const FIELD_MESSAGE_ID = 'message_id';

    /**
     * @var string
     */
    const FIELD_FROM = 'from';

    /**
     * @var string
     */
    const FIELD_DATE = 'date';

    /**
     * @var string
     */
    const FIELD_CHAT = 'chat';

    /**
     * @var string
     */
    const FIELD_FORWARD_FROM = 'forward_from';

    /**
     * @var string
     */
    const FIELD_FORWARD_FROM_CHAT = 'forward_from_chat';

    /**
     * @var string
     */
    const FIELD_FORWARD_FROM_MESSAGE_ID = 'forward_from_message_id';

    /**
     * @var string
     */
    const FIELD_FORWARD_SIGNATURE = 'forward_signature';

    /**
     * @var string
     */
    const FIELD_FORWARD_DATE = 'forward_date';

    /**
     * @var string
     */
    const FIELD_REPLY_TO_MESSAGE = 'reply_to_message';

    /**
     * @var string
     */
    const FIELD_EDIT_DATE = 'edit_date';

    /**
     * @var string
     */
    const FIELD_MEDIA_GROUP_ID = 'media_group_id';

    /**
     * @var string
     */
    const FIELD_AUTHOR_SIGNATURE = 'author_signature';

    /**
     * @var string
     */
    const FIELD_TEXT = 'text';

    /**
     * @var string
     */
    const FIELD_ENTITIES = 'entities';

    /**
     * @var string
     */
    const FIELD_CAPTION_ENTITIES = 'caption_entities';

    /**
     * @var string
     */
    const FIELD_AUDIO = 'audio';

    /**
     * @var string
     */
    const FIELD_DOCUMENT = 'document';

    /**
     * @var string
     */
    const FIELD_ANIMATION = 'animation';

    /**
     * @var string
     */
    const FIELD_GAME = 'game';

    /**
     * @var string
     */
    const FIELD_PHOTO = 'photo';

    /**
     * @var string
     */
    const FIELD_STICKER = 'sticker';

    /**
     * @var string
     */
    const FIELD_VIDEO = 'video';

    /**
     * @var string
     */
    const FIELD_VOICE = 'voice';

    /**
     * @var string
     */
    const FIELD_VOICE_NOTE = 'video_note';

    /**
     * @var string
     */
    const FIELD_CAPTION = 'caption';

    /**
     * @var string
     */
    const FIELD_CONTACT = 'contact';

    /**
     * @var string
     */
    const FIELD_LOCATION = 'location';

    /**
     * @var string
     */
    const FIELD_VENUE = 'venue';

    /**
     * @var string
     */
    const FIELD_NEW_CHAT_MEMBERS = 'new_chat_members';

    /**
     * @var string
     */
    const FIELD_LEFT_CHAT_MEMBERS = 'left_chat_member';

    /**
     * @var string
     */
    const FIELD_NEW_CHAT_TITLE = 'new_chat_title';

    /**
     * @var string
     */
    const FIELD_NEW_CHAT_PHOTO = 'new_chat_photo';

    /**
     * @var string
     */
    const FIELD_DELETE_CHAT_PHOTO = 'delete_chat_photo';

    /**
     * @var string
     */
    const FIELD_GROUP_CHAT_CREATED = 'group_chat_created';

    /**
     * @var string
     */
    const FIELD_SUPERGROUP_CHAT_CREATED = 'supergroup_chat_created';

    /**
     * @var string
     */
    const FIELD_CHANNEL_CHAT_CREATED = 'channel_chat_created';

    /**
     * @var string
     */
    const FIELD_MIGRATE_CHAT_CREATED = 'migrate_to_chat_id';

    /**
     * @var string
     */
    const FIELD_MIGRATE_FROM_CHAT_ID = 'migrate_from_chat_id';

    /**
     * @var string
     */
    const FIELD_PINNED_MESSAGE = 'pinned_message';

    /**
     * @var string
     */
    const FIELD_INVOICE = 'invoice';

    /**
     * @var string
     */
    const FIELD_SUCCESSFUL_PAYMENT = 'successful_payment';

    /**
     * @var string
     */
    const FIELD_CONNECTED_WEBSITE = 'connected_website';

    /**
     * @var string
     */
    const FIELD_PASSPORT_DATA = 'passport_data';
    
    /**
     * @return int
     */
    public function getMessageId();
    
    /**
     * @return UserInterface
     */
    public function getFrom();
    
    /**
     * @return UserInterface
     */
    public function getForwardFrom();
    
    /**
     * @return ChatInterface
     */
    public function getChat();
    
    /**
     * @return ChatInterface
     */
    public function getForwardFromChat();
    
    /**
     * @return MessageInterface
     */
    public function getReplyToMessage();
    
    /**
     * @return int
     */
    public function getDate();
    
    /**
     * @return string
     */
    public function getText();
    
    /**
     * @return array
     */
    public function getEntities();
    
    /**
     * @return string
     */
    public function __toString();
}
