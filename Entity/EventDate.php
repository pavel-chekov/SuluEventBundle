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

class EventDate implements EventDateInterface
{
    use AuditableTrait;
    use TranslateableTrait;
    use UuidTrait;

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $end;

    /**
     * @var Collection|EventDateMemberInterface[]
     */
    private $members;

    /**
     * @var Collection|EventDateReservationInterface[]
     */
    private $reservations;

    /**
     * @var PlanInterface
     */
    private $plan;

    /**
     * @var EventInterface
     */
    private $event;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->initializeUuid();
        $this->initializeTranslations();
        $this->members = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    public function setStart(\DateTime $start = null)
    {
        $this->start = $start;

        return $this;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setEnd(\DateTime $end = null)
    {
        $this->end = $end;

        return $this;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function addMember(EventDateMemberInterface $member)
    {
        $this->members[] = $member;

        return $this;
    }

    public function removeMember(EventDateMemberInterface $member)
    {
        $this->members->removeElement($member);

        return $this;
    }

    public function getMembers()
    {
        return $this->members;
    }

    public function addReservation(EventDateReservationInterface $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    public function removeReservation(EventDateReservationInterface $reservation)
    {
        $this->reservations->removeElement($reservation);

        return $this;
    }

    public function getReservations()
    {
        return $this->reservations;
    }

    public function setPlan(PlanInterface $plan = null)
    {
        $this->plan = $plan;

        return $this;
    }

    public function getPlan()
    {
        return $this->plan;
    }

    public function setEvent(EventInterface $event)
    {
        $this->event = $event;

        return $this;
    }

    public function getEvent()
    {
        return $this->event;
    }

    protected function createTranslation(Localization $localization): TranslationInterface
    {
        $translation = new EventDateTranslation($this, $localization);
        $this->translations->add($translation);

        return $translation;
    }
}
