<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

/**
 * Interface UpdatesInterface
 * @package Telegram\ObjectType\Entity
 */
interface UpdatesInterface
{
    /**
     * @return array
     */
    public function getUpdates() : array;
}
