<?php

namespace Chekov\Bundle\EventBundle\Entity;

/**
 * EventDateTranslation
 */
class EventDateTranslation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var array
     */
    private $content;

    /**
     * @var string
     */
    private $locale;


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
}

