<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandMultipartAbstract;

/**
 * Class SendVoice
 * @package Telegram\Command\Method
 */
class SendVoice extends CommandMultipartAbstract implements SendVoiceInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'sendVoice';

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
    public function setVoice($voice)
    {
        $this->setData('voice', $voice);
        return $this;
    }
    
    /**
     * @return string
     */
    protected function getMultipartFileType()
    {
        return 'voice';
    }
}
