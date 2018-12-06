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
    use Parts\Chat;

    /**
     * {@inheritdoc}
     */
    protected $urlPath = 'sendAudio';
    
    /**
     * {@inheritdoc}
     */
    public function setAudio($audio)
    {
        return $this->setData('audio', $audio);
    }
    
    /**
     * {@inheritdoc}
     */
    protected function getMultipartFileType()
    {
        return 'audio';
    }
}
