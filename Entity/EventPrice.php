<?php

namespace Chekov\Bundle\EventBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * EventPrice
 */
class EventPrice
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
     * @var Collection|EventPriceTranslation[]
     */
    private $translations;

    /**
     * @var Event
     */
    private $event;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->translations = new ArrayCollection();
    }

    /**
     * Set value
     *
     * @param float $value
     *
     * @return EventPrice
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return EventPrice
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add translation
     *
     * @param EventPriceTranslation $translation
     *
     * @return EventPrice
     */
    public function addTranslation(EventPriceTranslation $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param EventPriceTranslation $translation
     */
    public function removeTranslation(EventPriceTranslation $translation)
    {
        $this->translations->removeElement($translation);
    }

    /**
     * Get translations
     *
     * @return Collection|EventPriceTranslation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Set event
     *
     * @param Event $event
     *
     * @return EventPrice
     */
    public function setEvent(Event $event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }
}
