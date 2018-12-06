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
    use Parts\Chat;

    /**
     * {@inheritdoc}
     */
    protected $urlPath = 'sendVoice';

    /**
     * {@inheritdoc}
     */
    public function setVoice($voice)
    {
        $this->setData('voice', $voice);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    protected function getMultipartFileType()
    {
        return 'voice';
    }
}
