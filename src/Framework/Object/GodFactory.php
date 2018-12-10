<?php

declare(strict_types = 1);

namespace Telegram\Framework\Object;

/**
 * Class GodFactory
 * @package Telegram\Framework\Object
 */
class GodFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = null;
    
    /**
     * @param string $class
     * @param array  $parameters
     *
     * @return bool|mixed
     */
    public function createObject($class, array $parameters = [])
    {
        $this->objectClass = $class;
        $object = $this->create($parameters);
        $this->objectClass = null;
        
        return $object;
    }
    
    /**
     * {@inheritdoc}
     */
    public function create(array $parameters = [])
    {
        if (!$this->objectClass) {
            return false;
        }
        
        return parent::create($parameters);
    }
}
