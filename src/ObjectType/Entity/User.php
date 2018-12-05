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
    public function setIsBot(bool $flat)
    {
        $this->setData(self::FIELD_IS_BOT, (bool) $flat);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setFirstName(string $firstName)
    {
        $this->setData(self::FIELD_FIRST_NAME, $firstName);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastName(string $lastName)
    {
        $this->setData(self::FIELD_LAST_NAME, $lastName);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setUsername(string $username)
    {
        $this->setData(self::FIELD_USERNAME, $username);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setLanguageCode($languageCode)
    {
        $this->setData(self::FIELD_LANGUAGE_CODE, $languageCode);
        return $this;
    }
}
