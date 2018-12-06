<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandMultipartAbstract;

/**
 * Class EditMessageMedia
 * @package Telegram\Command\Method
 */
class EditMessageMedia extends CommandMultipartAbstract implements EditMessageMediaInterface
{
    use Parts\Chat,
        Parts\Message,
        Parts\InlineMessage,
        Parts\ReplyMarkup;

    /**
     * @var string
     */
    protected $urlPath = 'editMessageMedia';

    /**
     * @param $media
     * @return mixed
     */
    public function setMedia($media)
    {
        return $this->setData('media', $media);
    }

    /**
     * {@inheritdoc}
     */
    protected function getMultipartFileType()
    {
        return 'media';
    }
}
