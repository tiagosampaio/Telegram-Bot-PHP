<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class GetChat
 * @package Telegram\Command\Method
 */
class GetChat extends CommandAbstract implements GetChatInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'getChat';
    
    /**
     * {@inheritdoc}
     */
    public function setChatId(int $chatId)
    {
        return $this->setData('chat_id', $chatId);
    }
}
