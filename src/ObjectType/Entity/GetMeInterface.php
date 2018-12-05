<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

/**
 * Interface GetMeInterface
 * @package Telegram\ObjectType\Entity
 */
interface GetMeInterface
{
    /**
     * @var string
     */
    const FIELD_ID = 'id';
    
    /**
     * @var string
     */
    const FIELD_IS_BOT = 'is_bot';
    
    /**
     * @var string
     */
    const FIELD_FIRST_NAME = 'first_name';
    
    /**
     * @var string
     */
    const FIELD_USERNAME = 'username';
    
    /**
     * @return integer
     */
    public function getId();
    
    /**
     * @return boolean
     */
    public function getIsBot();
    
    /**
     * @return string
     */
    public function getFirstName();
    
    /**
     * @return string
     */
    public function getUsername();
}
