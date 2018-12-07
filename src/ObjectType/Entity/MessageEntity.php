<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\ObjectType\EntityAbstract;

/**
 * Class MessageEntity
 * @package Telegram\ObjectType\Entity
 */
class MessageEntity extends EntityAbstract implements MessageEntityInterface
{
    /**
     * @var UserFactory
     */
    private $userFactory;
    
    public function __construct(
        \Telegram\Framework\Data\SerializerInterface $serializer,
        UserFactory $userFactory,
        array $data = []
    ) {
        parent::__construct($serializer, $data);
        
        $this->userFactory = $userFactory;
        
        $this->init();
    }
    
    private function init()
    {
        if (!$this->canInitialize()) {
            return;
        }
        
        if ($this->hasData(self::FIELD_USER)) {
            $this->setData(self::FIELD_USER, $this->userFactory->create(['data' => $this->getUser()]));
        }
    }
    
    /**
     * @return array
     */
    public function getAvailableTypes()
    {
        return [
            self::TYPE_BOLD,
            self::TYPE_ITALIC,
            self::TYPE_PRE,
            self::TYPE_CODE,
            self::TYPE_BOT_COMMAND,
            self::TYPE_CASHTAG,
            self::TYPE_HASHTAG,
            self::TYPE_EMAIL,
            self::TYPE_MENTION,
            self::TYPE_PHONE_NUMBER,
            self::TYPE_TEXT_LINK,
            self::TYPE_TEXT_MENTION,
            self::TYPE_URL,
        ];
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        $type = $this->getData(self::FIELD_TYPE);
        
        if (!in_array($type, $this->getAvailableTypes())) {
            /** @todo throw new exception here. */
        }
        
        return $type;
    }
    
    /**
     * @return integer
     */
    public function getOffset()
    {
        return $this->getData(self::FIELD_OFFSET);
    }
    
    /**
     * @return integer
     */
    public function getLength()
    {
        return $this->getData(self::FIELD_LENGTH);
    }
    
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->getData(self::FIELD_URL);
    }
    
    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->getData(self::FIELD_USER);
    }
}
