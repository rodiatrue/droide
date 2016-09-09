<?php

namespace Utility\Droide;


class Droide
{
    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @var Starship[]
     */
    private $starship;

    /**
     * @var Container[]
     */
    private $container;

    /**
     * Droide constructor.
     * @param Starship[] $starship
     * @param Container[] $container
     */
    public function __construct(array $starship, array $container)
    {
        $this->starship = $starship;
        $this->container = $container;
    }

    /**
     * @return int
     */
    public function calculateUsedStarship()
    {
        $taken = 0;

        foreach ($this->starship as $starship) {
            $takenContainer = $starship->takeContainer($this->container);

            if ($this->lookContainer($takenContainer)) {

            }

            if ($takenContainer) {
                $taken++;
            }
        }

        return $taken;
    }

    public function getWaste()
    {

    }

    /**
     * @param $taken
     *
     * @return bool
     */
    private function lookContainer($taken)
    {
        return false;
    }
}