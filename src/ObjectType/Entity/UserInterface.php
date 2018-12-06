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
     * @return integer
     */
    public function getId();

    /**
     * @return boolean
     */
    public function getIsBot();

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @return string
     */
    public function getUsername();

    /**
     * @return string
     */
    public function getLanguageCode();
}
