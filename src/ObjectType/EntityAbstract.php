<?php

namespace Telegram\ObjectType;

use Telegram\Framework\Data\DataObject;

/**
 * Class EntityAbstract
 *
 * @package Telegram\ObjectType
 */
abstract class EntityAbstract extends DataObject implements EntityInterface
{
    /**
     * @var \Telegram\Framework\Data\SerializerInterface
     */
    protected $serializer;
    
    /**
     * EntityAbstract constructor.
     *
     * @param \Telegram\Framework\Data\SerializerInterface $serializer
     * @param array                                        $data
     */
    public function __construct(
        \Telegram\Framework\Data\SerializerInterface $serializer,
        array $data = []
    ) {
        $this->serializer = $serializer;
        parent::__construct($data);
    }
    
    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->serializer->serialize($this->data);
    }
    
    /**
     * @return bool
     */
    protected function canInitialize()
    {
        return (bool) !empty($this->data);
    }
}
