<?php

namespace Telegram\ObjectType\Entity;

use Telegram\Framework\DI\ContainerRepository;
use Telegram\ObjectType\EntityAbstract;

/**
 * Class Message
 *
 * @package Telegram\ObjectType\Entity
 */
class Message extends EntityAbstract implements MessageInterface
{

    /**
     * @var string
     */
    protected $fieldId = 'message_id';
    
    /**
     * @var MessageEntityFactory
     */
    private $messageEntityFactory;
    
    /**
     * @var MessageFactory
     */
    private $messageFactory;
    
    /**
     * @var UserFactory
     */
    private $userFactory;
    
    /**
     * @var ChatFactory
     */
    private $chatFactory;
    
    public function __construct(
        \Telegram\Framework\Data\SerializerInterface $serializer,
        MessageEntityFactory $messageEntityFactory,
        MessageFactory $messageFactory,
        UserFactory $userFactory,
        ChatFactory $chatFactory,
        array $data
    ) {
        parent::__construct($serializer, $data);
        
        $this->messageEntityFactory = $messageEntityFactory;
        $this->messageFactory = $messageFactory;
        $this->userFactory = $userFactory;
        $this->chatFactory = $chatFactory;
        
        $this->init();
    }
    
    private function init()
    {
        $this->setData(self::FIELD_FROM, $this->userFactory->create(['data' => $this->getFrom()]));
        $this->setData(self::FIELD_CHAT, $this->chatFactory->create(['data' => $this->getChat()]));
        
        if ($data = $this->getForwardFrom()) {
            $this->setData(self::FIELD_FORWARD_FROM, $this->userFactory->create(['data' => $data]));
        }
    
        if ($data = $this->getForwardFromChat()) {
            $this->setData(self::FIELD_FORWARD_FROM_CHAT, $this->chatFactory->create(['data' => $data]));
        }
    
        if ($data = $this->getReplyToMessage()) {
            /**
             * There's a circular dependency problem here.
             * @todo Try to solve this problem in the proper way.
             */
            $message = new Message(
                $this->serializer,
                $this->messageEntityFactory,
                $this->messageFactory,
                $this->userFactory,
                $this->chatFactory,
                $data
            );
            
            $this->setData(self::FIELD_REPLY_TO_MESSAGE, $message);
        }
        
        $entities = (array) $this->getEntities();
        
        foreach ($entities as &$entity) {
            $entity = $this->messageEntityFactory->create(['data' => $entity]);
        }
        
        $this->setData(self::FIELD_ENTITIES, (array) $entities);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getMessageId()
    {
        return $this->getData(self::FIELD_MESSAGE_ID);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getFrom()
    {
        return (array) $this->getData(self::FIELD_FROM);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getForwardFrom()
    {
        return (array) $this->getData(self::FIELD_FORWARD_FROM);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getChat()
    {
        return (array) $this->getData(self::FIELD_CHAT);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getForwardFromChat()
    {
        return (array) $this->getData(self::FIELD_FORWARD_FROM_CHAT);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getReplyToMessage()
    {
        return (array) $this->getData(self::FIELD_REPLY_TO_MESSAGE);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getDate()
    {
        return $this->getData(self::FIELD_DATE);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getText()
    {
        return $this->getData(self::FIELD_TEXT);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getEntities()
    {
        return $this->getData(self::FIELD_ENTITIES);
    }
}
