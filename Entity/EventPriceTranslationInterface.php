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

use Chekov\Bundle\ExtensionBundle\Entity\TranslationInterface;

interface EventPriceTranslationInterface extends TranslationInterface
{
    /**
     * Set price
     *
     * @param EventPriceInterface $price
     *
     * @return $this
     */
    public function setPrice(EventPriceInterface $price);

    /**
     * Get price
     *
     * @return EventPriceInterface
     */
    public function getPrice();
}
