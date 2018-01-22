<?php

namespace Chekov\Bundle\EventBundle\Entity;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * @var \Chekov\Bundle\EventBundle\Entity\Event
     */
    private $event;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param \Chekov\Bundle\EventBundle\Entity\EventPriceTranslations $translation
     *
     * @return EventPrice
     */
    public function addTranslation(\Chekov\Bundle\EventBundle\Entity\EventPriceTranslations $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventPriceTranslations $translation
     */
    public function removeTranslation(\Chekov\Bundle\EventBundle\Entity\EventPriceTranslations $translation)
    {
        $this->translations->removeElement($translation);
    }

    /**
     * Get translations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Set event
     *
     * @param \Chekov\Bundle\EventBundle\Entity\Event $event
     *
     * @return EventPrice
     */
    public function setEvent(\Chekov\Bundle\EventBundle\Entity\Event $event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \Chekov\Bundle\EventBundle\Entity\Event
     */
    public function getEvent()
    {
        return $this->event;
    }
}

