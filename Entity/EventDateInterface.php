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

interface EventDateInterface extends TranslationableInterface
{
    /**
     * Set start
     *
     * @param \DateTime|null $start
     *
     * @return $this
     */
    public function setStart(\DateTime $start = null);

    /**
     * Get start
     *
     * @return \DateTime|null
     */
    public function getStart();

    /**
     * Set end
     *
     * @param \DateTime|null $end
     *
     * @return $this
     */
    public function setEnd(\DateTime $end = null);

    /**
     * Get end
     *
     * @return \DateTime|null
     */
    public function getEnd();

    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Add member
     *
     * @param EventDateMemberInterface $member
     *
     * @return EventDateInterface
     */
    public function addMember(EventDateMemberInterface $member);

    /**
     * Remove member
     *
     * @param EventDateMemberInterface $member
     *
     * @return $this
     */
    public function removeMember(EventDateMemberInterface $member);

    /**
     * Get members
     *
     * @return Collection|EventDateMemberInterface[]
     */
    public function getMembers();

    /**
     * Add reservation
     *
     * @param EventDateReservationInterface $reservation
     *
     * @return EventDateInterface
     */
    public function addReservation(EventDateReservationInterface $reservation);

    /**
     * Remove reservation
     *
     * @param EventDateReservationInterface $reservation
     *
     * @return $this
     */
    public function removeReservation(EventDateReservationInterface $reservation);

    /**
     * Get reservations
     *
     * @return Collection|EventDateReservationInterface[]
     */
    public function getReservations();

    /**
     * Set plan
     *
     * @param PlanInterface $plan
     *
     * @return $this
     */
    public function setPlan(PlanInterface $plan = null);

    /**
     * Get plan
     *
     * @return PlanInterface
     */
    public function getPlan();

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
