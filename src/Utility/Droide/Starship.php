<?php

namespace Utility\Droide;


class Starship
{
    private $capacity;
    
    private $index;

    /**
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }
    
    public function putContainer()
    {
        
    }
    
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param Container[] $container
     *
     * @return int
     */
    public function takeContainer(array $container)
    {
        return 0;
    }
}
