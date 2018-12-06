<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class EditMessageText
 * @package Telegram\Command\Method
 */
class EditMessageText extends CommandAbstract implements EditMessageInterface
{
    use Parts\Chat,
        Parts\Message;

    /**
     * @var string
     */
    protected $urlPath = 'editMessageText';

    /**
     * {@inheritdoc}
     */
    public function setInlineMessageId($inlineMessageId)
    {
        // TODO: Implement setInlineMessageId() method.
    }

    /**
     * {@inheritdoc}
     */
    public function setReplyMarkup($replyMarkup)
    {
        // TODO: Implement setReplyMarkup() method.
    }
}
