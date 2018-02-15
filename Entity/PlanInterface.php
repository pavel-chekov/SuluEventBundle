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

use Doctrine\Common\Collections\Collection;

interface PlanInterface
{
    /**
     * Set scale
     *
     * @param float $scale
     *
     * @return $this
     */
    public function setScale($scale);

    /**
     * Get scale
     *
     * @return float
     */
    public function getScale();

    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Add eventDate
     *
     * @param EventDateInterface $eventDate
     *
     * @return $this
     */
    public function addEventDate(EventDateInterface $eventDate);

    /**
     * Remove eventDate
     *
     * @param EventDateInterface $eventDate
     *
     * @return $this
     */
    public function removeEventDate(EventDateInterface $eventDate);

    /**
     * Get eventDates
     *
     * @return Collection|EventDateInterface[]
     */
    public function getEventDates();

    /**
     * Add translation
     *
     * @param PlanTranslationInterface $translation
     *
     * @return $this
     */
    public function addTranslation(PlanTranslationInterface $translation);

    /**
     * Remove translation
     *
     * @param PlanTranslationInterface $translation
     *
     * @return $this
     */
    public function removeTranslation(PlanTranslationInterface $translation);

    /**
     * Get translations
     *
     * @return Collection|EventTranslationInterface[]
     */
    public function getTranslations();

    /**
     * Add item
     *
     * @param PlanItemInterface $item
     *
     * @return $this
     */
    public function addItem(PlanItemInterface $item);

    /**
     * Remove item
     *
     * @param PlanItemInterface $item
     *
     * @return $this
     */
    public function removeItem(PlanItemInterface $item);

    /**
     * Get items
     *
     * @return Collection|PlanItemInterface[]
     */
    public function getItems();
}
