<?php

namespace Chekov\Bundle\EventBundle\Entity;

/**
 * Plan
 */
class Plan
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var float
     */
    private $scale;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set scale
     *
     * @param float $scale
     *
     * @return Plan
     */
    public function setScale($scale)
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Get scale
     *
     * @return float
     */
    public function getScale()
    {
        return $this->scale;
    }
}

