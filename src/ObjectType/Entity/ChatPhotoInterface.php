<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

/**
 * Interface ChatPhotoInterface
 * @package Telegram\ObjectType\Entity
 */
interface ChatPhotoInterface
{
    /**
     * @var string
     */
    const FIELD_SMALL_FILE_ID = 'small_file_id';
    
    /**
     * @var string
     */
    const FIELD_BIG_FILE_ID = 'big_file_id';
    
    /**
     * @return string
     */
    public function getSmallFileId();
    
    /**
     * @return string
     */
    public function getBigFileId();
}
