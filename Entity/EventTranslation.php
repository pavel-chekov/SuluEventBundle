<?php

namespace Chekov\Bundle\EventBundle\Entity;

/**
 * EventTranslation
 */
class EventTranslation
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
     * @var Event
     */
    private $event;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return EventTranslation
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
     * @return EventTranslation
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
     * @return EventTranslation
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
     * Set event
     *
     * @param Event $event
     *
     * @return EventTranslation
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
