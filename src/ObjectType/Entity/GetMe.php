<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\ObjectType\EntityAbstract;

/**
 * Class GetMe
 * @package Telegram\ObjectType\Entity
 */
class GetMe extends EntityAbstract implements GetMeInterface
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
        return (bool) $this->getData(self::FIELD_IS_BOT);
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
    public function getUsername()
    {
        return $this->getData(self::FIELD_USERNAME);
    }
}
