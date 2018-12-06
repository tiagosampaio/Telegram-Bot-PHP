<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandMultipartAbstract;

/**
 * Class SendVideoNote
 * @package Telegram\Command\Method
 */
class SendVideoNote extends CommandMultipartAbstract implements SendVideoNoteInterface
{
    use Parts\Chat;

    /**
     * {@inheritdoc}
     */
    protected $urlPath = 'sendVideoNote';

    /**
     * {@inheritdoc}
     */
    public function setVideoNote($videoNote)
    {
        $this->setData('video_note', $videoNote);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    protected function getMultipartFileType()
    {
        return 'video_note';
    }
}
