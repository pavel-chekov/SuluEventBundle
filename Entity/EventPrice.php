<?php

/*
 * This file is part of ChekovEventBundle package.
 *
 * (c) Chekov Bundles <https://github.com/pavel-chekov>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chekov\Bundle\EventBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class EventPrice implements EventPriceInterface
{
    /**
     * @var float
     */
    private $value;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var Collection|EventPriceTranslationInterface[]
     */
    private $translations;

    /**
     * @var EventInterface
     */
    private $event;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->translations = new ArrayCollection();
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getId()
    {
        return $this->id;
    }

    public function addTranslation(EventPriceTranslationInterface $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    public function removeTranslation(EventPriceTranslationInterface $translation)
    {
        $this->translations->removeElement($translation);

        return $this;
    }

    public function getTranslations()
    {
        return $this->translations;
    }

    public function setEvent(EventInterface $event)
    {
        $this->event = $event;

        return $this;
    }

    public function getEvent()
    {
        return $this->event;
    }
}
