<?php

namespace Chekov\Bundle\EventBundle\Entity;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dates;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $prices;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dates = new \Doctrine\Common\Collections\ArrayCollection();
        $this->prices = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param \Chekov\Bundle\EventBundle\Entity\EventTranslation $translation
     *
     * @return Event
     */
    public function addTranslation(\Chekov\Bundle\EventBundle\Entity\EventTranslation $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventTranslation $translation
     */
    public function removeTranslation(\Chekov\Bundle\EventBundle\Entity\EventTranslation $translation)
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
     * Add date
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDate $date
     *
     * @return Event
     */
    public function addDate(\Chekov\Bundle\EventBundle\Entity\EventDate $date)
    {
        $this->dates[] = $date;

        return $this;
    }

    /**
     * Remove date
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDate $date
     */
    public function removeDate(\Chekov\Bundle\EventBundle\Entity\EventDate $date)
    {
        $this->dates->removeElement($date);
    }

    /**
     * Get dates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Add price
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventPrice $price
     *
     * @return Event
     */
    public function addPrice(\Chekov\Bundle\EventBundle\Entity\EventPrice $price)
    {
        $this->prices[] = $price;

        return $this;
    }

    /**
     * Remove price
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventPrice $price
     */
    public function removePrice(\Chekov\Bundle\EventBundle\Entity\EventPrice $price)
    {
        $this->prices->removeElement($price);
    }

    /**
     * Get prices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrices()
    {
        return $this->prices;
    }
}

