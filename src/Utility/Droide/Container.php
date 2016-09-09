<?php

namespace Utility\Droide;


class Container
{
    private $volume;

    private $index;

    /**
     * @return mixed
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param mixed $index
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }

    public function getVolume()
    {

    }
}
