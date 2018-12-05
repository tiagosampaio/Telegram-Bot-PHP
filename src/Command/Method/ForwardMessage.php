<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class ForwardMessage
 *
 * @package Telegram\Command\Method
 */
class ForwardMessage extends CommandAbstract implements ForwardMessageInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'forwardMessage';
    
    /**
     * {@inheritdoc}
     */
    public function setChatId(int $chatId)
    {
        $this->setData('chat_id', $chatId);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setFromChatId(int $chatId)
    {
        $this->setData('from_chat_id', $chatId);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setMessageId(int $messageId)
    {
        $this->setData('message_id', $messageId);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setDisableNotification(bool $flag)
    {
        $this->setData('disable_notification', $flag);
        return $this;
    }
}
