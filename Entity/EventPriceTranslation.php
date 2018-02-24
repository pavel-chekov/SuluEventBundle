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

use Chekov\Bundle\ExtensionBundle\Entity\TranslationTrait;

class EventPriceTranslation implements EventPriceTranslationInterface
{
    use TranslationTrait;

    /**
     * @var EventPriceInterface
     */
    private $price;

    public function setPrice(EventPriceInterface $price)
    {
        $this->price = $price;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
