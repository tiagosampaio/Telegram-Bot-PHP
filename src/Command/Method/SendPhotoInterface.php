<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface SendPhotoInterface
 * @package Telegram\Command\Method
 */
interface SendPhotoInterface extends CommandInterface, Parts\ChatInterface, Parts\ReplyMarkupInterface
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

    /**
     * @param int $messageId
     * @return $this
     */
    public function setReplyToMessageId(int $messageId);
}
