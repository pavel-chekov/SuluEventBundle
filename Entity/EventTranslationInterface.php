<?php

/*
 * This file is part of ChekovEventBundle package.
 *
 * (c) Chekov Bundles <https://github.com/pavel-chekov>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chekov\Bundle\EventBundle\Entity;

interface EventTranslationInterface
{
    /**
     * Set title
     *
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title);

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set locale
     *
     * @param string $locale
     *
     * @return $this
     */
    public function setLocale($locale);

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale();

    /**
     * Set content
     *
     * @param array $content
     *
     * @return $this
     */
    public function setContent($content);

    /**
     * Get content
     *
     * @return array
     */
    public function getContent();

    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Set event
     *
     * @param EventInterface $event
     *
     * @return $this
     */
    public function setEvent(EventInterface $event);

    /**
     * Get event
     *
     * @return EventInterface
     */
    public function getEvent();
}
