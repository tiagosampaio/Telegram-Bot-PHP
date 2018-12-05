<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class SendContact
 * @package Telegram\Command\Method
 */
class SendContact extends CommandAbstract implements SendContactInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'sendContact';
    
    /**
     * {@inheritdoc}
     */
    public function setChatId($chatId)
    {
        return $this->setData('chat_id', $chatId);
    }
    
    /**
     * {@inheritdoc}
     */
    public function setPhoneNumber($phoneNumber)
    {
        return $this->setData('phone_number', $phoneNumber);
    }
    
    /**
     * {@inheritdoc}
     */
    public function setFirstName($firstName)
    {
        return $this->setData('first_name', $firstName);
    }
}
