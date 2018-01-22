<?php

namespace Chekov\Bundle\EventBundle\Entity;

/**
 * EventPriceTranslation
 */
class EventPriceTranslation
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var array
     */
    private $content;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Chekov\Bundle\EventBundle\Entity\EventPrice
     */
    private $price;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return EventPriceTranslation
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set locale
     *
     * @param string $locale
     *
     * @return EventPriceTranslation
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set content
     *
     * @param array $content
     *
     * @return EventPriceTranslation
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return array
     */
    public function getContent()
    {
        return $this->content;
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
     * Set price
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventPrice $price
     *
     * @return EventPriceTranslation
     */
    public function setPrice(\Chekov\Bundle\EventBundle\Entity\EventPrice $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return \Chekov\Bundle\EventBundle\Entity\EventPrice
     */
    public function getPrice()
    {
        return $this->price;
    }
}

