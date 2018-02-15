<?php

namespace Chekov\Bundle\EventBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Event
 */
class Event
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Collection|EventTranslation[]
     */
    private $translations;

    /**
     * @var Collection|EventDate[]
     */
    private $dates;

    /**
     * @var Collection|EventPrice[]
     */
    private $prices;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->translations = new ArrayCollection();
        $this->dates = new ArrayCollection();
        $this->prices = new ArrayCollection();
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
     * @param EventTranslation $translation
     *
     * @return Event
     */
    public function addTranslation(EventTranslation $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param EventTranslation $translation
     */
    public function removeTranslation(EventTranslation $translation)
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
     * Add date
     *
     * @param EventDate $date
     *
     * @return Event
     */
    public function addDate(EventDate $date)
    {
        $this->dates[] = $date;

        return $this;
    }

    /**
     * Remove date
     *
     * @param EventDate $date
     */
    public function removeDate(EventDate $date)
    {
        $this->dates->removeElement($date);
    }

    /**
     * Get dates
     *
     * @return Collection|EventDate[]
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Add price
     *
     * @param EventPrice $price
     *
     * @return Event
     */
    public function addPrice(EventPrice $price)
    {
        $this->prices[] = $price;

        return $this;
    }

    /**
     * Remove price
     *
     * @param EventPrice $price
     */
    public function removePrice(EventPrice $price)
    {
        $this->prices->removeElement($price);
    }

    /**
     * Get prices
     *
     * @return Collection|EventPrice[]
     */
    public function getPrices()
    {
        return $this->prices;
    }
}
