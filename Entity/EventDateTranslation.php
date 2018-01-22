<?php

namespace Chekov\Bundle\EventBundle\Entity;

/**
 * EventDateTranslation
 */
class EventDateTranslation
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
     * @var \Chekov\Bundle\EventBundle\Entity\EventDate
     */
    private $date;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return EventDateTranslation
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
     * @return EventDateTranslation
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
     * @return EventDateTranslation
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
     * Set date
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDate $date
     *
     * @return EventDateTranslation
     */
    public function setDate(\Chekov\Bundle\EventBundle\Entity\EventDate $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \Chekov\Bundle\EventBundle\Entity\EventDate
     */
    public function getDate()
    {
        return $this->date;
    }
}

