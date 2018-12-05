<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandMultipartAbstract;

/**
 * Class SendAudio
 * @package Telegram\Command\Method
 */
class SendAudio extends CommandMultipartAbstract implements SendAudioInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'sendAudio';
    
    /**
     * {@inheritdoc}
     */
    public function setChatId(int $chatId)
    {
        return $this->setData('chat_id', $chatId);
    }
    
    /**
     * {@inheritdoc}
     */
    public function setAudio($audio)
    {
        return $this->setData('audio', $audio);
    }
    
    /**
     * @return string
     */
    protected function getMultipartFileType()
    {
        return 'audio';
    }
}
