<?php

namespace Chekov\Bundle\EventBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

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
     * @var Collection|EventDate[]
     */
    private $eventDates;

    /**
     * @var Collection|EventTranslation[]
     */
    private $translations;

    /**
     * @var Collection|PlanItem[]
     */
    private $items;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eventDates = new ArrayCollection();
        $this->translations = new ArrayCollection();
        $this->items = new ArrayCollection();
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
     * @param EventDate $eventDate
     *
     * @return Plan
     */
    public function addEventDate(EventDate $eventDate)
    {
        $this->eventDates[] = $eventDate;

        return $this;
    }

    /**
     * Remove eventDate
     *
     * @param EventDate $eventDate
     */
    public function removeEventDate(EventDate $eventDate)
    {
        $this->eventDates->removeElement($eventDate);
    }

    /**
     * Get eventDates
     *
     * @return Collection|EventDate[]
     */
    public function getEventDates()
    {
        return $this->eventDates;
    }

    /**
     * Add translation
     *
     * @param PlanTranslation $translation
     *
     * @return Plan
     */
    public function addTranslation(PlanTranslation $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param PlanTranslation $translation
     */
    public function removeTranslation(PlanTranslation $translation)
    {
        $this->translations->removeElement($translation);
    }

    /**
     * Get translations
     *
     * @return Collection|EventTranslation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Add item
     *
     * @param PlanItem $item
     *
     * @return Plan
     */
    public function addItem(PlanItem $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param PlanItem $item
     */
    public function removeItem(PlanItem $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return Collection|PlanItem[]
     */
    public function getItems()
    {
        return $this->items;
    }
}
