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
use Sulu\Component\Persistence\Model\AuditableInterface;

interface PlanItemInterface extends AuditableInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set x
     *
     * @param float $x
     *
     * @return $this
     */
    public function setX($x);

    /**
     * Get x
     *
     * @return float
     */
    public function getX();

    /**
     * Set y
     *
     * @param float $y
     *
     * @return $this
     */
    public function setY($y);

    /**
     * Get y
     *
     * @return float
     */
    public function getY();

    /**
     * Set type
     *
     * @param string $type
     *
     * @return $this
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
     * @return string
     */
    public function getId();

    /**
     * Add eventDateReservation
     *
     * @param EventDateReservationInterface $eventDateReservation
     *
     * @return $this
     */
    public function addEventDateReservation(EventDateReservationInterface $eventDateReservation);

    /**
     * Remove eventDateReservation
     *
     * @param EventDateReservationInterface $eventDateReservation
     *
     * @return $this
     */
    public function removeEventDateReservation(EventDateReservationInterface $eventDateReservation);

    /**
     * Get eventDateReservations
     *
     * @return Collection|EventDateReservationInterface[]
     */
    public function getEventDateReservations();

    /**
     * Set plan
     *
     * @param PlanInterface $plan
     *
     * @return $this
     */
    public function setPlan(PlanInterface $plan);

    /**
     * Get plan
     *
     * @return PlanInterface
     */
    public function getPlan();
}
