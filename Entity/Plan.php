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

use Chekov\Bundle\ModelBundle\Model\Localization;
use Chekov\Bundle\ModelBundle\Model\TranslateableTrait;
use Chekov\Bundle\ModelBundle\Model\TranslationInterface;
use Chekov\Bundle\ModelBundle\Model\UuidTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sulu\Component\Persistence\Model\AuditableTrait;

class Plan implements PlanInterface
{
    use AuditableTrait;
    use TranslateableTrait;
    use UuidTrait;

    /**
     * @var float
     */
    private $scale;

    /**
     * @var Collection|EventDateInterface[]
     */
    private $eventDates;

    /**
     * @var Collection|PlanItemInterface[]
     */
    private $items;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->initializeUuid();
        $this->initializeTranslations();
        $this->eventDates = new ArrayCollection();
        $this->items = new ArrayCollection();
    }

    public function setScale($scale)
    {
        $this->scale = $scale;

        return $this;
    }

    public function getScale()
    {
        return $this->scale;
    }

    public function addEventDate(EventDateInterface $eventDate)
    {
        $this->eventDates[] = $eventDate;

        return $this;
    }

    public function removeEventDate(EventDateInterface $eventDate)
    {
        $this->eventDates->removeElement($eventDate);

        return $this;
    }

    public function getEventDates()
    {
        return $this->eventDates;
    }

    public function addItem(PlanItemInterface $item)
    {
        $this->items[] = $item;

        return $this;
    }

    public function removeItem(PlanItemInterface $item)
    {
        $this->items->removeElement($item);

        return $this;
    }

    public function getItems()
    {
        return $this->items;
    }

    protected function createTranslation(Localization $localization): TranslationInterface
    {
        $translation = new PlanTranslation($this, $localization);
        $this->translations->add($translation);

        return $translation;
    }
}
