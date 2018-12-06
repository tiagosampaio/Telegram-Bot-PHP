<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class EditMessageReplyMarkup
 * @package Telegram\Command\Method
 */
class EditMessageReplyMarkup extends CommandAbstract implements EditMessageReplyMarkupInterface
{
    use Parts\Chat,
        Parts\Message,
        Parts\InlineMessage,
        Parts\ReplyMarkup;

    /**
     * @var string
     */
    protected $urlPath = 'editMessageReplyMarkup';
}
