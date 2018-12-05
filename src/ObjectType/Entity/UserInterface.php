<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

/**
 * Interface UserInterface
 * @package Telegram\ObjectType\Entity
 */
interface UserInterface
{
    /**
     * @var string
     */
    const FIELD_ID = 'id';

    /**
     * @var string
     */
    const FIELD_IS_BOT = 'is_bot';

    /**
     * @var string
     */
    const FIELD_FIRST_NAME = 'first_name';

    /**
     * @var string
     */
    const FIELD_LAST_NAME = 'last_name';

    /**
     * @var string
     */
    const FIELD_USERNAME = 'username';

    /**
     * @var string
     */
    const FIELD_LANGUAGE_CODE = 'language_code';

    /**
     * @param bool $flat
     * @return mixed
     */
    public function setIsBot(bool $flat);

    /**
     * @param string $firstName
     * @return mixed
     */
    public function setFirstName(string $firstName);

    /**
     * @param string $lastName
     * @return mixed
     */
    public function setLastName(string $lastName);

    /**
     * @param string $username
     * @return mixed
     */
    public function setUsername(string $username);

    /**
     * @param string $languageCode
     * @return mixed
     */
    public function setLanguageCode($languageCode);
}
