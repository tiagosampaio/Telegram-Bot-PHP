<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

/**
 * Interface MessageEntityInterface
 * @package Telegram\ObjectType\Entity
 */
interface MessageEntityInterface
{

    /**
     * @var string
     */
    const FIELD_TYPE = 'type';

    /**
     * @var string
     */
    const FIELD_OFFSET = 'offset';

    /**
     * @var string
     */
    const FIELD_LENGTH = 'length';

    /**
     * @var string
     */
    const FIELD_URL = 'url';

    /**
     * @var string
     */
    const FIELD_USER = 'user';
    
    /**
     * @var string
     */
    const TYPE_BOT_COMMAND = 'bot_command';
    
    /**
     * @var string
     */
    const TYPE_MENTION = 'mention';
    
    /**
     * @var string
     */
    const TYPE_HASHTAG = 'hashtag';
    
    /**
     * @var string
     */
    const TYPE_CASHTAG = 'cashtag';
    
    /**
     * @var string
     */
    const TYPE_URL = 'url';
    
    /**
     * @var string
     */
    const TYPE_EMAIL = 'email';
    
    /**
     * @var string
     */
    const TYPE_PHONE_NUMBER = 'phone_number';
    
    /**
     * @var string
     */
    const TYPE_BOLD = 'bold';
    
    /**
     * @var string
     */
    const TYPE_ITALIC = 'italic';
    
    /**
     * @var string
     */
    const TYPE_CODE = 'code';
    
    /**
     * @var string
     */
    const TYPE_PRE = 'pre';
    
    /**
     * @var string
     */
    const TYPE_TEXT_LINK = 'text_link';
    
    /**
     * @var string
     */
    const TYPE_TEXT_MENTION = 'text_mention';
    
    /**
     * @return array
     */
    public function getAvailableTypes();
    
    /**
     * @return string
     */
    public function getType();
    
    /**
     * @return integer
     */
    public function getOffset();
    
    /**
     * @return integer
     */
    public function getLength();
    
    /**
     * @return string
     */
    public function getUrl();
    
    /**
     * @return UserInterface
     */
    public function getUser();
}
