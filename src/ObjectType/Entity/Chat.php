<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\ObjectType\EntityAbstract;

/**
 * Class Chat
 * @package Telegram\ObjectType\Entity
 */
class Chat extends EntityAbstract implements ChatInterface
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getData(self::FIELD_ID);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->getData(self::FIELD_TYPE);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->getData(self::FIELD_TITLE);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->getData(self::FIELD_DESCRIPTION);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        return $this->getData(self::FIELD_USERNAME);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getFirstName()
    {
        return $this->getData(self::FIELD_FIRST_NAME);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getLastName()
    {
        return $this->getData(self::FIELD_LAST_NAME);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getAllMembersAreAdministrators()
    {
        return $this->getData(self::FIELD_ALL_MEMBERS_ARE_ADMINISTRATORS);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getPhoto()
    {
        return $this->getData(self::FIELD_PHOTO);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getInviteLink()
    {
        return $this->getData(self::FIELD_INVITE_LINK);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getPinnedMessage()
    {
        return $this->getData(self::FIELD_PINNED_MESSAGE);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getStickerSetName()
    {
        return $this->getData(self::FIELD_STICKER_SET_NAME);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getCanSetStickerSet()
    {
        return $this->getData(self::FIELD_CAN_SET_STICKER_SET);
    }
}
