<?php

namespace Chekov\Bundle\EventBundle\Entity;

/**
 * Plan
 */
class Plan
{
    /**
     * @var float
     */
    private $scale;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $eventDates;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $items;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eventDates = new \Doctrine\Common\Collections\ArrayCollection();
        $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add eventDate
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDate $eventDate
     *
     * @return Plan
     */
    public function addEventDate(\Chekov\Bundle\EventBundle\Entity\EventDate $eventDate)
    {
        $this->eventDates[] = $eventDate;

        return $this;
    }

    /**
     * Remove eventDate
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDate $eventDate
     */
    public function removeEventDate(\Chekov\Bundle\EventBundle\Entity\EventDate $eventDate)
    {
        $this->eventDates->removeElement($eventDate);
    }

    /**
     * Get eventDates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEventDates()
    {
        return $this->eventDates;
    }

    /**
     * Add translation
     *
     * @param \Chekov\Bundle\EventBundle\Entity\PlanTranslation $translation
     *
     * @return Plan
     */
    public function addTranslation(\Chekov\Bundle\EventBundle\Entity\PlanTranslation $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param \Chekov\Bundle\EventBundle\Entity\PlanTranslation $translation
     */
    public function removeTranslation(\Chekov\Bundle\EventBundle\Entity\PlanTranslation $translation)
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
     * Add item
     *
     * @param \Chekov\Bundle\EventBundle\Entity\PlanItem $item
     *
     * @return Plan
     */
    public function addItem(\Chekov\Bundle\EventBundle\Entity\PlanItem $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \Chekov\Bundle\EventBundle\Entity\PlanItem $item
     */
    public function removeItem(\Chekov\Bundle\EventBundle\Entity\PlanItem $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }
}

