<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class EditMessageText
 * @package Telegram\Command\Method
 */
class EditMessageText extends CommandAbstract implements EditMessageTextInterface
{
    use Parts\Chat,
        Parts\Message,
        Parts\InlineMessage;

    /**
     * @var string
     */
    protected $urlPath = 'editMessageText';

    /**
     * {@inheritdoc}
     */
    public function setReplyMarkup($replyMarkup)
    {
        return $this->setData('reply_markup', $replyMarkup);
    }
}
