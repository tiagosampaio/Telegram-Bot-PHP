<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

/**
 * Interface ChatInterface
 * @package Telegram\ObjectType\Entity
 */
interface ChatInterface
{
    /**
     * @var string
     */
    const FIELD_ID = 'id';

    /**
     * @var string
     */
    const FIELD_TYPE = 'type';

    /**
     * @var string
     */
    const FIELD_TITLE = 'title';

    /**
     * @var string
     */
    const FIELD_USERNAME = 'username';

    /**
     * @var string
     */
    const FIELD_FIRST_NAME = 'first_name';

    /**
     * @var string
     */
    const FIELD_LAST_NAME = 'last_name';

    /**
     * @var string
     */
    const FIELD_ALL_MEMBERS_ARE_ADMINISTRATORS = 'all_members_are_administrators';

    /**
     * @var string
     */
    const FIELD_PHOTO = 'photo';

    /**
     * @var string
     */
    const FIELD_DESCRIPTION = 'description';

    /**
     * @var string
     */
    const FIELD_INVITE_LINK = 'invite_link';

    /**
     * @var string
     */
    const FIELD_PINNED_MESSAGE = 'pinned_message';

    /**
     * @var string
     */
    const FIELD_STICKER_SET_NAME = 'sticker_set_name';

    /**
     * @var string
     */
    const FIELD_CAN_SET_STICKER_SET = 'can_set_sticker_set';
    
    /**
     * @return int
     */
    public function getId();
    
    /**
     * @return string
     */
    public function getType();
    
    /**
     * @return string
     */
    public function getTitle();
    
    /**
     * @return string
     */
    public function getDescription();
    
    /**
     * @return string
     */
    public function getUsername();
    
    /**
     * @return string
     */
    public function getFirstName();
    
    /**
     * @return string
     */
    public function getLastName();
    
    /**
     * @return boolean
     */
    public function getAllMembersAreAdministrators();
    
    /**
     * @return ChatPhotoInterface
     */
    public function getPhoto();
    
    /**
     * @return string
     */
    public function getInviteLink();
    
    /**
     * @return MessageInterface
     */
    public function getPinnedMessage();
    
    /**
     * @return string
     */
    public function getStickerSetName();
    
    /**
     * @return boolean
     */
    public function getCanSetStickerSet();
}
