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

use Chekov\Bundle\ExtensionBundle\Entity\TranslationableInterface;
use Doctrine\Common\Collections\Collection;

interface EventInterface extends TranslationableInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Add date
     *
     * @param EventDateInterface $date
     *
     * @return $this
     */
    public function addDate(EventDateInterface $date);

    /**
     * Remove date
     *
     * @param EventDateInterface $date
     *
     * @return $this
     */
    public function removeDate(EventDateInterface $date);

    /**
     * Get dates
     *
     * @return Collection|EventDateInterface[]
     */
    public function getDates();

    /**
     * Add price
     *
     * @param EventPriceInterface $price
     *
     * @return $this
     */
    public function addPrice(EventPriceInterface $price);

    /**
     * Remove price
     *
     * @param EventPriceInterface $price
     *
     * @return $this
     */
    public function removePrice(EventPriceInterface $price);

    /**
     * Get prices
     *
     * @return Collection|EventPriceInterface[]
     */
    public function getPrices();
}
