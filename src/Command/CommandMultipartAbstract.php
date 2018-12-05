<?php

declare(strict_types = 1);

namespace Telegram\Command;

/**
 * Class CommandMultipartAbstract
 *
 * @package Telegram\Command
 */
abstract class CommandMultipartAbstract extends CommandAbstract
{
    /**
     * @return array
     */
    public function toArray()
    {
        $result = [];
    
        foreach (parent::toArray() as $key => $value) {
            if ($key == $this->getMultipartFileType()) {
                $value = fopen($value, 'r');
            }
        
            $result[] = [
                'name'     => $key,
                'contents' => $value,
            ];
        }
    
        return $result;
    }
    
    /**
     * @return string
     */
    abstract protected function getMultipartFileType();
}
