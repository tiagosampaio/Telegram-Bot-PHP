<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

/**
 * Interface UpdateInterface
 * @package Telegram\ObjectType\Entity
 */
interface UpdateInterface
{
    /**
     * @return integer
     */
    public function getUpdateId();
    
    /**
     * @return MessageInterface
     */
    public function getMessage();
}
