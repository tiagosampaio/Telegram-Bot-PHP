<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandMultipartAbstract;

/**
 * Class SendVideo
 * @package Telegram\Command\Method
 */
class SendVideo extends CommandMultipartAbstract implements SendVideoInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'sendVideo';

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
    public function setVideo($video)
    {
        $this->setData('video', $video);
        return $this;
    }
    
    /**
     * @return string
     */
    protected function getMultipartFileType()
    {
        return 'video';
    }
}
