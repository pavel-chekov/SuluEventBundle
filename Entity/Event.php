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

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Event implements EventInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Collection|EventTranslationInterface[]
     */
    private $translations;

    /**
     * @var Collection|EventDateInterface[]
     */
    private $dates;

    /**
     * @var Collection|EventPriceInterface[]
     */
    private $prices;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->translations = new ArrayCollection();
        $this->dates = new ArrayCollection();
        $this->prices = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function addTranslation(EventTranslationInterface $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    public function removeTranslation(EventTranslationInterface $translation)
    {
        $this->translations->removeElement($translation);

        return $this;
    }

    public function getTranslations()
    {
        return $this->translations;
    }

    public function addDate(EventDateInterface $date)
    {
        $this->dates[] = $date;

        return $this;
    }

    public function removeDate(EventDateInterface $date)
    {
        $this->dates->removeElement($date);

        return $this;
    }

    public function getDates()
    {
        return $this->dates;
    }

    public function addPrice(EventPriceInterface $price)
    {
        $this->prices[] = $price;

        return $this;
    }

    public function removePrice(EventPriceInterface $price)
    {
        $this->prices->removeElement($price);

        return $this;
    }

    public function getPrices()
    {
        return $this->prices;
    }
}
