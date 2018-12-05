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
    /**
     * @var string
     */
    protected $urlPath = 'sendVideoNote';

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
    public function setVideoNote($videoNote)
    {
        $this->setData('video_note', $videoNote);
        return $this;
    }
    
    /**
     * @return string
     */
    protected function getMultipartFileType()
    {
        return 'video_note';
    }
}
