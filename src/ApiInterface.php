<?php

declare(strict_types = 1);

namespace Telegram;

use Telegram\Command\MethodInterface;
use Telegram\Command\UpdatesInterface;

/**
 * Interface ApiInterface
 * @package Telegram
 */
interface ApiInterface
{
    /**
     * @return string
     */
    public function getToken();
    
    /**
     * @return UpdatesInterface
     */
    public function updates();
    
    /**
     * @return MethodInterface
     */
    public function methods();
}
