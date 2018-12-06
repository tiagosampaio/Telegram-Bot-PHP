<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;
use Telegram\Command\Method\Parts\ChatInterface;
use Telegram\Command\Method\Parts\ReplyMarkupInterface;
use Telegram\Command\Method\Parts\ReplyToMessageInterface;

/**
 * Interface SendPhotoInterface
 * @package Telegram\Command\Method
 */
interface SendPhotoInterface extends CommandInterface, ChatInterface, ReplyMarkupInterface, ReplyToMessageInterface
{
    /**
     * @param $photo
     * @return $this
     */
    public function setPhoto($photo);

    /**
     * @param $caption
     * @return $this
     */
    public function setCaption($caption);

    /**
     * @param $parseMode
     * @return $this
     */
    public function setParseMode($parseMode);

    /**
     * @param bool $flat
     * @return $this
     */
    public function setDisableNotification(bool $flat);
}
