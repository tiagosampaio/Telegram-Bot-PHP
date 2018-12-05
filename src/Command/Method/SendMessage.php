<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class SendMessage
 * @package Telegram\Command\Method
 */
class SendMessage extends CommandAbstract implements SendMessageInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'sendMessage';
    
    /**
     * {@inheritdoc}
     */
    public function setChatId($chatId)
    {
        $this->setData('chat_id', $chatId);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setText(string $text)
    {
        $this->setData('text', $text);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setParseMode($mode)
    {
        // TODO: Implement setParseMode() method.
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDisableWebPagePreview(bool $flag)
    {
        // TODO: Implement setDisableWebPagePreview() method.
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDisableNotification(bool $flag)
    {
        // TODO: Implement setDisableNotification() method.
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setReplyToMessageId(int $messageId)
    {
        // TODO: Implement setReplyToMessageId() method.
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setReplyMarkup($markup)
    {
        // TODO: Implement setReplyMarkup() method.
        return $this;
    }
}
