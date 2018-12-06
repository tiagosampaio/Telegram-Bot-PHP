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
    use Parts\Chat;

    /**
     * {@inheritdoc}
     */
    protected $urlPath = 'sendVideo';

    /**
     * {@inheritdoc}
     */
    public function setVideo($video)
    {
        $this->setData('video', $video);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    protected function getMultipartFileType()
    {
        return 'video';
    }
}
