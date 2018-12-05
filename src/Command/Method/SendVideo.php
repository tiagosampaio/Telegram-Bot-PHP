<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class SendVideo
 * @package Telegram\Command\Method
 */
class SendVideo extends CommandAbstract implements SendVideoInterface
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
     * @return array
     */
    public function toArray()
    {
        $result = [];

        foreach (parent::toArray() as $key => $value) {
            if ($key == 'video') {
                $value = fopen($value, 'r');
            }

            $result[] = [
                'name'     => $key,
                'contents' => $value,
            ];
        }

        return $result;
    }
}
