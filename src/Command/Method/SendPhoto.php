<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class SendPhoto
 * @package Telegram\Command\Method
 */
class SendPhoto extends CommandAbstract implements SendPhotoInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'sendPhoto';

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
    public function setPhoto($photo)
    {
        $this->setData('photo', $photo);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setCaption($caption)
    {
        $this->setData('caption', $caption);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setParseMode($parseMode)
    {
        $this->setData('parse_mode', $parseMode);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDisableNotification(bool $flat)
    {
        $this->setData('disable_notification', (bool) $flat);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setReplyToMessageId(int $messageId)
    {
        $this->setData('reply_to_message_id', (int) $messageId);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setReplyMarkup($markup)
    {
        $this->setData('reply_markup', $markup);
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $result = [];

        foreach (parent::toArray() as $key => $value) {
            if ($key == 'photo') {
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
