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

interface EventPriceInterface
{
    /**
     * Set value
     *
     * @param float $value
     *
     * @return EventPriceInterface
     */
    public function setValue($value);

    /**
     * Get value
     *
     * @return float
     */
    public function getValue();

    /**
     * Set type
     *
     * @param string $type
     *
     * @return EventPriceInterface
     */
    public function setType($type);

    /**
     * Get type
     *
     * @return string
     */
    public function getType();

    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Add translation
     *
     * @param EventPriceTranslationInterface $translation
     *
     * @return EventPriceInterface
     */
    public function addTranslation(EventPriceTranslationInterface $translation);

    /**
     * Remove translation
     *
     * @param EventPriceTranslationInterface $translation
     *
     * @return $this
     */
    public function removeTranslation(EventPriceTranslationInterface $translation);

    /**
     * Get translations
     *
     * @return Collection|EventPriceTranslationInterface[]
     */
    public function getTranslations();

    /**
     * Set event
     *
     * @param EventInterface $event
     *
     * @return EventPriceInterface
     */
    public function setEvent(EventInterface $event);

    /**
     * Get event
     *
     * @return $this
     */
    public function getEvent();
}
