<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\ObjectType\EntityAbstract;

/**
 * Class User
 * @package Telegram\ObjectType\Entity
 */
class User extends EntityAbstract implements UserInterface
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getData(self::FIELD_ID);
    }

    /**
     * {@inheritdoc}
     */
    public function getIsBot()
    {
        return $this->getData(self::FIELD_IS_BOT);
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstName()
    {
        return $this->getData(self::FIELD_FIRST_NAME);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastName()
    {
        return $this->getData(self::FIELD_LAST_NAME);
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        return $this->getData(self::FIELD_USERNAME);
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguageCode()
    {
        return $this->getData(self::FIELD_LANGUAGE_CODE);
    }
}
