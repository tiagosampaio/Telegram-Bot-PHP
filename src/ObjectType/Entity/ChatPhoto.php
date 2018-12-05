<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\ObjectType\EntityAbstract;

/**
 * Class ChatPhoto
 * @package Telegram\ObjectType\Entity
 */
class ChatPhoto extends EntityAbstract implements ChatPhotoInterface
{
    /**
     * @return string
     */
    public function getSmallFileId()
    {
        return $this->getData(self::FIELD_SMALL_FILE_ID);
    }
    
    /**
     * @return string
     */
    public function getBigFileId()
    {
        return $this->getData(self::FIELD_BIG_FILE_ID);
    }
}
