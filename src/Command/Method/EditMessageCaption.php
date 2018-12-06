<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class EditMessageCaption
 * @package Telegram\Command\Method
 */
class EditMessageCaption extends CommandAbstract implements EditMessageCaptionInterface
{
    use Parts\Chat,
        Parts\Message,
        Parts\InlineMessage,
        Parts\ReplyMarkup;

    /**
     * @var string
     */
    protected $urlPath = 'editMessageCaption';

    /**
     * {@inheritdoc}
     */
    public function setCaption($caption)
    {
        return $this->setData('caption', $caption);
    }

    /**
     * {@inheritdoc}
     */
    public function setParseMode($parseMode)
    {
        return $this->setData('parse_mode', $parseMode);
    }
}
